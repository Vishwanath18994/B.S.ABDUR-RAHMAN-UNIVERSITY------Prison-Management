<!DOCTYPE HTML>
<html>
<head>
<title>Alloy Jacket Website | Home </title>
</head>
<body>
<?php
$nm=$_GET["name"];
$cardno=$_GET["age"];
$sno=$_GET["address"];
$ro=$_GET["room"];
$pd=$_GET["pid"];
mysql_connect("localhost","root","");
mysql_select_db("jail");
mysql_query("insert into rup values('$nm','$cardno','$sno','$ro','$pd')");

?>
</body>
</html>
