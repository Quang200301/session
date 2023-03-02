<?php session_start() ?>


<html>
    <body>
        <form action="" method='post'enctype="multipart/form-data">
            <label for="">tên</label>
            <input type="text" name='ten'>
            <label for=""> giá</label>
            <input type="text" name='gia'>
            <label for="">img-file</label>
            <input type="file" name='hinhanh'>
            <input type="submit" name='bm' value='nhập'>

            <?php 
            if(isset($_POST['bm'])){
                $n=0;
                if(isset($_SESSION['product']))
                    $n=count($_SESSION['product']);
                    $_SESSION['product'][$n]['ten']=$_POST['ten'];
                    $_SESSION['product'][$n]['gia']=$_POST['gia'];

                    if(isset($_FILES['hinhanh'])){
                        $file=$_FILES['hinhanh'];
                        $tenfile=$file['name'];
                        if($tenfile!="")
                        {
                        move_uploaded_file($file['tmp_name'],$tenfile);
                        $_SESSION["product"][$n]["hinhanh"] = $tenfile;
                        }
                    }
                    header("location: data.php");
            } 
            ?>
        </form>
       
    </body>
</html>