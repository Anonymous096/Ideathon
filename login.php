<?php
// database connection code
$con = mysqli_connect('localhost', 'Admin', 'Saksham0609','loginform');

$con = mysqli_connect('localhost', 'root', '','loginform');

// get the post records
$txtUsername = $_POST['uname'];
$txtPassword = $_POST['psw'];

// database insert SQL code
$sql = "INSERT INTO `login1` (`Id`, `fldName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>