<?php 
    $env = "dev";//prod or dev
    @session_start(); 
    require "db.php";
    if (isset($_POST['username']) && isset($_POST['password'])) {
        function validate($data){
           $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return $data;
        }
        $username = validate($_POST['username']);
        $password = validate($_POST['password']);
        $md5password = md5($password);
        if (empty($username)) {
            header("Location: login.php?error=User Name is required");
            exit();
        }else if(empty($password)){
            header("Location: login.php?error=Password is required");
            exit();
        }else{
            $sql = "SELECT * FROM auth_users WHERE username='$username' AND password='$md5password' ";
            //echo $sql;
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if ($row['username'] === $username && $row['password'] === $md5password) {
                    echo "Logged in!";
                    $_COOKIE['username'] = $row['username'];
                    $_COOKIE['usertype'] = $row['usertype'];
                    $_COOKIE['mmitibackend'] = true;
                    $_COOKIE["custid"] = $row['id'];
                    $_COOKIE["loggedin"] = true;
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['id'] = $row['id'];
                    $_SESSION["loggedin"] = true;
                    $_SESSION["mmitibackend"] = true;
                    $_SESSION['usertype'] = $row['usertype'];
                    // print_r($_COOKIE);
                    //  print_r($_SESSION);
                    if($env =="prod"){
                        echo '<script>window.location.replace("https://mmiti.tech/backend/index.php");</script>';
                    }
                    else
                    {
                        echo '<script>window.location.replace("http://localhost/mmiti/lms/index.php");</script>';
                    }


                }
                else{
                    header("Location: login.php?error=Incorect User name or password");
                    exit();
                }
            }
            else{
                        header("Location: login.php?error=Incorect User name or password");
                        exit();
                    }
        }
    }
    else{
        header("Location: login.php");
        echo 'Failure';
        exit();
    }?>