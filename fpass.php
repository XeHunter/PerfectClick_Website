<?php
$email=$_GET["Email"];
$pwd=$_GET["Password"];
$con = mysqli_connect("localhost","id17598005_root123","(Aryan_Surve123)","id17598005_customer");
if (isset($_GET["Change"]))
{
	$sql="update user set password='$pwd' where email='$email'";
	if (mysqli_query($con,$sql))
	{
		header("Location:https://perfect-click.000webhostapp.com/");
	}
	else{
		echo "Unable to update record";
	}
}
?>