<?php
include 'connection.php';

if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $number=$_POST['number'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $type=$_POST['type'];

    $sql="INSERT INTO `receivers` (`Fname`, `Lname`, `Contact No`, `address`, `City`, `Blood Type`) 
    VALUES ('$fname', '$lname', '$number', '$address', '$city', '$type');";
     $query=mysqli_query($conn,$sql);
    
   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reciver Form</title>
   <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="header">
        <div class="logo"><img src="" alt="logo here"></div>
       <p>Blood Donation System</p>
        
    </div>
    <hr>
    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="./donatebloodform.php">Donate Blood</a>
        <a href="#">Recieve Blood</a>
        
    </div>
<div class="xyz">
<form class="form" method="post" target="_blank"  action="retrive.php" >
<h1>Blood Receiver Form</h1>
        <p>Receiver's Name</p>
        <input type="text" name="fname" id="input" placeholder="First Name">
        <input type="text"  name="lname" id="input" placeholder="Last Name">
        <p>Phone No</p>
        <input type="number" name="number" id="input" placeholder="##############">
        <P>Address</P>
        <input type="text" name="address" id="input" placeholder="Address">
        <input type="text" name="city" id="input" placeholder="City">
        <p> Required Blood Type</p>
        <select name="type" id="input">
            <option value="">-</option>
            <option value="">A+</option>
            <option value="">A-</option>
            <option value="">B+</option>
            <option value="">B-</option>
            <option value="">AB+</option>
            <option value="">AB-</option>
            <option value="">O+</option>
            <option value="">O-</option>
        </select>
      <br>
        <input type="submit" name="submit" id="btn" value="Submit">
    </form>
</div>
</body>
</html>