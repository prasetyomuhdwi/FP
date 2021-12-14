<?php
require_once("./views/component/Errors.php");

$root = $config["app_root"];
$errClass = new Errors(http_response_code());
$errArray = $errClass->errorMsg()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $errArray["title"]; ?></title>
    <link rel="icon" href="<?php echo $root; ?>/assets/image/logo.svg">
    <link rel="stylesheet" href="<?php echo $root; ?>/assets/css/tailwindcss.css">
</head>

<body>
    <style>
        .gradient {
            background-image: linear-gradient(45deg, #00A896 100%, #E9295C 35%);
        }
    </style>

    <div class="gradient text-white min-h-screen flex items-center">
        <div class="container mx-auto p-4 flex flex-wrap items-center">
            <div class="w-full md:w-5/12 text-center p-4">
                <img src="<?php echo $root; ?>/assets/image/<?php echo $errArray["code"]; ?>.svg" alt="Not Found" />
            </div>
            <div class="w-full md:w-7/12 text-center md:text-left p-4">
                <div class="text-6xl font-medium"><?php echo $errArray["code"]; ?></div>
                <?php echo $errArray["msg"]; ?>
                <a href="<?php echo $root; ?>/" class="border border-white rounded p-4">Kembali</a>
            </div>
        </div>
    </div>

    <script src="<?php echo $root; ?>/assets/js/jquery-3.4.1.min.js"></script>
</body>

</html>