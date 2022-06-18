<?php
session_start();
if(isset($_POST['phone']));
 $_SESSION['phone'] = $_POST['phone'] ;





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
               <form action="result.php" method="POST"  class="col-12 text-center  mt-5" >
               <table class="col-12 text-center  mt-5" >
                    <thead class="table-primary">
                        <tr>
                        <th>Question</th>
                        <th style="text-align: center ; padding:7px;">Bad</th>
                        <th style="text-align: center ; padding:7px;">Good</th>
                        <th style="text-align: center ; padding:7px;">Very Good</th>
                        <th style="text-align: center ; padding:7px;">Excelent</th>

                        </tr>


                    </thead>

                    <tbody>
                        <tr class="q1">
                             <th>Are you satisfied with the level of cleanness?</th>

                         
                         <td><input type="radio" name="radio" value="bad"></td>
                         <td><input type="radio" name="radio" value="good"></td>
                         <td><input type="radio" name="radio" value="very good"></td>
                         <td><input type="radio" name="radio" value="excellent"></td>

                     
                        </tr>


                        <tr class="q2">
                             <th>Are you satisfied with the price of services?</th>

                         
                         <td><input type="radio" name="radio1" value="bad"></td>
                         <td><input type="radio" name="radio1" value="good"></td>
                         <td><input type="radio" name="radio1" value="very good"></td>
                         <td><input type="radio" name="radio1" value="excellent"></td>

                        
                        </tr>


                        <tr class="q3">
                             <th>Are you satisfied with the level of nursing?</th>

                       
                         <td><input type="radio" name="radio2" value="bad"></td>
                         <td><input type="radio" name="radio2" value="good"></td>
                         <td><input type="radio" name="radio2" value="very good"></td>
                         <td><input type="radio" name="radio2" value="excellent"></td>

                       
                        </tr>


                        <tr class="q4">
                             <th>Are you satisfied with the level of doctors?</th>

                       
                         <td><input type="radio" name="radio3" value="bad"></td>
                         <td><input type="radio" name="radio3" value="good"></td>
                         <td><input type="radio" name="radio3" value="very good"></td>
                         <td><input type="radio" name="radio3" value="excellent"></td>

                      
                        </tr>




                        <tr class="q5">
                             <th>Are you satisfied with the level of calmness ?</th>

                      
                         <td><input type="radio" name="radio4" value="bad"></td>
                         <td><input type="radio" name="radio4" value="good"></td>
                         <td><input type="radio" name="radio4" value="very good"></td>
                         <td><input type="radio" name="radio4" value="excellent"></td>

                       
                        </tr>






                       



                    </tbody>

                </table>

                <button class=" btn btn-outline-primary form-control"> Result </button>



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


