<?php

$currentUrl = trim($request, "/");
$currentUrl = explode("/", $currentUrl);
$page = new Page($currentUrl);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="icon" href="./assets/image/logo.svg">
    <link rel="stylesheet" href="./assets/css/tailwindcss.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body class="">
    <!-- Header -->
    <?php $page->header("about") ?>

    <section class="lg:min-h-screen text-gray-600 bg-gray-200 dark:bg-gray-700 body-font">

        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-5">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900 dark:text-gray-50">Tim Kami</h1>
            </div>
            <div class="flex flex-wrap justify-center -m-6">
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full bg-white shadow flex items-center border-gray-200 border p-4 rounded-lg">
                        <svg class="h-12 text-teal-400 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                        </svg>
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">YUDHA PRATAMA PUTRA</h2>
                            <p class="text-gray-500">18.11.2375 (Ketua)</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full bg-white shadow flex items-center border-gray-200 border p-4 rounded-lg">
                        <svg class="h-12 text-sky-400 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                        </svg>
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">MUHAMMAD DWI PRASETYO</h2>
                            <p class="text-gray-500">18.11.2365</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full bg-white shadow flex items-center border-gray-200 border p-4 rounded-lg">
                        <svg class="h-12 text-yellow-400 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                        </svg>
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">CHANDRA AGUNG RIZKY</h2>
                            <p class="text-gray-500">18.11.2354</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full bg-white shadow flex items-center border-gray-200 border p-4 rounded-lg">
                        <svg class="h-12 text-red-400 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                        </svg>
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">ANDRE ADI ANUWAR</h2>
                            <p class="text-gray-500">18.11.2558</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full bg-white shadow flex items-center border-gray-200 border p-4 rounded-lg">
                        <svg class="h-12 text-indigo-400 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                        </svg>
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">MUH. ASADULLOH AL MUBAROK</h2>
                            <p class="text-gray-500">18.11.1944</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php $page->footer() ?>

    <script src="./assets/js/jquery-3.4.1.min.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>