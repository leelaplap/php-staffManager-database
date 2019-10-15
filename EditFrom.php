<?php
include_once "Staff.php";
include_once "StaffManager.php";
include_once "DBConnect.php";

$id = $_GET["id"];


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1">
    <form action="edit.php" method="post">
        <table>
            <tr>
                <td>id</td>
                <td><input type="text" name="id" value="<?php echo $id?>"></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="staffsName"></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="text" name="age"></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="phone"></td>
            </tr>
            <tr>
                <td><input type="submit" value="UPDATE"></td>
            </tr>
        </table>
    </form>
</table>
</body>
</html>
