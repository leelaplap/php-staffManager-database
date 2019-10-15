<?php
include_once "Staff.php";
include_once "StaffManager.php";
include_once "DBConnect.php";

$id = $_POST["id"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $staffName = $_POST['staffsName'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];

    $staff = new Staff($staffName, $age, $phone);
    $newManager = new StaffManager();
    $newManager->edit($id, $staff);
}
header("Location: index.php");

