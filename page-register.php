
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Register Page</title>
    </head>

    <body>
        <form action='send-register.php' method='POST' name="formjs">
            <span>
                Member Register
            </span>

            <div class="wrap-input100 validate-input" data-validate="Enter Username">
                <input class="input100" type="text" name="user" placeholder="Username">
            </div>

            <div class="wrap-input100 validate-input" data-validate="Enter Password">
                <input class="input100" type="password" name="pass" placeholder="Password">
            </div>
            
            <div class="wrap-input100 validate-input" data-validate="Enter Name">
                <input class="input100" type="text" name="name" placeholder="Name">
            </div>
            
            <div class="wrap-input100 validate-input" data-validate="Enter Phon">
                <input class="input100" type="text" name="phone" placeholder="Phone">
            </div>
            
            <div class="wrap-input100 validate-input" data-validate="Enter Address">
                <input class="input100" type="text" name="address" placeholder="Address">
            </div>

<!--            <div class="contact100-form-checkbox">
                <span>
                    Sex
                </span>
                <input class="input-checkbox100" id="ckb1" type="checkbox" name="sex">
                <label class="label-checkbox100" for="ckb1">
                    male
                </label>
                <input class="input-checkbox100" id="ckb2" type="checkbox" name="sex">
                <label class="label-checkbox100" for="ckb1">
                    female
                </label>
            </div>-->

            <div class="container-login100-form-btn">
                <button class="login100-form-btn" action='' onclick="return login()">
                    สมัคร สมาชิค
                </button>
            </div>
        </form>
    </body>