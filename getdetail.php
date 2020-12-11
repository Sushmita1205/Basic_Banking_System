<?php
   session_start();
   $server="localhost:3307";
   $username="root";
   $password="";
   $db="bank";

   $con=mysqli_connect($server,$username,$password,$db);
   
   //check connection
   if(! $con)
   {
       die("Connection failed due to".mysqli_connect_error());
   }

$q="select * from users";
$result = mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Customers</title>
    <link rel="stylesheet" href="Table.css">
</head>
<body>
<img src="bank6.jpg" alt="Bank">

<br>
<a href="index.php">
<input type="image" src="home.png" class="home"/>
</a>

    <br><h1>Customers</h1>
    <table>
       <thead>
           <th>ID</th>
           <th>Name</th>
           <th>Email</th>
           <th>Amount</th>
           <th></th>
       </thead>

       <tbody>

           <tr>
               <?php
               $row=mysqli_fetch_array($result);
               ?>

               <td> <?php echo $row["id"]; ?> </td>
               <td> <?php echo $row["name"]; ?> </td>
               <td> <?php echo $row["email"]; ?> </td>
               <td> <?php echo $row["amount"]; ?> </td>
               <td>
                   <form action="user.php" method="post">
                       <button type="submit" name="name" value="Sushmita" class="view">View</button>
                   </form>
               </td>
          </tr>   


           <tr>
               <?php
               $row=mysqli_fetch_array($result);
               ?>

               <td> <?php echo $row["id"]; ?> </td>
               <td> <?php echo $row["name"]; ?> </td>
               <td> <?php echo $row["email"]; ?> </td>
               <td> <?php echo $row["amount"]; ?> </td>
               <td>
                   <form action="user.php" method="post">
                       <button type="submit" name="name" value="Ajay" class="view">View</button>
                   </form>
               </td>
          </tr>


          <tr>
               <?php
               $row=mysqli_fetch_array($result);
               ?>

               <td> <?php echo $row["id"]; ?> </td>
               <td> <?php echo $row["name"]; ?> </td>
               <td> <?php echo $row["email"]; ?> </td>
               <td> <?php echo $row["amount"]; ?> </td>
               <td>
                   <form action="user.php" method="post">
                       <button type="submit" name="name" value="Mohan" class="view">View</button>
                   </form>
               </td>
          </tr>


          <tr>
               <?php
               $row=mysqli_fetch_array($result);
               ?>

               <td> <?php echo $row["id"]; ?> </td>
               <td> <?php echo $row["name"]; ?> </td>
               <td> <?php echo $row["email"]; ?> </td>
               <td> <?php echo $row["amount"]; ?> </td>
               <td>
                   <form action="user.php" method="post">
                       <button type="submit" name="name" value="Preeti" class="view">View</button>
                   </form>
               </td>
          </tr>



           <tr>
               <?php
               $row=mysqli_fetch_array($result);
               ?>

               <td> <?php echo $row["id"]; ?> </td>
               <td> <?php echo $row["name"]; ?> </td>
               <td> <?php echo $row["email"]; ?> </td>
               <td> <?php echo $row["amount"]; ?> </td>
               <td>
                   <form action="user.php" method="post">
                       <button type="submit" name="name" value="Ramesh" class="view">View</button>
                   </form>
               </td>
          </tr>



           <tr>
               <?php
               $row=mysqli_fetch_array($result);
               ?>

               <td> <?php echo $row["id"]; ?> </td>
               <td> <?php echo $row["name"]; ?> </td>
               <td> <?php echo $row["email"]; ?> </td>
               <td> <?php echo $row["amount"]; ?> </td>
               <td>
                   <form action="user.php" method="post">
                       <button type="submit" name="name" value="Suparna" class="view">View</button>
                   </form>
               </td>
          </tr>


           <tr>
               <?php
               $row=mysqli_fetch_array($result);
               ?>

               <td> <?php echo $row["id"]; ?> </td>
               <td> <?php echo $row["name"]; ?> </td>
               <td> <?php echo $row["email"]; ?> </td>
               <td> <?php echo $row["amount"]; ?> </td>
               <td>
                   <form action="user.php" method="post">
                       <button type="submit" name="name" value="Aparna" class="view">View</button>
                   </form>
               </td>
          </tr>


           <tr>
               <?php
               $row=mysqli_fetch_array($result);
               ?>

               <td> <?php echo $row["id"]; ?> </td>
               <td> <?php echo $row["name"]; ?> </td>
               <td> <?php echo $row["email"]; ?> </td>
               <td> <?php echo $row["amount"]; ?> </td>
               <td>
                   <form action="user.php" method="post">
                       <button type="submit" name="name" value="Roheet" class="view">View</button>
                   </form>
               </td>
          </tr>


           <tr>
               <?php
               $row=mysqli_fetch_array($result);
               ?>

               <td> <?php echo $row["id"]; ?> </td>
               <td> <?php echo $row["name"]; ?> </td>
               <td> <?php echo $row["email"]; ?> </td>
               <td> <?php echo $row["amount"]; ?> </td>
               <td>
                   <form action="user.php" method="post">
                       <button type="submit" name="name" value="Ayan" class="view">View</button>
                   </form>
               </td>
          </tr>



           <tr>
               <?php
               $row=mysqli_fetch_array($result);
               ?>

               <td> <?php echo $row["id"]; ?> </td>
               <td> <?php echo $row["name"]; ?> </td>
               <td> <?php echo $row["email"]; ?> </td>
               <td> <?php echo $row["amount"]; ?> </td>
               <td>
                   <form action="user.php" method="post">
                       <button type="submit" name="name" value="Naveen" class="view">View</button>
                   </form>
               </td>
          </tr>

       </tbody>
    </table>


</body>
</html>