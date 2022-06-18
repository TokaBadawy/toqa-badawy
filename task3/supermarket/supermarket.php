 <?php


    if (isset($_POST['invoice'])) {
        $name = $_POST['name'];
        $city = $_POST['city'];
        $number_of_products = $_POST['number_of_products'];



        //  + $delivery  ;
        //      ;



    }/*print_r($_POST);die;*/

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
                     SuperMarket
                 </h4>
             </div>
             <div class="col-4 offset-4  mt-5">
                 <form method="POST">
                     <div class="form-group">
                         <label for="Name">Name</label>
                         <input type="text" name="name" id="Name" class="form-control" placeholder="" value="<?= isset($_POST['name']) ? $_POST['name'] : ""  ?>" aria-describedby="helpId">
                     </div>
                     <div class="form-group">
                         <label for="Number Of Products">Number Of Products</label>
                         <input type="number" name="number_of_products" class="form-control" placeholder="" value="<?= isset($_POST['number_of_products']) ? $_POST['number_of_products'] : ""  ?>" aria-describedby="helpId">
                     </div>
                     <div class="form-group">
                         <label for="City">City</label>
                         <select name="city" id="City" class="form-control">
                             <option <?= (isset($_POST['city']) && $_POST['city'] == 'cairo') ? 'selected' : ""  ?>value="cairo">Cairo</option>
                             <option <?= (isset($_POST['city']) && $_POST['city'] == 'giza') ? 'selected' : ""  ?> value="giza">Giza</option>
                             <option <?= (isset($_POST['city']) && $_POST['city'] == 'alex') ? 'selected' : ""  ?> value="alex">Alex</option>
                             <option <?= (isset($_POST['city']) && $_POST['city'] == 'others') ? 'selected' : ""  ?> value="others">Others</option>
                         </select>
                     </div>
                     <button class=" btn btn-outline-primary form-control" name="buy"> Buy </button>
                     <br><br>
                     <?php if (isset($_POST['buy'])) { ?>
                         <table class="table mt-5">
                             <thead class="table-primary">
                                 <th class="text-center">product name</th>
                                 <th class="text-center">price</th>
                                 <th class="text-center">quantity</th>
                             </thead>
                             <tbody>
                                 <?php
                                    for ($i = 1; $i <= $_POST['number_of_products']; $i++) { ?>
                                     <tr>
                                         <td style="padding: 5px;"><input style="padding: 10px;" type="text" name="p-name<?php echo $i?>"></td>
                                         <td style="padding: 5px;"> <input style="padding: 10px;" type="number" name="p-price<?php echo $i?>"></td>
                                         <td style="padding: 5px;"><input style="padding: 10px;" type="number" name="p-quantity<?php echo $i?>"></td>

                                     </tr>
                                 <?php }
                                    ?>
                             </tbody>
                         </table>
                         <button class=" btn btn-outline-primary form-control" name="invoice"> Invoice </button>
                     <?php  }  ?>





                     <?php if (isset($_POST['invoice'])) { ?>

                        <table>
                            <thead>
                            <th style="font-weight:bold;" ><?=$name."'s" . " invoice  ,  "?></th> 
                            <th style="font-weight:bold;"><?=" the city is  " .$city?></th> 
                            </thead>
                         </table>


                         <table class="table ">
                         <thead class="table-primary">
                                 <th class="text-center">product name</th>
                                 <th class="text-center">price</th>
                                 <th class="text-center">quantity</th>
                                 <th class="text-center">total</th>
                                 <th class="text-center">discount</th>
                                 <th class="text-center">valueDiscount</th>
                                 <th class="text-center">delivery</th>
                                 <th class="text-center">finalPrice</th>
                                    
                                

                             </thead>
                             <tbody>

                                 <?php
                                    for ($i = 1; $i <= $_POST['number_of_products']; $i++) {

                                        $total= $_POST['p-quantity'.$i] * $_POST['p-price'.$i];
        

                                        if($total < 1000){
                                            $discount =0;
                                
                                
                                        }else if($total < 3000){
                                            $discount =0.1;
                                
                                
                                        }else if($total < 4500){
                                            $discount =0.15;
                                
                                
                                        }else{
                                            $discount =0.2;
                                
                                        };
                                
                                        $valueDiscount=  $total * $discount;

                                        switch ($_POST['city']) {
                                            case 'cairo':
                                                $delivery = 0;
                                                break;
                                            case 'giza':
                                                $delivery = 30;
                                                break;
                                            case 'alex':
                                                $delivery = 50;
                                                break;
                                            default:
                                                $delivery = 100;
                                                break;
                                        };

                                        $finalPrice=  ($total + $delivery)- $valueDiscount;
                
                
                                        
                                        ?>
                                        
                                     <tr>
                                      
                                        <td style="padding: 10px;"><?=$_POST['p-name' .$i]?></td> 
                                        <td style="padding: 10px;"><?=$_POST['p-price' .$i]?></td> 
                                        <td style="padding: 10px;"><?=$_POST['p-quantity' .$i]?></td> 
                                        <td style="padding: 10px;"><?=$total?></td> 
                                        <td style="padding: 10px;"><?=$discount?></td> 
                                        <td style="padding: 10px;"><?=$valueDiscount?></td> 
                                        <td style="padding: 10px;"><?=$delivery ?></td> 
                                        <td style="padding: 10px;"><?= $finalPrice?></td> 

                                     </tr>
                                      
                                      <?php } ?>  
                                                                      
                                  
                        <?php } ?>
                                   
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

 </html>