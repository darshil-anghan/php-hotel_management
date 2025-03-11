<?php
// Function to sanitize user input and prevent potential security issues3
include_once 'conn.php';
$conn=connection();
if($conn->connect_error)
{
    die("connection failed".$conn->error);
}
function sanitize_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Initialize variables to hold potential error messages
$errors = array();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate each input field
    $full_name = sanitize_input($_POST["txtfname"]);
    $username = sanitize_input($_POST["txtuname"]);
    $email = sanitize_input($_POST["txtEmail"]);
    $password = $_POST["txtPass"];
    $confirm_password = $_POST["txtConPass"];

    // Validation for full name (not empty)
    if (empty($full_name)) {
        $errors[] = "Full name is required.";
    }

    // Validation for username (not empty)
    if (empty($username)) {
        $errors[] = "Username is required.";
    }

    // Validation for email (not empty and valid email format)
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Validation for password (not empty)
    if (empty($password)) {
        $errors[] = "Password is required.";
    }

    // Validation for confirm password (not empty and matches password)
    if (empty($confirm_password)) {
        $errors[] = "Confirm password is required.";
    } elseif ($confirm_password !== $password) {
        $errors[] = "Passwords do not match.";
    }

    // If there are no errors, redirect to login.php
    if (empty($errors)) {
        $fname = $_REQUEST['txtfname'];
   
    $Email = $_REQUEST['txtEmail'];
   
    $username = $_REQUEST['txtuname'];
    $Password = $_REQUEST['txtPass'];
   
    $sql="insert into client values ('$fname','$username','$Email','$Password')";
    
    if($conn->query($sql)==true)
    {
        $error = "Record Inserted Sucessfully";
    }
    
    else
    {
        $error = "Error";
    }
        header("Location: login.php");
        exit;
    }
}
$conn->close()
?>

<html>

<head>
    <title> login page </title>
    <link rel="stylesheet" type="text/css" href="stylesignup.css">
</head>

<body>
    <div class="container">
        <div class="content" style="margin-left:25%; ">
            <h1>welcome to our site</h1>
            <p class="par">our site your can check the product to <br> sell or by also buy a house & sell or rent<br>
                the house &
                also sell or purchase <br>bike & car</p>
        </div>





        <div class="main" style="margin-left:50%; margin-top: 8%; width: 27rem;  ">
            <center>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                    <h1> Sign Up </h1>

                    <div class="input-box" style="height: 50px;">
                        <input type="text" name="txtfname" placeholder="Full Name" id="u1">
                    </div>
                    <div class="input-box" style="height: 50px;">
                        <input type="text" name="txtuname" placeholder="Username" id="u1">
                    </div>
                    <div class="input-box" style="height: 50px;">
                        <input type="text" name="txtEmail" placeholder="Email" id="u1">
                    </div>
                    <div class="input-box" style="height: 50px;">
                        <input type="password" name="txtPass" placeholder="Password" id="p1">
                    </div>
                    <div class="input-box" style="height: 50px;">
                        <input type="password" name="txtConPass" placeholder="Confirm Password" id="Cp1">
                    </div>
                    <div class="btn" style="margin-top:20px;">
                        <button type="submit" class="btn sing">signup</button>
                    </div>

                    <?php
// Display errors if any
if (!empty($errors)) {
    echo '<div style="color: red; margin-top: 0px;">';
    foreach ($errors as $error) {
        echo $error . '<br>';
    }
    echo '</div>';
}
?>
                </form>
            </center>
        </div>

    </div>
</body>

</html>