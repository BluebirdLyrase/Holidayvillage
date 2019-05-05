<?php

$connect = mysqli_connect("localhost","root","","holidayvillage");
$sql ='SELECT s.OrderID,s.CustomerID,c.Fname,c.Lname,s.Date,s.Extrabed,r.RoomID,R.RoomGrade,r.RoomPrice
FROM staydetail as s
join customer as c
on c.CustomerID = s.CustomerID
join room as r
on r.RoomID = s.RoomID
order by s.Date
';
$result = mysqli_query($connect,$sql);
$minsql =  ' SELECT MIN(Date)
FROM staydetail';
$minresult = mysqli_query($connect,$minsql);
while ($row = mysqli_fetch_array($minresult)){ 
    $min = $row["MIN(Date)"];
}
$Nextweek =date_create($min) ;
$i = 1;


      while ($row = mysqli_fetch_array($result)){
        $Date = $row["Date"];
        $CurrentDate =date_create($Date) ;
        if($CurrentDate>=$Nextweek){
            
            echo '</table><br>';
            echo '<table border = "1">
            <th>OrderID</th> 
            <th>CustomerID</th> 
            <th>Firstname</th> 
            <th>Lastname</th> 
            <th>Date</th> 
            <th>Extrabed</th> 
            <th>RoomID</th> 
            <th>RoomGrade</th> 
            <th>RoomPrice</th>';
            $Nextweek->modify('+7 day');
            echo "<b>Week ".$i."</b>";
            $i++;
        }
        echo '<tr>';
              echo '<td>'.$row["OrderID"].'&nbsp;</td>'."\n";
              echo '<td>'.$row["CustomerID"].'&nbsp;</td>'."\n";
              echo '<td>'.$row["Fname"].'&nbsp;</td>'."\n";
              echo '<td>'.$row["Lname"].'&nbsp;</td>'."\n";
              echo '<td>'.$row["Date"].'&nbsp;</td>'."\n";
              echo '<td>'.$row["Extrabed"].'&nbsp;</td>'."\n";
              echo '<td>'.$row["RoomID"].'&nbsp;</td>'."\n";
              echo '<td>'.$row["RoomGrade"].'&nbsp;</td>'."\n";
              echo '<td>'.$row["RoomPrice"].'&nbsp;</td>'."\n";
          echo '</tr>';


      }
      echo '</table>';
    


?>