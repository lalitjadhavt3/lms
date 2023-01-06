<?php include 'core/Dbconfig.php';
include 'core/AuthClass.php';
?>
<!DOCTYPE html>
<html lang="en">
  <!--login-->
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <title>Login - MMITI Backend</title>

    <link rel="shortcut icon" href="assets/img/favicon.png" />

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css" />
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css" />

    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
  	<?php
        if (isset($_POST['username']) && isset($_POST['password'])) {
            extract($_POST);
            $auth = new AuthClass();
            $res = $auth->adminLogin(filter_var($username, FILTER_SANITIZE_EMAIL) ,filter_var($password, FILTER_SANITIZE_EMAIL));
            if ($res) {
                header('Location:'.SITE_URL.'index.php');
            } else {
                echo '<script>swal("Error", "You are using the wrong username and/or password", "error");</script>';
            }
        }
        ?>
    <div class="main-wrapper login-body">
      <div class="login-wrapper">
        <div class="container">
          <img class="img-fluid logo-dark mb-2" src="assets/img/logo.png" alt="Logo" />
          <div class="loginbox">
            <div class="login-right">
              <div class="login-right-wrap">
                <h1>Login</h1>
                <p class="account-subtitle">Access to our dashboard</p>
                <form action="" method="post">
                  <div class="form-group">
                    <label class="form-control-label">Email Address</label>
                    <input type="text" class="form-control" name="username" />
                  </div>
                  <div class="form-group">
                    <label class="form-control-label">Password</label>
                    <div class="pass-group">
                      <input type="password" class="form-control pass-input" name="password" />
                      <span class="fas fa-eye toggle-password"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      
                      <div class="col-6 text-end">
                        <a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>
                      </div>
                    </div>
                  </div>
                  <button class="btn btn-lg btn-block btn-primary w-100" type="submit">Login</button>
                  


                 
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/feather.min.js"></script>

    <script src="assets/js/script.js"></script>
  </body>

  <!--login-->
</html>
