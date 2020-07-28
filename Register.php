<div style="display:none"><?php $connect=mysqli_connect('localhost','root','','libman');?></div>
<?php
if (!$connect)
{
	echo "Database Not connected,Please Check!<br/>";
	echo "Redirecting to main Page,Wait!";
	header('Refresh:3,URL=index.php');
}
$user=$_POST['usname'];
$pass=$_POST['pswrd'];
$qry1="select * from `users` where `username`='$user'";
$run1=mysqli_query($connect,$qry1);
$row1=mysqli_num_rows($run1);
if($row1>0)
{?>
<script>
alert("This Username Exists Please Choose Another One!");
    window.close("Register.php");
window.open("Register.html");    

</script>
<?php
}
else
{
$qry2="INSERT INTO `users`(`username`, `password`) VALUES ('$user','$pass')";
$run2=mysqli_query($connect,$qry2);   
if ($run2==true)
{
 echo "Your Registration was Successful with Username as $user <br/>";
 echo "Redirecting to main Page Please,Wait!";    
 header("refresh:2,url=index.php");    
}
else
{
 echo "Your Registration was Unsuccessful<br/>";
 echo "Redirecting to main Page Please,Wait!";    
 header("refresh:2,url=index.php");     
}
}
?>