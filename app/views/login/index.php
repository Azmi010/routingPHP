<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./output.css">
</head>

<body>
    <section class="flex h-screen">
        <div class="hidden md:block md:w-1/2">
            <img src="../../../public/img/hero-login.jpg" class="h-screen w-full" alt="">
        </div>
        <div class="container p-5 md:w-1/2 md:py-0 md:px-12 lg:px-16 mt-16">
            <div class="row-auto">
                <h1 class="text-center md:text-start font-bold text-3xl lg:text-5xl mb-4">Sign in</h1>
                <p class="lg:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus dignissimos sunt
                    voluptate ea?</p>
            </div>
            <form action="../../database/database.php" method="post">
                <div class="flex justify-center w-full">
                    <div class="mt-5 container">
                        <label for="email" class="text-xl lg:text-2xl block mb-2">
                            Email Address
                        </label>
                        <input type="email" name="email" class="py-2 text-xl w-full rounded-xl bg-slate-200">
                        <label for="password" class="text-xl lg:text-2xl block mb-2 mt-3">
                            Password
                        </label>
                        <input type="password" name="password" class="py-2 text-xl w-full rounded-xl bg-slate-200 block">
                        <button type="submit" name="auth" class="mt-3 w-full py-1 bg-blue-400 text-white rounded-lg text-2xl lg:text-3xl" style="margin-top: 35px;">LOGIN</button>
                    </div>
                </div>
                <div class="flex justify-between mt-3">
                    <p>New user? <a href="../signup/index.php" class="underline text-blue-500">Sign up</a></p>
                    <a href="../forgot_password/index.php" class="underline text-blue-500">Forgot Password?</a>
                </div>
            </form>
        </div>
    </section>
    <div id="modal-box" class="hidden bg-slate-100 border-[1px] border-black w-72 absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] rounded-2xl">
        <div class="p-4">
            <h1 class="text-center font-bold text-xl">Sign in Failed</h1>
            <p class="mt-">Your email address or password is incorrect</p>
        </div>
        <?php
        if (isset($_SESSION["gagal"])) {
            echo '<script>
        document.querySelector("#modal-box").classList.replace("hidden","block");
    </script>';
            unset($_SESSION["gagal"]);
        }

        ?>
        <hr>
        <div class="flex justify-center">
            <button id="modal-button" class="p-4 text-blue-500 text-center">
                OK
            </button>
        </div>
    </div>
    <script src="./script.js"></script>
</body>

</html>