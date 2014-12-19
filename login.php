<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Login</title>
    <link rel="Stylesheet" href="styles.css" />
    <script src="vendor/jquery.min.js"></script>
    <script src="scripts.js"></script>
</head>
<body>
    <?php
        
        $name = $password = $usernameErr = $passwordErr = "";

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            
            // Checking username
            if (empty($_POST["username-input-box"])) {
                $usernameErr = "Username cannot be blank";
            } else {
                $name = test_input($_POST["username-input-box"]);
            }
                
            // Checking password
            if (empty($_POST["password-input-box"])) {
                $passwordErr = "Password cannot be blank";
            } else {
                $password = test_input($_POST["password-input-box"]);
            }
                
            // MATCH it with the data base
        }
    


        function test_input($data) {
           $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return $data;
        }
    ?>
    <div id="login-page-container" class="login-page-container">
        <form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div id="login-panel" class="login-panel">
            <div id="username-container" class="username-container">
                <div id="username-text" class="username-text">Username:</div>
                <input type="text" name="username-input-box" />
                <span class="username-error"><?php echo $usernameErr; ?></span>
            </div>
            <div id="password-container" class="password-container">
                <div id="password-text" class="password-text">Password:</div>
                <input type="text" name="password-input-box" />
                <span class="password-error"><?php echo $passwordErr; ?></span>
            </div>
            <input type="submit" value="Login" />
        </div>
        
    </div>
    
</body>
</html>