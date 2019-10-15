<?php
include_once 'Staff.php';
include_once 'StaffManager.php';
include_once 'DBConnect.php';

$staffs = new StaffManager();
$listStudents = $staffs->getAll();
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
<form action="add.php" method="post">
    <table>
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
            <td><input type="submit" value="ADD"></td>
        </tr>
    </table>
</form>
<table border="1">
    <tr>
        <td>STT</td>
        <td>Name</td>
        <td>Age</td>
        <td>Phone</td>
        <td></td>
    </tr>
    <?php foreach ($listStudents as $key => $staff): ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $staff->name ?></td>
        <td><?php echo $staff->age ?></td>
        <td><?php echo $staff->phone ?></td>
        <td><a href="delete.php?id=<?php echo $staff->id?>">delete</a></td>
        <td><a href="EditFrom.php?id=<?php echo $staff->id?>">edit</a></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
