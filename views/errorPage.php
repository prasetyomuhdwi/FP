<?php
$currentUrl = $_SERVER['REQUEST_URI'];
$currentUrl = trim($request, "/FP");
$root = "/FP";
$code = http_response_code();

$codeMsg = array(
    404 => "
    <div class='text-xl md:text-3xl font-medium mb-4'>
        Ups. Halaman ini telah hilang.
    </div>
    <div class='text-lg mb-8'>
        Anda mungkin salah mengetik alamat atau halaman mungkin telah dipindahkan.
    </div>",
    403 => "
    <div class='text-xl md:text-3xl font-medium mb-4'>
        Akses Dilarang.
    </div>
    <div class='text-lg mb-8'>
        Anda tidak memiliki izin untuk mengakses halaman ini.
    </div>",
    500 => "
    <div class='text-xl md:text-3xl font-medium mb-4'>
        Internal Server Error.
    </div>
    <div class='text-lg mb-8'>
        Coba muat ulang halaman atau hubungi webmaster untuk informasi lebih lanjut.
    </div>",

);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                <img src="<?php echo $root; ?>/assets/image/<?php echo $code; ?>.svg" alt="Not Found" />
            </div>
            <div class="w-full md:w-7/12 text-center md:text-left p-4">
                <div class="text-6xl font-medium"><?php echo $code; ?></div>
                <?php echo $codeMsg[$code]; ?>
                <a href="<?php echo $root; ?>/" class="border border-white rounded p-4">Kembali</a>
            </div>
        </div>
    </div>

    <script src="<?php echo $root; ?>/assets/js/jquery-3.4.1.min.js"></script>
</body>

</html>