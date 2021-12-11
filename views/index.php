<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="./assets/image/logo.svg">
    <link rel="stylesheet" href="./assets/css/tailwindcss.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body class="">
    <section class="h-screen bg-green-300 dark:bg-gray-700">
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
                            <a href="./" class="py-4 px-2 text-green-500 border-b-4 border-green-500 font-semibold ">Home</a>
                            <a href="./latest" class="py-4 px-2 text-gray-500 dark:text-gray-50 font-semibold hover:text-green-500 transition duration-300">Latest</a>
                            <a href="./about" class="py-4 px-2 text-gray-500 dark:text-gray-50 font-semibold hover:text-green-500 transition duration-300">About Us</a>
                        </div>
                    </div>
                    <!-- Secondary Navbar items -->
                    <div class="hidden md:flex items-center space-x-3 ">

                        <?php echo $accountComp; ?>

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
                <ul class="dark:bg-gray-600">
                    <li class="active"><a href="./" class="block text-sm px-2 py-4 dark:text-white bg-green-500 font-semibold">Home</a></li>
                    <li><a href="./latest" class="block text-sm px-2 py-4 dark:text-white hover:bg-green-500 transition duration-300">Latest</a></li>
                    <li><a href="./about" class="block text-sm px-2 py-4 dark:text-white hover:bg-green-500 transition duration-300">About Us</a></li>
                </ul>
            </div>
        </nav>
        <div class="h-3/4">
            <div class="max-w-full mx-auto px-4 pt-4 lg:pt-0 h-full flex justify-center items-center">
                <div class="dark:text-white">
                    <div class="w-full inline-flex justify-center items-center">
                        <img id="logo-search" src="./assets/image/logo-alt.svg" alt="logo" class="h-48">
                    </div>
                    <div class="relative text-gray-600">
                        <input type="search" name="serch" placeholder="Search by Title" class="bg-white h-12 lg:w-96 px-6 pr-12 rounded-full text-sm focus:outline-none">
                        <button type="submit" class="absolute right-0 top-0 mt-4 mr-5">
                            <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                                <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gray-50 dark:text-gray-400 dark:bg-gray-900 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">

                <div class="p-4 md:w-1/3">
                    <div class="h-full border-2 border-gray-800 rounded-lg overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://dummyimage.com/720x400" alt="blog">
                        <div class="p-6">
                            <h2 class="tracking-widest text-xs title-font font-medium dark:text-gray-500 mb-1">CATEGORY</h2>
                            <h1 class="title-font text-lg font-medium dark:text-white mb-3">The Catalyzer</h1>
                            <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                            <div class="flex items-center flex-wrap ">
                                <a class="text-indigo-400 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                                <span class="dark:text-gray-500 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-800">
                                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>1.2K
                                </span>
                                <span class="dark:text-gray-500 inline-flex items-center leading-none text-sm">
                                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                        <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                    </svg>6
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/3">
                    <div class="h-full border-2 border-gray-800 rounded-lg overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://dummyimage.com/721x401" alt="blog">
                        <div class="p-6">
                            <h2 class="tracking-widest text-xs title-font font-medium dark:text-gray-500 mb-1">CATEGORY</h2>
                            <h1 class="title-font text-lg font-medium dark:text-white mb-3">The 400 Blows</h1>
                            <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                            <div class="flex items-center flex-wrap">
                                <a class="text-indigo-400 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                                <span class="dark:text-gray-500 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-800">
                                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>1.2K
                                </span>
                                <span class="dark:text-gray-500 inline-flex items-center leading-none text-sm">
                                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                        <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                    </svg>6
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/3">
                    <div class="h-full border-2 border-gray-800 rounded-lg overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://dummyimage.com/722x402" alt="blog">
                        <div class="p-6">
                            <h2 class="tracking-widest text-xs title-font font-medium dark:text-gray-500 mb-1">CATEGORY</h2>
                            <h1 class="title-font text-lg font-medium dark:text-white mb-3">Shooting Stars</h1>
                            <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                            <div class="flex items-center flex-wrap ">
                                <a class="text-indigo-400 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                                <span class="dark:text-gray-500 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-800">
                                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>1.2K
                                </span>
                                <span class="dark:text-gray-500 inline-flex items-center leading-none text-sm">
                                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                        <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                    </svg>6
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="./assets/js/jquery-3.4.1.min.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>