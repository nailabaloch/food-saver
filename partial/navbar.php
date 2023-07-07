<header class="header">
    <div class="topBar">
        <div class="container-fluid">
            <div class="d-flex justify-content-between">
                <!-- <div class="col"> -->
                <ul>
                    <!-- <li>Follow us :</li> -->
                    <li><a href="#" class="px-2"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#" class="px-2"><i class="fab fa-youtube"></i></a></li>
                </ul>
                <!-- </div> -->
                <!-- <div class="col"> -->
                <ul class="links">
                    <li><a href="career.php">Become a volunteer</a></li>
                    <?php if (!isset($_SESSION['logined'])) { ?>
                        <li><a href="signup.php">Register</a></li>
                        <li><a href="login.php">Sign in</a></li>
                    <?php } else { ?>
                        <li><a href="#">Hi, <?= $_SESSION['username'] ?></a></li>
                        <li><a href="php_request/logout.php">Logout</a></li>
                    <?php   } ?>
                </ul>
                <!-- </div> -->
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-md sticky-top navbar-light  bg-white shadow p-2">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <h2>FOOD WASTE</h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item px-2">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="history.php">History</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <?php
                        if (!isset($_SESSION['logined'])) { ?>
                            <a class="nav-link btn btn-theme invert m-0 px-4" href="request.php">Request</a>
                            <?php } else {
                            if ($_SESSION['role'] != 1 || $_SESSION['role'] != 2) { ?>
                                <a class="nav-link btn btn-theme invert m-0 px-4" href="request.php">Request</a>
                        <?php }
                        } ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>