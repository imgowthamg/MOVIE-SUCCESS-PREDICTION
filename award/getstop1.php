<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
include '../connection.php';
$q=$_GET['q'];
$sel_jn=mysqli_query($dbcon,"select * from cast where nme like '$q%' and pro='1' limit 5");
if(mysqli_num_rows($sel_jn)>0)
{
    while($r_jn=mysqli_fetch_row($sel_jn))
    {
        ?>
<div style="border: 1px solid gray; margin-bottom: 2px;padding: 3px;color: white"><img style="width: 60px;height: 60px" class="img img-circle" src="../img1/<?php echo $r_jn[10] ?>">&nbsp;<?php echo $r_jn[1] ?><span style="color: lightskyblue" class="fa fa-bookmark  pull-right" style="cursor: pointer;" onclick="add_data('<?php echo $r_jn[1] ?>')"></span></div>
<br/>
    <?php
    }
}
else
{
    echo"No Data Found";
}