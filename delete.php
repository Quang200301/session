<!DOCTYPE html>
<?php session_start() ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $id = $_GET['id'];
    $fileHA=$_SESSION['product'][$id]['hinhanh'];
    echo "<img src='$fileHA' >";
    if ($fileHA!="")
     unlink($fileHA);
    array_splice($_SESSION['product'], $id, 1);

    header('location: data.php');
        ?>
</body>
</html>