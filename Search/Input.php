
<form action="Showall.php" method="post">
<input type="submit" name="button" value="ShowAll" />
</form>

<form action="searchcustomer.php" method="post">
<?php
$connect = mysqli_connect("localhost","root","","holidayvillage");
$sql ='SELECT *
FROM customer';
$result = mysqli_query($connect,$sql);
echo "CustomerName:<select name='CustomerName'>";
while ($row = mysqli_fetch_array($result,MYSQLI_NUM)){
    echo '<option value='.$row[1].'>'.$row[1].'</option>';
      }
?>
<input type="submit" name="button" value="SearchCustomer" />
</form>

<form action="searchroom.php" method="post">
<?php
$connect = mysqli_connect("localhost","root","","holidayvillage");
$sql ='SELECT *
FROM room';
$result = mysqli_query($connect,$sql);
echo "RoomNumber:<select name='RoomNumber'>";
while ($row = mysqli_fetch_array($result,MYSQLI_NUM)){
    echo '<option value='.$row[0].'>'.$row[0].'</option>';
      }
?>
<input type="submit" name="button" value="SearchRoom" />
</form>
