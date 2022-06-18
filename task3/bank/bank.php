<?php

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    
    
 $name= $_POST['name'];
 $loan= $_POST['loan'];
 $years= $_POST['years'];



if ($years <= 3) {
    $interest =0.1;
    $amount_interest = $loan*0.1 *$years;
    
   
} else {
    $interest =0.15;
    $amount_interest = $loan*0.15 *$years;
   
} 


$total_amount= $amount_interest + $loan;
$monthly_installment = $total_amount/($years*12);





}




?>

<!doctype html>
<html lang="en">

<head>
    <title>Ecommerce</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-primary mt-5">
                <h4>
                    Bank
                </h4>
            </div>
            <div class="col-4 offset-4  mt-5">
                <form  method="POST">
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" name="name" id="Name" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="loan">loan</label>
                        <input type="number" name="loan" id="Phone" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="years">number of years </label>
                        <input type="number" name="years" id="Phone" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    
                    <button class=" btn btn-outline-primary form-control" name="calc"> Calc </button>
                    <br> <br>
                  
                    <?php if (isset($_POST['calc'])) { ?>
                        <table>
                        <thead>
                         <th style="padding:8px">name</th>
                        <th style="padding:8px">loan</th>
                        <th style="padding:8px"> interest</th>
                        <th style="padding:8px">total </th>
                        <th style="padding:8px">installment</th>

                        </thead>

                        <tbody>
                        <tr>
                        <td style="padding:8px"> <?php if(isset($name)){echo $name;}?></td>
                        <td style="padding:8px"> <?php if(isset($loan)){echo $loan;}?></td>
                        <td style="padding:8px"> <?php if(isset($amount_interest)){echo $amount_interest;}?></td>
                        <td style="padding:8px"> <?php if(isset($total_amount)){echo $total_amount;}?></td>
                        <td style="padding:8px"> <?php if(isset($monthly_installment)){echo $monthly_installment;}?></td>
                        </tr>
                        </tbody>
                       
                    </table>
                    <?php  }  ?>
                   
                    
                      
                   
                    

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