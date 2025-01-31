<?php 
//including database connection file
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM customers ORDER BY id ASC"); //using mysql query instead
if(!$result) die ("Database fetch failed: ".mysqli_error($mysqli));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlantMandu SignUp </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Validate jss file -->
    <script src="validateSignUp.js"></script>
    
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

<!-- signup section starts  -->

<section class="login contact" id="contact">

    <h1 class="heading"> <span>SignUp</span></h1>

    
    <div class="row">

        <form action="add.php" method="post" onsubmit="return validateSignUp(this)">
            <input type="text" placeholder="Name" class="box" name="name" id="name">
            <input type="text" placeholder="Address" class="box" name="address" id="address">
            <input type="tel" placeholder="Phone Number" class="box" name="phone" id="phone">
            <input type="email" placeholder="Email" class="box" name="email" id="email">
            <input type="text" placeholder="Age" class="box" name="age" id="age">
            <input type="text" placeholder="Gender" class="box" name="gender" id="gender">
            <input type="password" placeholder="Password" class="box" name="password" id="password">
            
            <input type="submit" value="SignUp" class="btn" id="submit" name="Submit">

            <div class="or-container">
                <div class="line-separator"></div>
                <div class="or-label">or</div>
                <div class="line-separator"></div>
            </div>
            <div class="row">
            <div class="col-md-12"> <a class="btn btn-lg btn-google btn-block text-uppercase btn-outline" href="#"><img src="https://img.icons8.com/color/16/000000/google-logo.png"> Signup Using Google</a> </div>
            </div> <br> <br>
            <p class="text-inverse text-center">Already have an account? <a href="login.php" data-abc="true">Login</a></p>
    
        </form>

        <div class="image">
            <img src="images/signup-img.jpg" alt="">
        </div>

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




<!-- signup section ends -->


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