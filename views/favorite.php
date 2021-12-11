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
    <title>Favorite</title>
    <link rel="icon" href="./assets/image/logo.svg">
    <link rel="stylesheet" href="./assets/css/tailwindcss.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body class="">
    <section class="h-screen">
        <!-- Header -->
        <?php $page->header() ?>

        <main class="bg-gray-200 dark:bg-gray-700 h-full">
            <div class="max-w-6xl mx-auto px-4 pt-4 lg:pt-6">
                <div class="flex justify-between dark:text-white">

                    <!-- Breadcrumbs -->
                    <?php $page->breadcrumb() ?>

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