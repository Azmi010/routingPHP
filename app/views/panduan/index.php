<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProKidz</title>
    <link rel="stylesheet" href="./output.css">
</head>

<body>
    <header class="bg-white absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="../../views/home" class="font-bold text-lg text-primary block py-6">
                        <img src="../../../public/img/logo.png" width="50" alt="">
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- HERO SECTION START -->
    <section id="hero" class="pt-36 bg-secondary pb-10 md:pb-16">
        <div class="container flex flex-wrap justify-center overflow-hidden">
            <div class="self-center px-4 w-9/12 lg:w-1/2">
                <div class="font-bold text-center text-4xl md:text-6xl">
                    <h1>Complete Information <span class="text-red-500">ProKidz</span></h1>
                </div>
                <div class="md:text-lg text-center sm:text-sm mt-3 md:mt-5 mb-3 md:mb-5">
                    <p>How to use and choose course programs</p>
                </div>
            </div>
        </div>
    </section>
    <!-- HERO SECTION END -->

    <!-- DESCRIPTION START -->
    <section id="description" class="py-10 container">
        <h1 class="font-bold text-4xl md:text-6xl">What is <span class="text-red-500">ProKidz?</span></h1>
        <p class="my-4 md:text-xl">ProKidz Web is an innovative platform specifically designed to help children learn programming in an interactive and fun way. With a child-friendly interface and content tailored to their needs, ProKidz Web allows children to understand basic programming concepts through quiz, learning videos, and interesting projects. With full guidance and support, children can develop technical skills, problem solving and creativity through interesting and fun learning experiences.</p>
        <h1 class="font-bold text-4xl md:text-6xl">How to use <span class="text-red-500">ProKidz?</span></h1>
        <ul>
            <li class="flex md:w-1/2 my-4">
                <img src="../../../public/img/panduan1.png" width="50" alt="">
                <p class="md:text-xl ms-4">Press the signup button register an account if you don't have an account yet</p>
            </li>
            <li class="flex md:w-1/2 my-4">
                <img src="../../../public/img/panduan2.png" width="50" alt="">
                <p class="md:text-xl ms-4">Login to enter the registered account</p>
            </li>
            <li class="flex md:w-1/2 my-4">
                <img src="../../../public/img/panduan3.png" width="50" alt="">
                <p class="md:text-xl ms-4">Choose the course programs you want to start studying</p>
            </li>
            <li class="flex md:w-1/2 my-4">
                <img src="../../../public/img/panduan4.png" width="50" alt="">
                <p class="md:text-xl ms-4">Take the pre-test before starting to study</p>
            </li>
            <li class="flex md:w-1/2 my-4">
                <img src="../../../public/img/panduan5.png" width="50" alt="">
                <p class="md:text-xl ms-4">Watch learning videos</p>
            </li>
            <li class="flex md:w-1/2 my-4">
                <img src="../../../public/img/panduan6.png" width="50" alt="">
                <p class="md:text-xl ms-4">Do the post test quiz after watching the lesson</p>
            </li>
            <li class="flex md:w-1/2 my-4">
                <img src="../../../public/img/panduan7.png" width="50" alt="">
                <p class="md:text-xl ms-4">Monitoring progress to see how far you have learned</p>
            </li>
            <li class="flex md:w-1/2 my-4">
                <img src="../../../public/img/panduan8.png" width="50" alt="">
                <p class="md:text-xl ms-4">Download the certificate after all learning is complete</p>
            </li>
        </ul>
    </section>
    <!-- DESCRIPTION END -->

    <!-- OUR PROGRAM START -->
    <section id="ourprogram" class="pt-12 pb-12 bg-secondary">
        <h1 class="text-center text-5xl font-bold">Our Program</h1>
        <p class="text-center pt-4 pb-8"> Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
        <div class="flex flex-wrap justify-evenly">
            <div class="w-10/12 px-4 md:w-1/2 xl:w-1/4">
                <div class="bg-white rounded-2xl overflow-hidden p-2 shadow-lg mb-10 dark:bg-emerald-700">
                    <img src="../../../public/img/program2.jpg" width="" class="rounded-xl" alt="">
                    <div class="py-8 px-6">
                        <h3 class=" font-semibold text-md">Quiz
                        </h3>
                        <p class="text-sm">Take quiz before and after training</p>
                    </div>
                </div>
            </div>
            <div class="w-10/12 px-4 md:w-1/2 xl:w-1/4">
                <div class="bg-white rounded-2xl overflow-hidden p-2 shadow-lg mb-10 dark:bg-emerald-700">
                    <img src="../../../public/img/program3.jpg" width="" class="rounded-xl" alt="">
                    <div class="py-8 px-6">
                        <h3 class=" font-semibold text-md">Course Coding for Kids
                        </h3>
                        <p class="text-sm">Coding training for children</p>
                    </div>
                </div>
            </div>
            <div class="w-10/12 px-4 md:w-1/2 xl:w-1/4">
                <div class="bg-white rounded-2xl overflow-hidden p-2 shadow-lg mb-10 dark:bg-emerald-700">
                    <img src="../../../public/img/program1.jpg" width="" class="rounded-xl" alt="">
                    <div class="py-8 px-6">
                        <h3 class=" font-semibold text-md">Monitoring Progress Study
                        </h3>
                        <p class="text-sm">Monitoring learning progress</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR PROGRAM END -->

    <!-- SUBSCRIBE CARD START -->
    <section id="subscribe" class="flex justify-center py-14">
        <div class="w-10/12 bg-blue-400 text-center rounded-2xl py-14 px-5">
            <form action="../../database/database.php" method="post">
                <p class="text-white text-base md:text-3xl mb-4">Contact Me</p>
                <input type="email" name="email" class="py-2 md:py-4 w-3/5 rounded-full mb-5" placeholder="      Email Address">
                <div class="email">
                    <input type="text" name="message" class="py-2 md:py-4 w-2/5 rounded-l-full" placeholder="       Message">
                    <button type="submit" name="send2" class="bg-orange-400 py-2 md:py-4 w-1/5 rounded-r-full">Send</button>
                </div>
            </form>
        </div>
    </section>
    <!-- SUBSCRIBE CARD START -->

    <!-- FOOTER START -->
    <footer class="bg-lime-100">
        <div class="container">
            <div class="flex flex-wrap justify-between pt-8">
                <div class="w-full px-4 mb-8 md:w-2/6">
                    <span class="block font-bold mb-2"><img class="inline-block me-5" src="../../../public/img/logo.png" alt="" width="50"></span>
                    <p>Providing special coding training for children in various languages and monitoring learning progress for each material</p>
                </div>
                <div class="w-full mb-12 px-4 md:w-1/6">
                    <ul>
                        <li><a href="../../views/faq" style="text-decoration: underline; ">FAQ</a></li>
                        <li><a href="../../views/panduan" style="text-decoration: underline;">Panduan</a></li>
                        <li>+0913-705-3875</li>
                        <li>Email.com</li>
                        <li>Instagram</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="./dist/script.js"></script>
    <!-- FOOTER END -->
    <script src="./dist/js/script.js"></script>
</body>

</html>