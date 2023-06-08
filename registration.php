<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_POST['submit'])) {
        // Remove backslashes
        $firstName = stripslashes($_POST['firstName']);
        $lastName = stripslashes($_POST['lastName']);
        // Escapes special characters in a string
        $firstName = mysqli_real_escape_string($con, $firstName);
        $lastName = mysqli_real_escape_string($con, $lastName);
        $gender = $_POST['gender'];
        $contactNumber = stripslashes($_POST['contactNumber']);
        $contactNumber = mysqli_real_escape_string($con, $contactNumber);
        $email = stripslashes($_POST['email']);
        $email = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        
        $query = "INSERT INTO `users` (first_name, last_name, gender, contact_number, email, password, create_datetime)
                  VALUES ('$firstName', '$lastName', '$gender', '$contactNumber', '$email', '" . md5($password) . "', '$create_datetime')";
        $result = mysqli_query($con, $query);
        
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <img style="position: fixed;
        top: 10px;
        left: 10px;
        width: 100px;
        height: auto;" 
        class="logo" src="images/main-logo.png" alt="logo">
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="firstName" placeholder="First Name" required />
        <input type="text" class="login-input" name="lastName" placeholder="Last Name" required />
        
        <p>Gender:</p>
        <input type="radio" name="gender" value="Male" required /> Male
        <input type="radio" name="gender" value="Female" required /> Female
        
        <input type="text" class="login-input" name="contactNumber" placeholder="Contact Number" required />
        <input type="email" class="login-input" name="email" placeholder="Email Address" required />
        <input type="password" class="login-input" name="password" placeholder="Password" required />
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>
<?php
    }
?>
</body>
</html>
