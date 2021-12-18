<?php
session_start();

class Login extends Controller
{
    private $mAuth = true;

    public function __construct()
    {
        $this->mAuth = (empty($_SESSION["authenticated"]) || $_SESSION["authenticated"] != 'true') ? false : true;
    }

    public function test()
    {
        echo "yooo";
    }
    public function isLogin()
    {
        return $this->mAuth;
    }

    public function needAuth()
    {
        if (!$this->mAuth) {
            header('Location: ' . $this->absUrl() . '/auth/login');
            die();
        }
    }

    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
                        header('Location: ' . $this->absUrl() . '/');
                        die();
                    } else {
                        header('refresh:3;url=' . $this->absUrl() . '/auth/register');
                        echo "<b>Anda belum memiliki akun</b><br>";
                        echo "You'll be redirected in about 3 secs. If not, click <a href=" . $this->absUrl() . "/auth/register'>here</a>.";
                        die();
                    }
                } else {

                    echo $validateClass->vEmail($email)[1];
                    echo $validateClass->vPassword($password)[1];
                }
            } else {
                header('Location: ' . $this->absUrl() . '/auth/login');
                die();
            }
        } else {
            header('location: ' . $this->absUrl() . '/auth/login');
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
