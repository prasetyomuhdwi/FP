<?php
require_once("./views/component/Breadcrumbs.php");

$currentUrl = trim($request, "/");
$currentUrl = explode("/", $currentUrl);
$breadcrumbs = new Breadcrumbs($currentUrl);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="icon" href="./assets/image/logo.svg">
    <link rel="stylesheet" href="./assets/css/tailwindcss.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body class="">
    <section class="h-screen">
        <!-- Navbar goes here -->
        <nav class="bg-white dark:bg-gray-800 shadow-lg transition duration-300">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex justify-between">
                    <div class="flex space-x-7">
                        <div>
                            <!-- Website Logo -->
                            <a href="./" class="flex items-end py-4 px-2">
                                <img src="./assets/image/logo.svg" alt="Logo" class="h-8 w-8 mr-2 transition duration-300">
                                <span class="font-semibold text-gray-500 dark:text-gray-50 text-lg">ToPlanter</span>
                            </a>
                        </div>
                        <!-- Primary Navbar items -->
                        <div class="hidden md:flex items-center space-x-1">
                            <a href="./" class="py-4 px-2 text-gray-500 dark:text-gray-50 font-semibold hover:text-green-500 transition duration-300">Home</a>
                            <a href="./latest" class="py-4 px-2 text-gray-500 dark:text-gray-50 font-semibold hover:text-green-500 transition duration-300">Latest</a>
                            <a href="./about" class="py-4 px-2 text-green-500 border-b-4 border-green-500 font-semibold ">About Us</a>
                        </div>
                    </div>
                    <!-- Secondary Navbar items -->
                    <div class="hidden md:flex items-center space-x-3 ">
                        <?php
                        if ($islogin) {
                        ?>
                            <div class="relative w-10">
                                <button id="btn_account" class="flex flex-row items-center px-1 py-1 text-sm font-semibold text-left bg-transparent rounded-full md:w-auto md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline transition duration-300">
                                    <img src="./assets/image/default-user.jpeg" class="w-auto h-6 rounded-full" alt="avatar" />
                                </button>
                                <div id="account_modal" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 hidden">
                                    <div class="px-2 py-2 bg-gray-50 dark:bg-gray-600 border-2 border-green-600 dark:border-white border-opacity-50 rounded-md shadow transition duration-300">
                                        <a class="block px-4 py-2 mt-2  bg-transparent rounded-lg  text-sm font-semibold md:mt-0 dark:text-gray-50 dark:hover:text-gray-900 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="./profil">Profile</a>
                                        <a class="block px-4 py-2 mt-2  bg-transparent rounded-lg  text-sm font-semibold md:mt-0 dark:text-gray-50 dark:hover:text-gray-900 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="./bookmarks">Bookmarks</a>
                                        <a class="block px-4 py-2 mt-2  bg-transparent rounded-lg  text-sm font-semibold md:mt-0 dark:text-gray-50 dark:hover:text-gray-900 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="./favorit">Favorit</a>
                                    </div>
                                </div>
                            </div>
                        <?php } else { ?>
                            <a href="./login" class="py-2 px-2 font-medium text-gray-500 dark:text-gray-50 rounded hover:bg-green-500 dark:hover:bg-green-700 hover:text-white transition duration-300">Masuk</a>
                            <a href="./register" class="py-2 px-2 font-medium text-white bg-green-500 dark:bg-green-700 rounded hover:bg-green-400 transition duration-300">Register</a>
                        <?php } ?>

                        <!-- Not toggled switch -->
                        <div class="w-full h-full flex flex-col justify-center items-center">
                            <div class="flex justify-center items-center">
                                <span class="">
                                    <svg class="h-6 w-6 text-gray-600 dark:text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </span>

                                <!-- Switch Container -->
                                <button id="btn_darkmode" class="w-14 h-7 flex items-center bg-gray-300 rounded-full mx-3 px-1 transition duration-300">
                                    <!-- Switch -->
                                    <div id="item_darkmode" class="bg-white w-5 h-5 rounded-full shadow-md transform transition duration-300"></div>
                                </button>

                                <span class="">
                                    <svg class="h-6 w-6 text-gray-400 dark:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                                    </svg>
                                </span>
                            </div>
                        </div>

                    </div>
                    <!-- Mobile menu button -->
                    <div class="md:hidden flex items-center">
                        <button class="outline-none mobile-menu-button">
                            <svg class=" w-6 h-6 text-gray-500 dark:text-gray-50 hover:text-green-500 " x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- mobile menu -->
            <div class="hidden mobile-menu">
                <ul class="">
                    <li class="active"><a href="index.html" class="block text-sm px-2 py-4 text-white bg-green-500 font-semibold">Home</a></li>
                    <li><a href="./latest" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Latest</a></li>
                    <li><a href="./about" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">About Us</a></li>
                </ul>
            </div>
        </nav>
        <main class="bg-gray-200 dark:bg-gray-700 h-full">
            <div class="max-w-6xl mx-auto px-4 pt-4 lg:pt-6">
                <div class="flex justify-between dark:text-white">

                    <!-- Breadcrumbs -->
                    <?php $breadcrumbs->breadcrumb() ?>

                </div>
            </div>
        </main>
    </section>
    <script src="./assets/js/jquery-3.4.1.min.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>