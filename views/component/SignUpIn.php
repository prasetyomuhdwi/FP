<?php
class SignUpIn
{
    private $login = "
    <div class='px-5 py-7'>
        <label class='font-semibold text-sm text-gray-600 pb-1 block'>E-mail</label>
        <input type='text' class='border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full' />
        <label class='font-semibold text-sm text-gray-600 pb-1 block'>Kata Sandi</label>
        <input type='text' class='border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full' />
        <button type='button' class='transition duration-200 bg-green-500 hover:bg-green-600 focus:bg-green-700 focus:shadow-sm focus:ring-4 focus:ring-green-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block'>
            <span class='inline-block mr-2'>Masuk</span>
            <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='currentColor' class='w-4 h-4 inline-block'>
                <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M17 8l4 4m0 0l-4 4m4-4H3' />
            </svg>
        </button>
    </div>
    <div class='py-5'>
        <div class='grid grid-cols-2 gap-1'>
            <div class='col-start-3 col-end-7 text-center sm:text-left whitespace-nowrap'>
                <button class='transition duration-200 mx-5 px-5 py-4 cursor-pointer font-normal text-sm rounded-lg text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-200 focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50 ring-inset'>
                    <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='currentColor' class='w-4 h-4 inline-block align-text-top'>
                        <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z' />
                    </svg>
                    <span class='inline-block ml-1'>Lupa Kata Sandi</span>
                </button>
            </div>
        </div>
    </div>";
    private $register = "
    <div class='px-5 py-7'>
        <div class='step'>
            <div class='relative'>
                <label class='font-semibold text-sm text-gray-600 pb-1 block'>Username</label>
                <input type='text' class='border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full' />
            </div>
            <label class='font-semibold text-sm text-gray-600 pb-1 block'>E-mail</label>
            <input type='email' class='border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full' />
            <label class='font-semibold text-sm text-gray-600 pb-1 block'>Kata Sandi</label>
            <input type='text' class='border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full' />
        </div>
        <div class='step'>
            <label class='font-semibold text-sm text-gray-600 pb-1 block'>Nama Lengkap</label>
            <input type='text' class='border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full' />
            <label class='font-semibold text-sm text-gray-600 pb-1 block'>Bio</label>
            <textarea class='w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none' rows='4'></textarea>
        </div>
        <button type='button' class='transition duration-200 bg-green-500 hover:bg-green-600 focus:bg-green-700 focus:shadow-sm focus:ring-4 focus:ring-green-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block'>
            <span class='inline-block mr-2'>Masuk</span>
            <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='currentColor' class='w-4 h-4 inline-block'>
                <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M17 8l4 4m0 0l-4 4m4-4H3' />
            </svg>
        </button>
    </div>";
    private $forgetPass = "
        
    ";

    public function component($componentName)
    {
        switch ($componentName) {
            case 'login':
                return $this->login;
                break;

            default:
                return $this->register;
                break;
        }
    }

    public function content($urlString)
    {
        switch ($urlString) {
            case 'login':
                $title = "Login";
                $tmp1 = "Belum";
                $tmp2 = " Registrasi Sekarang";
                $link = "register";
                break;

            default:
                $title = "Register";
                $tmp1 = "Sudah";
                $tmp2 = " Login Disini";
                $link = "login";
                break;
        }

        return ["title" => $title, "msg1" => $tmp1, "msg2" => $tmp2, "link" => $link];
    }
}
