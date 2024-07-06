<?php

if (isset($_POST["submit-event"])) {
    require_once("../includes/dbconnection.php");
    echo "recieved event " . $_POST['efee'];

    $ename = $_POST['ename'];
    $description = $_POST['description'];
    $entrancefee = $_POST['efee'];
    $edate = $_POST['edate'];
    $estime = $_POST['estime'];
    $eestime = $_POST['eetime'];
    $evenue = $_POST['evenue'];
    $img = $_FILES["simage"]["name"];

    $extension = substr($img, strlen($img) - 4, strlen($img));
    $allowed_extensions = array(".jpg", "jpeg", ".png", ".gif", ".JPG", "JPEG", ".PNG", "JPG", ".JPEG", "PNG");
    if (!in_array($extension, $allowed_extensions)) {
        echo "<script>alert('Facility image has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
    } else {
        $img = md5($img) . time() . $extension;
        move_uploaded_file($_FILES["simage"]["tmp_name"], "../images/events/" . $img);

        $sql = "INSERT INTO `tblevents`( `event_name`, `event_description`, `entrance_fee`, `event_date`, `event_from`, `event_to`, `event_venue`, `event_image`) VALUES (
    :event_name,
    :event_description,
    :entrance_fee,
    :event_date,
    :event_from,
    :event_to,
    :event_venue,
    :event_image)";

            $query_insert = $dbh->prepare($sql);

            $query_insert->bindParam(':event_name', $ename, PDO::PARAM_STR);
            $query_insert->bindParam(':event_description', $description, PDO::PARAM_STR);
            $query_insert->bindParam(':entrance_fee', $entrancefee, PDO::PARAM_INT);
            $query_insert->bindParam(':event_date', $edate, PDO::PARAM_STR);
            $query_insert->bindParam(':event_from', $estime, PDO::PARAM_STR);
            $query_insert->bindParam(':event_to', $eestime, PDO::PARAM_STR);
            $query_insert->bindParam(':event_venue', $evenue, PDO::PARAM_STR);
            $query_insert->bindParam(':event_image', $img, PDO::PARAM_STR);
            $query_insert->execute();
  

            $LastInsertId=$dbh->lastInsertId();
            if ($LastInsertId>0) {
                header("Location:../manage-event.php");
      
           }
           else
             {
                  echo '<script>alert("Something Went Wrong. Please try again")</script>';
                  header("Location:../add-event.php");
             }
    }
}
