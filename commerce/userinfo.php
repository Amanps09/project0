<?php
$conn=mysqli_connect('localhost','root');

if($conn){
echo "Connection successful";
}
else {
  echo "No connection";
}

mysqli_select_db($conn,'youtubeuserdata');
$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comments=$_POST['comments'];

$query= "insert into userinfodata (user,email,mobile,comment) values ('$user','$email','$mobile','$comments')";
echo "$query";

mysqli_query($conn,$query);

header('location:index.php');

 ?>
