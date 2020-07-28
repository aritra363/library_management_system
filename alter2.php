<div style="display:none"><?php $connect=mysqli_connect('localhost','root','','libman');?></div>
<?php
if (!$connect)
{
	echo "Database Not connected,Please Check!<br/>";
	echo "Redirecting to main Page,Wait!";
	header('Refresh:3,URL=index.php');
}
        $book=$_GET['bknm'];
        $author=$_GET['autnm'];
        $tag=$_GET['tag'];
        $quantity=$_GET['quantity'];
        $qry2="UPDATE `books` SET `bk_name`='$book',`aut_name`='$author',`tg_no`='$tag',`Quantity`='$quantity' WHERE `tg_no`='$tag'";
        $run2=mysqli_query($connect,$qry2);
        if ($run2==true)
        {
         echo "Record with Tag No. $tag Edited,Please Check!<br/>";
	echo "Redirecting to main Page,Wait!";
	header('Refresh:2,URL=index.php');   
        }
        else
        {
            echo "Record with Tag No. $tag Not Edited,Please Check!<br/>";
	echo "Redirecting to main Page,Wait!";
	header('Refresh:2,URL=index.php');
            
        }
?>