<?php
session_start();
/*if (isset($_SESSION("logname")))
{*/?>
<html>
<head>
    <title>Lib Management system</title>
    <link>
    <link rel="stylesheet" href="style2.css">
    <script src="add.js"></script>
</head>
    <body>
        <div id="titbar">
            
            <h1 onclick="mainpage()"><my>L</my>ibary <my>M</my>anagement <my>S</my>ystem</h1>
            <button id="reg" onclick="window.location.href='Register.html'">Register</button>
            <button id="login" onclick="window.location.href='Login.html'">Login</button>
            <button id="logout" onclick="">Logout</button>
        </div>
        <img src="Lighthouse.jpg" width="100%" height="60%">
        <button id="add" onclick="add()">Add New books</button>
         <button id="Edit"  onclick="edit()">Alter book details</button>
         <button id="del"  onclick="del()">Delete a book</button>
     
        <form action="add.php" method="get" id="addfr" onsubmit="return addvalid()">
        <log>Book Name:</log>&nbsp;<input name="bknm" class="field" type="text" placeholder="Hardy Boys" id="bk" onkeyup="letter(this)"><br/><br/>
        <log>Author Name:</log>&nbsp;<input name="autnm" class="field" type="text" onkeyup="authname(this)" placeholder="Franklin W.Dixon,Stratemeyer Syndicate" id="aut"><br/><br/>
         <log>Tag No.</log>&nbsp;<input name="tgno" type="number" class="field" placeholder="101" id="tg" onkeyup="tag(this)"><br/><br/>
            <log>Quantity:</log>&nbsp;<input name="quantity" type="number" class="field" placeholder="5" id="quant" onkeyup="tag(this)"><br/><br/>
         <input type="submit" value="Add" id="but1"> 
         <input type="reset" value="Clear" id="but1"> 
        </form>
        <form action="delete.php" method="get" id="delfr" onsubmit="return delvalid()">
        <log>Tag No.</log>&nbsp;<input name="tgno2" type="number" class="field" placeholder="101" id="tg1" onkeyup="tag(this)"><br/><br/>
         <input type="submit" value="Delete" id="but1"> 
         <input type="reset" value="Clear" id="but1"> 
        </form>
        <form action="alter.php" method="get" id="alterfr" onsubmit="return altervalid()">
        <log>Tag No.</log>&nbsp;<input name="tgno3" type="number" class="field" placeholder="101" id="tg2" onkeyup="tag(this)"><br/><br/>
         <input type="submit" value="Edit" id="but1"> 
         <input type="reset" value="Clear" id="but1"> 
        </form>
    </body>
</html>
<div style="display:none"><?php $connect=mysqli_connect('localhost','root','','libman');?></div>
<?php
if (!$connect)
{
	echo "Database Not connected,Please Check!<br/>";
	echo "Redirecting to main Page,Wait!";
	header('Refresh:3,URL=index.html');
}

$add="Select * from books";
$add2=mysqli_query($connect,$add);?>
<table border="1" align="center" width="100%" style="border-color:red;margin-top:20px;" >
    <tr style="font-size:20px;color:red;"><td>Tag Number</td><td>Book Name</td><td>Author Name</td><td>No. of Books</td></tr>
<?php
if ($add2==True)
{ 
 while($data=mysqli_fetch_assoc($add2))
 {?>
    <tr style="color:blue;"><td><?php echo $data['tg_no'];?></td><td><?php echo $data['bk_name'];?></td><td><?php echo $data['aut_name'];?></td><td><?php echo $data['Quantity'];?></td></tr> 
<?php }?>
</table>
<?php }
/*}
else
{
     echo "Please Login or Register First";
 echo "Redirecting to Login Page!...................";
  header("refresh=2,url:Login.html");    
}*/
?>