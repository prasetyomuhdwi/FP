

<?php

class SignUpIn
{
    private $baseUrl = '';

    private function login()
    {
        return "
    <form action='" . $this->baseUrl . "/auth/signin' method='POST'>
    <div class='form-group mb-6'>
        <label for='email' class='form-label inline-block mb-2 text-gray-700'>Alamat Email</label>
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
        aria-describedby='email' name='email' placeholder='Masukkan alamat email'>
    </div>
    <div class='form-group mb-6'>
        <label for='password' class='form-label inline-block mb-2 text-gray-700'>Kata Sandi</label>
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
        placeholder='Masukkan kata sandi' name='password'>
    </div>
    <div class='flex justify-between items-center mb-6'>
        <div class='form-group form-check'>
            <input type='checkbox' class='form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer' id='exampleCheck2'>
            <label class='form-check-label inline-block text-gray-800' for='exampleCheck2'>Ingat saya</label>
        </div>
        <a href='#!' class='ml-5 text-blue-600 hover:text-blue-700 focus:text-blue-700 transition duration-200 ease-in-out'>Lupa kata sandi?</a>
    </div>
    <button type='submit' class='
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
      ease-in-out'>Masuk</button>
    </p>
</form>";
    }
    private function register()
    {
        return "
    <form>
    <div id='progress' class='grid grid-cols-2 gap-4 m-auto mb-6'>
        <div class='border-t-4 border-emerald-400 pt-4'>
            <p class='uppercase text-emerald-500 text-sm font-bold'>Akun</p>
        </div>
        <div class='border-t-4 border-gray-200 pt-4'>
            <p class='uppercase text-gray-400 text-sm font-bold'>Personal</p>
        </div>
    </div>
    
    <hr class='text-emerald-200 py-2'>

    <div class='step'>
        <div class='form-group mb-6'>
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
            placeholder='Username' name='username'>
        </div>
        <div class='form-group mb-6'>
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
            placeholder='Alamat email' name='email'>
        </div>
        <div class='form-group mb-6'>
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
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none' id='exampleInput126'
            placeholder='Kata Sandi'>
        </div>
    </div>

    <div class='step'>
        <div class='form-group mb-6'>
        <div class='m-4'>
            <label class='inline-block mb-2 text-gray-500'>Upload
                Image(jpg,png,svg,jpeg)</label>
            <div class='flex items-center justify-center w-full'>
                <label class='flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-gray-300'>
                    <div class='flex flex-col items-center justify-center pt-7'>
                        <svg xmlns='http://www.w3.org/2000/svg'
                            class='w-12 h-12 text-gray-400 group-hover:text-gray-600' viewBox='0 0 20 20'
                            fill='currentColor'>
                            <path fill-rule='evenodd'
                                d='M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z'
                                clip-rule='evenodd' />
                        </svg>
                        <p class='pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600'>
                            Select a photo</p>
                    </div>
                    <input type='file' class='opacity-0' />
                </label>
            </div>
        </div>
        </div>
        <div class='form-group mb-6'>
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
            placeholder='Nama Lengkap' name='fullname'>
        </div>
        <div class='form-group mb-6'>
            <div class='mb-3 xl:w-96'>
                <textarea
                class='
                    form-control
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
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none'
                id='exampleFormControlTextarea1'
                rows='3'
                placeholder='Bio'
                ></textarea>
            </div>
        </div>
    </div>
    
    <button type='submit' class='
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
      ease-in-out'>Daftar</button>
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
