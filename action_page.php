<?php
 $uname=$_POST['uname']
 $psw=$_POST['psw']

//Database commection
$conn=new mysqli('localhost','root','srvp');
if ($conn->connect_error) {
    # code...
    die('connection failed:'.$conn->connect_error);
}else {
    
    $stmt=$conn->prepare("insert into login(uname,psw) values(?,?)");
    $stmt->bind_param("ss",$uname,$psw);
    $stmt->execute();
    echo"Login success";
    $stmt->close();
    $conn->close();
}
?>