<?php
$servername="198.23.58.153";
$username="rvsccoke_admin";
$password="DRw5wP38DR";
$dbname="rvsccoke_main";
//for member accounts
 $payload = file_get_contents('php://input'); //picks input from the url
   $accounts = json_decode($payload, true);
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	//loop and get the array values as you save them into some kind of database
	foreach($accounts as $member => $val) {
		$MemberID=$val["MemberID"];
		$First_Name=$val["First_Name"];
		$Last_Name=$val["Last_Name"];
		$MobileNumber=$val["MobileNumber"];
		$Email=$val["Email"];
		$Address=$val["Address"];
		
		$saveSQL="insert ignore into tbluser( MemberID, FirstName, LastName, MobileNumber, Email, Address)values('$MemberID','$First_Name','$Last_Name','$MobileNumber','$Email','$Address')";
		$conn->query($saveSQL);
	}
	
	



?>