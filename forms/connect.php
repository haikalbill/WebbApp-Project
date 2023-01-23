<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$cardName = $_POST['cardName'];
	$cardNo = $_POST['cardNo'];
	$ccv = $_POST['ccv'];
    $expDate = $_POST['expDate'];
    $donate = $_POST['donate'];

	// Database connection
	$conn = new mysqli('localhost','root','','donate1');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into donation(name, email, phone, cardName, cardNo, ccv, expDate, donate)
             values(?, ?, ?, ?, ?, ?, ?, ?)");
	    $stmt->bind_param("ssisiiii", $name, $email, $phone, $cardName, $cardNo, $ccv, $expDate, $donate );
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
