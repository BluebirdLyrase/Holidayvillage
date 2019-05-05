<?php
$CustomerName=$_POST['CustomerName'];
$connect = mysqli_connect("localhost","root","","holidayvillage");
$sql ='SELECT s.OrderID,s.CustomerID,c.Fname,c.Lname,s.Date,s.Extrabed,r.RoomID,R.RoomGrade,r.RoomPrice
FROM staydetail as s
join customer as c
on c.CustomerID = s.CustomerID
join room as r
on r.RoomID = s.RoomID
where c.Fname = "'.$CustomerName.'"
';
$result = mysqli_query($connect,$sql);
if(!$result){
  echo mysqli_error($connect);
}else{
    echo '<table border = "1">
    <th>OrderID</th> 
    <th>CustomerID</th> 
    <th>Firstname,</th> 
    <th>Lastname</th> 
    <th>Date</th> 
    <th>Extrabed</th> 
    <th>RoomID</th> 
    <th>RoomGrade</th> 
    <th>RoomPrice</th> 
    ';
    $numrows = mysqli_num_rows($result);
    $numfields = mysqli_num_fields($result);
      while ($row = mysqli_fetch_array($result)){
        echo '<tr>';
        //////////////Delete//////////////////
          for($i = 0; $i < $numfields; $i++){
              echo '<td>'.$row[$i].'&nbsp;</td>'."\n";
          }
          echo '</tr>';
        //////////////Update//////////////////
      }
}


?>