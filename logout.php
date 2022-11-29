<?php
    session_start();
    if(empty($_SESSION['globalUser']) && empty($_SESSION['globalPswd'])){
        die("<center><br><h1 style='color=limegreen;'>Error: You haven't logged in yet...!</h1>
        <h2>Head up towards the login</h2></center>");
    }
    session_destroy();
    die("<center><br><h1 style='color=limegreen;'>Logged out successfully...!</h1>
        <h2 style='color=lime;'>In case you want to log in or sign up again</h2></center>");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    
</body>
</html>
