<?php
class Errors
{
    private $httpCode;

    function __construct($httpCode)
    {
        $this->httpCode = $httpCode;
    }

    private $codeMsg = array(
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
    </div>"
    );

    function errorMsg()
    {
        $msg = $this->codeMsg[$this->httpCode];
        $code = $this->httpCode;
        switch ($code) {
            case 403:
                $title = $this->httpCode . " Forbidden";
                break;
            case 500:
                $title = $this->httpCode . " Internal Server Error";
                break;
            default:
                $title = $this->httpCode . " Not Found";
                break;
        }
        return ["title" => $title, "code" => $code, "msg" => $msg];
    }
}
