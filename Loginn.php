<?php
include_once "crud.php";
$usernameerr = "";
$Passworderr = "";
$welcome="";
session_start();
if(isset($_REQUEST['btnsubmit']))
{
    $Username=$_REQUEST['txtusername'];
    $Password=$_REQUEST['txtpassword'];
    if ($_REQUEST['txtusername'] == "") {
        $usernameerr = "Username is required";
    }
    if ($_REQUEST['txtpassword'] == "") {
        $Passworderr = " Password is required";
    }

    // $Username=$_REQUEST['txtusername'];
    $Password=$_REQUEST['txtpassword'];
    $result1=search_sign_up($Username);
    while($row=$result1->fetch_assoc()){
        if ($Username=$row['Username'] && $Password==$row['Password'])
        {
            //header("Location: Home.php");
            // if ($email == $row["mail"] && $Password == $row["Password"])
            //     {
            //     if($email=="admin@gmail.com" && $password=="admin")
            //     {
            //          header("location:admin.php");
            //         exit();
     
            //     }else{
            //     //$_SESSION['loggedin'] = true; // Set the session variable
            //         $_SESSION['Uname'] = $Username ;
            //         echo $_SESSION['Uname'];
            //         // Store the username in the session
            //         // header("Location: home.php"); // Redirect to the home page
            //         // exit();
            //     }
    // }
                if($Username=="admin"&&$Password=="admin")
                {
                    header("Location: admin.php");


                }else{
                    $_SESSION['Uname'] = $row['Username'] ;
             
                    header("Location: home.php");

                }
                   
                        //echo "<script>alert('session is start   ')</script>";
                       
                    
                    
        }
        else{
    
            $welcome="Wrong Username & Password";
        }
    }
   
   
   

}



?>

<!DOCTYPE html>
<html lang="en">

<head>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <link rel="stylesheet" href="bootstrap.min.css">
    <meta charset="UTF-8">
    <title>Login Page in HTML with CSS Code Example</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">


</head>

<body>
    <br>
<form method="post" action="#">
    <div class="box-form">
        <div class="left">
            <div class="overlay">
                <h1>Welcome To DSH Hotel</h1>
              
            </div>
        </div>

        
        <div class="right">
        <br><br>
            <div class="txtlogin">
                <h5>Login</h5>
            </div>
            <br><br><br><br><br><br><br><br>
            <p>[Don't have an account? <a href="signup.php">Creat Your Account</a> it takes less than a minute]</p>
            
            <br>
            <br>
            <div class="inputs">
                <ion-icon name="person"></ion-icon>
                <input type="text" placeholder="user name" name="txtusername">
                <span  style="color:red;"><?php echo $usernameerr ?></span>
                <i class="bx bx-user"></i>
            </div>

            <hr>
            <div>
                <ion-icon name="key"></ion-icon>
                <input type="password" placeholder="password" name="txtpassword">
                <span  style="color:red;"><?php echo $Passworderr ?></span>
                <i class="bx bx-lock-alt"></i>
            </div>
            <hr>
             <span  style="color:red;"><?php echo $welcome ?></span>
            <br>
            <button input type="submit" value="login" name="btnsubmit">Login</button>
</form>
</body>

</html>