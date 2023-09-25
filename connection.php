<?php
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $name=$_POST['name'];
    $password=$_POST['password'];

    $host='localhost';
    $user='brighton';
    $pass='bri123';
    $dbname='crm';

    $conn=mysqli_connect($host,$user,$pass,$dbname);
    $sql="INSERT INTO  signup(name,email,mobile,city)values ('$email','$name','$password')";
    mysqli_query($conn,$sql);
}
?>
