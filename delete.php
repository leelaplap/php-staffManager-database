<?php
include_once "Staff.php";
include_once "StaffManager.php";
include_once "DBConnect.php";

$index = $_GET["id"];
$manager = new StaffManager();
$manager->delete($index);

header('Location: index.php');