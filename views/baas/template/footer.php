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
</section>