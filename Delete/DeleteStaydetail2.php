<?php
$connect = mysqli_connect("localhost","root","","holidayvillage");
$sql = 'DELETE FROM staydetail WHERE OrderID ='.$_POST['id'].';';
$result = mysqli_query($connect, $sql);

if($result){
    echo 'COMPLETE';
}else{
    echo 'SOMETHING WRONG';
}
mysqli_close($connect);
include 'DeleteStaydetail.php';
?>