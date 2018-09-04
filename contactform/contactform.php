<?php
	// if(isset($_POST['submit'])){
	// 	$name=$_POST['name'];
    //     $email=$_POST['email'];
    //     $namepic=$_POST['namepic'];
	// 	$phone=$_POST['phone'];
	// 	// $msg=$_POST['msg'];

	// 	// $to='info@e-kasbon.com'; // Receiver Email ID, Replace with your email ID
	// 	$to='benedyctoes@gmail.com'; // Receiver Email ID, Replace with your email ID
	// 	$subject='Form Submission';
	// 	$message="Name :".$name."\n"."Phone :".$phone."\n"."Name PIC :"."\n\n".$namepic;
	// 	$headers="From: ".$email;
	// }
	
	if($_POST){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$namepic = $_POST['namepic'];
		$phone = $_POST['phone'];
	
	//send email
		mail("benedyctoes@gmail.com", "This is an email from:" .$name, $email);
	}
    
?>