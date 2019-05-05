<?php
include '../script.php';
$connect = mysqli_connect("localhost","root","","holidayvillage");
$sql = 'DELETE FROM staydetail WHERE OrderID ='.$_POST['id'].';';
$result = mysqli_query($connect, $sql);

if($result){
    alert('COMPLETE');
}else{
    alert('SOMETHING WRONG');
    echo mysqli_error($connect);
}
mysqli_close($connect);
include 'SelectStaydetail.php';
?>