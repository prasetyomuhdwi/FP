<?php
class UploadFile
{
    private $blog_dir;
    private $blog_file;
    private $uploadBlogOk = 1;

    private $user_dir;
    private $user_file;
    private $uploadUserOk = 1;

    private $errMsg = [];

    private $baseName;
    private $fileName;

    public function __construct(Bool $isUser = false, String $fileName = NULL)
    {
        $this->fileName = (!empty($fileName)) ? $fileName : "";

        if ($isUser) {
            $this->user_dir = getcwd() . "/assets/image/users/";
            if (!file_exists($this->user_dir)) {
                mkdir($this->user_dir);
            };
        } else {
            $this->blog_dir = getcwd() . "/assets/image/blogs/";
            if (!file_exists($this->blog_dir)) {
                mkdir($this->blog_dir);
            };
        }

        if (!empty($fileName)) {
            $this->baseName = basename($_FILES[$fileName]["name"]);
        }
    }

    public function blog($file, String $username, int $id)
    {
        $imageFileType = strtolower(pathinfo($this->baseName, PATHINFO_EXTENSION));
        $this->blog_file = $this->blog_dir . $username . "-" . $id  . "." . $imageFileType;

        // Check if image file is a actual image or fake image
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $check = getimagesize($file["tmp_name"]);
            if ($check !== false) {
                $this->uploadBlogOk = 1;
            } else {
                array_push($this->errMsg, "File is not an image.");
                $this->uploadBlogOk = 0;
            }
        }

        // Check file size
        if ($file["size"] > 500000) {
            array_push($this->errMsg, "Sorry, your file is too large.");
            $this->uploadBlogOk = 0;
        }

        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            array_push($this->errMsg, "Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
            $this->uploadBlogOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($this->uploadBlogOk == 0) {
            array_push($this->errMsg, "Sorry, your file was not uploaded.");
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($file["tmp_name"], $this->blog_file)) {
                return $this->blog_file;
            } else {
                return $this->errMsg;
            }
        }
    }

    public function user($file, String $username)
    {
        $imageFileType = strtolower(pathinfo($this->baseName, PATHINFO_EXTENSION));
        $this->user_file = $this->user_dir . $username . "." . $imageFileType;


        // Check if image file is a actual image or fake image
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $check = getimagesize($file["tmp_name"]);
            if ($check !== false) {
                $this->uploadUserOk = 1;
            } else {
                array_push($this->errMsg, "File is not an image.");
                $this->uploadUserOk = 0;
            }
        }

        // Check file size 5MB
        if ($file["size"] > 500000) {
            array_push($this->errMsg, "Sorry, your file is too large.");
            $this->uploadUserOk = 0;
        }

        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            array_push($this->errMsg, "Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
            $this->uploadUserOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($this->uploadUserOk == 0) {
            array_push($this->errMsg, "Sorry, your file was not uploaded.");
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($file["tmp_name"], $this->user_file)) {
                return "/assets/image/users/" . $username . "." . $imageFileType;
            } else {
                array_push($this->errMsg, "Sorry, there was an error uploading your file.");
                return $this->errMsg;
            }
        }
    }

    public function delPicUser(String $avatar_path)
    {
        $this->user_dir = getcwd() . $avatar_path;
        if (!file_exists($this->user_dir)) {
            mkdir($this->user_dir);
        };
    }
}
