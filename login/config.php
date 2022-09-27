<?php
//  Kiem tra dang nhap
// Neu chua chua dang nhap thi bao loi
session_start();
$checkLoggedIn = (isset($_SESSION["logged"]) && $_SESSION["logged"] == 1) ? 1 : 0;
if ($checkLoggedIn == 0) {
    echo "Access Denny !";
    exit();
}
