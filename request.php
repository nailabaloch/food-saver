<!-- Header -->
<?php
$title = "Submit Your Request";
include_once 'partial/header.php';
include_once 'partial/navbar.php';
if (!isset($_SESSION['logined'])) {
    echo "<script>window.location.href='login.php?return=request.php'</script>";
}
?>
<style>
    .volenteer-card {
        background-color: white;
        padding: 2rem;
    }

    .volenteer-card form {
        width: 80%;
        margin: auto;
    }

    .volenteer-card label {
        display: block;
        margin-top: 20px;
        margin-bottom: 10px;
        font-weight: 700;
    }
</style>

<div class="login-form">
    <div class="container-fluid">
        <div class="col-md-7 bg-white mx-auto">
            <div class="sign text-center">
                <h4 class="text-white">#stopfoodwaste</h4>
            </div>
            <h4 class="text-center mt-5">Submit your request</h4>
            <form method="POST" autocomplete="off" novalidate="novalidate" id="request" class="col-md-10 mx-auto py-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="control-wrapper mb-4">
                            <div class="input-wrapper">
                                <label class="mb-2">Name </label>
                                <input type="text" name="name" id="name" class="p-3 form-control" placeholder="Your name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="control-wrapper mb-4">
                            <div class="input-wrapper">
                                <label class="mb-2">Phone</label>
                                <input type="text" name="phone" id="phone" class="p-3 form-control" placeholder="Phone Number">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="control-wrapper mb-4">
                            <div class="input-wrapper">
                                <label class="mb-2">Pickup Date</label>
                                <input type="date" name="date" id="date" class="p-3 form-control" min="<?= date('Y-m-d'); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="control-wrapper mb-4">
                            <div class="input-wrapper">
                                <label class="mb-2">Address</label>
                                <textarea type="text" name="address" id="address" rows="3" class="p-3 form-control" placeholder="Pickup Location"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="control-wrapper mb-4">
                            <div class="input-wrapper">
                                <label class="mb-2">Message</label>
                                <textarea type="text" name="mesg" id="mesg" rows="5" class="p-3 form-control" placeholder="your message"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-theme mt-4">Submit Request</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const validator = new window.JustValidate('#request', {
        validateBeforeSubmitting: true,
    });

    validator.addField('#name', [{
        rule: 'required',
        errorMessage: 'Name is required',
    }, {
        rule: 'minLength',
        value: 3,
    }, {
        rule: 'maxLength',
        value: 15,
    }]).addField('#phone', [{
        rule: 'required',
        errorMessage: 'Phone number is required',
    }, {
        rule: 'number',
        errorMessage: 'Phone number in number eg(+,- no need)',
    }, {
        rule: 'minLength',
        value: 10,
    }, {
        rule: 'maxLength',
        value: 15,
    }]).addField('#date', [{
        rule: 'required',
        errorMessage: 'Pickup Date is required',
    }]).addField('#address', [{
        rule: 'required',
        errorMessage: 'Your Address is required',
    }, {
        rule: 'minLength',
        value: 10,
        errorMessage: 'Minimum 10 Characters',
    }]).addField('#mesg', [{
        rule: 'required',
        errorMessage: 'Your Message is required',
    }, {
        rule: 'minLength',
        value: 6,
        errorMessage: 'Minimum 6 Characters',
    }]).onSuccess((event) => {
        event.currentTarget.submit();
    })
</script>

<?php include_once 'partial/footer.php';
include_once 'php_request/functions.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    extract($_REQUEST);
    if (empty($name) || empty($phone) || empty($date) || empty($address) || empty($mesg)) {
        emptyMsg();
    } else {
        $id = $_SESSION['userid'];
        $sql = "insert into tbl_request (name, phone, date, address, message, status, userid) values('$name','$phone','$date','$address','$mesg',0,$id)";
        $res = mysqli_query($con, $sql);
        if ($res) {
            successMsg('Your request has been received!');
        } else {
            invalidMsg('Try Again!');
        }
    }
}


?>