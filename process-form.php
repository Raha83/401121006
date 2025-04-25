<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$name="";
$last_name="";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
}
?>
<table>
    <tr>
        <td>name: <?= $name?></td>
        <td>last name: <?= $last_name?></td>
    </tr>
</table>
</body>
</html>