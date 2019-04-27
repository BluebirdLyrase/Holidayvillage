<html>

<form action="insertฺัณฏ.php" method="post">

<b>Insert</b><br><br>

CustomerID:
<?php
$connect = mysqli_connect("localhost","root","","holidayvillage");
$sql ='SELECT RoomID
FROM room';
$result = mysqli_query($connect,$sql);
if(!$result){
  echo mysqli_error($connect);
}else{

while ($row = mysqli_fetch_array($result,MYSQLI_NUM)){
  echo '<option value='.$row[0].'>'.$row[0].'</option>';
}

}
?>
Check-in Date: <input type="date" name="CheckIn"><br><br>
Check-out Date: <input type="date" name="CheckOut"><br><br>
Extra Bed: <select name="ExtraBed">
  <option value="0">No</option>
  <option value="1">Yes</option>
</select><br><br>
Room ID:<select name="RoomID">
<?php
$connect = mysqli_connect("localhost","root","","holidayvillage");
$sql ='SELECT RoomID
FROM room';
$result = mysqli_query($connect,$sql);
if(!$result){
  echo mysqli_error($connect);
}else{

while ($row = mysqli_fetch_array($result,MYSQLI_NUM)){
  echo '<option value='.$row[0].'>'.$row[0].'</option>';
}

}
?>

</select><br><br>
<input type="submit" name="someAction" value="submit">
</form>

<form action="../index.php" method="post">
<input type="submit" name="back" value="Back">
</form>
</html>