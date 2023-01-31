<?php 
//including database connection file
include_once("config.php");

if(isset($_POST["Submit"])){
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $address = mysqli_real_escape_string($mysqli, $_POST['address']);
    $phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $age = mysqli_real_escape_string($mysqli, $_POST['age']);
    $gender = mysqli_real_escape_string($mysqli, $_POST['gender']);
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);
    //checking empty fields
    if (empty($name) || empty($address) || empty($phone)|| empty($email)|| empty($age)|| empty($gender)|| empty($password)) {
        echo "<font color='red'> Some field are empty. </font><br>";
        //link to previous page
        echo "<br><a href='javascript:self.history.back();'>Go Back</a>";
    }
    else{
        //if all the fields are filled(not empty)
        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO customers(Name,Address,Phone,Email,Age,Gender,Password) VALUES('$name','$address','$phone','$email','$age','$gender','$password')");
        if (!$result)
            die("Insertion Failed: " . mysqli_error($mysqli));
        //display success message
        echo "<font color = 'green'>Data saved successfully.</font>";
        header("Location:index.php");
    }

}







?>
