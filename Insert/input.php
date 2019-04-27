<html>

<form action="insert.php" method="post">

<b>Insert</b><br><br>

Firstname: <input type="text" name="Fname"><br><br>
Lastname: <input type="text" name="Lname"><br><br>

Customer type: <select name="Customertype">
  <option value="old">Old Customer</option>
  <option value="new">New Customer</option>
</select><br><br>
Check-in Date: <input type="date" name="CheckIn"><br><br>
Check-out Date: <input type="date" name="CheckOut"><br><br>
Extra Bed:  <br>
<input type="Radio" name="ExtraBed" value="0"> No  <br>
<input type="Radio" name="ExtraBed" value="1"> Yes  <br>
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