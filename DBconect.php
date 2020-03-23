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
            //$_SESSION["id"] = $user;
            //$_SESSION["pass"] = $pass;
            //$_SESSION["mid"] = $row["mid"];
            //$_SESSION["point"] = $row["mPoint"];
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

}
