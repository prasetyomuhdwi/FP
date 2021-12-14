<?php
session_start();
require_once("./app/controllers/Validate.php");

class Login
{
    private $mAuth = true;
    private $app_root = '';

    public function __construct()
    {
        $this->mAuth = (empty($_SESSION["authenticated"]) || $_SESSION["authenticated"] != 'true') ? false : true;
        $this->app_root = parse_ini_file('./app/app.ini')['app_root'];
    }

    public function isLogin()
    {
        return $this->mAuth;
    }

    public function needAuth()
    {
        if (!$this->mAuth) {
            header('Location: ./login');
            die();
        }
    }

    public function logout()
    {
        session_destroy();
        header('Location: ./');
        die();
    }

    public function login()
    {
        $validateClass = new Validate();

        if (!empty($_POST["email"]) && !empty($_POST["password"])) {
            $email = $this->dataCleaner($_POST["email"]);
            $password = $this->dataCleaner($_POST["password"]);

            if (
                $validateClass->vPassword($password)[0] &&
                $validateClass->vEmail($email)[0]
            ) {
                if ($email == 'user@mail.com' && $password == 'Testaja123') {
                    $_SESSION["authenticated"] = 'true';
                    header('Location: ./');
                    die();
                } else {
                    header('refresh:3;url=' . $this->app_root . '/register');
                    echo "<b>Anda belum memiliki akun</b><br>";
                    echo "You'll be redirected in about 3 secs. If not, click <a href=" . $this->app_root . "/register'>here</a>.";
                    die();
                }
            } else {

                echo $validateClass->vEmail($email)[1];
                echo $validateClass->vPassword($password)[1];
            }
        } else {
            header('Location: ./login');
            die();
        }
    }

    public function dataCleaner($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
