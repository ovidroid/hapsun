<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapsun</title>
    <link rel="stylesheet" href="style/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body >
    
   <div class="header">
    <div class="contactdetails">
        <div class="social">
         <a href="#" class="fa fa-facebook"></a>
         <a href="#" class="fa fa-twitter"></a>
         <a href="#" class="fa fa-instagram"></a>
         <a href="#" class="fa fa-linkedin"></a>
        </div>
        <div class="mail">
            <h4>contact@hapsunsolution.com</h4>
            <h4> 022-54365548</h4>
        </div>
     </div>
     <div class="subheader">
         <div class="logo">
             <img src="images/HapsunLogo.jpeg" alt="LOGO">
         </div>
         <nav>
             <ul>
                 <li><a href="index.php">HOME</a></li>
                
                 <li><a href="services.html">CLIENTS</a></li>
                
                 <li><a href="founder.html">FOUNDER</a></li>
                
                 <li><a href="login.php">REGISTER</a></li>
                 <li><a href="contact.php">CONTACT US </a></li>
             </ul>
         </nav>
     </div>

   </div>
<div class="log">
    <form action="" method="POST" class="form">
        <input type="text" placeholder="Enter Name" class="inp" name="name">
        <input type="email" placeholder="Enter Email" class="inp" name="email">
        <input type="password" placeholder="Enter Password" class="inp" name="pass">
        <input type="password" placeholder="Re-enter Password " class="inp" name="pass1">
        <input type="submit" name="submit" value="SEND" class="btn">   
    </form>

    <div class="msg">
        <h1>Sign up!!!! </h1>
        <p>To get daily updates from <span>HAPSUN</span> .!!!</p>
    </div>

</div>

<!-- <div class="success">
    <h1>Thank you</h1>
</div> -->

<div class="footer" style="color:white;background-color: black;  bottom:0px;width:100%;text-align:center;">
        <h5>@2021 Hapsun Medical Solutions . All Rights Reserved</h5>
    </div>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $pass1 = $_POST['pass1'];
    if(!empty($name) && !empty($email) && !empty($pass)){
        if($pass == $pass1){
            
    $server = "172.26.64.1";
    $user = "user";
    $passwd = 1234;
    $db = "owais";
    
    try{
        $dsn = "mysql:host=$server;dbname=$db;charset=utf8";
        $pdo = new PDO($dsn, $user, $passwd);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO userdetails (name, email, password) VALUES ('$name', '$email', '$pass')";
        if($pdo->exec($sql) == 1){
            echo "
            <div class='success'>
                <h1>Thank you</h1>
                <h1>Registration Successfull</h1>
            </div>";
        }else{
            echo "
            <div class='err'>
            
                <h1>Registration Failed</h1>
            </div>";
        }

    }catch(PDOException $e){
        echo $e->getMessage();
    }
        }else{
            echo "
            <div class='err'>
                               <h1>Password  not match</h1>
            </div>";
        }
  }else{
    echo "
            <div class='err'>
                <h1>Please fill all details</h1>
            </div>";
  }
}
?>