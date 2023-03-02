<!DOCTYPE html>
<?php session_start()?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            height:50px ;
             width:50px;
        }
    </style>
</head>

<body>
    <div>
        <h1> Danh sách sản phẩm </h1>
        <form action="" method="$_POST">
            <table border="1">
                <tr>
                    <td>ID</td>
                    <td>Tên sản phẩm</td>
                    <td>Giá tiền</td>
                    <td>Hình ảnh</td>
                    <td> Action </td>
                </tr>
        </form>
        <?php       

    if (isset($_SESSION["product"])){
    $dem=count($_SESSION["product"]);
    for($i=0;$i<$dem;$i++){
    ?>
        <tr>
            <td><?php echo $i+1;?></td>
            <td><?php echo $_SESSION ["product"][$i]["ten"];?></td>
            <td><?php echo $_SESSION ["product"][$i]["gia"];?></td>
            <td> <img src="<?php echo  $_SESSION ["product"][$i]["hinhanh"];?>"></td>
            <td> <a href="add.php?id=<?php echo ($i) ?> "> xóa  ||  <a href="edit.php?id=<?php echo ($i) ?> "> cập nhật </a> </a>  
        </tr>
        <?php
}
    }
    
?>

        <a href="index.php"> Nhập Tiếp </a>
    </div>