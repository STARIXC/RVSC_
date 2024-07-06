<?php
session_start();
// error_reporting(0);
include('../includes/dbconnection.php');

 if(isset($_POST['update']))
  {

 $hbmsaid=$_SESSION['hbmsaid'];
 $cname=$_POST['cname'];
 $ctype=$_POST['ctype'];
 $catdes=$_POST['catdes'];
 $price=$_POST['price'];
 $eid=$_POST['cid'];
 // $date=now("dd-mm-yyy");
$sql="UPDATE tblcategory SET CategoryName=:cname,roomType=:ctype,Description=:catdes,Price=:price WHERE ID=:eid";
$query=$dbh->prepare($sql);
$query->bindParam(':cname',$cname,PDO::PARAM_STR);
$query->bindParam(':ctype',$ctype,PDO::PARAM_STR);
$query->bindParam(':catdes',$catdes,PDO::PARAM_STR);
$query->bindParam(':price',$price,PDO::PARAM_STR);
$query->bindParam(':eid',$eid,PDO::PARAM_STR);
$submit=$query->execute();
if ($submit) {
	  echo '<script>alert("Room Category details has been updated")</script>';
    echo "<script>window.location.href ='../manage-category.php'</script>";
}else{
	echo '<script>alert("Failed to update")</script>';
}
  

  }

?>