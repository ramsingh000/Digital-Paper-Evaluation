<?php
$uname=$_POST['uname'];
$pwd=$_POST['pwd'];
$role=$_POST['role'];

$servername="localhost";
$username="root";
$password="";
$database="dpe";
$con=new mysqli($servername,$username,$password,$database);

$sql="select user id,password,role from users";
$res=$con->query($sql);


if (empty($uname)) {

        echo "User Name is required";

        exit();

    }else if(empty($pwd)){

        echo "Password is required";

        exit();
 }else if($role!="member" && $role!="admin"){

        echo "Role is required";

        exit();

    }else{

        $sql="select userid,password,role from users";
$res=$con->query($sql);
if($res->num_rows!=0)
{
while(($row=$res->fetch_assoc())==TRUE)
{
if($uname==$row['userid'])
{
if($pwd==$row['password'])
{
if($role==$row['role'])
{
header("Location: $role.html");;
}
}
}
}
}
}
?>