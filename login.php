<meta charset="UTF-8">
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/27 0027
 * Time: 14:19
 */
$username1=$_POST['username'];
$pass=$_POST['pass'];

$servername="localhost";
$username="root";
$password="lx1314";
$dbname="user";

$conn=new mysqli($servername,$username,$password,$dbname);


$sql="SELECT username,pass FROM user_login WHERE username = '$username1'";

$result=$conn->query($sql);

$row = mysqli_fetch_array($result);
if($row['username']==$username1 &&$row['pass']==$pass){
    setcookie('uname',$username,time()+7200);
    echo "<script>alert('successfully')</script>";
}
else{
    echo "账号密码不对";
}