<?php


/* $num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$operator = $_GET["op"];
$result = "";


if($operator == "add")
{
  $result = $num1 + $num2;

}

else if($operator == "sub")
{
  $result = $num1 - $num2;
  
}

else if($operator == "mul")
{
  $result = $num1 * $num2;
  
}

else if($operator == "div")
{
  $result = $num1 / $num2;
  
}

echo "<script>alert('". $result . "')</script>" */

$servername = "127.0.0.1";
$username = "jeff23288";
$password = "m8xjD5kq6xsWOlhjbb0E";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

  
?>
