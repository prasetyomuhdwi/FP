<?php
class PageComp
{
    private $currentUrl;
    private $baseUrl;

    function __construct($currentUrl = [], $baseUrl)
    {
        $this->currentUrl = $currentUrl;
        $this->baseUrl = $baseUrl;
    }

    public function header()
    {
        $loginClass = new AuthMiddleware();
        $active_page = $this->currentUrl;
        // Navbar
        echo "
        <nav id='header' class='w-full bg-white dark:bg-gray-800 shadow-lg transition duration-300'>
            <div id='progress' class='h-1 z-20 top-0' style='background:linear-gradient(to right, #4dc0b5 var(--scroll), transparent 0);'></div>
            <div class='max-w-6xl mx-auto px-4'>
                <div class='flex justify-between items-center'>
                    <div class='flex w-full space-x-7'>
                        <div>
                            <!-- Website Logo -->
                            <a href='" . $this->baseUrl . "/' class='flex items-end py-4 px-2'>
                                <img src='" . $this->baseUrl . "/assets/image/logo.svg' alt='Logo' class='h-8 w-8 mr-2 transition duration-300'>
                                <span class='font-semibold text-gray-500 dark:text-gray-50 text-lg'>ToPlanter</span>
                            </a>
                        </div>
                        <!-- Primary Navbar items -->
                        <div class='hidden w-full md:flex justify-center items-center space-x-1'>
                            <a href='" . $this->baseUrl . "/' class='py-4 px-2 " . (($active_page[0] == "") ? " text-green-500 border-b-4 border-green-500 font-semibold" : " text-gray-500 dark:text-gray-50 hover:text-green-500 transition duration-300") . "'>Beranda</a>
                            <div class='relative'>
                                <button id='btn-blog' class='py-4 px-2 inline-flex items-center" . (($active_page[0] == "blog") ? " text-green-500 border-b-4 border-green-500 font-semibold" : " text-gray-500 dark:text-gray-50 hover:text-green-500 dark:hover:text-green-600 transition duration-300") . "'>
                                Blog  
                                    <svg class='h-5 w-5' viewBox='0 0 20 20' fill='currentColor'>
                                        <path fill-rule='evenodd' d='M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z' clip-rule='evenodd' />
                                    </svg>
                                </button>
                                <div id='blog-modal' class='hidden absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20'>
                                    <a href='" . $this->baseUrl . "/blogs' class='block px-4 py-2 text-sm capitalize " . (($active_page[1] == "all") ? " bg-emerald-500 text-white hover:bg-emerald-500 hover:text-white" : "text-gray-700 bg-white hover:bg-emerald-500 hover:text-white ") . "'>
                                        Semua Blog
                                    </a>
                                    <a href='" . $this->baseUrl . "/blogs/latest' class='block px-4 py-2 text-sm capitalize " . (($active_page[1] == "latest") ? "bg-emerald-500 text-white hover:bg-emerald-500 hover:text-white" : "text-gray-700 bg-white hover:bg-emerald-500 hover:text-white ") . "'>
                                        Blog Terbaru
                                    </a>
                                    <a href='" . $this->baseUrl . "/blogs/tags' class='block px-4 py-2 text-sm capitalize " . (($active_page[1] == "tags") ? "bg-emerald-500 text-white hover:bg-emerald-500 hover:text-white" : "text-gray-700 bg-white hover:bg-emerald-500 hover:text-white ") . "'>
                                        Tag Blog
                                    </a>
                                </div>
                            </div>
                            <a href='" . $this->baseUrl . "/page/about' class='py-4 px-2 " . (($active_page[0] == "about") ? " text-green-500 border-b-4 border-green-500 font-semibold" : " text-gray-500 dark:text-gray-50 hover:text-green-500 transition duration-300") . "'>Tentang</a>
                        </div>
                    </div>
                    <!-- Secondary Navbar items -->
                    <div class='hidden md:flex items-center'>";

        if ($loginClass->isLogin()) {
            echo "
            <div class='relative w-48 cursor-pointer'>

                <div id='btn_account' class='inline-flex items-center rounded-full bg-white dark:bg-transparent border hover:border-4 border-gray-200 hover:border-gray-500 p-1'>
                    <img
                      class='w-8 h-8 object-cover rounded-full'
                      src='" . $this->baseUrl . "/assets/image/default-user.jpeg'
                      alt='Avatar'
                    />
                    <span class='px-1 text-sm dark:text-gray-200 dark:hover:text-gray-100 focus:text-gray-50 '>prasetyomuhdwi</span>
                </div>
                
               
                <div id='account_modal' class='absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 hidden'>
                    <div class='px-2 py-2 bg-gray-50 dark:bg-gray-600 border-2 border-green-600 dark:border-white border-opacity-50 rounded-md shadow transition duration-300'>
                        <button id='btn_setting' class='w-full text-left block px-4 py-2 mt-2 bg-transparent rounded-lg  text-sm font-semibold md:mt-0 dark:text-gray-50 dark:hover:text-gray-900 focus:text-gray-900 active:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline'>Pengaturan</button>
                        <a class='block px-4 py-2 mt-2  bg-transparent rounded-lg  text-sm font-semibold md:mt-0 dark:text-gray-50 dark:hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline' href='" . $this->baseUrl . "/accounts/profile'>Profil</a>
                        <a class='block px-4 py-2 mt-2  bg-transparent rounded-lg  text-sm font-semibold md:mt-0 dark:text-gray-50 dark:hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline' href='" . $this->baseUrl . "/accounts/bookmark'>Bookmarks</a>
                        <a class='block px-4 py-2 mt-2  bg-transparent rounded-lg  text-sm font-semibold md:mt-0 dark:text-gray-50 dark:hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline' href='" . $this->baseUrl . "/accounts/favorit'>Favorite</a>
                        <a class='block px-4 py-2 mt-2  bg-transparent rounded-lg  text-sm font-semibold md:mt-0 dark:text-gray-50 dark:hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline' href='" . $this->baseUrl . "/auth/logout'>Keluar</a>
                    </div>
                </div>
                
            </div>";
        } else {
            echo "
            <a href='" . $this->baseUrl . "/auth/login' class='py-2 px-2 mr-2 rounded font-medium text-gray-500 hover:bg-gray-200 focus:bg-gray-300 dark:text-gray-50 dark:hover:bg-gray-700 dark:focus:bg-gray-900 transition duration-300'>Masuk</a>
            <a href='" . $this->baseUrl . "/auth/register' class='py-2 px-2 rounded font-medium text-white bg-green-500 hover:bg-green-600 focus:bg-green-700 dark:bg-green-700 dark:hover:bg-green-800 dark:focus:bg-green-900 transition duration-300'>Daftar</a>";
        }


        // <!-- Not toggled switch -->
        echo " 
                    </div>
                    <!-- Mobile menu button -->
                    <div class='md:hidden flex items-center'>
                        <button class='outline-none mobile-menu-button'>
                            <svg class=' w-6 h-6 text-gray-500 dark:text-gray-50 hover:text-green-500 ' x-show='!showMenu' fill='none' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' viewBox='0 0 24 24' stroke='currentColor'>
                                <path d='M4 6h16M4 12h16M4 18h16'></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- mobile menu -->
            <div class='hidden mobile-menu'>
                <ul class='dark:bg-gray-600'>
                    <li class='active'><a href='" . $this->baseUrl . "/' class='block text-sm px-2 py-4 " . (($active_page[0] == "home") ? " dark:text-white bg-green-500 font-semibold" : "  dark:text-white hover:bg-green-600 transition duration-300") . "'>Beranda</a></li>
                    <li><a href='" . $this->baseUrl . "/blog?q=all' class='block text-sm px-2 py-4 " . (($active_page[0] == "blog") ? " dark:text-white bg-green-500 font-semibold" : "  dark:text-white hover:bg-green-600 transition duration-300") . "'>Blog</a></li>
                    <li><a href='" . $this->baseUrl . "/about' class='block text-sm px-2 py-4 " . (($active_page[0] == "about") ? " dark:text-white bg-green-500 font-semibold" : "  dark:text-white hover:bg-green-600 transition duration-300") . "'>Tentang</a></li>
                </ul>
            </div>

            <div id='modal_setting' class='hidden fixed inset-0 z-50 bg-gray-600 bg-opacity-75 dark:bg-gray-800 dark:bg-opacity-75 flex items-center justify-center p-3'>
                    <div class='bg-white dark:bg-gray-900 max-w-lg rounded-lg overflow-hidden px-3 lg:px-6 py-4 space-y-4'>
                        <div class='flex justify-center'>
                            <span class='inline-flex items-center bg-gray-200 bg-opacity-75 dark:bg-gray-50 rounded-full p-2'>
                                <svg class='h-10 w-auto text-gray-400' fill='currentColor' viewBox='0 0 20 20'>
                                    <path d='M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z' />
                                </svg>
                            </span>
                        </div>
                        <div class='flex flex-col dark:text-gray-400 items-center text-center space-y-2'>
                            <h1 class='font-semibold dark:text-gray-300'>Pengaturan</h1>
                            <div class='w-64 p-2 bg-green-100 dark:bg-gray-800 rounded-lg shadow'>
                            
                                <p class='leading-tight text-sm lg:text-base p-2'>
                                    Ubah Mode Tampilan
                                </p>

                                <div class='w-full h-full flex flex-col justify-center items-center'>
                                    <div class='flex justify-center items-center'>
                                        <span class=''>
                                            <svg class='h-6 w-6 text-gray-600 dark:text-gray-400' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                                                <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z' />
                                            </svg>
                                        </span>

                                        <!-- Switch Container -->
                                        <button id='btn_darkmode' class='w-14 h-7 flex justify-start dark:justify-end items-center bg-gray-300 dark:bg-green-700 rounded-full mx-3 px-1 transition duration-300'>
                                            <!-- Switch -->
                                            <div id='item_darkmode' class='bg-white w-5 h-5 rounded-full shadow-md'></div>
                                        </button>

                                        <span class=''>
                                            <svg class='h-6 w-6 text-gray-400 dark:text-white' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                                                <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z' />
                                            </svg>
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class='flex justify-center pt-4 dark:text-gray-300'>
                            <button id='btn_close_modal_setting' type='button' class='rounded-lg px-5 py-2 border-2 border-gray-300 focus:border-transparent focus:outline-none focus:bg-gray-800 focus:shadow-outline font-medium'>
                                Tutup
                            </button>
                        </div>
                    </div>
                </div>
        </nav>";
    }

    public function footer()
    {
        echo "
        <footer class='text-gray-600 bg-white dark:bg-gray-800 body-font shadow-lg'>
            <div class='max-w-6xl mx-auto px-4'>
                <div class='container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col'>
                    <a class='flex title-font font-medium items-center md:justify-start justify-center text-gray-900'>
                        <img src='" . $this->baseUrl . "/assets/image/logo.svg' alt='logo' class='h-10'>
                        <span class='ml-3 font-semibold text-gray-500 dark:text-gray-50 text-lg'>ToPlanter</span>
                    </a>
                    <p class='text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4'>© 2021 ToPlanter</p>
                </div>
            </div>
        </footer>";
    }
}
