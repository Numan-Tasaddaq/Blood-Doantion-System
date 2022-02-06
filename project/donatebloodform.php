
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
    $donateb=$_POST['radio'];

    $sql="INSERT INTO `dform` (`Fname`, `Lname`, `Contact No`, `address`, `City`, `Blood Type`, `DonatedBefore`) 
    VALUES ('$fname', '$lname', '$number', '$address', '$city', '$type', '$donateb');";
     $query=mysqli_query($conn,$sql);

   
}

?>
 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donater Form</title>
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
        <a href="#">Donate Blood</a>
        <a href="recieverform.php">Recieve Blood</a>
        
    </div>
 <div class="xyz">
    <form class="form" method="post">
    <h1>Blood Donation Form</h1>
        <p>Donor's Name</p>
        <input type="text" name="fname" id="input" placeholder="First Name">
        <input type="text"  name="lname" id="input" placeholder="Last Name">
        <p>Phone No</p>
        <input type="number" name="number" id="input" placeholder="##############">
        <P>Address</P>
        <input type="text" name="address" id="input" placeholder="Address">
        <input type="text" name="city" id="input" placeholder="City">
        <p>Blood Type</p>
        <select name="type" id="input">
            <option >-</option>
            <option >A+</option>
            <option>A-</option>
            <option>B+</option>
            <option>B-</option>
            <option>AB+</option>
            <option>AB-</option>
            <option>O+</option>
            <option>O-</option>
        </select>
       <p>Do you ever Donated Blood Before?</p>
       <input type="radio" name="radio" value="1" >Yes<br>
        <input type="radio" name="radio" value="0">No<br>
        <input type="submit" name="submit" id="btn" value="Submit For Blood Donation">
    </form>
 </div>
</body>
</html>