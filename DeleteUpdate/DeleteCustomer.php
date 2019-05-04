<?php
include '../script.php';
$connect = mysqli_connect("localhost","root","","holidayvillage");
$sql_deleteDetail = 'DELETE FROM staydetail WHERE CustomerID ='.$_POST['id'].';';
$result_deleteDetail = mysqli_query($connect, $sql_deleteDetail);
$sql = 'DELETE FROM customer WHERE CustomerID ='.$_POST['id'].';';
$result = mysqli_query($connect, $sql);
if($result&&$result_deleteDetail){
    alert('COMPLETE');
}else{
    alert('SOMETHING WRONG');
    echo mysqli_error($connect);
}
mysqli_close($connect);
include 'InputDeleteCustomer.php';
?>