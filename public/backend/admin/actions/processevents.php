<?php
include('../includes/dbconnection.php');
    if(isset($_POST['submit']))
  {

 $ename=$_POST['ename'];
 $description=$_POST['description'];
 $entrancefee=$_POST['efee'];
 $edate=$_POST['edate'];
 $estime=$_POST['estime'];
 $eestime=$_POST['eestime'];
 $evenue=$_POST['evenue'];
 $img=$_FILES["image"]["sname"];
$extension = substr($img,strlen($img)-4,strlen($img));
// $allowed_extensions = array(".jpg","jpeg",".png",".gif");
// if(!in_array($extension,$allowed_extensions))
// {
// echo "<script>alert('Facility image has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
// }
// else
// {

$img=md5($img).time().$extension;
 move_uploaded_file($_FILES["image"]["tmp_name"],"images/events/".$img);


$sql="INSERT INTO `tblevents`( `event_name`, `event_description`, `entrance_fee`, `event_date`, `event_from`, `event_to`, `event_venue`, `event_image`) VALUES (:ename,:description,:entrancefee,:edate,:estime,:eestime,:evenue,:eimage)";
$query=$dbh->prepare($sql);
$query->bindParam(':ename',$ename,PDO::PARAM_STR);
$query->bindParam(':description',$description,PDO::PARAM_STR);
$query->bindParam(':entrancefee',$entrancefee,PDO::PARAM_INT);
$query->bindParam(':edate',$edate,PDO::PARAM_STR);
$query->bindParam(':estime',$estime,PDO::PARAM_STR);
$query->bindParam(':eestime',$eestime,PDO::PARAM_STR);
$query->bindParam(':evenue',$evenue,PDO::PARAM_STR);
$query->bindParam(':eimage',$img,PDO::PARAM_STR);
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);

   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    echo '<script>alert("Facility has been added.")</script>';
echo "<script>window.location.href ='add-event.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }


}
