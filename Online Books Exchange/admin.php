<?php
include_once './config.php';
$result=array();
$result['error']=0;

$name=trim($_REQUEST['name']);
$author=trim($_REQUEST['author']);
$publication=trim($_REQUEST['publication']);
$branch=trim($_REQUEST['branch']);

$sql="INSERT INTO `php2add`(`Book Name`, `Author`, `Publication`, `Branch`) VALUES ('$name','$author','$publication','$branch')";
// $sql="INSERT INTO `php2add` (`Book Name`, `Author`, `Publication`, `Branch`) VALUES ('$name','$author','$publication','$branch')";
$db=mysqli_query($conn,$sql);
if(!$db){
    $result['error']=1;
    $result['errormsg']="Connection Problem!";
    echo json_encode($result);
    return;
}
echo json_encode($result);

?>