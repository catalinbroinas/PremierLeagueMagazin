<?php
require_once 'bootloader.php';

function validation()
{
	$id = $fname = $lname = $email = $phone = $password = $confirm_password = $jud = $loc = $address ="";
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

		if(empty(trim($_POST["email"])))
		{
			Messages::setMessage('danger', 'Introdu o adresă de email. ');
			$isError = true;
		}
		else
		{
		  $db = Db()->connection;
		  $email = mysqli_real_escape_string($db, $_POST['email']);
		  // first check the database to make sure 
		  // a user does not already exist with the same username and/or email
		  $user_check_query = "SELECT * FROM users WHERE email = '$email'";
		  $result = mysqli_query($db, $user_check_query);
		  $user = mysqli_fetch_assoc($result);
		  
		  if ($user) 
		  { // if user exists
		    if ($user['email'] === $email) 
		    {
		      Messages::setMessage('danger', 'Acest email deja există. ');
			  $isError = true;
    		}
    		else
    		{
    			$email = trim($_POST["email"]);
    		}

		  }
		  
		}

		$phone = $_POST["phone"];
		if (empty($phone))  
		{
			Messages::setMessage('danger', 'Introdu numărul tău de telefon');
			$isError = true;
		}

		if(empty(trim($_POST["password"])))
    	{
        	Messages::setMessage('danger', 'Introdu o parolă formată din cel puțin 6 caractere.');
			$isError = true;    
    	}
    	elseif(strlen(trim($_POST["password"])) < 6)
    	{
    		Messages::setMessage('danger', 'Parola trebuie să contină minim 6 caractere.');
			$isError = true;
    	} 
    	else
    	{
    		$password = trim($_POST["password"]);
    	}

    	if(empty(trim($_POST["confirm_password"])))
   		{
        	Messages::setMessage('danger', 'Confimă-ți parola');
			$isError = true;    
    	} 
    	else
    	{
    		$confirm_password = trim($_POST["confirm_password"]);
        	if($password != $confirm_password)
        	{
            	Messages::setMessage('danger', 'Parola nu este confimată corect. ');
				$isError = true;
        	}
    	}

		if (empty(trim($_POST["jud"]))) 
		{
			Messages::setMessage('danger', 'Introdu județul în care locuiești');
			$isError = true;
		}
		elseif(strlen(trim($_POST["jud"])) > 19)
    	{
    		Messages::setMessage('danger', 'Introdu județul în care locuiești.');
			$isError = true;
    	} 
    	else
    	{
    		$jud = trim($_POST["jud"]);
    	}

		$loc = $_POST["loc"];
		if (empty($_POST["loc"])) 
		{
			Messages::setMessage('danger', 'Introdu localitatea în care locuiești');
			$isError = true;
		}

		$address = $_POST["address"];
		if (empty($_POST["address"])) 
		{
			Messages::setMessage('danger', 'Introdu adresa ta');
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
		header('Location: view/register.php');
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
	$password = $_POST['password'];
	$jud = $_POST['jud'];
	$loc = $_POST['loc'];
	$address = $_POST['address'];
	
	$fname = mysqli_real_escape_string($db, $fname);
	$lname = mysqli_real_escape_string($db, $lname);
	$email = mysqli_real_escape_string($db, $email);
	$phone = mysqli_real_escape_string($db, $phone);
	$password = mysqli_real_escape_string($db, $password);
	$jud = mysqli_real_escape_string($db, $jud);
	$loc = mysqli_real_escape_string($db, $loc);
	$address = mysqli_real_escape_string($db, $address);

	$passwordH = md5($password);
	
	$query = "INSERT INTO users (fname, lname, email, phone, password, jud, loc, address )
				VALUES ('$fname', '$lname', '$email', $phone, '$passwordH', '$jud', '$loc', '$address' )";
		
	$result = mysqli_query($db, $query);

	if ($result === TRUE) 
	{
		Messages::setMessage('success', 'Te-ai înregistrat cu succes!', true);
		header('Location: view/welcome.php');
		exit;
	}
	else 
	{
		Messages::setMessage('danger', $query . ": " . $db->error, true);
		header('Location: view/register.php');
		exit;
	} 

	$db->close();
}	

validation();
insert();
