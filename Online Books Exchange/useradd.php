<?php
include_once './config.php';
$result=array();
$result['error']=0;

$name=trim($_REQUEST['name']);
$email=trim($_REQUEST['email']);
$pass=trim($_REQUEST['pass']);

$sql="INSERT INTO `userinfo` (`User Name`, `Email Id`, `Password`) VALUES ('$name', '$email', '$pass')";
$db=mysqli_query($conn,$sql);
if(!$db){
    $result['error']=1;
    $result['errormsg']="Connection Problem!";
    echo json_encode($result);
    return;
}
echo json_encode($result);

?>