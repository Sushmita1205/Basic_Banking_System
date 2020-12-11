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

//sender
$name = $_SESSION['name'];
$q="select * from users where name='$name'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
$from=$row['name'];
$var1 =$row['amount'];


//receiver
$to=$_POST['receiver'];
$q1="select * from users where name='$to'";
$result1=mysqli_query($con,$q1);
$row1=mysqli_fetch_array($result1);
$var2=$row1['amount'];

session_destroy();

if($var1 >= $_POST["transfer"])
{
    //update in users table
    $sub=$var1-$_POST["transfer"];
    $q="update users set amount='$sub' where name='$from' ";
    $result=mysqli_query($con,$q);

    $sum=$var2+$_POST["transfer"];
    $q="update users set amount='$sum' where name='$to' ";
    $result=mysqli_query($con,$q);

    //update in mini_statement table
    $c=$_POST["transfer"];
    $q="insert into mini_statement(sender , receiver , amount)
    values('$from','$to','$c')";
    $result=mysqli_query($con,$q);

    include 'getdetail.php';
    $message="Transfer Successfull";
    echo "<script type='text/javascript'>
          alert('$message');
          </script>";

}

else
{
	include 'getdetail.php';
    $message="Insufficient Balance";
   echo"<script type='text/javascript'>
   alert('$message');
   </script>";
}

?>