<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$role=$_POST['role'];
$gender=$_POST['gender'];
$phno=$_POST['phno'];
$desg=$_POST['desg'];
$dept=$_POST['dept'];
$expt=$_POST['expt'];




$servername="localhost";
$username="root";
$password="";
$database="dpe";
$con=new mysqli($servername,$username,$password,$database);



$sql1="INSERT INTO `userdetails` (`FirstName`, `LastName`, `email`, `password`,`Role`, `Gender`, `PhoneNumber`, `Designation`, `Department`,`Expertise`) VALUES ('$fname', '$lname', '$email','$password', '$role', '$gender', '$phno', '$desg', '$dept', '$expt')";
$sql2="INSERT INTO `users` (`userid`, `password`, `role`) VALUES ('$email', '$password', '$role')";
$res1=$con->query($sql1);
$res2=$con->query($sql2);
$con->close();
?>
