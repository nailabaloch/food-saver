<?php include 'partials/_header.php'; ?>
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
                            </span> Volunteers
                        </h3>
                    </div>
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Recently Joining Request</h4>
                                    <div class="table-responsive">
                                        <table class="table" id="volunterr">
                                            <thead>
                                                <tr>
                                                    <th> # </th>
                                                    <th> Profile </th>
                                                    <th> Name </th>
                                                    <th> Phone </th>
                                                    <th> Email </th>
                                                    <th> City </th>
                                                    <th> </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql = "select * from tbl_career order by id desc ";
                                                $res = mysqli_query($con, $sql);
                                                foreach ($res as $key) { ?>
                                                    <tr>
                                                        <td><?= $key['id'] ?></td>
                                                        <td><img src="<?= $key['profile'] != '' ? $key['profile'] : 'assets/images/new/user.webp' ?>" width="25px" alt=""></td>
                                                        <td><?= $key['name'] ?></td>
                                                        <td> <?= $key['phone'] ?> </td>
                                                        <td><?= $key['email'] ?></td>
                                                        <td> <?= $key['city'] ?> </td>
                                                        <td class="text-center">
                                                            <?php
                                                            if ($key['status'] == 1) { ?>

                                                                <a href="php_request/reject.php?id=<?= $key['id'] ?>" class="btn btn-danger btn-sm">Reject
                                                                </a>
                                                            <?php } else if ($key['status'] == 2) { ?>

                                                            <?php } else { ?>
                                                                <a href="php_request/approve.php?id=<?= $key['id'] ?>" class="btn btn-gradient-dark btn-sm ">Approve</a>
                                                            <?php }


                                                            ?>

                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->

                <?php include 'partials/_footer.php'; ?>