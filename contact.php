<!-- Header -->
<?php
$title = "Contact";
include_once 'partial/header.php';
include_once 'partial/navbar.php';
?>
<!-- ! Header -->
<!-- mobile navbar -->
<div class="pagetitleBanner" style="background-image: url('assets/img/pagetitlecontactimg.avif');"></div>

<div class="col-md-6 col-sm-10 col-11 mx-auto text-center py-5">
    <h1>CONTACT</h1>
    <h2>We strive to educate and ignite change ...</h2>
    <p>If you have any questions that you would like answered or best practices and tips that you would like to share, please fill out the form below to contact us:
    </p>
</div>
<div class="contact-form">
    <div class="container-fluid">
        <div class="row">
            <div class="cont col-md-11 mx-auto">
                <div class="col-md-7 mx-auto my-5">
                    <h1 class="mb-5">Send us a message</h1>
                    <form method="POST" id="contactForm" autocomplete="off" novalidate="novalidate">
                        <div class="control-wrapper mb-4">
                            <div class="input-wrapper">
                                <input type="text" class="form-control py-3" name="name" id="name" placeholder="Your name...">
                            </div>
                        </div>
                        <div class="control-wrapper mb-4">
                            <div class="input-wrapper">
                                <input type="text" class="form-control  py-3" name="email" id="email" placeholder="Your email...">
                            </div>
                        </div>
                        <div class="control-wrapper mb-4">
                            <div class="input-wrapper">
                                <input type="text" class="form-control  py-3" name="subject" id="subject" placeholder="Subject...">
                            </div>
                        </div>
                        <div class="control-wrapper mb-4">
                            <div class="input-wrapper">
                                <textarea class="form-control py-3" name="text" id="text" rows="10" placeholder="Message..."></textarea>
                            </div>
                        </div>
                        <button class="btn btn-theme btn-dark py-3">Send</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>


<script>
    const validator = new window.JustValidate('#contactForm', {
        validateBeforeSubmitting: true,
    });

    validator.addField('#name', [{
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
    ]).addField('#email', [{
            rule: 'required',
            errorMessage: 'Email is required',
        },
        {
            rule: 'email',
        },
    ]).addField('#subject', [{
            rule: 'required',
            errorMessage: 'Subject is required',
        },
        {
            rule: 'minLength',
            value: 3,
            errorMessage: 'Min 3 Characters',
        },
        {
            rule: 'maxLength',
            value: 20,
            errorMessage: 'Max 20 Characters',
        },
    ]).addField('#text', [{
            rule: 'required',
            errorMessage: 'Message is required',
        },
        {
            rule: 'minLength',
            value: 6,
            errorMessage: 'Min 6 Characters',
        },
    ]).onSuccess((event) => {
        event.currentTarget.submit();
    })
</script>

<?php include_once 'partial/footer.php';
include_once 'php_request/functions.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    extract($_REQUEST);
    if (empty($name) || empty($email) || empty($subject) || empty($text)) {
        emptyMsg();
    } else {
        $sql = "insert into tbl_contact (name, email, subject, text) values('$name','$email','$subject','$text')";
        $res = mysqli_query($con, $sql);
        if ($res) {
            successMsg('Message received!');
        } else {
            invalidMsg('Invalid Request');
        }
    }
}


?>