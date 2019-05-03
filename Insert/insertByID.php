<?php
include '../validate.php';
include '../script.php';
include 'InsertFunction.php';

$CustomerID= $_POST["CustomerID"];
$RoomID = $_POST["RoomID"];
$checkIn = $_POST["CheckIn"];
$checkOut = $_POST["CheckOut"];
$extraBed = $_POST["ExtraBed"];


$connect = mysqli_connect("localhost","root","","Holidayvillage");
console_log("sdfsdf");
///////////////////////ตรวจสอบ check in out ก่อนสตรวจสอบอย่างอื่น ป้องกัน $ADate เน่า///////////////////////
if(checkinoutValidation($checkIn,$checkOut,$connect)){
    console_log("Valid checkin checkout Value ");
    $ADate = getADate($checkIn,$checkOut);

    if(DateRoomValidation($RoomID,$ADate,$connect)){
        console_log("Valid CustomerID");
            if($CustomerID!=Null){
            insertStaydetail($ADate,$RoomID,$extraBed,$CustomerID,$connect);
            }else{////ไม่มีทางเกิดขึ้นได้
            echo "invalid CustomerID";
            }
            mysqli_close($connect);
            include 'inputByID.php';
        }else{
            mysqli_close($connect);
            include 'inputByID.php';
        }///else
}else{
    mysqli_close($connect);
    include 'inputByID.php';
}///else



?>