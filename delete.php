<div style="display:none"><?php $connect=mysqli_connect('localhost','root','','libman');?></div>
<?php
if (!$connect)
{
	echo "Database Not connected,Please Check!<br/>";
	echo "Redirecting to main Page,Wait!";
	header('Refresh:3,URL=index.php');
}

$tag=$_GET['tgno2'];
$qry1="Select * from `books` where `tg_no`='$tag'";
$run1=mysqli_query($connect,$qry1);
$row1=mysqli_num_rows($run1);
if ($row1>0)
{
    
$qry2="DELETE FROM `books` WHERE `books`.`tg_no` = '$tag'";
$run2=mysqli_query($connect,$qry2);
    if ($run2==True)
    {
        echo "Record with Tag Number $tag deleted Successsfully<br/>";
        echo"Redirecting To Main Page,Wait!";
        header("refresh:2;url=index.php");
    }
    else
    {
      echo "Record with Tag Number $tag deletion Failed<br/>";
        echo"Redirecting To Main Page,Wait!";
        header("refresh:2;url=index.php");  
    }
}
else
{ ?>
<script>
alert("This Tag Number Doesnt exists!");
    window.close("delete.php");
window.open("index.php");

</script>
<?php
}

?>