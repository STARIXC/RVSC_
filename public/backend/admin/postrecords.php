<?php
$servername="198.23.58.153";
$username="rvsccoke_admin";
$password="DRw5wP38DR";
$dbname="rvsccoke_main";


 $payload = file_get_contents('php://input'); //picks input from the url
   $transactions = json_decode($payload, true);
	$conn = mysqli_connect($servername, $username, $password, $dbname);
		foreach($transactions as $record => $val) {
		$MemberID=$val["MemberID"];
		$TransactionDate=$val["2021-01-22"];
		$Description=$val["Payment Recieved"];
		$VchNo=$val["Reciept No: 2138 Account Topup"];
		$Debit=$val["0"];
		$Credit=$val["1200"];
		$Balance=$val["-300"];
		$saveSQL="insert into transactionstable(MemberID,TransactionDate,Description,VchNo,Debit,Credit,Balance)values('$MemberID','$TransactionDate','$Description','$VchNo','$Debit','$Credit','$Balance')";
		$conn->query($saveSQL);
	}
	
	



?>