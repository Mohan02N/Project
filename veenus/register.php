<html>
<head>
<title>Register</title>
<link rel="icon" type="image/x-icon" href="/veenus/logo.ico">
</head>
<style>
     img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            }
            body {
                background-color: #ffffb3;
            } 

            input[type=submit]:hover 
{
  background-color: #00FFFF;
 }
</style>
<body>
    <center>
    <img src="seek.png"  style="width:45%;">
        <h1>REGISTRATION</h1>
        <form method="POST" action="register1.php">
        <label><font size=6.5>Username:</font></label></br>
        <br><input type="text" name="username" required><br>

        <br><label><font size=6.5>Password:</font></label></br>
        <br><input type="password" name="password" required><br>

        <br><input type="submit" values="Register"></br>

        <br><a href="home.php">Login </a>

        
    </center>
</body>