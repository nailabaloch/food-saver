<?php include 'partials/_header.php';
// if (isset($_GET['id'])) {
$ids = $_SESSION['userid'];
$sql = "select * from tbl_career limit 1";
$res = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($res);
echo $row['id'];
// if (mysqli_num_rows($res) > 0) {
// $_SESSION['username'] = $row['username'];
// $_SESSION['role'] = $row['roles'];
// } else {
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
                                <i class="mdi mdi-account"></i>
                            </span> Account
                        </h3>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mx-auto grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">User Profile</h4>
                                    <p class="card-description"> </p>
                                    <form class="forms-sample" method="POST">
                                        <div class="form-group row align-items-center">
                                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" value="<?= $row['name'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-start">
                                            <label class="col-sm-3 col-form-label">Picture</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" value="<?= $row['profile'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-start">
                                            <label class="col-sm-3 col-form-label">Phone</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" value="<?= $row['phone'] ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-start">
                                            <label class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" value="<?= $row['email'] ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-start">
                                            <label class="col-sm-3 col-form-label">Password</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" />
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