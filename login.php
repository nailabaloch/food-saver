<!-- Header -->
<?php
$title = "Login";
include_once 'partial/header.php';
include_once 'partial/navbar.php';


if (isset($_SESSION['logined'])) {
    if ($_SESSION['role'] == 1) {
        echo "<script>window.location.href='webadmin/index.php'</script>";
    } elseif ($_SESSION['role'] == 2) {
        echo "<script>window.location.href='webadmin/index.php'</script>";
    } else {
        echo "<script>window.location.href='index.php'</script>";
    }
}
?>
<!-- ! Header -->


<div class="login-form">
    <div class="container-fluid">
        <div class="col-md-4 bg-white mx-auto">
            <div class="sign text-center">
                <h4 class="text-white">#stopfoodwasteday</h4>
            </div>
            <form method="POST" autocomplete="off" novalidate="novalidate" id="signin" class="col-md-8 mx-auto py-5 ">
                <h4 class="mb-4 text-center">Login Here</h4>
                <div class="control-wrapper mb-4">
                    <div class="input-wrapper">
                        <input type="text" class="form-control p-3" id="userName" name="userName" placeholder="Email...">
                    </div>
                </div>
                <div class="control-wrapper mb-4">
                    <div class="input-wrapper">
                        <input type="password" class="form-control p-3" id="passwrdInput" name="passwrdInput" placeholder="Password...">
                    </div>
                </div>
                <a href="#" class="pass">Forget password ?</a>
                <button class="btn btn-theme w-100 mt-4">Login</button>
                <p class="bg-light p-3 mt-4">Don't have an account ? <a href="signup.php<?= isset($_GET['return']) ? '?return=' . $_GET['return'] : '' ?>" class="text-decoration-none">register</a></p>
            </form>
        </div>
    </div>
</div>

<script>
    const validator = new window.JustValidate('#signin', {
        validateBeforeSubmitting: true,
    });

    validator.addField('#userName', [{
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
            rule: 'password',
        }
    ]).onSuccess((event) => {
        event.currentTarget.submit();
    })
</script>

<?php include_once 'partial/footer.php';
include_once 'php_request/functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    nopreloader();
    extract($_REQUEST);
    if (empty($userName) || empty($passwrdInput)) {
        emptyMsg();
    } else {
        $PASS = MD5($passwrdInput);
        $sql = "select * from tbl_user where email='$userName' and passwrd='$PASS'";
        $res = mysqli_query($con, $sql);
        if (mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($res);
            $_SESSION['logined'] = true;
            $_SESSION['userid'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $row['roles'];
            if ($_SESSION['role'] == 2) {
                echo "<script>window.location.href='webadmin/index.php'</script>";
            } elseif ($_SESSION['role'] == 1) {
                echo "<script>window.location.href='webadmin/'</script>";
            } else {
                if (isset($_GET['return'])) {
                    echo "<script>window.location.href='" . $_GET['return'] . "'</script>";
                } else {
                    echo "<script>window.location.href='index.php'</script>";
                }
            }
        } else {
            invalidMsg('Your email or password is incorrect');
            session_destroy();
        }
    }
} ?>