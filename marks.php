<?php
$htnum=$_POST['htnum'];
$branch=$_POST['branch'];
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$num3=$_POST['num3'];
$num4=$_POST['num4'];
$sum=$_POST['sum'];


$servername="localhost";
$username="root";
$password="";
$database="dpe";
$con=new mysqli($servername,$username,$password,$database);






$sql="INSERT INTO `studentmarks` (`Ht.No.`, `Branch`, `Q.No.1`, `Q.No.2`, `Q.No.3`, `Q.No.4`, `Total`) VALUES ('$htnum', '$branch', '$num1', '$num2', '$num3', '$num4', '$sum')";
$res=$con->query($sql);

 $message = 'Marks submitted successfully';

  // Redirect to the same page with the message
  header('Location: member.html?message=' . urlencode($message));
  exit;
if (isset($_GET['message'])) {
  echo '<div class="alert alert-success">' . htmlspecialchars($_GET['message']) . '</div>';
}
$con->close();


?>