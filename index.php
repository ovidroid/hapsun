<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapsun</title>
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->

    <link rel="stylesheet" href="style/index.css">
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
                 <li><a href="services.html">CLIENTS
                 </a></li>
                 <li><a href="founder.html">FOUNDER</a></li>
                 <li><a href="login.php">REGISTER</a></li>
                 <li><a href="contact.php">CONTACT US </a></li>
             </ul>
         </nav>
     </div>

   </div>

<div class="slider">
   
        
        <img src="images/bgimg.jpg" alt="">
        <img src="images/bgimg2.jpg" alt="">
        <img src="images/bg4.jpg" alt="">
        <img src="images/bging3.jpg" alt="">        
        <img src="images/bg5.jpg" alt="">
   
</div>
<br><br>
<div class="about">

    <div class="about-left">
        <img src="images/vase.jpg" alt="vase">
    </div>
    <div class="about-right">
        <h1>About Us</h1>
        <p>Hapsun is a non-profit organization that provides services to the general public. <br>We provide a wide range of services including:</p>
    </div>

</div>
<div class="contact" id="contact">

<div class="us">
    <h1>Hapsun is here for YOU!</h1>
    <p>To know more about how Hapsun can help optimize technology for your business,<br> schedule a free session with us. Take a moment to post in your contact details right here:
</div>


   <div class="formco">
       <form action="" method="POST" class="form">

       <input type="text" name="name" class="inp" placeholder="Enter your Name">
       <input type="email" name="email" class="inp" placeholder="Enter email">
       <input type="text" name="message" class="inp" placeholder="Messeage">
       <input type="submit" name="submit" value="SEND" class="btn">   

       </form>
   </div>
    </div>

    <div class="footer" style="color:white;background-color: black;  bottom:0px;width:100%;text-align:center;">
        <h5>@2021 Hapsun Medical Solutions . All Rights Reserved</h5>
    </div>

    <script src="script/index.js"></script>

</body>
</html>


<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];
            
    $server = "172.26.64.1";
    $user = "user";
    $passwd = 1234;
    $db = "owais";
    
    try{
        $dsn = "mysql:host=$server;dbname=$db;charset=utf8";
        $pdo = new PDO($dsn, $user, $passwd);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO enquiry (name, email,message) VALUES ('$name', '$email', '$msg')";
        if($pdo->exec($sql) == 1){
            echo "<script type='text/JavaScript'>
                alert('Successfully sent!');
            </script>";
        }else{
            echo "Failed";
        }

    }catch(PDOException $e){
        echo $e->getMessage();
    }
  
}
?>