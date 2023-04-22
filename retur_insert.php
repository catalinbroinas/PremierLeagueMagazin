<?php
require_once 'bootloader.php';

function validation()
{
	$fname = $lname = $email = $phone = $nameProdus = "";
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

		$phone = $_POST["phone"];
		if (empty($phone))  
		{
			Messages::setMessage('danger', 'Introdu numărul tău de telefon');
			$isError = true;
		}

		$nameProdus = $_POST["nameProdus"];
		if (empty($nameProdus))  
		{
			Messages::setMessage('danger', 'Scrie numele complet a-l produsului');
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
		header('Location: view/retur.php');
    	exit;
	}
}


function insert()
{
	$db = Db()->connection;
			
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$nameProdus = $_POST['nameProdus'];
	
	$fname = mysqli_real_escape_string($db, $fname);
	$lname = mysqli_real_escape_string($db, $lname);
	$email = mysqli_real_escape_string($db, $email);
	$phone = mysqli_real_escape_string($db, $phone);
	$nameProdus = mysqli_real_escape_string($db, $nameProdus);

	$h=strtotime("+1 Hour");
	$data = "Data de " . date("d-m-Y") . " la ora " . date("H:i:s", $h);

	$query = "INSERT INTO retur (fname, lname, email, phone, nameProdus, data )
				VALUES ('$fname', '$lname', '$email', $phone, '$nameProdus', '$data' )";
		
	$result = mysqli_query($db, $query);

	if ($result === TRUE) 
	{
		Messages::setMessage('success', 'Cererea de returnare a fost trimisă cu succes!', true);
		header('Location: view/welcomeAlert.php');
		exit;
	}
	else 
	{
		Messages::setMessage('danger', $query . ": " . $db->error, true);
		header('Location: view/retur.php');
		exit;
	} 

	$db->close();
}	

validation();
insert();
