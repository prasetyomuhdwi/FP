<div class="min-h-screen bg-emerald-500 grid grid-cols-2">
    <div class="w-full h-full bg-auth"></div>
    <div class="p-10 xs:p-0 md:w-full md:max-w-2xl">
        <div class="flex justify-center items-center p-4 pb-8">
            <a href="<?= $data['baseUrl'] ?>/">
                <img src="<?= $data['baseUrl'] ?>/assets/image/logo-alt.png" class="w-64" alt="logo">
            </a>
        </div>
        <div class="w-full flex justify-center">
            <div class="flex flex-col p-6 rounded-lg shadow-lg bg-white lg:w-max max-w-2xl">
                <?= $data['component'] ?>
            </div>
        </div>
        <div class='py-5'>
            <div class='grid gap-1'>
                <div class='w-full text-center sm:text-left whitespace-nowrap'>
                    <div class='w-full flex justify-center items-center px-5 py-4 font-normal text-sm rounded-lg text-blue-50'>
                        <span><?= $data['content']["msg1"]; ?> punya akun?</span>
                        <a href='<?= $data['baseUrl'] ?>/auth/<?= $data['content']["link"]; ?>' class='ml-2 flex hover:text-emerald-800 focus:text-emerald-900 cursor-pointer transition duration-200'>
                            <b class='font-extrabold'> <?= $data['content']["msg2"]; ?></b>
                            <svg xmlns='http://www.w3.org/2000/svg' class='h-5 w-5' viewBox='0 0 20 20' fill='currentColor'>
                                <path fill-rule='evenodd' d='M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z' clip-rule='evenodd' />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>