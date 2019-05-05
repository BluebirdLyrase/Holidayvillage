<?php
function insertStaydetail($thisADate,$thisRoomID,$thisExtraBed,$thisCustomerID,$thisconnect){
    $connect = $thisconnect;
    console_log("Inserting to Staydetail");
    foreach($thisADate as $currentDate) {
        console_log("Inserting to Staydetail ".$currentDate);
    $sql ='INSERT INTO staydetail
    VALUES(Null,"'.$thisCustomerID.'","'.$currentDate.'","'.$thisExtraBed.'","'.$thisRoomID.'")';
    $result = mysqli_query($connect,$sql);
}
if(!$result){
    echo mysqli_error($connect);
}
    else{
alert("insert Staydetail Successfully");
}
}

///////////////////////////////////////////////////////////////////////////////////////////////////

function getADate($thischeckIn,$thischeckOut){
    console_log("creating ADate");
    $ADate = array();
    $checkIn = $thischeckIn;
    $checkOut = $thischeckOut;
    $refDate = date_create($checkIn);
    $i = 0;
///////////////////////Add Date in Array////////////////////////
    do{
        $toArrayDate =  $refDate->format('Y-m-d');
        $ADate[$i] = $toArrayDate;
        console_log("add to array :".$toArrayDate."<br>");
        $refDate->modify('+1 day');
        $i++;
        }while($toArrayDate!=$checkOut);
    
    return $ADate;    
}///function

///////////////////////////////////////////////////////////////////////////////////////////////////
?>