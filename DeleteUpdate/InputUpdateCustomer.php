

<form action="UpdateCustomer.php" method="post">
<?php
echo "CustomerID:<input disabled type='text' name='Fname' placeholder=".$_POST['id']."><br><br>";
?>
Firstname: <input type="text" name="Fname"><br><br>
Lastname: <input type="text" name="Lname"><br><br>


<input type="submit" name="someAction" value="Update"><br>
<br><input type="button" name="back" class="btn btn-primary" onclick="location.href='SelectCustomer.php'" value="Back"> </button>