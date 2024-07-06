<?php
include('../includes/dbconnection.php');

 if(isset($_POST['submit']))
  {


$mimage=$_POST['mainpage'];
if (empty($mimage)) {
	$mimage="No";
}else{
	$mimage="Yes";
}

$eimage=$_POST['eventspage'];
if (empty($eimage)) {
	$eimage="No";
}else{
	$eimage="Yes";
}

$gimage=$_POST['gallerypage'];
if (empty($gimage)) {
	$gimage="No";
}else{
	$gimage="Yes";
}
$desc=$_POST['description'];
$img=$_FILES["image"]["name"];

$extension = substr($img,strlen($img)-4,strlen($img));
$allowed_extensions = array(".jpg","jpeg",".png",".gif",".JPG","JPEG",".PNG");
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('image has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{

$img=md5($img).time().$extension;
 move_uploaded_file($_FILES["image"]["tmp_name"],"../images/site_content/".$img);
 
$sql="INSERT INTO `tblimages`(ImageName, Gallery, MainPage, EventPage,Description) values(:image,:gallery,:mainpage,:eventpage,:description)";
$query=$dbh->prepare($sql);
$query->bindParam(':image',$img,PDO::PARAM_STR);
$query->bindParam(':gallery',$gimage,PDO::PARAM_STR);
$query->bindParam(':mainpage',$mimage,PDO::PARAM_STR);
$query->bindParam(':eventpage',$eimage,PDO::PARAM_STR);
$query->bindParam(':description',$desc,PDO::PARAM_STR);
 $query->execute();

   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    // echo '<script>alert("Site Images has been added.")</script>';
    // header('../add-media.php');
echo "<script>window.location.href ='../add-media.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  
}
}


?>