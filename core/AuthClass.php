<?php

session_start();

class AuthClass {

    private $hostname = DB_HOST;
    private $username = DB_USERNAME;
    private $password = DB_PASSWORD;
    private $database = DB_NAME;
    public $connection;

    public function __construct() {

        $host = mysqli_connect($this->hostname, $this->username, $this->password);
        if ($host) {
            $connection = mysqli_select_db($host, $this->database);
            if (!$connection) {
                die('An error occured while trying to connect to the database.');
            }
            $this->connection = $host;
        }
    }
    function permissionChecker($data) {

    $CI = & get_instance();

    $sessionPermission = $CI->session->userdata('master_permission_set');

    if(isset($sessionPermission[$data]) && $sessionPermission[$data] == 'yes') {

        return true;

    }

    return false;

}

    public function sendmail($mailto = '', $subject = '', $message = '', $replytoemail = '', $replytoname = "", $attachment = '') {

        include __DIR__ . '/PHPMailer/Config.php';

        $mail->setFrom('noreply@mmiti.tech', 'MMITI');
        $mail->addAddress($mailto, 'MMITI');
        if (!empty($replytoemail)) {
            $mail->AddReplyTo($replytoemail, $replytoname);
        }
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;
        if (!empty($attachment)) {
            $mail->addAttachment($attachment);
        }
        if (!$mail->send()) {
            return false;
        } else {
            return true;
        }
    }

    function forgotPassword($email = '', $type = '') {

        if ($type == "admin") {
            $result = $this->connection->query("SELECT * FROM systemadmin where email ='$email' LIMIT 1");
            $row = $result->fetch_object();
            if (!empty($row)) {
                $userid = $row->systemadminID;
            }
        }

        if ($type == "franchises" || $type == "dm") {
            $result = $this->connection->query("SELECT * FROM teacher where email ='$email' LIMIT 1");
            $row = $result->fetch_object();

            if (!empty($row)) {
                $userid = $row->teacherID;
            }
        }


        if (empty($row)) {
            return false;
        } else {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < 30; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }

            $subject = "Forgot Password";
              $message = 'Dear User,<br/><br/>
                To reset your  Account password, Please click the link below or copy paste in Browser. <br/><br/>
                <a href="' . SITE_URL . 'admin/login/changePassword.php?type=' . $type . '&user=' . base64_encode($userid) . '">' . SITE_URL . 'login/changePassword.php?type=' . $type . '&user=' . base64_encode($userid) . '&key=' . $randomString . '</a><br/><br/>
                Thanks';

            if ($this->sendmail(ADMIN_EMAIL, $subject, $message)) {

                return true;
            } else {
                return false;
            }
        }
        die;
    }

    function changePassword($id, $password, $type) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        if ($type == "admin") {
            $this->connection->query("UPDATE systemadmin SET newpassword='$password' WHERE systemadminID=" . base64_decode($id));
            return true;
        }
        if ($type == "franchises" || $type == "dm") {
            $this->connection->query("UPDATE teacher SET newpassword='$password' WHERE teacherID=" . base64_decode($id));
            return true;
        }
    }

    function adminLogin($username, $password) {
        $result = $this->connection->query("SELECT * FROM systemadmin where username ='$username'  LIMIT 1");
        $row = $result->fetch_object();
        if (!empty($row)) {
            if (password_verify($password, $row->newpassword)) {
                $_SESSION['user_name'] = $row->name;
                $_SESSION['user_id'] = $row->systemadminID;
                $_SESSION['mmitibackend'] = 'true';
                $_SESSION['login_user_name'] = $row->username;
                $_SESSION['user_type'] = 'admin';
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    function franchaiseLogin($username, $password) {
        $result = $this->connection->query("SELECT * FROM teacher where username ='$username' and active='1'  LIMIT 1");
        
        $row = $result->fetch_object();
       
        if (!empty($row)) {
            if (password_verify($password, $row->newpassword)) {
                $_SESSION['user_name'] = $row->franchisee_name;
                $_SESSION['user_id'] = $row->teacherID;
                $_SESSION['login_user_name'] = $row->username;
                $_SESSION['user_type'] = 'Franchises';
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

}
