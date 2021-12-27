<?php
class ValidateUser extends UsersModel
{
    private $errMsg = array(
        "fullname" => "<b>Nama lengkap</b> anda tidak valid",
        "email" => "<b>Email</b> anda tidak valid",
        "phone" => "<b>Nomor telepon</b> anda tidak valid",
        "username" => "<b>Username</b> anda tidak valid",
        "usernameUsed" => "<b>Username</b> telah digunakan",
        "emailUsed" => "<b>Email</b> telah digunakan",
        "password" => "<b>Password</b> anda tidak valid",
        "bio" => "<b>Biografi</b> anda tidak valid"
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
            return [true, $fullname];
        }
    }

    function vUsername($username)
    {
        // Mengecek apakah string hanya mengandung
        // huruf ASCII, angka, -_ dan spasi
        $pattern = "/^[A-Za-z0-9]+(?:[ _-][A-Za-z0-9]+)*$/";

        // mengecek apakah regex sesuai dengan pola yang telah ditentukan
        $regex = preg_match($pattern, $username);

        if (!$regex) {
            return [false, $this->errMsg["username"]];
        } else {
            if ($this->checkUsername($username) == 0) {
                return [true, $username];
            } else {
                return [false, $this->errMsg["usernameUsed"]];
            }
        }
    }

    function vBio($bio)
    {
        // Mengecek apakah string hanya mengandung
        // huruf ASCII, angka, -_ dan spasi
        $pattern = "/^[A-Za-z0-9 .,`'\"]*$/";

        // mengecek apakah regex sesuai dengan pola yang telah ditentukan
        $regex = preg_match($pattern, $bio);

        if (!$regex) {
            return [false, $this->errMsg["bio"]];
        } else {
            return [true, $bio];
        }
    }

    function vEmail($email)
    {
        // Mengecek apakah Email valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return [false, $this->errMsg["email"]];
        } else {
            if ($this->checkUsername($email) == 0) {
                return [true, $email];
            } else {
                return [false, $this->errMsg["emailUsed"]];
            }
        }
    }

    function vPhone($phone)
    {
        //menghilangkan char selain 0-9
        $phone = preg_replace("/[^0-9]/", '', $phone);

        // Mengecek apakah nomor valid
        if (strlen($phone) >= 10 && strlen($phone) <= 14) {
            return [true, $phone];
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
            return [true, $password];
        }
    }
}
