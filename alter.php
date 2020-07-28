<head>
<link rel="stylesheet" href="style2.css">
<script src="add.js"></script>    
</head>
<div style="display:none"><?php $connect=mysqli_connect('localhost','root','','libman');?></div>
<?php
if (!$connect)
{
	echo "Database Not connected,Please Check!<br/>";
	echo "Redirecting to main Page,Wait!";
	header('Refresh:3,URL=index.php');
}
$tag=$_GET['tgno3'];
$qry1="select * from `books` where `tg_no`='$tag'";
$run=mysqli_query($connect,$qry1);
$row=mysqli_num_rows($run);
if ($row>0)
{
$data=mysqli_fetch_assoc($run);
?>
  <form action="alter2.php" method="get" id="edit" onsubmit="return addvalid()">
        <log>Book Name:</log>&nbsp;<input name="bknm" class="field" type="text" placeholder="" id="bk" onkeyup="letter(this)" value="<?php echo $data['bk_name'];?>"><br/><br/>
        <log>Author Name:</log>&nbsp;<input name="autnm" class="field" type="text" onkeyup="authname(this)" placeholder="" id="aut" value="<?php echo $data['aut_name'];?>"><br/><br/>
         <input type="hidden" value="<?php echo $data['tg_no'];?>" name="tag">
            <log>Quantity:</log>&nbsp;<input name="quantity" type="number" class="field" placeholder="" id="quant" onkeyup="tag(this)" value="<?php echo $data['Quantity'];?>"><br/><br/>
         <input type="submit" value="Edit" id="but1"> 
         <input type="reset" value="Clear" id="but1"> 
        </form>   
<?php
}
else
{
    ?>
<script>
    alert("No Record with this Tag number Exists!");
    window.close("alter.php");
    window.open("index.php");
</script>
<?php
}
?>