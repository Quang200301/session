<form action="" method="post">
    <label for=""> nhap</label>
    <input type="number" name="so">
    <input type="submit" name="s" value="ok">
    <?php
if(isset($_POST['s'])){
    $n=$_POST['so'];

function myfunction($a)
{
    $x='';
    for($i=1;$i<=$a;$i++) {
        $x=$x.(string)$i.", ";
    }
    return $x;
}
echo (myfunction($n));
}
?>
</form>

