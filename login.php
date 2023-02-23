<?php
$uname=$_POST["UName"];
$pwd=$_POST["Password"];
$con = mysqli_connect("localhost","id17598005_root123","(Aryan_Surve123)","id17598005_customer");
$stmt = $con->prepare("SELECT * FROM user WHERE username =? and password=?");
$stmt->bind_param("ss",$uname,$pwd);
$stmt->execute();
$result = $stmt->get_result();
if($result->num_rows == 0)
{
	echo '<br><br><center><h1><b>Enter Correct Username And Password!!</b></h1></center><br>
       <center> <a href="https://perfect-click.000webhostapp.com/"><b>Go Back To Login Page</b></a><hr></center>';
}
else
{
	header("Location:https://perfect-click.000webhostapp.com/home.html");
}
$stmt->close();

?>