<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container ">
        <div class="row">
            <div class="col-12 my-5">
                <div class="h1 text-center text-primary">
                    <h1> Electricity Bill</h1>
                </div>
            </div>
            <div class="col-6 offset-3">
                <form method="POST" class="text-center">
                    <div class="form-group">
                        <label for="first">electricity units</label>
                        <input type="number" name="num" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>



                    <button class="btn btn-outline-dark btn-sm">calc</button>

                    <?php
                    if ($_POST) {

                        $num = $_POST['num'];
                        define('taxes', 0.2);
                        $precentage = taxes * $num;
                        $bill = $num + taxes + $precentage;

                        switch ($num) {
                            case $num < 50:
                                echo $num . ' units , ';
                                echo '0.50' . ' unit price , ';
                                echo taxes . ' taxes , ';
                                echo $bill * 0.50 . ' EGP';

                                break;
                            case  $num <= 100:
                                echo $num . ' units ,  ';
                                echo '0.75' . ' unit price , ';
                                echo taxes . ' taxes , ';
                                echo $bill * 0.75 . ' EGP';

                                break;
                            case  $num > 100:
                                echo $num . ' units , ';
                                echo '1.20' . ' unit price , ';
                                echo taxes . ' taxes ,  ';
                                echo $bill * 1.20 . ' EGP';

                                break;

                            case  $num > 250:
                                echo $num . ' units , ';
                                echo '1.50' . ' unit price , ';
                                echo taxes . ' taxes ,  ';
                                echo $bill * 1.50 . ' EGP';

                                break;
                            default:
                                echo 'You have to Enter correct units';
                                break;
                        }
                    }




                    ?>
                </form>


            </div>


        </div>


    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>