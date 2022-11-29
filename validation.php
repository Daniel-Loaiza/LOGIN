<?php
    if(empty($_SESSION['globalUser']) && empty($_SESSION['globalPswd'])){
        die("<center><br><h1 style='color=limegreen;'>Error: You haven't logged in yet...!</h1>
        <h2>Head up towards the login</h2></center>");
    }else{

        $username=$_POST['username'];
        $password=$_POST['password'];

        include("connection.php");

        $query = "SELECT * FROM users WHERE username='".$username."'";
        $stmt=$conn->query($query1);
        $result=$stmt->fetch();

        if(!empty($result)){
            if($result['username']==$username){
                die("<center><br><h1 style='color=limegreen;'>Error: account already exists...!</h1>
        <h2>Please, try creating a</h2></center>");
            }
        }else{
            
            $insertQuery="INSERT INTO users(username, password) VALUES ('".$username."','".$password."')";
            $conn->query($insertQuery);
            echo "<center><h1 style='color=lime;'>Account Created Successfully...!</h1>";
        }
        
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