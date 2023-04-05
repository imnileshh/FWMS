<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donar Sign Up | Food Waste Managment System</title>
    <?php require 'links.php'; ?>
    <?php include 'php/reg_form_handler.php'; ?>

    <?php
//index.php

//Include Configuration File
include('config.php');

$login_button = '';


if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
  


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

  $_SESSION['is_login'] = true;
  $_SESSION['alert'] = "You're Succefully Logged in to FWMS !!";
 
  $_SESSION['access_token'] = $token['access_token'];

  $google_service = new Google_Service_Oauth2($google_client);

 
  $_SESSION['is_login'] = true;
  $_SESSION['alert'] = "You're Succefully Logged in to FWMS !!";

  $data = $google_service->userinfo->get();

 
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
   $_SESSION['is_login'] == true;

  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }


}
}


if(!isset($_SESSION['access_token']))
{

 $login_button = ' <a class="btn btn-lg btn-google btn-block text-uppercase btn-outline" href="'.$google_client->createAuthUrl().'"><img src="https://img.icons8.com/color/16/000000/google-logo.png">Login With Google</a>';
}

?>
</head>
<body>
    <header>
        <?php require 'navbar.php'; ?>
    </header>

    <main >
    <section class="login-block">
    <form action="" method="post">                    
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <form class="md-float-material form-material" action="#" method="POST">
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="text-center heading" >Donar Sign Up</h3>
                                        
                                    </div>
                                </div>
                                
                                <div class="form-group form-primary">
                                 
                                     <input type="text" class="form-control" name="first_name" value="" placeholder="First name" id="first_name"> 
                                </div>
                                <div class="form-group form-primary">
                                 
                                     <input type="text" class="form-control" name="last_name" value="" placeholder="Last name" id="first_name"> 
                                </div>

                                <div class="form-group form-primary">
                                 
                                     <input type="text" class="form-control" name="address" value="" placeholder="address" id="address"> 
                                </div>
    
                                <div class="form-group form-primary">
                                    <input type="email" class="form-control" name="email" value="" placeholder="Email" id="email">
                                   
                                </div>
    
                                <div class="form-group form-primary">
                                   <input type="password" class="form-control" name="password" placeholder="Password" value="" id="password">
                                  
                                </div>
    
                                <div class="form-group form-primary">
                                    <input type="password" class="form-control" name="password_confirm" placeholder="Repeat password" value="" id="password_confirm">
                                    
                                </div>
    
    
                                <div class="row">
                                <div class="d-flex justify-content-end pt-3">
                                            <button type="reset" class="btn btn-dark capsule-btn">Reset
                                                all</button>
                                            <button type="submit" class="btn btn-primary ms-2 capsule-btn" name="reg_user">Sign
                                                Up</button>
                                        </div>
                                </div>
    
                                <div class="or-container"><div class="line-separator"></div> <div class="or-label">or</div><div class="line-separator"></div></div>
    
    
                                <div class="row">
                                    <div class="col-md-12">
                                      <a class="<?php echo '<div align="center">'.$login_button . '</div>'; ?></a>
    
                                    </div>
                                </div>
                                <br>
    
                                <p class="text-inverse text-center">Already have an account? <a href="login.php" data-abc="true">Login</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>
</section>
    </main>

    <?php require 'footer.php'; ?>
</body>
</html>



