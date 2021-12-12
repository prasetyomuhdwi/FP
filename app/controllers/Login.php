<?php
class Login
{
    private $mAuth = true;

    function isLogin()
    {
        return $this->mAuth;
    }

    public function getComponent()
    {
        if ($this->mAuth) {
            return "
            <div class='relative w-48'>

                <div id='btn_account' class='inline-flex items-center rounded-full bg-white dark:bg-transparent border hover:border-4 border-gray-200 hover:border-gray-500 p-1'>
                    <img
                      class='w-8 h-8 object-cover rounded-full'
                      src='./assets/image/default-user.jpeg'
                      alt='Avatar'
                    />
                    <span class='px-1 text-sm dark:text-gray-200 dark:hover:text-gray-100 focus:text-gray-50 '>Username</span>
                </div>
                
               
                <div id='account_modal' class='absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 hidden'>
                    <div class='px-2 py-2 bg-gray-50 dark:bg-gray-600 border-2 border-green-600 dark:border-white border-opacity-50 rounded-md shadow transition duration-300'>
                        <button id='btn_setting' class='w-full text-left block px-4 py-2 mt-2 bg-transparent rounded-lg  text-sm font-semibold md:mt-0 dark:text-gray-50 dark:hover:text-gray-900 focus:text-gray-900 active:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline'>Setting</button>
                        <a class='block px-4 py-2 mt-2  bg-transparent rounded-lg  text-sm font-semibold md:mt-0 dark:text-gray-50 dark:hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline' href='./profile'>Profile</a>
                        <a class='block px-4 py-2 mt-2  bg-transparent rounded-lg  text-sm font-semibold md:mt-0 dark:text-gray-50 dark:hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline' href='./bookmarks'>Bookmarks</a>
                        <a class='block px-4 py-2 mt-2  bg-transparent rounded-lg  text-sm font-semibold md:mt-0 dark:text-gray-50 dark:hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline' href='./favorite'>Favorite</a>
                    </div>
                </div>

                <div id='modal_setting' class='hidden fixed inset-0 z-50 bg-gray-600 bg-opacity-75 dark:bg-gray-900 dark:bg-opacity-75 flex items-center justify-center p-3'>
                    <div class='bg-white dark:bg-gray-900 max-w-lg rounded-lg overflow-hidden px-3 lg:px-6 py-4 space-y-4'>
                        <div class='flex justify-center'>
                            <span class='inline-flex items-center bg-gray-200 bg-opacity-75 dark:bg-gray-50 rounded-full p-2'>
                                <svg class='h-10 w-auto text-gray-400' fill='currentColor' viewBox='0 0 20 20'>
                                    <path d='M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z' />
                                </svg>
                            </span>
                        </div>
                        <div class='flex flex-col dark:text-gray-400 items-center text-center space-y-2'>
                            <h1 class='font-semibold dark:text-gray-300'>Setting</h1>
                            <div class='w-64 p-2 bg-green-100 dark:bg-gray-800 rounded-lg shadow'>
                            
                                <p class='leading-tight text-sm lg:text-base p-2'>
                                    Change View Mode
                                </p>

                                <div class='w-full h-full flex flex-col justify-center items-center'>
                                    <div class='flex justify-center items-center'>
                                        <span class=''>
                                            <svg class='h-6 w-6 text-gray-600 dark:text-gray-400' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                                                <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z' />
                                            </svg>
                                        </span>

                                        <!-- Switch Container -->
                                        <button id='btn_darkmode' class='w-14 h-7 flex items-center bg-gray-300 rounded-full mx-3 px-1 transition duration-300'>
                                            <!-- Switch -->
                                            <div id='item_darkmode' class='bg-white w-5 h-5 rounded-full shadow-md transform transition duration-300'></div>
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
                                Close
                            </button>
                        </div>
                    </div>
                </div>
                
            </div>";
        } else {
            return "
            <a href='./login' class='py-2 px-2 font-medium text-gray-500 dark:text-gray-50 rounded hover:bg-green-500 dark:hover:bg-green-700 hover:text-white transition duration-300'>Masuk</a>
            <a href='./register' class='py-2 px-2 font-medium text-white bg-green-500 dark:bg-green-700 rounded hover:bg-green-400 transition duration-300'>Register</a>";
        }
    }
}
