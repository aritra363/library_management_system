<div style="display:none"><?php $connect=mysqli_connect('localhost','root','','libman');?></div>
<?php
if (!$connect)
{
	echo "Database Not connected,Please Check!<br/>";
	echo "Redirecting to main Page,Wait!";
	header('Refresh:3,URL=index.php');
}
$bkname=$_GET['bknm'];
$autnm=$_GET['autnm'];
$tgno=$_GET['tgno'];
$quan=$_GET['quantity'];
$qry1="select * from `books` where `bk_name`='$bkname' and `aut_name`='$autnm'";
$qry2="select * from `books` where `tg_no`='$tgno'";
$run=mysqli_query($connect,$qry1);
$run2=mysqli_query($connect,$qry2);
$row=mysqli_num_rows($run);
$row1=mysqli_num_rows($run2);
if ($row>0)
{
 ?>
<script>
    alert("Same Book Name With Author Exists!");
      window.close("add.php");
    window.open("index.php");
  
</script>
<?php  
    
}
else if($row1>0)
{
    ?>
<script>
    alert("Already this Tag Number Exists");
    window.close("add.php");
    window.open("index.php");
   
</script>
<?php  
     
}
else    
{
$add="INSERT INTO `books`(`bk_name`, `aut_name`, `tg_no`,`Quantity`) VALUES ('$bkname','$autnm','$tgno','$quan')";
$add2=mysqli_query($connect,$add);
if ($add2==True)
{
echo "Data Successfully Inserted<br/>";
	echo "Redirecting to main Page,Wait!";
	header('Refresh:2,URL=index.php');	
}
else{
	echo "Data Not inserted,Please Check!<br/>";
	echo "Redirecting to main Page,Wait!";
	header('Refresh:2,URL=index.php');	
}
}
?>