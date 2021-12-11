<?php
class Page
{
    private $currentUrl;

    function __construct($currentUrl)
    {
        $this->currentUrl = $currentUrl;
    }

    public function breadcrumb()
    {
        $currentUrl = $this->currentUrl;

        if ($currentUrl[0] != "") {
            echo "
            <ul class='flex text-gray-500 text-sm lg:text-base'>
                <li class='inline-flex items-center'>
                    <a class='inline-flex text-gray-400 dark:text-gray-300' href='./'>
                        <svg xmlns='http://www.w3.org/2000/svg' class='w-5 h-5' viewBox='0 0 20 20' fill='currentColor'>
                            <path d='M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z' />
                        </svg>
                        <p>Home</p>
                    </a>
                    <svg class='h-5 w-auto text-gray-400' fill='currentColor' viewBox='0 0 20 20'>
                        <path fill-rule='evenodd' d='M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z' clip-rule='evenodd'></path>
                    </svg>
                </li>";
            foreach ($currentUrl as $key => $value) {
                if ($key != (count($currentUrl) - 1)) {
                    echo "
                    <li class='inline-flex items-center'>
                        <a class='text-gray-600 dark:text-gray-200' href='" . $value . "'>" . ucfirst($value) . "</a>
                        <svg class='h-5 w-auto text-gray-400' fill='currentColor' viewBox='0 0 20 20'>
                            <path fill-rule='evenodd' d='M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z' clip-rule='evenodd'></path>
                        </svg>
                    </li>";
                } else {
                    echo "
                    <li class='inline-flex items-center'>
                        <a href='" . $value . "' class='text-blue-500 dark:text-blue-300'>" . ucfirst($value) . "</a>
                    </li>";
                }
            }
            echo "</ul>";
        }
    }

    public function footer()
    {
        echo "
        <footer class='text-gray-600 bg-white dark:bg-gray-800 body-font shadow-lg'>
            <div class='max-w-6xl mx-auto px-4'>
                <div class='container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col'>
                    <a class='flex title-font font-medium items-center md:justify-start justify-center text-gray-900'>
                        <img src='./assets/image/logo.svg' alt='logo' class='h-10'>
                        <span class='ml-3 font-semibold text-gray-500 dark:text-gray-50 text-lg'>ToPlanter</span>
                    </a>
                    <p class='text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4'>© 2021 ToPlanter</p>
                </div>
            </div>
        </footer>";
    }
}
