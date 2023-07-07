<?php
include "../../config.php";
$id = $_GET['id'];
$deletebyid = $con->query("DELETE FROM tbl_request WHERE id=$id");
if ($deletebyid) {
    echo "<script>window.location.href = '../../request.php';</script>";
}