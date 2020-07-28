<div style="display:none"><?php $connect=mysqli_connect('localhost','root','','libman');?></div>
<?php

if (!$connect)
{
	echo "Database Not connected,Please Check!<br/>";
	echo "Redirecting to main Page,Wait!";
	header('Refresh:2,URL=index.php');
}
$user=$_POST['usname'];
$pass=$_POST['pswrd'];
$qry1="select * from `users` where `username`='$user' and `password`='$pass'";
$run1=mysqli_query($connect,$qry1);
$row1=mysqli_num_rows($run1);
if ($row1>0)
{
    session_start();
    $_SESSION['logname']=$user;
    echo "<h1>Welcome ".$_SESSION['logname']."</h1><<br/>";
    echo "You have Successfully Loggedin,Redirecting To main Page!..........................";
    header("refresh=2,url:index.php");
}
else
{
    echo "Sorry!Wrong Username or Password!";
    echo "Redirecting to main Page,Please Wait!.................................";
    header("refresh=2,url:Login.html");   
}
?>