<meta charset="UTF-8">
<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/26 0026
 * Time: 13:50
 */
$username1=$_POST['username'];
$password1=$_POST['pass'];
$realname=$_POST['realname'];
$phonebnumber=$_POST['phonenumber'];

$servername="localhost";
$username="root";
$password="lx1314";
$dbname="user";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("连接失败");
}
echo "连接成功";

//$sql = "SELECT $username1 FROM user_login";

$sql="INSERT INTO user_login(username,pass,realname,phonenumber)
    VALUES('$username1','$password1','$realname',$phonebnumber)";
$result=$conn->query($sql);
if ($result){
    echo "添加数据成功";
}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//$result=$conn ->query($sql);
//
//if (mysql_num_rows($result)) {
//    // 输出每行数据
//   echo "用户名已存在";
//} else {
//
//}