<!-- Header -->
<?php
$title = "Sign up";
include_once 'partial/header.php';
include_once 'partial/navbar.php';
?>
<!-- ! Header -->
<div class="login-form">
    <div class="container-fluid">
        <div class="col-md-4 mx-auto bg-white">
            <div class="sign text-center">
                <h4 class="text-white">#stopfoodwasteday</h4>
            </div>
            <form method="POST" id="signup" autocomplete="off" novalidate="novalidate" class="col-md-8 mx-auto py-5">
                <h4 style="text-align: center;" class="mb-4">Register Here</h4>
                <div class="control-wrapper mb-4">
                    <div class="input-wrapper">
                        <input type="text" name="usernameInput" id="usernameInput" class="form-control p-3 form__input " placeholder="Username...">
                    </div>
                </div>

                <div class="control-wrapper mb-4">
                    <div class="input-wrapper">
                        <input type="email" name="emailInput" id="emailInput" class="form-control p-3 form__input " placeholder="Email...">
                    </div>
                </div>

                <div class="control-wrapper mb-4">
                    <div class="input-wrapper">
                        <input type="password" name="passwrdInput" id="passwrdInput" class="form-control p-3 form__input " placeholder="Password...">
                    </div>
                </div>

                <button class="btn btn-theme w-100 py-2 btn-dark">Sign up</button>
                <a href="login.php" class="btn btn-theme w-100 btn-dark mt-4">Back to login</a>
            </form>

        </div>
    </div>
</div>

<script>
    const validator = new window.JustValidate('#signup', {
        validateBeforeSubmitting: true,
    });

    validator.addField('#usernameInput', [{
            rule: 'required',
            errorMessage: 'Username is required',
        },
        {
            rule: 'minLength',
            value: 3,
        },
        {
            rule: 'maxLength',
            value: 15,
        },
    ]).addField('#emailInput', [{
            rule: 'required',
            errorMessage: 'Email is required',
        },
        {
            rule: 'email',
        },
    ]).addField('#passwrdInput', [{
            rule: 'required',
            errorMessage: 'Password is required',
        },
        {
            rule: 'strongPassword',
        }
    ]).onSuccess((event) => {
        event.currentTarget.submit();
    })
</script>


<?php

include_once 'partial/footer.php';
include_once 'php_request/functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    nopreloader();
    extract($_REQUEST);
    if (empty($usernameInput) || empty($emailInput) || empty($passwrdInput)) {
        emptyMsg();
    } else {
        $PASS = MD5($passwrdInput);
        $sql = "insert into tbl_user (email, passwrd, username ) values('$emailInput','$PASS','$usernameInput')";
        $res = mysqli_query($con, $sql);
        if ($res) {
            $insertedId = mysqli_insert_id($con);
            $sql1 = "select * from tbl_user where id=$insertedId";
            $res1 = mysqli_query($con, $sql1);
            if (mysqli_num_rows($res1) > 0) {
                $row = mysqli_fetch_assoc($res1);
                $_SESSION['logined'] = true;
                $_SESSION['userid'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['role'] = $row['roles'];
                if (isset($_GET['return'])) {
                    echo "<script>window.location.href='" . $_GET['return'] . "'</script>";
                } else {
                    echo "<script>window.location.href='index.php'</script>";
                }
                // echo "<script>window.location.href='index.php'</script>";
            }
        } else {
            invalidMsg('Invalid Request');
            session_destroy();
        }
    }
}
?>