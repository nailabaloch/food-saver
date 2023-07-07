<?php include 'partials/_header.php';
// if (isset($_GET['id'])) {
$id = $_GET['id'];
// } else {
//     echo "<script>window.location.href='request.php'</script>";
// }

?>
<title>Food Saver Admin Panel</title>

<body>
    <div class="container-scroller">
        <?php include_once 'partials/_navbar.php'; ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <?php include_once 'partials/_sidebar.php'; ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
                            <span class="page-title-icon bg-gradient-primary text-white me-2">
                                <i class="mdi mdi-format-list-bulleted"></i>
                            </span> Response
                        </h3>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mx-auto grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Request Response</h4>
                                    <p class="card-description"> </p>
                                    <form class="forms-sample" method="POST">
                                        <div class="form-group row align-items-center">
                                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Volunteer Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" value="<?= $_SESSION['username'] ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-start">
                                            <label class="col-sm-3 col-form-label">Picture</label>
                                            <div class="col-sm-8">
                                                <input type="file" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-start">
                                            <label class="col-sm-3 col-form-label">Remarks</label>
                                            <div class="col-sm-8">
                                                <textarea type="text" rows="3" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-start">
                                            <label class="col-sm-3 col-form-label">Status</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" value="Complete" readonly>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <a href="assign.php" class="btn btn-light">Cancel</a>
                                            <button type="submit" class="btn btn-gradient-success me-2">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->

                <?php include 'partials/_footer.php';
                include_once '../php_request/functions.php';

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    extract($_POST);
                    if (empty($users_name)) {
                        emptyMsg();
                    } else {
                        // $q = "update tbl_request set vid=$users_name, status=1 where id=$id";
                        // // print_r($q);
                        // mysqli_query($con, $q);
                        // successMsg('Volunteer Added!');
                        // echo "<script>window.location.href='request.php'</script>";
                    }
                }
                ?>