<?php

// Creating connection with MySQL Databbase

$con = mysqli_connect('localhost', 'root', '', 'db_foodsaver');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
