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
    <section class="h-screen">
        <!-- Header -->
        <?php $page->header("about") ?>

        <main class="bg-gray-200 dark:bg-gray-700 h-full">
            <div class="max-w-6xl mx-auto px-4 pt-4 lg:pt-6">
                <div class="flex justify-between dark:text-white">

                    <!-- Breadcrumbs -->
                    <?php $page->breadcrumb() ?>

                </div>
                <div class="w-2/6 bg-white rounded-lg shadow-sm p-8">
                    <div class="flex flex-col mt-5 gap-7 text-sm">
                        <div class="bg-yellow-50 flex justify-between items-center p-3 rounded-sm shadow-sm">
                            <div class="flex justify-start items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4 2a2 2 0 00-2 2v11a3 3 0 106 0V4a2 2 0 00-2-2H4zm1 14a1 1 0 100-2 1 1 0 000 2zm5-1.757l4.9-4.9a2 2 0 000-2.828L13.485 5.1a2 2 0 00-2.828 0L10 5.757v8.486zM16 18H9.071l6-6H16a2 2 0 012 2v2a2 2 0 01-2 2z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <p class="text-gray-700 font-bold tracking-wider">18.11.2375 (Ketua)</p>
                                    <p class="text-gray-400 text-xs">YUDHA PRATAMA PUTRA</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-green-50 flex justify-between items-center p-3 rounded-sm shadow-sm">
                            <div class="flex justify-start items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4 2a2 2 0 00-2 2v11a3 3 0 106 0V4a2 2 0 00-2-2H4zm1 14a1 1 0 100-2 1 1 0 000 2zm5-1.757l4.9-4.9a2 2 0 000-2.828L13.485 5.1a2 2 0 00-2.828 0L10 5.757v8.486zM16 18H9.071l6-6H16a2 2 0 012 2v2a2 2 0 01-2 2z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <p class="text-gray-700 font-bold tracking-wider">18.11.2365</p>
                                    <p class="text-gray-400 text-xs">MUHAMMAD DWI PRASETYO</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-pink-50 flex justify-between items-center p-3 rounded-sm shadow-sm">
                            <div class="flex justify-start items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-pink-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4 2a2 2 0 00-2 2v11a3 3 0 106 0V4a2 2 0 00-2-2H4zm1 14a1 1 0 100-2 1 1 0 000 2zm5-1.757l4.9-4.9a2 2 0 000-2.828L13.485 5.1a2 2 0 00-2.828 0L10 5.757v8.486zM16 18H9.071l6-6H16a2 2 0 012 2v2a2 2 0 01-2 2z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <p class="text-gray-700 font-bold tracking-wider">18.11.2354</p>
                                    <p class="text-gray-400 text-xs">CHANDRA AGUNG RIZKY</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-indigo-50 flex justify-between items-center p-3 rounded-sm shadow-sm">
                            <div class="flex justify-start items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4 2a2 2 0 00-2 2v11a3 3 0 106 0V4a2 2 0 00-2-2H4zm1 14a1 1 0 100-2 1 1 0 000 2zm5-1.757l4.9-4.9a2 2 0 000-2.828L13.485 5.1a2 2 0 00-2.828 0L10 5.757v8.486zM16 18H9.071l6-6H16a2 2 0 012 2v2a2 2 0 01-2 2z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <p class="text-gray-700 font-bold tracking-wider">18.11.2558</p>
                                    <p class="text-gray-400 text-xs">ANDRE ADI ANUWAR</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-red-50 flex justify-between items-center p-3 rounded-sm shadow-sm">
                            <div class="flex justify-start items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4 2a2 2 0 00-2 2v11a3 3 0 106 0V4a2 2 0 00-2-2H4zm1 14a1 1 0 100-2 1 1 0 000 2zm5-1.757l4.9-4.9a2 2 0 000-2.828L13.485 5.1a2 2 0 00-2.828 0L10 5.757v8.486zM16 18H9.071l6-6H16a2 2 0 012 2v2a2 2 0 01-2 2z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <p class="text-gray-700 font-bold tracking-wider">18.11.1944</p>
                                    <p class="text-gray-400 text-xs">MUH. ASADULLOH AL MUBAROK</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </section>

    <!-- Footer -->
    <?php $page->footer() ?>

    <script src="./assets/js/jquery-3.4.1.min.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>