<?php
session_start();
$errors = [];
if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST) {
     $radio = $_POST['radio'];
    $radio1 = $_POST['radio1'];
    $radio2 = $_POST['radio2'];
    $radio3 = $_POST['radio3'];
    $radio4 = $_POST['radio4'];
    $total = '';
    $final = '';
   

   
    if(empty($_POST['radio'])){
        $errors['radio'] = "<div class='text-danger font-weight-bold'> Please answer Q1 </div>";
    }
    if(empty($_POST['radio1'])){
        $errors['radio1'] = "<div class='text-danger font-weight-bold'> Please answer Q2 </div>";
    }
    if(empty($_POST['radio2'])){
        $errors['radio2'] = "<div class='text-danger font-weight-bold'> Please answer Q3 </div>";
    }
    if(empty($_POST['radio3'])){
        $errors['radio3'] = "<div class='text-danger font-weight-bold'> Please answer Q4 </div>";
    }
    if(empty($_POST['radio4'])){
        $errors['radio4'] = "<div class='text-danger font-weight-bold'> Please answer Q5 </div>";
    }
    if(empty($errors))
    {
       switch($radio){
    case 'bad';
    $total = 0;
    break;
    case 'good';
    $total = 3;
    break;
    case 'very good';
    $total = 5;
    break;
    case 'excellent';
    $total = 10;
    break;

  } ;


  switch($radio1){
    case 'bad';
    $total += 0;
    break;
    case 'good';
    $total += 3;
    break;
    case 'very good';
    $total += 5;
    break;
    case 'excellent';
    $total += 10;
    break;

  };

  switch($radio2){
    case 'bad';
    $total += 0;
    break;
    case 'good';
    $total += 3;
    break;
    case 'very good';
    $total += 5;
    break;
    case 'excellent';
    $total += 10;
    break;

  };

  switch($radio3){
    case 'bad';
    $total += 0;
    break;
    case 'good';
    $total += 3;
    break;
    case 'very good';
    $total += 5;
    break;
    case 'excellent';
    $total += 10;
    break;

  };

  switch($radio4){
    case 'bad';
    $total += 0;
    break;
    case 'good';
    $total += 3;
    break;
    case 'very good';
    $total += 5;
    break;
    case 'excellent';
    $total += 10;
    break;

  }
  if($total < 25){
    $final = "bad";
    
}else{
    $final = "good";
}

switch ($final){
    case 'bad';
    $mes = "Sorry that you upset , We will call you on ". "<br>" . $_SESSION['phone'];
    break;
    default:
    $mes = "thank you";
}
 




   
 
    }


  

   
   
  

 
    



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
            <form method="POST" class="col-12">
                <table class="col-12 text-center  mt-5" >
                    <thead class="table-primary">
                        <tr>
                        <th>Question</th>
                        <th style="text-align: center ; padding:7px;">Review</th>
                        

                        </tr>


                    </thead>

                    <tbody>
                        <tr class="q1">
                             <th>Are you satisfied with the level of cleanness?</th>

                         
                         
                              <td><?php echo $radio?></td>

                     
                        </tr>


                        <tr class="q2">
                             <th>Are you satisfied with the price of services?</th>

                         
                             <td><?php echo $radio1?></td>


                        
                        </tr>


                        <tr class="q3">
                             <th>Are you satisfied with the level of nursing?</th>

                       
                             <td><?php echo $radio2?></td>

                       
                        </tr>


                        <tr class="q4">
                             <th>Are you satisfied with the level of doctors?</th>

                       
                             <td><?php echo $radio3?></td>

                      
                        </tr>




                        <tr class="q5">
                             <th>Are you satisfied with the level of calmness ?</th>

                      
                             <td><?php echo $radio4?></td>


                       
                        </tr>

                        <tr class="total">
                             <th class="table-primary">Total</th>

                             <td class="table-primary"><?php echo $final?></td>
                            <td class="table-dark text-center "><?php echo $mes?></td>

                       
                        </tr>

                        
                        







                       



                    </tbody>

                </table>

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


