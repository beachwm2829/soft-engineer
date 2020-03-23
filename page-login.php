
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login Page</title>
    </head>

    <body>
        <form action='send-login.php' method='POST' name="formjs">
            <span>
                Editty Company
            </span>

            <div class="wrap-input100 validate-input" data-validate="Enter username">
                <input class="input100" type="text" name="user" placeholder="Username">
            </div>

            <div class="wrap-input100 validate-input" data-validate="Enter password">
                <input class="input100" type="password" name="pass" placeholder="Password">
            </div>

            <div class="contact100-form-checkbox">
                <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                <label class="label-checkbox100" for="ckb1">
                    จำรหัสผ่าน
                </label>
            </div>

            <div class="container-login100-form-btn">
                <button class="login100-form-btn" action='' onclick="return login()">
                    เข้าสู่ระบบ
                </button>
            </div>
        </form>

        <div class="text-center p-t-90">
            <a class="txt1" href="registerpage.php">
                สมัครสมาชิก
            </a>
            <a class="txt1">
                ||   
            </a>
            <a class="txt1" href="#">
                ลืมรหัสผ่าน?
            </a>
        </div>
        
    </body>