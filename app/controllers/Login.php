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
            <div class='relative w-48 cursor-pointer'>

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
                
            </div>";
        } else {
            return "
            <a href='./login' class='py-2 px-2 font-medium text-gray-500 dark:text-gray-50 rounded hover:bg-green-500 dark:hover:bg-green-700 hover:text-white transition duration-300'>Masuk</a>
            <a href='./register' class='py-2 px-2 font-medium text-white bg-green-500 dark:bg-green-700 rounded hover:bg-green-400 transition duration-300'>Register</a>";
        }
    }
}
