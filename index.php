<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!doctype html>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <?php
if($_SESSION['logedIn']!=true){
    header('Location:Login.php');  
}else{
}

?>
    <div class="container mt-5  ">
        <div class="card">
            <div class="card-header text-center">
                <b> Menu</b>
            </div>
            <div class="card-body">
                <h4 class="card-title">
                    <dl class="row">
                        <dt class="col-sm-3">
                            <form action="Insert/input.php" method="post">
                            <i class="fa fa-user-plus in-line" aria-hidden="true"></i>
                                <input type="submit" class="btn btn-primary in-line" name="button"
                                    value="Insert New Customer" />
                            </form>
                        </dt>
                        <dd class="col-sm-9">
                            <form action="Insert/inputByID.php" method="post">
                            <i class="fa fa-user-plus in-line" aria-hidden="true"></i>
                                <input type="submit" class="btn btn-primary" name="button"
                                    value="Insert old Customer (insertByID)" />
                            </form>
                        </dd>

                        <dt class="col-sm-3">
                            <form action="DeleteUpdate/SelectCustomer.php" method="post">
                            <i class="fas fa-user-minus"></i>
                                <input type="submit" class="btn btn-warning" name="button"
                                    value="Delete/Update Customer" />
                            </form>
                        </dt>
                        <dd class="col-sm-9">
                            <form action="DeleteUpdate/SelectStaydetail.php" method="post">
                            <i class="fas fa-user-minus"></i>
                                <input type="submit" class="btn btn-warning" name="button"
                                    value="Delete/Update Staydetail" />
                            </form>
                        </dd>
                    </dl>
                </h4>
                <form action="Search/input.php" method="post">
                <i class="fa fa-search" aria-hidden="true"></i>
                    <input type="submit" class="btn btn-info" name="button" value="Search/report" />
                </form>
            </div>
        </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</body>

</html>