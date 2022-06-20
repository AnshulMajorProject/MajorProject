<?php

session_start();
header('location:login.php');


$con =  mysqli_connect('localhost', 'root' );

mysqli_select_db($con, 'smpp_user_registration');

$name = $_POST['user'];
$mail = $_POST['email'];
$pass = $_POST['password'];

$s = " select * from usertable where name = '$name' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo " Username Already Taken";
}
else{
    $reg = "insert into usertable(name, email, password) values ('$name', '$mail', '$pass')";
    mysqli_query($con, $reg);
    echo" Registration Successful";
}

?>