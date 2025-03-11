<?php
            include_once 'Conn.php';
            $conn=connection();
          
            
            $welcome="";
            $error="";
            $username="";
            $email="";
            $phone_no="";
            $address="";
           $lastname="";
            $password="";
            $confirmPassword="";

            $usernameError="";
            $emailError="";
            $phone_noError="";
           $addressError="";
           $lastnameError="";
            $passwordError="";
            $confirmPasswordError="";
            $passwordMismatchError="";

            $isValid = true;
            if(isset($_REQUEST['btnSubmit']))
            {   

                $username=$_REQUEST['txtUsername'];
                $email=$_REQUEST['txtEmail'];
                $phone_no=$_REQUEST['txtPhone_no'];
                $address=$_REQUEST['txtAddress'];
                $lastname=$_REQUEST['txtLastname'];
                $password=$_REQUEST['txtPassword'];
                $confirmPassword=$_REQUEST['txtConfirmPassword'];

               

                if ($_REQUEST['txtUsername'] == "") {
                    $usernameError = "Username is required.";
                    $isValid = false;
                }
                if ($_REQUEST['txtEmail'] == "") {
                    $emailError = " Email is required.";
                    $isValid = false;
                }
                if ($_REQUEST['txtPhone_no'] == "") {
                    $phone_noError = "phone_no is required.";
                    $isValid = false;
                }
                if ($_REQUEST['txtAddress'] == "") {
                    $addressError = "Address is required.";
                    $isValid = false;
                }
             
                  if ($_REQUEST['txtLastname'] == "") {
                    $lastnameError = "Lastname is required.";
                    $isValid = false;
                }
            
            
                if ($_REQUEST['txtPassword'] == "") {
                    $passwordError = "Password is required.";
                    $isValid = false;
                }
                
                if ($_REQUEST['txtConfirmPassword'] == "") {
                    $confirmPasswordError = "Confirm password is required.";
                    $isValid = false;
                }

                if ( $_REQUEST['txtPassword'] !==  $_REQUEST['txtConfirmPassword']) {
                    $passwordMismatchError = "Password and Confirm password is not match.";
                    $isValid = false;
                }
                
                if($isValid == true){
                    $conn=connection();
                    $sql1="select * from sign_up where Username='$username'";
                    $result=$conn->query($sql1);
                    if($result->num_rows>0)
                    {
                        ?>
                        <script> alert("Username is not Unique. Please choose anothor.")</script>
                        <?php 
                        
                    }
                    else{
                        $sql="insert into sign_up values('$username','$email',$phone_no,'$address','$lastname','$password')";
                    if($conn->query($sql))
                    {
                         header("Location: loginn.php");
                         exit();      
                    }
                    }
                    
                }
                // else
                // {
                //     echo "<script>alert('confirm password is not match')</script>";
                // }
            }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    <meta charset="UTF-8">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="./signupstyle.css">

    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery-3.6.0.min.js"></script>
	
</head>

<body>
    <br><br>
<form method="post" action="#">
    <div class="box-form">
        <div class="left">
            <div class="overlay">
                <h1>Welcome To DSH Hotel</h1>
            </div>
        </div>

        
        <div class="right">
            <br><br>
            <h5>Signup</h4>
                <br><br><br><br><br><br><br><br>
                <div class="inputs">
                    <ion-icon name="person"></ion-icon>
                    <input type="text" placeholder="user name" name="txtUsername" id="txtUsername" >
                    <span  style="color:red;"><?php echo $usernameError ?></span>
                    <i class="bx bx-user"></i>
                </div>

                <hr>
                <div class="inputs">
                  <ion-icon name="person"></ion-icon>
                  <input type="text" placeholder="Full Name" name="txtLastname" id="txtLastname" >
                  <span  style="color:red;"><?php echo $lastnameError ?></span>
                   <i class="bx bx-user"></i>    
              </div><hr>  
                <div>
                    <ion-icon name="mail"></ion-icon>
                    <input type="Email" placeholder="Email" name="txtEmail" id="txtEmail"  >
                    <span style="color:red"><?php echo $emailError ?></span>
                    <i class="bx bx-lock-alt"></i>
                </div>
            
                <hr>
                <div class="inputs">
                <i class="fa fa-phone"></i>
                    <ion-icon name="phone"></ion-icon>
                    <input type="text" placeholder="Phone_no" name="txtPhone_no" id="txtPhone_no" >
                    <span  style="color:red;"><?php echo $phone_noError ?></span>
                    </div><hr>
                
                <div class="inputs">
                <i class="fa fa-map-marker"></i>
                    <ion-icon name="Address"></ion-icon>
                    <input type="text" placeholder="Address" name="txtAddress" id="txtAddress" >
                    <span  style="color:red;"><?php echo $addressError ?></span>
                    </div>
              
                <hr>    
              
             
                <div>
                    <ion-icon name="key"></ion-icon>
                    <input type="password" placeholder="password"  name="txtPassword" id ="txtPassword" >
                    <span  style="color:red;"><?php echo $passwordError ?></span>
                    <i class="bx bx-lock-alt"></i>
                </div>   
                <hr>
                <div>
            
                    <ion-icon name="key"></ion-icon>
                    <input type="password" placeholder="confirm password" name="txtConfirmPassword" id ="txtConfirmPassword" >
                    <span style="color:red"><?php echo $confirmPasswordError ?></span>
                    <span style="color:red"><?php echo $passwordMismatchError ?></span>
                    <i class="bx bx-lock-alt"></i>
                </div>
                <hr>
                <span style="color:red"><?php echo $welcome ?></span>
                <span style="color:red"><?php echo $error ?></span>
                <br><br>
                
                <button input type="submit" value="submit" name="btnSubmit">submit</button>
 
        </form>
</body>

</html>