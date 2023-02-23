<?php
$name=$_POST["UName"];
$email=$_POST["Email"];
$pwd=$_POST["Password"];
$con = mysqli_connect("localhost","id17598005_root123","(Aryan_Surve123)","id17598005_customer");
$stmt = $con->prepare("insert into user (username,email,password)
values (?,?,?)");
$stmt->bind_param("sss",$name,$email,$pwd);
$stmt->execute();
header("Location:https://perfect-click.000webhostapp.com/home.html");
?>
