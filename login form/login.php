<?php
session_start();
//database connection
require_once('C:\xampp\htdocs\admindashboard\logics\dbconnection.php');
//setting
if(isset($_POST['login']))
{
    //fetch form data
    $username= $_POST['username'];
    $password= $_POST['password'];
    $newPass= md5($password);

    //perform the sql query
    $sql = mysqli_query($conn, "SELECT * FROM account WHERE username= '$username' and password='$newPass'");
    $fetch = mysqli_fetch_array($sql);

    if($fetch > 0)
    {
        $_SESSION['login'] = $usernme;

        header('location: index.php');
    }
    else
    {
        echo "error";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Creating admin dashboard">
	<meta name="keywords" content="HTML,CSS,Zalego,Technology,Zalego institute,JavaScript">
	<meta name="author" content="Your name">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Admin Template</title>
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
    <body>


        <div class="mb-3 col-lg-6">
             <label for="userName" class="form-label">Username</label>
             <input type="text"  name="userName" class="form-control">
        </div>

        <div class="mb-3 col-lg-6">
             <label for="password" class="form-label">Password</label>
             <input type="tel" name="password" class="form-control">
        </div>

        <br>
                <button type="submit" name="login" class="btn btn-primary">Submit</button>

                <div>
                    <p>Have an account? Sign in Here</p>
                </div>




                
                <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>