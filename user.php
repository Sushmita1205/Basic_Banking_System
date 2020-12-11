<?php
   session_start();
   $server="localhost:3307";
   $username="root";
   $password="";
   $db="bank";

   $con=mysqli_connect($server,$username,$password,$db);
   if(! $con)
   {
       die("Connection failed due to".mysqli_connect_error());
   }

   $name=$_POST['name'];
   $q="select * from users where name='$name'";
   $result = mysqli_query($con,$q);
   $row_count=mysqli_num_rows($result);
   $row=mysqli_fetch_array($result);
   $id=$row['id'];
   $mail=$row['email'];
   $amount=$row['amount'];
  
   $_SESSION['name']=$name;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name ?></title>
    <link rel="stylesheet" href="Table.css">
</head>
<body>
<img src="bank6.jpg" alt="Bank">

<br>
<a href="index.php">
<input type="image" src="home.png" class="home"/></a>
<h1>Customer Details</h1>
<br><br><br>

<table>
      <thead>
           <th>ID</th>
           <th>Name</th>
           <th>Email</th>
           <th>Amount</th>
       </thead>

       <tbody>

           <tr>
               <?php
               $row=mysqli_fetch_array($result);
               ?>

               <td style="width:50px";> <?php echo $id ?> </td>
               <td> <?php echo $name?> </td>
               <td> <?php echo $mail ?> </td>
               <td> <?php echo $amount ?> </td>
          </tr>   
       </tbody>  
</table>

<br><br><br>

<a href="transfer_to.php">
<button class="transferto" href="transfer_to.php">Transfer To</button></a>
<br>
<a href="getdetail.php">
<button class="transferto" href="getdetail.php">Back</button></a>

    
</body>
</html>