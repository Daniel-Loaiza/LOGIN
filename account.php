<?php
    session_start();
    if(!empty($_SESSION['globalUser']) && !empty($_SESSION['globalPswd'])){
        echo "<center><br><h1 style='color=limegreen;'>Welcome.".$_SESSION['globalUser'].", </h1>
                <h2 style='color=lime;'>Hope you are doing great, </h2></center>";
    }else{
        die("<center><br><h1 style='color=limegreen;'>Error: You haven't logged in yet..!</h1>
        <h2>Head up towards the login.</h2></center>");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>