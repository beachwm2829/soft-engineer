<?php

class connectdb {

    public function condb() {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpassword = "";
        $db = "db_se";
        $conn = new mysqli($dbhost, $dbuser, $dbpassword, $db)or
                die("Connect failed: %s\n" . $conn->erro);
        mysqli_set_charset($conn, "utf8");
        return $conn;
    }

    public function checklogin($user, $pass) {

        $sql = "SELECT * FROM `user` WHERE user_username='" . $user . "' AND user_Pass='" . $pass . "'";
        $result = mysqli_query($this->condb(), $sql);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $p = $row['user_status'];

            if ($p == 'Member') {
                echo 'Member des';
                //header("location:index.php");
            }
            else if ($p == 'Owner') {
                echo 'Owner des';
                //header("location:index.php");
            }
            else if ($p == 'Admin') {
                echo 'Admin des';
                //header("location:index.php");
            }
            else{
                header("location:index.php");
            }
            header("location:index.php");
        } else {
            header("location:index.php");
        }
    }
    
    public function register($User,$Pass,$name,$phone,$address)
    {
        $sql = "INSERT INTO `user`(`user_username`, `user_pass`, `user_name`, `user_tel`, `user_address`, `user_status`) VALUES ('" . $User . "','" . $Pass . "','" . $name . "','" . $phone . "','" . $address . "','Member')";
        if (mysqli_query($this->condb(), $sql)) {
            echo 'Register OK';
            //header("location:login.php");
        } else {
            echo "Connet F<br>";
            echo $sql;
        }
    }

}
