

<?php

class SignUpIn
{
    private $baseUrl = '';

    private function login()
    {
        return "
    <form action='" . $this->baseUrl . "/auth/signin' method='POST'>
        <div class='form-group mb-6'>
            <label for='email' class='form-label inline-block mb-2 text-gray-700'>Alamat Email*</label>
            <input type='email' class='form-control
            block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none' id='email' 
            aria-describedby='email' name='email' placeholder='Masukkan alamat email' required>
        </div>
        <div class='form-group mb-6'>
            <label for='password' class='form-label inline-block mb-2 text-gray-700'>Kata Sandi*</label>
            <input type='password' class='form-control block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none' id='password' 
            placeholder='Masukkan kata sandi*' name='password' required>
        </div>
        <div class='flex justify-between items-center mb-6'>
            <div class='form-group form-check'>
                <input type='checkbox' class='form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer' id='exampleCheck2'>
                <label class='form-check-label inline-block text-gray-800' for='exampleCheck2'>Ingat saya</label>
            </div>
            <a href='#!' class='ml-5 text-blue-600 hover:text-blue-700 focus:text-blue-700 transition duration-200 ease-in-out'>Lupa kata sandi?</a>
        </div>
        <button type='submit' 
            class='
            w-full
            px-6
            py-2.5
            bg-emerald-600
            hover:bg-emerald-700 hover:shadow-lg
            focus:bg-emerald-700 focus:shadow-lg focus:outline-none focus:ring-0
            active:bg-emerald-800 active:shadow-lg
            text-white
            font-medium
            text-xs
            leading-tight
            uppercase
            rounded
            shadow-md
            transition
            duration-150
            ease-in-out'>
            Masuk
        </button>
    </form>";
    }
    private function register()
    {
        return "
    <form class='w-96' action='" . $this->baseUrl . "/auth/signup' method='POST'>
        <div class='grid grid-cols-2 gap-4 m-auto mb-6'>
            <div id='progress-akun' class='border-t-4 border-emerald-400 pt-4'>
                <p class='uppercase text-emerald-500 text-sm font-bold'>Akun</p>
            </div>
            <div id='progress-personal' class='border-t-4 border-gray-200 pt-4'>
                <p class='uppercase text-gray-400 text-sm font-bold'>Personal</p>
            </div>
        </div>
        
        <hr class='text-emerald-200 py-2'>

        <div class='step'>
            <div class='form-group mb-6'>
                <label for='username' class='form-label inline-block mb-2 text-gray-700'>Username*</label>
                <input type='text' class='form-control block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none' id='username'
                    placeholder='username123' name='username' required>
            </div>
            <div class='form-group mb-6'>
                <label for='email' class='form-label inline-block mb-2 text-gray-700'>Email*</label>
                <input type='email' class='form-control block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none' id='email'
                    placeholder='user123@mail.com' name='email' required>
            </div>
            <div class='form-group mb-6'>
                <label for='pass' class='form-label inline-block mb-2 text-gray-700'>Kata Sandi*</label>
                <input type='password' class='form-control block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none' id='pass'
                    placeholder='********' name='password' required>
            </div>
        </div>

        <div class='step hidden'>
            <div class='form-group mb-6'>
                <div class='flex justify-center'>
                    <div class='w-96'>
                        <label for='formFile' class='form-label inline-block mb-2 text-gray-700'>Image Avatar</label>
                        <input class='form-control
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white 
                            focus:border-blue-600 focus:outline-none' 
                            type='file' id='formFile' name='avatar_path'>
                    </div>
                </div>
            </div>
            <div class='form-group mb-6'>
                <label for='fullname' class='form-label inline-block mb-2 text-gray-700'>Nama Lengkap*</label>
                <input type='text' class='form-control block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none' id='fullname'
                    placeholder='Nama lengkap user' name='fullname' required>
            </div>
            <div class='form-group mb-6'>
                <div class='mb-3 xl:w-96'>
                    <label for='bio' class='form-label inline-block mb-2 text-gray-700'>Biografi Singkat*</label>
                    <textarea
                        class='
                        form-control
                        block w-full
                        px-3 py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid 
                        border-gray-300 rounded
                        transition ease-in-out m-0
                        focus:text-gray-700 focus:bg-white 
                        focus:border-blue-600 focus:outline-none'
                        id='bio' rows='3'
                        placeholder='Biografi singkat user'
                        name='bio' required
                    ></textarea>
                </div>
            </div>
        </div>
        <div class='py-4 grid grid-cols-2 gap-2'>
            <button id='btn-prev' type='button'
                class='
                hidden
                px-6 py-2.5
                bg-gray-400
                hover:bg-gray-500 hover:shadow-lg
                focus:bg-gray-500 focus:shadow-lg 
                focus:outline-none focus:ring-0
                active:bg-gray-600 active:shadow-lg
                text-white font-medium
                text-xs leading-tight
                uppercase
                rounded shadow-md
                transition duration-150
                ease-in-out'>
                    Kembali
            </button>
            <button id='btn-next' type='button'
                class='
                col-end-3
                px-6 py-2.5
                bg-emerald-600
                hover:bg-emerald-700 hover:shadow-lg
                focus:bg-emerald-700 focus:shadow-lg 
                focus:outline-none focus:ring-0
                active:bg-emerald-800 active:shadow-lg
                text-white font-medium
                text-xs leading-tight
                uppercase
                rounded shadow-md
                transition duration-150
                ease-in-out'>
                    Selanjutnya
            </button>
        </div>
        
    </form>";
    }

    private function forgetPass()
    {
        return "";
    }

    public function __construct($baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }


    public function component($componentName)
    {
        switch ($componentName) {
            case 'login':
                return $this->login();
                break;

            default:
                return $this->register();
                break;
        }
    }

    public function content($urlString)
    {
        switch ($urlString) {
            case 'login':
                $title = "Masuk";
                $tmp1 = "Belum";
                $tmp2 = " Registrasi Sekarang";
                $link = "register";
                break;

            default:
                $title = "Registrasi";
                $tmp1 = "Sudah";
                $tmp2 = " Masuk Disini";
                $link = "login";
                break;
        }

        return ["title" => $title, "msg1" => $tmp1, "msg2" => $tmp2, "link" => $link];
    }
}
