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
                    <h1> Get The Grade</h1>
                </div>
            </div>
            <div class="col-6 offset-3">
                <form method="POST" class="text-center">
                    <div class="form-group">
                        <label for="first">Physics</label>
                        <input type="number" name="num1" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="first">Chemistry</label>
                        <input type="number" name="num2" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="first">Biology</label>
                        <input type="number" name="num3" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="first">Mathematics</label>
                        <input type="number" name="num4" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="first">Computer</label>
                        <input type="number" name="num5" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>


                    <button class="btn btn-outline-dark btn-sm">calc</button>

                    <?php
                    if ($_POST) {
                        $num1 = $_POST['num1'];
                        $num2 = $_POST['num2'];
                        $num3 = $_POST['num3'];
                        $num4 = $_POST['num4'];
                        $num5 = $_POST['num5'];
                        $sum = $num1 + $num2 + $num3 + $num4 + $num5;
                        $precentage = ($sum / 500) * 100;

                      if($precentage > 100 || $precentage <= 0){
                          echo "You have to enter correct degree";

                      }else
                      { switch ($precentage) {
                            case $precentage >= 90:
                                echo $precentage . '%' . ' GRADE A';
                                break;
                            case $precentage >= 80:
                                echo $precentage . '%' . ' GRADE B';
                                break;
                            case $precentage >= 70:
                                echo $precentage . '%' . ' GRADE C';
                                break;
                            case $precentage >= 60:
                                echo $precentage . '%' . ' GRADE D';
                                break;
                            case $precentage >= 40:
                                echo $precentage . '%' . ' GRADE E';
                                break;
                                case $precentage < 40 : 
                                    echo $precentage . '%' . ' GRADE F' ;
                                     break;
                            default:
                                echo 'you have to enter Degree';
                                break;
                        }

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