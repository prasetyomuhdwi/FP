<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?></title>
    <link rel="icon" href="<?= $data['baseUrl'] ?>/assets/image/logo.svg">
    <link rel="stylesheet" href="<?= $data['baseUrl'] ?>/assets/css/tailwindcss.css">
    <?= $data['css'] ?>
</head>

<body class="<?= ($data['class-body']) ? $data['class-body'] : ""  ?>">

    <?= ($data['useNav']) ? $data['pageComp']->header() : "" ?>