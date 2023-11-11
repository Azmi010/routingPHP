<?php
session_start();

$conn = new mysqli('localhost', 'root', '', 'prokidz');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require './PHPMailer-master/src/PHPMailer.php';
require './PHPMailer-master/src/SMTP.php';
require './PHPMailer-master/src/Exception.php';


function registerUser($conn, $username, $email, $password) {
  // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  $query = "INSERT INTO account (username, email_address, password) VALUES ('$username', '$email', '$password')";
  $result = mysqli_query($conn, $query);

  return $result;
}

function loginUser($conn, $email, $password) {
  $query = "SELECT * FROM account WHERE email_address = '$email'";
  $result = mysqli_query($conn, $query);

  if ($result && mysqli_num_rows($result) > 0) {
      $user = mysqli_fetch_assoc($result);
      // var_dump(password_verify($password, $user['password']));die;
      // if (password_verify($password, $user['password'])) {
      //     var_dump("true");die;
      //     return $user;
      // }
      // else {
      //   var_dump($password);die;
      // }
      if ($password == $user['password']) {
        return $user;
      }
  }
  return 0;
}

function sendmessage($conn, $email, $message) {
  $query = "INSERT INTO contact (email, message) VALUES ('$email', '$message')";
  $hasil = mysqli_query($conn, $query);

  return $hasil;
}

function changeprofil($conn, $username, $password) {
  $query = "UPDATE account SET password = '$password', username = '$username' LIMIT 1";
  $result = mysqli_query($conn, $query);

  return $result;
}

function reset_password($get_name, $get_email, $token) {
  $mail = new PHPMailer(true);

  // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
  // $mail->isSMTP();
  // $mail->Host       = 'smtp.gmail.com';
  // $mail->SMTPAuth   = true;
  // $mail->Username   = 'user@example.com';
  // $mail->Password   = 'secret';
  // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
  // $mail->Port       = 465;

  // $mail->isHTML(true);
  // return $mail;

  // $mail->setFrom('narutoimpact01@gmail.com');
  // $mail->addAddress($get_email);
  // $mail->Subject = "Password Reset";
  // $mail->Body = <<<END

  // Click <a href='http://localhost/citech/app/views/forgot_password/index.php'>here</a>

  // END;

  // try {
  //   $mail->send();
  // } catch (Exception) {
  //   echo "ga";
  // }

  $mail->isSMTP();
  // $mail->SMTPAuth = true;

  // $mail->Host = "smtp.gmail.com";
  // $mail->Username = "narutoimpact01@gmail.com";
  // $mail->Password = "";

  // $mail->SMTPSecure = "localhost";
  // $mail->Port = 587;

  $mail->setFrom("narutoimpact01@gmail.com", $get_name);
  $mail->addAddress($get_email);

  $mail->isHTML(true);
  $mail->Subject = "Reset Password Notification";

  $email_template = "
  <h2>Hello</h2>
  <h3>You are receiving this email because we received a password reset request for your account.</h3>
  <br><br>
  <a href='http://localhost/citech/app/views/forgot_password/index.php?token=$token&email=$get_email'>Click Me</a>";

  $mail->Body = $email_template;
  $mail->send();
}

// sign up
if (isset($_POST['simpan'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $result = registerUser($conn, $username, $email, $password);

  if ($result) {
      echo "Registrasi berhasil. Anda dapat masuk sekarang.";
      // header("Location: ../views/login/index.php");
      // exit();
  } else {
      echo "Registrasi gagal. Silakan coba lagi.";
  }
}
    
// login
if (isset($_POST['auth'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $user = loginUser($conn, $email, $password);

    if ($user) {
        // echo "Selamat datang, " . $user['email_address'];
        $_SESSION["user"] = $user;
        header("Location: ../views/home/index.php");
    } else if ($user == 0) {
      $_SESSION["gagal"] = true;
      header("Location: ../views/login/index.php");
    }
}

// contact faq
if (isset($_POST['send1'])) {
  $email = $_POST['email'];
  $message = $_POST['message'];

  $hasil = sendmessage($conn, $email, $message);
    if ($hasil) {
        // echo "Berhasil.";
        header("Location: ../views/faq/index.php");
        // exit();
    } else {
      echo "gagal";
    }
}

// contact panduan
if (isset($_POST['send2'])) {
  $email = $_POST['email'];
  $message = $_POST['message'];

  $hasil = sendmessage($conn, $email, $message);
    if ($hasil) {
        // echo "Berhasil.";
        header("Location: ../views/panduan/index.php");
        // exit();
    } else {
      echo "gagal";
    }
}

// change password
if (isset($_POST['change'])) {
  $email = $_POST['email'];
  $token = md5(rand());

  $check_email = "SELECT email_address FROM account WHERE email_address = '$email' LIMIT 1";
  $result = mysqli_query($conn, $check_email);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    $get_name = $row['username'];
    $get_email = $row['email_address'];

    $query = "UPDATE account SET token = '$token' WHERE email_address = '$get_email' LIMIT 1";
    $update_token = mysqli_query($conn, $query);

    if ($update_token) {
      reset_password($get_name, $get_email, $token);
      $_SESSION['status'] = "Check your email to reset password";
      header("Location: ../views/forgot_password/index.php");
      exit(0);
    } else {
      $_SESSION['status'] = "Something went wrong";
      header("Location: ../views/forgot_password/index.php");
      exit(0);
    }
  } else {
    $_SESSION['status'] = "No Email Found";
    header("Location: ../views/forgot_password/index.php");
    exit(0);
  }
}

if (isset($_POST['profil'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $result = changeprofil($conn, $username, $password);
  if ($result) {
    $_SESSION["user"]["username"] = $username;
    header("Location: ../views/home/index.php");
  } else {
    header("Location: ../views/login/index.php");
  }

}

?>