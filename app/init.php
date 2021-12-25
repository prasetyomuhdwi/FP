<?php
// Otomatis Load Class Berdasarkan Nama classnya
// Nama Class otomatis terisi oleh sistem 
// jika dibutuhkan (require)

spl_autoload_register(function ($class_name) {
    if (file_exists(__DIR__ . '/core/' . $class_name . '.php')) {
        require_once __DIR__ . '/core/' . $class_name . '.php';
    }

    if (file_exists(__DIR__ . '/library/' . $class_name . '.php')) {
        require_once __DIR__ . '/library/' . $class_name . '.php';
    }

    if (file_exists(__DIR__ . '/controllers/middleware/' . $class_name . '.php')) {
        require_once __DIR__ . '/controllers/middleware/' . $class_name . '.php';
    }

    if (file_exists(__DIR__ . '/../views/templates/component/' . $class_name . '.php')) {
        require_once __DIR__ . '/../views/templates/component/' . $class_name . '.php';
    }

    if (file_exists(__DIR__ . '/models/' . $class_name . '.php')) {
        require_once __DIR__ . '/models/' . $class_name . '.php';
    }
});
