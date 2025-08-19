<?php 
$n=$_POST['name']; 
$c=$_POST['phone']; 
$b=$_POST['email']; 
$d=$_POST['state']; 
$con=mysqli_connect("localhost","root","","frozen"); 
$sql="INSERT INTO customerdetails(customer_name,customer_phone,customer_email,customer_state) values('$n','$c','$b','$d')"; 
$r=mysqli_query($con,$sql);
 if($r) { 
echo " EMPLOYEE DETAILS ADDED SUCESSFULLY"; } 
else { echo "details not added"; } ?>