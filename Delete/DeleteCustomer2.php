<?php
$connect = mysqli_connect("localhost","root","","holidayvillage");
$sql = 'DELETE FROM customer WHERE CustomerID ='.$_POST['id'].';';
$result = mysqli_query($connect, $sql);
$sql_deleteDetail = 'DELETE FROM staydetail WHERE CustomerID ='.$_POST['id'].';';
$result_deleteDetail = mysqli_query($connect, $sql_deleteDetail);
if($result){
    echo 'COMPLETE';
}else{
    echo 'SOMETHING WRONG';
}
mysqli_close($connect);
include 'DeleteCustomer.php';
?>