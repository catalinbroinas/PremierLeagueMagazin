<?php
require_once 'bootloader.php';

function validation()
{
	$fname = $lname = $email = $subject = $message = "";
	$isError = false;

	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		$fname = $_POST["fname"];
		if (empty($_POST["fname"])) 
		{
			Messages::setMessage('danger', 'Introdu numele tău');
			$isError = true;
		}

		$lname = $_POST["lname"];
		if (empty($_POST["lname"])) 
		{
			Messages::setMessage('danger', 'Introdu prenumele tău');
			$isError = true;
		}

		$email = $_POST["email"];
		if (empty($_POST["email"])) 
		{
			Messages::setMessage('danger', 'Introdu email-ul tău');
			$isError = true;
		}

		$subject = $_POST["subject"];
		if (empty($subject))  
		{
			Messages::setMessage('danger', 'Scrie subiectul dorit');
			$isError = true;
		}

		$message = $_POST["message"];
		if (empty($message))  
		{
			Messages::setMessage('danger', 'Scrie mesajul dorit');
			$isError = true;
		}

	}
	else
	{
		Messages::setMessage('danger', 'Error');
		$isError = true;
	}

	if ($isError) 
	{
		header('Location: view/alert.php');
    	exit;
	}
}


function insert()
{
	$db = Db()->connection;
			
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	$fname = mysqli_real_escape_string($db, $fname);
	$lname = mysqli_real_escape_string($db, $lname);
	$email = mysqli_real_escape_string($db, $email);
	$subject = mysqli_real_escape_string($db, $subject);
	$message = mysqli_real_escape_string($db, $message);

	$h=strtotime("+1 Hour");
	$data = "Data de " . date("d-m-Y") . " la ora " . date("H:i:s", $h);

	$query = "INSERT INTO alerts (fname, lname, email, subject, message, data )
				VALUES ('$fname', '$lname', '$email', '$subject', '$message', '$data' )";
		
	$result = mysqli_query($db, $query);

	if ($result === TRUE) 
	{
		Messages::setMessage('success', 'Sesizarea a fost trimisă cu succes!', true);
		header('Location: view/welcomeAlert.php');
		exit;
	}
	else 
	{
		Messages::setMessage('danger', $query . ": " . $db->error, true);
		header('Location: view/alert.php');
		exit;
	} 

	$db->close();
}	

validation();
insert();
