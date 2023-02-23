<?php
$name=$_POST["name"];
$email=$_POST["email"];
$message=$_POST["message"];
$con = mysqli_connect("localhost","id17598005_root123","(Aryan_Surve123)","id17598005_customer");
$stmt = $con->prepare("insert into contact (name,email,message)values (?,?,?)");
$stmt->bind_param("sss",$name,$email,$message);
$stmt->execute();
header("Location:https://perfect-click.000webhostapp.com/contact.html");
?>