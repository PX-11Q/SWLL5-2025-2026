<?php

include("./db.php");

$sql = "DELETE FROM tblEmp where eid = ".$_GET["eid"]."";
$result = $conn->query($sql);
echo "<script>alert('Employee Deleted')</script>";
header("Location: ./index.php");

?>
