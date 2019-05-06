<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!doctype html>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<div class="container">
    <h4 class="text-center"><b>Update Customer</b></h4>
    <br><br>
    <div class="container">
        <div class="card-group">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title ">

                        <form action="UpdateCustomer.php" method="post">
                            <?php
echo "<div class='text-center'>CustomerID:<input class='form-control'  disabled type='text' name='id' placeholder=".$_POST['id']."><br></div>";
echo '<input type = "hidden" name = "id" value = "'.$_POST['id'].'"  >'."\n";
echo '<div class="container"><div class="card-group">';
echo "<div class='col-6'>Firstname: <input class='form-control' type='text' name='Fname' placeholder=".$_POST['Fname']."></div>";
echo "<div class='col-6'>Lastname: <input class='form-control' type='text' name='Lname' placeholder=".$_POST['Lname']."><br></div></div></div>";
?>
                </div>
            </div>
            </div>
            <br><br>
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                    <input type="button" name="back" class="btn btn-primary"
                            onclick="location.href='SelectCustomer.php'" value="Back" class="text-right"> </button>
                    </div>
                    </form>
                    <div class="col-sm-text-left">
                    <input type="submit" name="someAction" value="Update" class="btn btn-primary" class="text-left">
                        
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>