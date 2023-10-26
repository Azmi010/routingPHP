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
                <div class="flex items-center p-4">
                    <nav id="nav-menu" class="hidden absolute bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none dark:bg-dark dark:shadow-secondary lg:dark:bg-transparent">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="#hero" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Home</a>
                            </li>
                            <li class="group">
                                <a href="#about" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">About
                                    us</a>
                            </li>
                            <li class="group">
                                <a href="#portfolio" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Our
                                    Program</a>
                            </li>
                            <li class="group">
                                <a href="#technologies" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Contact
                                    us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="flex items-center justify-center">
                    <div class="inline-block">
                        <a href="../signup/index.php" class="me-2 text-sm font-semibold border-primary border-2 bg-white text-primary py-2 px-5 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out inline-block" target="">Sign up</a>
                    </div>
                    <div class="ms-2 me-2 inline-block">
                        <a href="../login/index.php" class="text-sm font-semibold text-white bg-primary py-2
                         px-5
                         rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out inline-block" target="">Sign in</a>
                    </div>
                    <button id="hamburger" name="hamburger" type="button" class="ms-2 inline-block lg:hidden">
                        <span class="hamburger-line origin-top-right transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line origin-bottom-right transition duration-300 ease-in-out"></span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- HERO SECTION START -->
    <section id="hero" class="pt-36 bg-secondary pb-10 md:pb-16">
        <div class="container flex flex-wrap justify-center overflow-hidden">
            <div class="self-center px-4 w-9/12 lg:w-1/2">
                <div class="font-bold text-4xl md:text-6xl">
                    <h1>Better <span class="text-red-500">Future</span></h1>
                </div>
                <div class="font-bold text-4xl md:text-6xl">
                    <h1>For your <span class="text-red-500">Kids</span></h1>
                </div>
                <div class="md:text-base sm:text-sm mt-3 md:mt-5 mb-3 md:mb-5">
                    <p>Providing special coding training for children in various languages and monitoring learning progress for each material</p>
                </div>
                <a href="" class="inline-block md:text-base sm:text-sm mb-5 font-semibold text-white bg-primary py-2 px-5 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out" target="_blank">Get Started</a>
            </div>
            <div class="bg-blue-500 w-3/12 h-[55%] hidden xl:h-[80%] lg:block absolute top-24 right-10"></div>
            <img src="../../../public/img/happy.jpg" alt="" class="hidden lg:block w-5/12 z-10">
        </div>
    </section>
    <!-- HERO SECTION END -->

    <!-- DESCRIPTION START -->
    <section id="description" class="py-10">
        <div class="container ">
            <div class="flex flex-wrap justify-center">
                <img src="../../../public/img/headphones.jpg" class="w-5/12 border-blue-400 border-8 rounded-full" alt="">
            </div>
            <div class="font-bold text-center mt-4">
                <h1 class="text-4xl">Welcome to <span class="text-red-500">ProKidz</span></h1>
            </div>
            <div class="mt-2">
                <div class="flex justify-center">
                    <div class="w-10/12 view-more">
                        <p>ProKidz Web is an innovative platform specifically designed to help children learn
                            programming in an interactive and fun way. With a child-friendly interface and content
                            tailored to their needs, ProKidz Web allows children to understand basic programming
                            concepts through quizzes, learning videos, and interesting projects. With full guidance and
                            support, children can develop technical skills, problem solving and creativity through
                            interesting and fun learning experiences.</p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">

                <button type="button" class="block text-sky-600 mb-6 mt-2 font-bold cursor-pointer hover:text-sky-500">View
                    More
                </button>
            </div>
        </div>
    </section>
    <!-- DESCRIPTION END -->

    <!-- BAHASA START -->
    <section id="bahasa" class="flex justify-center">
        <div class="pb-5">
            <div class="inline-block py-2 md:py-4 px-8 mx-1 bg-rose-400 md:px-16 xl:px-20 rounded-l-xl">
                <img src="../../../public/img/cs.png" alt="" class="w-4 md:w-12">
            </div>
            <div class="inline-block py-2 md:py-4 px-8 mx-1 bg-rose-400 md:px-16 xl:px-20">
                <img src="../../../public/img/css.png" alt="" class="w-4 md:w-12">
            </div>
            <div class="inline-block py-2 md:py-4 px-8 mx-1 bg-rose-400 md:px-16 xl:px-20">
                <img src="../../../public/img/js.png" alt="" class="w-4 md:w-12">
            </div>
            <div class="inline-block py-2 md:py-4 px-8 mx-1 bg-rose-400 md:px-16 xl:px-20 rounded-r-xl">
                <img src="../../../public/img/html.png" alt="" class="w-4 md:w-12">
            </div>
        </div>
    </section>
    <!-- BAHASA END -->

    <!-- OUR PROGRAM START -->
    <section id="ourprogram" class="pt-12 pb-12 bg-secondary">
        <h1 class="text-center text-5xl font-bold">Our Program</h1>
        <p class="text-center pt-4 pb-8"> Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
        <div class="flex flex-wrap justify-evenly">
            <div class="w-10/12 px-4 md:w-1/2 xl:w-1/4">
                <div class="bg-white rounded-2xl overflow-hidden p-2 shadow-lg mb-10 dark:bg-emerald-700">
                    <img src="../../../public/img/program2.jpg" width="" class="rounded-xl" alt="">
                    <div class="py-8 px-6">
                        <h3 class=" font-semibold text-sm">Quiz
                        </h3>
                        <p class="text-sm">Take quiz before and after training</p>
                    </div>
                </div>
            </div>
            <div class="w-10/12 px-4 md:w-1/2 xl:w-1/4">
                <div class="bg-white rounded-2xl overflow-hidden p-2 shadow-lg mb-10 dark:bg-emerald-700">
                    <img src="../../../public/img/program3.jpg" width="" class="rounded-xl" alt="">
                    <div class="py-8 px-6">
                        <h3 class=" font-semibold text-sm">Course Coding for Kids
                        </h3>
                        <p class="text-sm">Coding training for children</p>
                    </div>
                </div>
            </div>
            <div class="w-10/12 px-4 md:w-1/2 xl:w-1/4">
                <div class="bg-white rounded-2xl overflow-hidden p-2 shadow-lg mb-10 dark:bg-emerald-700">
                    <img src="../../../public/img/program1.jpg" width="" class="rounded-xl" alt="">
                    <div class="py-8 px-6">
                        <h3 class=" font-semibold text-sm">Monitoring Progress Study
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
            <p class="text-white text-base md:text-3xl mb-4 md:mb-6">Contact Me</p>
            <input type="text" class="py-2 md:py-4 w-3/5 rounded-full mb-5" placeholder="      Email Address">
            <div class="email">
                <input type="text" class="py-2 md:py-4 w-2/5 rounded-l-full" placeholder="       Message">
                <button type="button" class="bg-orange-400 py-2 md:py-4 w-1/5 rounded-r-full">Send</button>
            </div>
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
    <script src="./script.js"></script>
    <!-- FOOTER END -->
    <script src="./script.js"></script>
</body>

</html>