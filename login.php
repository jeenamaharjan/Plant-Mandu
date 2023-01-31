<?php 
//including database connection file
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM customers ORDER BY id ASC"); //using mysql query instead
if(!$result) die ("Database fetch failed: ".mysqli_error($mysqli));
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlantMandu Login </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Validate jss file -->
    <script src="validateLogin.js"></script>
</head>
<body>

<!-- header section starts  -->

<header>

    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>

    <a href="index.php" class="logo">Plant<span>Mandu</span></a>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="index.html">about</a>
        <a href="index.html">products</a>
        <a href="index.html">review</a>
        <a href="index.html">contact</a>
    </nav>

    <!-- <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="login.html" class="fas fa-shopping-cart"></a>
        <a href="login.html" class="fas fa-user"></a>
    </div> -->

</header>

<!-- header section ends -->

<!-- login section starts  -->

<section class="login contact" id="contact">

    <h1 class="heading"> <span> Login</span></h1>

    <div class="row">

        <div class="image">
            <img src="images/login-img.jpg" alt="">
        </div>

        <form action="check_records.php" method="post" onsubmit="return validateLogin(this)">
            <input type="email" placeholder="Email" class="box" name="email" id="email">
            <input type="password" placeholder="Password" class="box" name="password" id="password">
            <input type="checkbox" onclick="myFunction()" class="btn">Show Password
            <br>
            <input type="submit" value="Login" class="btn" id="submit" name="submit">
            <br><br>
            <a href="">Forgot Password?</a>
            <p style="color: red; font-size: medium;">
                <?php
                    if (isset($_SESSION['msg']))
                    {
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                ?>
            </p>
            
            <div class="or-container">
                <div class="line-separator"></div>
                <div class="or-label">or</div>
                <div class="line-separator"></div>
            </div>
            <p>New User?</p>
            <div class="row">
            <div class="col-md-12"> <a class="btn btn-lg btn-google btn-block text-uppercase btn-outline" href="signup.php"> Register</a> </div>
            </div> <br>
            
        </form>
    
    </div>

</section>
<!-- to hide password unless toggled -->
<script>
    function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<!-- jQuery and Ajax to validate user credentials
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script language="javascript">
$(function() {
// set a event handler to the button
  $("#submit").click(function() {
    // Retrieving form data
    var email = $("#email").val();
    var pass = $("#password").val();

    // Sending form data to the server side php script.
    $.ajax({
        type: "POST",
        url: "check_records.php",
        data: { email:email, password:password }
    }).done(function( data ) {

        // Now the output from PHP is set to 'data'.
        // Check if the 'data' contains 'OK' or 'NG'
        if (data.indexOf("OK") >= 0){
           alert("Login Successed.");
            //location.href = "ok.html";

        }else if(data.indexOf("NG") >= 0){
            alert("Login Faild.");
            //location.href = "ng.html";
        }
    });
  });
});
</script> -->




<!-- login section ends -->


<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">products</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#">my account</a>
            <a href="#">my order</a>
            <a href="#">my favorite</a>
        </div>

        <div class="box">
            <h3>locations</h3>
            <a href="#">Kathmandu</a>
            <a href="#">Pokhara</a>
            <a href="#">Chitwan</a>
            <a href="#">Butwal</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#">+981234567</a>
            <a href="#">plantmandu@gmail.com</a>
            <a href="#">Kathmandu, Nepal - 44600</a>
           <!-- <img src="images/payment.png" alt="">-->
        </div>

    </div>

    <div class="credit"> Copyright @ 2022 PlantMandu</div>

</section>

<!-- footer section ends -->
</body>
</html>