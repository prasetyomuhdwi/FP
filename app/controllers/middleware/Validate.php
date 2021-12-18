<?php
class Validate
{
    private $errMsg = array(
        "fullname" => "<b>Nama lengkap</b> anda tidak valid",
        "email" => "<b>Email</b> anda tidak valid",
        "phone" => "<b>Nomor telepon</b> anda tidak valid",
        "password" => "<b>Password</b> anda tidak valid"
    );

    function vFullName($fullname)
    {
        // Mengubah string menjadi huruf kecil 
        // lalu mengubah tiap awalan kata menjadi huruf kapital
        $fullname = ucwords(strtolower($fullname));

        // Mengecek apakah Huruf awal tiap kata Kapital
        // Tidak ada angka dan simbol - simbol aneh
        $pattern = "/^[A-Za-z]+((\s)?((\'|\-|\.)?([A-Za-z])+))*$/";

        // mengecek apakah regex sesuai dengan pola yang telah ditentukan
        $regex = preg_match($pattern, $fullname);

        if (!$regex) {
            return [false, $this->errMsg["fullname"]];
        } else {
            return [$fullname];
        }
    }

    function vEmail($email)
    {
        // Mengecek apakah Email valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return [false, $this->errMsg["email"]];
        } else {
            return [$email];
        }
    }

    function vPhone($phone)
    {
        //menghilangkan char selain 0-9
        $phone = preg_replace("/[^0-9]/", '', $phone);

        // Mengecek apakah nomor valid
        if (strlen($phone) >= 10 && strlen($phone) <= 14) {
            return [$phone];
        } else {
            return [false, $this->errMsg["phone"]];
        }
    }

    function vPassword($password)
    {
        // Mengecek apakah terdapat minimal 8 karakter
        // terdapat minimal 1 angka
        // terdapat minimal 1 huruf kapital
        // terdapat minimal 1 huruf kecil
        // ex : Testaja123
        $pattern = "/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/";

        // mengecek apakah regex sesuai dengan pola yang telah ditentukan
        $regex = preg_match($pattern, $password);

        if (!$regex) {
            return [false, $this->errMsg["password"]];
        } else {
            return [$password];
        }
    }
}
