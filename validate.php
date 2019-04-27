<?php
///////////////////////////////////////////////////////////////////////////////////////////////////
function checkinoutValidation($thischeckIn,$thischeckOut){
    console_log("Validating checkIn checkOut");
    $maxDate = date_create($thischeckOut);
    $refDate = date_create($thischeckIn);
////////ตรวจสอบว่า วัน Chackout มากกว่าหรือ เท่ากับวัน Checkin หรือไม่//////
if($refDate<=$maxDate){
    console_log("valid check in check out date");
    return true;
    }else{
        alert("invalid check in check out date");
        return false; 
    }///else
}///function
///////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////////////////////
function DateRoomValidation($thisRoomID,$thisADate){
    ////////////////////////Database Prepare////////////////////////
    $connect = mysqli_connect("localhost","root","","Holidayvillage");
    $sql ='select date
           from staydetail 
           where RoomID="'.$thisRoomID.'"';
    $result = mysqli_query($connect,$sql);
    if(!$result){
        echo mysqli_error($connect);
    }else{
         
    
    
    $numrows = mysqli_num_rows($result);
    /////////////////////////Validation///////////////////////////////
        while ($row = mysqli_fetch_array($result)){
            foreach($thisADate as $currentDate) {
                console_log($row[0]." and ".$currentDate);
        if($row[0] == $currentDate){
                console_log($row[0]." = ".$currentDate);
                alert("Imposible date in room");
            mysqli_close($connect);
            return false;
        }//if
        else{
                console_log($row[0]." != ".$currentDate);
        }//else
    }//foreach
    }//while
    mysqli_close($connect);
    console_log("valid date");
    return true;
    }
    }///function
    ///////////////////////////////////////////////////////////////////////////////////////////////////

    ///////////////////////////////////////////////////////////////////////////////////////////////////
function validateCustomer($thisFName,$thisLName){
    $testFName = test_input($thisFName);
    if (!preg_match("/^[A-Za-z]+(\s[A-Za-z]+)*$/",$testFName)){
        alert("Only letters allowed in Firstname"); 
        echo "<br>";
        return false;
    }////if

    $testLName = test_input($thisLName);
    if (!preg_match("/^[A-Za-z]+(\s[A-Za-z]+)*$/",$testLName)){
        alert("Only letters allowed in Lastname"); 
        echo "<br>";
        return false;
    }///if
    return true;
   }///function
///////////////////////////////////////////////////////////////////////////////////////////////////
    
    
///////////////////////////////////////////////////////////////////////////////////////////////////
   function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }///function
///////////////////////////////////////////////////////////////////////////////////////////////////
?>