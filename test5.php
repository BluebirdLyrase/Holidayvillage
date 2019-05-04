<?php
$connect = mysqli_connect("localhost","root","","Holidayvillage");
mysqli_error($connect);
$sql = 'SELECT * FROM staydetail as s
        join customer as c
        on c.CustomerID = s.CustomerID
        join room as r
        on r.RoomID = s.RoomID';
$result = mysqli_query($connect, $sql);
$numfields = mysqli_num_fields($result);
echo  '<table border = 1 >';
while ($row = mysqli_fetch_array($result)){
    echo '<form name = "frmDelete'.$row['CustomerID'].'"method = "post" action = "DeleteCustomer.php">'."\n";
    echo '<tr>';
    for($i = 0; $i < $numfields; $i++){
        echo '<td>'.$row[$i].'&nbsp;</td>'."\n";
    }
}
echo '</table>';
?>