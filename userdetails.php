<?php

$conn =new mysqli("localhost", "root", "", "dpe");


$sql = "SELECT * FROM userdetails";
$result = $conn->query($sql);
if ($result->num_rows != 0) {
while(($row = $result->fetch_assoc())==TRUE)
{
echo "<tr><td>" . $row["FirstName"]. "</td><td>" . $row["LastName"] . "</td><td>" .  $row["email"] . "</td><td>".  $row["password"] . "</td><td>" . $row["Role"] . "</td><td>" .  $row["Gender"] . "</td><td>" . $row["PhoneNumber"] . "</td><td>" . $row["Designation"] . "</td><td>" . $row["Department"] . "</td><td>" . $row["Expertise"]. "</td></tr>";
}
} else { echo "0 results"; }
$conn->close();
?>