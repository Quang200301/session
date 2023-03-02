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
    if (isset($_GET['id'])){
        $masp =$_GET['id'];
        If(isset($_SESSION['product'])){
            $name = $_SESSION["product"][$masp]['ten'];
            $gia = $_SESSION["product"][$masp] ['gia'];
            $hinhanh =  $_SESSION["product"][$masp]['hinhanh'];
        }
    }
    ?>
    <form method="post" action="" enctype="multipart/form-data">
        Tên Sản phẩm
        <input type="text" name="ten" value=" <?php echo $name ?>" placeholder="Nhập tên sản phẩm" />
        <br>
        <br>
        Giá tiền
        <input type="number" name="gia" value="<?php echo $gia ?>" placeholder="Nhập giá tiền" />
        <br>
        <br>
        tên file:
        <input type="file" name="tep" value="upload" />
        <br>
        <br>
        <input type="submit" name="btn" value="lưu" />
        <br>
        <br>
    </form>


    <?php
if (isset($_GET['id'])){
        $masp =$_GET['id'];
    If(isset($_POST['btn'])){
        $_SESSION["product"][$masp]['ten'] = $_POST['ten'];
        $_SESSION["product"][$masp] ['gia']= $_POST['gia'];
       if(isset($_FILES['hinhanh'])){
        $file =$_FILES['hinhanh'];
        $tefile = $file['ten'];
        If($tefile!=""){
            move_uploaded_file($file['tmp_name'],$tefile);           
            $_SESSION['product'][$masp]['hinhanh']=$tefile;
        }
    }
       header("location:data.php");
    }
}
    ?>
</body>

</html>