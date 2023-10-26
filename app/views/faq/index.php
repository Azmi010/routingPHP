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
    <section id="hero" class="pt-36 pb-32 bg-secondary">
        <div class="container flex flex-wrap justify-center overflow-hidden">
            <div class="self-center px-4 w-9/12 lg:w-1/2">
                <div class="font-bold text-center text-4xl md:text-6xl" style="line-height: 5rem;">
                    <h1>Frequently Ask Question About <span class="text-red-500">ProKidz</span></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- HERO SECTION END -->

    <!-- DESCRIPTION START -->
    <section id="description" class="py-10 container">
        <h1 class="font-bold text-center text-4xl md:text-6xl">FAQ </h1>
    </section>
    <!-- DESCRIPTION END -->

    <!-- OUR PROGRAM START -->
    <section id="ourprogram" class="pt-12 pb-12 bg-secondary">
        <div class="flex flex-wrap justify-center">
            <div id="faq1" class="w-3/4 bg-white px-3 py-1 rounded-md mb-4">
                <div class="flex justify-between">
                    <p class="font-bold text-lg inline-block">Is this Prokidz course paid?</p>
                    <button class="ps-1" onclick="document.querySelector('#faq1 > p').classList.toggle('hidden')">▼</button>
                </div>
                <p class="hidden">No, this platform is free and can be used immediately when you have registered an account</p>
            </div>
            <div id="faq2" class="w-3/4 bg-white px-3 py-1 rounded-md mb-4">
                <div class="flex justify-between">
                    <p class="font-bold text-lg inline-block">How is learning at Prokidz?</p>
                    <button class="ps-1" onclick="document.querySelector('#faq2 > p').classList.toggle('hidden')">▼</button>
                </div>
                <p class="hidden">Learning at ProKidz is by watching videos and then there is a quiz to determine your abilities and knowledge</p>
            </div>
            <div id="faq3" class="w-3/4 bg-white px-3 py-1 rounded-md mb-4">
                <div class="flex justify-between">
                    <p class="font-bold text-lg inline-block">How do I access learning on Prokidz?
                    </p>
                    <button class="ps-1" onclick="document.querySelector('#faq3 > p').classList.toggle('hidden')">▼</button>
                </div>
                <p class="hidden">How to access it is by logging in to a registered account and you can immediately select the programming language you want to learn. A more complete method is on the guide page</p>
            </div>
            <div id="faq4" class="w-3/4 bg-white px-3 py-1 rounded-md mb-4">
                <div class="flex justify-between">
                    <p class="font-bold text-lg inline-block">Are all the available features is free?</p>
                    <button class="ps-1" onclick="document.querySelector('#faq4 > p').classList.toggle('hidden')">▼</button>
                </div>
                <p class="hidden">Yes, all the features available are neither paid nor free</p>
            </div>
            <div id="faq8" class="w-3/4 bg-white px-3 py-1 rounded-md mb-4">
                <div class="flex justify-between">
                    <p class="font-bold text-lg inline-block">Is this Prokidz course paid?</p>
                    <button class="ps-1" onclick="document.querySelector('#faq8 > p').classList.toggle('hidden')">▼</button>
                </div>
                <p class="hidden">No, this platform is free and can be used immediately when you have registered an account</p>
            </div>
            <div id="faq5" class="w-3/4 bg-white px-3 py-1 rounded-md mb-4">
                <div class="flex justify-between">
                    <p class="font-bold text-lg inline-block">Who can register on this platform?</p>
                    <button class="ps-1" onclick="document.querySelector('#faq5 > p').classList.toggle('hidden')">▼</button>
                </div>
                <p class="hidden">Everyone, be it children who register their accounts or parents who register</p>
            </div>
            <div id="faq6" class="w-3/4 bg-white px-3 py-1 rounded-md mb-4">
                <div class="flex justify-between">
                    <p class="font-bold text-lg inline-block">If I want to ask, where should I contact?</p>
                    <button class="ps-1" onclick="document.querySelector('#faq6 > p').classList.toggle('hidden')">▼</button>
                </div>
                <p class="hidden">How to access it is by logging in to a registered account and you can immediately select the programming language you want to learn. A more complete method is on the guide page</p>
            </div>

        </div>
    </section>
    <!-- OUR PROGRAM END -->

    <!-- SUBSCRIBE CARD START -->
    <section id="subscribe" class="flex justify-center py-14">
        <div class="w-10/12 bg-blue-400 text-center rounded-2xl py-14 px-5">
            <form action="../../database/database.php" method="post">
                <p class="font-bold text-white text-base md:text-3xl mb-4 md:mb-6">Contact Me</p>
                <input type="email" name="email" class="py-2 md:py-4 w-3/5 rounded-full mb-5" placeholder="      Email Address">
                <div class="email">
                    <input type="text" name="message" class="py-2 md:py-4 w-2/5 rounded-l-full" placeholder="       Message">
                    <button type="submit" name="send1" class="bg-orange-400 py-2 md:py-4 w-1/5 rounded-r-full">Send</button>
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