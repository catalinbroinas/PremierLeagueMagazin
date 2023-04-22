<?php
require_once 'bootloader.php';

// Define variables and initialize with empty values
$email = $password = "";
$isError = false;

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{
 
    // Check if username is empty
    if(empty(trim($_POST["email"])))
    {
        Messages::setMessage('danger', 'Va rugam sa introduceti un email valid ');
        $isError = true;
        header('Location: view/login.php');
        exit;
    } 
    else
    {
        $email = trim($_POST["email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"])))
    {
        Messages::setMessage('danger', 'Introduceti parola dvs. ');
        $isError = true;
        header('Location: view/login.php');
        exit;
    } 
    else
    {
        $password = trim($_POST["password"]);
    }

    $db = Db()->connection;

    $email = mysqli_real_escape_string($db, $_POST['email']);
    $passwordH = mysqli_real_escape_string($db, $_POST['password']);

    if($isError == false)
    {
        $passwordH = md5($passwordH);
        $query = "SELECT * FROM users WHERE email='$email' AND password='$passwordH'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['email'] = $email;
          header('location: view/produse.php');
        } else
    {
        Messages::setMessage('danger', 'Email sau parolă greșită!. ');
        header('Location: view/login.php');
        exit;
    }
    }
   
}