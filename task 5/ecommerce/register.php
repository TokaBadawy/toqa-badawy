<?php
$title = "Register ";
include_once "layouts/header.php";
include_once "App/HTTP/Middlewares/guest.php";
include_once "layouts/navbar.php";
include_once "layouts/breadcrumb.php";
use  App\HTTP\Requests\Validation;
use App\DataBase\Models\User;
$validation = new Validation;

if($_SERVER['REQUEST_METHOD']=="POST"){
    $validation->setValueName('first_name')->setValue($_POST['first_name'])->required()->max(32);
    $validation->setValueName('lastt_name')->setValue($_POST['last_name'])->required()->max(32);
    $validation->setValueName('email')->setValue($_POST['email'])->required()->regex('/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/')->unique('users','email');
    $validation->setValueName('phone')->setValue($_POST['phone'])->required()->regex('/^01[0125][0-9]{8}$/')->unique('users','phone');
    $validation->setValueName('password')->setValue($_POST['password'])->required()->regex('//')->confirmed($_POST['password_confirmation']);
    $validation->setValueName('password_confirmation')->setValue($_POST['password_confirmation'])->required();
    $validation->setValueName('gender')->setValue($_POST['gender'])->required()->in(['m','f']);
    if(empty( $validation->getErrors())){
        $code =rand(100000,999999);
        $user = new user;
        $user->setFirst_name($_POST['first_name'])->setlast_name($_POST['last_name'])
        ->setEmail($_POST['email'])->setPhone($_POST['phone'])->setPassword($_POST['password'])
        ->setGender($_POST['gender'])->setVerification_code($code);
        if($user->create()){
            header('location:verification_code.php?email='.$_POST['email']);die;
            
        }else{

            $error = "<div class='alert alert-danger'> Registeration is faild </div>";

        }
      


    }


}


?>


    <div class="login-register-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                           
                            <a data-toggle="tab" href="#lg2">
                                <h4> register </h4>
                            </a>
                            <?= $error ?? "" ?>
                        </div>
                        <div class="tab-content">
                        
                            <div id="lg2" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form action="#" method="post">
                                            <input type="text" name="first_name"  value="<?= $_POST['first_name'] ?? "" ?>" placeholder="Fisrt Name">
                                            <?=$validation->getError('first_name')?>
                                            <input type="text" name="last_name" value="<?= $_POST['last_name'] ?? "" ?>" placeholder="Last Name">
                                            <?=$validation->getError('last_name')?>
                                            <input name="email" placeholder="Email" type="email" value="<?= $_POST['email'] ?? "" ?>" >
                                            <?=$validation->getError('email')?>
                                            <input name="phone" placeholder="Phone" type="number" value="<?= $_POST['phone'] ?? "" ?>" >
                                            <?=$validation->getError('phone')?>
                                            <input type="password" name="password" placeholder="Password">
                                            <?=$validation->getError('password')?>
                                            <input type="password" name="password_confirmation" placeholder="Password_Confirmation">
                                            <?=$validation->getError('password_confirmation')?>
                                            <select class="form-control" name="gender">
                                                <option value="m" <?= (isset($_POST['gender']) && $_POST['gender'] == 'm') ? "selected" : "" ?>>male</option>
                                                <option value="f" <?= (isset($_POST['gender']) && $_POST['gender'] == 'f') ? "selected" : "" ?>>female</option>

                                            </select>
                                            <?=$validation->getError('gender')?>
                                            <div class="button-box mt-5">
                                                <button type="submit"><span>Register</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once "layouts/footer.php";
 include_once "layouts/footer-scripts.php";


?>
   