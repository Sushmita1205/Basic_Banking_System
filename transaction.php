<?php
session_start();
$server="localhost:3307";
$username="root";
$password="";
$db="bank";

$con=mysqli_connect($server,$username,$password,$db);

if(! $con)
{
    die ("Connection failed due to".mysqli_connect_error());
}

$q="select * from mini_statement";
$result=mysqli_query($con,$q);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions</title>
    <link rel="stylesheet" href="Table.css">
</head>
<body>
<img src="bank6.jpg" alt="Bank">

<br>
<a href="index.php">
<input type="image" src="home.png" class="home"/></a>
<h1>Transactions</h1>
<br><br>

<table>
   <thead>
      <th>ID</th>
      <th>SENDER</th>
      <th>RECEIVER</th>
      <th>AMOUNT</th>
   </thead>

   <tbody>

      <tr>
          <?php while($row = mysqli_fetch_array($result)) { ?>
         <td style="width:52px;"> <?php echo $row['id']; ?></td>
         <td> <?php echo $row['sender']; ?></td>
         <td><?php echo $row['receiver']; ?></td>
         <td><?php echo $row['amount']; ?></td>
     </tr>

      <?php } ?>

   </tbody>
</table>
    
</body>
</html>