<?php
include_once "Staff.php";
include_once "StaffManager.php";
include_once "DBConnect.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $staffName = $_POST['staffsName'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];

    $staff = new Staff($staffName, $age, $phone);
    $staffManager = new StaffManager();
    $staffManager->addStaff($staff);

}
header("Location: index.php");
