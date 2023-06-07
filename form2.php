<?php
$id=1;
$name = $_POST['name'];
$email = $_POST['email'];
$blood_group = $_POST['blood group'];
$password = $_POST['password'];

echo "welcome".$name;
echo "<br>Your email is: ".$email;
echo "<br>Your blood_group is: ".$blood_group;
echo "<br>Your password is: ".$password;

$conn = mysqli_connect("localhost","root","","btech");
if($conn)
{
	echo ",br>"."<h2>welcome to database</h2>";
}
else
	echo "<br>"."<h1>something went wrong connection creation</h1>";

$qry="INSERT INTO `student`( `Name`, `Email`, `Blood Group`, `Password`) VALUES ('Name','Email','Blood Group','[Password]')";
$sql = mysqli_query($conn, $qry);
if($sql)
	echo "<br>"."<h2>one record entered successfully</h2>";
else
{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	echo "<br>"."<h1>something went wrong in entering</h1>";
}

mysqoli_close($conn);
?>