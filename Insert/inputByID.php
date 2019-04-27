<html>

<form action="insertByID.php" method="post">

<b>Insert</b><br><br>

CustomerID:<select name="CustomerID">
<?php
$connect = mysqli_connect("localhost","root","","holidayvillage");
$sql ='SELECT *
FROM Customer';
$result = mysqli_query($connect,$sql);
if(!$result){
  echo mysqli_error($connect);
}else{

while ($row = mysqli_fetch_array($result,MYSQLI_NUM)){
  echo '<option value='.$row[0].'>'.$row[0].'-'.$row[1].'-'.$row[2].'</option>';
}
<<<<<<< HEAD
echo '</select>';
=======
echo '</select><BR><BR>';
>>>>>>> f3c3e6f0be3a8bd16891857d24faa50617eb6afc
}
?>


Check-in Date: <input type="date" name="CheckIn"><br><br>
Check-out Date: <input type="date" name="CheckOut"><br><br>
<<<<<<< HEAD
Extra Bed: <select name="ExtraBed">
  <option value="0">No</option>
  <option value="1">Yes</option>
=======
Extra Bed:  <br>
<input type="Radio" name="ExtraBed" value="0"> No  <br>
<input type="Radio" name="ExtraBed" value="1"> Yes  <br>

>>>>>>> f3c3e6f0be3a8bd16891857d24faa50617eb6afc


</select><br><br>
Room ID:<select name="RoomID">
<?php
$sql2 ='SELECT RoomID
FROM room';
$result = mysqli_query($connect,$sql2);
if(!$result){
  echo mysqli_error($connect);
}else{

while ($row = mysqli_fetch_array($result,MYSQLI_NUM)){
  echo '<option value='.$row[0].'>'.$row[0].'</option>';
}
}
mysqli_close($connect)
?>

</select><br><br>
<input type="submit" name="someAction" value="submit">
</form>

<form action="../index.php" method="post">
<input type="submit" name="back" value="Back">
</form>
</html>