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

$result = mysqli_query($conn,"SELECT * FROM dform");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 </head>
 <style>
   body{
     background-color: gray;
   }
   tr:hover{
    background-color: #f1f1f1;
   }
   #myinput{
     float:right;
     background-color: gray;
     margin-right:25px;
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
   }
::placeholder{
color:white;
opacity: 1;
   }
   .mytable{
     margin-top:55px;
   }
 </style>
<body>
    <h1>Here's the Information of All Donaters you can Contact them Directly</h1>

    <input type="text"  id="myinput" placeholder="serach by Blood type" onkeyup="myFunction()">
    <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myinput");
  filter = input.value.toUpperCase();
  table = document.getElementById("mytable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[4];
    

    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
  
}
</script>
<?php
if (mysqli_num_rows($result) > 0) 
{
?>
 <div class="mytable">
 <table border="2" width="100%" id="mytable">
  
  <tr align="center">      
    <th >First Name</th>
    <th > Last Name</th>
    <th>Contact Number</th>
    <th>Address</th>
    <th>City</th>
    <th>Blood Type</th>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr align="center">
    <td><?php echo $row["Fname"]; ?></td>
    <td><?php echo $row["Lname"]; ?></td>
    <td><?php echo $row["Contact No"]; ?></td>
    <td><?php echo $row["address"]; ?></td>
    <td><?php echo $row["City"]; ?></td>
    <td><?php echo $row["Blood Type"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </div>
 </body>
</html>

  
