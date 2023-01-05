<?php

class AdminClass {

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

    function updateAdminProfile($name, $email, $phone, $religion, $address, $gender, $dob) {

        $this->connection->query("UPDATE systemadmin SET name='$name', email='$email', phone='$phone', religion='$religion', address='$address', sex='$gender', dob='$dob' WHERE systemadminID=" . $_SESSION['user_id']);
        return true;
    }

    function updateFranchisesProfile($name, $email, $phone, $religion, $address, $gender, $dob) {

        $this->connection->query("UPDATE teacher SET name='$name', email='$email', phone='$phone', religion='$religion', address='$address', sex='$gender', dob='$dob' WHERE teacherID=" . $_SESSION['user_id']);
        return true;
    }

    function updateSettings($data, $id) {

        if (isset($data['password']) && !empty($data['password'])) {
            $res = $this->connection->query("UPDATE student SET username='" . $data['username'] . "', prn='" . $data['prn'] . "' , newpassword='" . password_hash($data['password '], PASSWORD_DEFAULT) . "' where studentID=" . $id);
        } else {
            $res = $this->connection->query("UPDATE student SET username='" . $data['username'] . "', prn='" . $data['prn'] . "' where studentID=" . $id);
        }
        return true;
    }

    function changeStatus($state, $franid, $type) {
        if ($state == 'true') {
            $status = 1;
        }
        if ($state == 'false') {
            $status = 0;
        }
        if ($type == 'franchase') {
            $this->connection->query("UPDATE teacher SET active='$status' WHERE teacherID=" . $franid);
        }
        if ($type == 'student') {
            $this->connection->query("UPDATE student SET active='$status' WHERE studentID=" . $franid);
        }
        return true;
    }

    function getSingleRow($table, $column, $id) {
        $result = $this->connection->query("SELECT * FROM $table where $column ='$id' LIMIT 1");
        return $result->fetch_object();
    }

    function getAllRows($table, $column, $order) {
        return $this->connection->query("SELECT * FROM $table order by $column $order ");
    }

    function getAllCourses($table, $column, $order) {
        return $this->connection->query("SELECT * FROM $table where is_active=1 order by $column $order ");
    }

    function getCources($courseids) {

        return $this->connection->query("SELECT * FROM courses where courseID IN ($courseids)");
    }

    function getAllCount($table, $studentID) {
        if ($_SESSION['user_type'] == 'Admin') {
            return $this->connection->query("SELECT count($studentID) as count FROM $table");
        } else {
            return $this->connection->query("SELECT count($studentID) as count FROM $table where  create_userID=" . $_SESSION['user_id']);
        }
    }

    function getAllCountByFilter($table, $studentID, $fromdate, $todate) {
        if ($_SESSION['user_type'] == 'Admin') {
            return $this->connection->query("SELECT count($studentID) as count FROM $table  where create_date BETWEEN '$fromdate' AND '$todate' ");
        } else {
            return $this->connection->query("SELECT count($studentID) as count FROM $table  where (create_date BETWEEN '$fromdate' AND '$todate') and create_userID=" . $_SESSION['user_id']);
        }
    }

    function getRecordWithPagination($table, $column, $order, $start_from, $limit) {
        if ($_SESSION['user_type'] == 'Admin') {
            return $this->connection->query("SELECT * FROM $table  order by $column $order LIMIT $start_from,$limit ");
        } else {
            return $this->connection->query("SELECT * FROM $table where create_userID=" . $_SESSION['user_id'] . " order by $column $order LIMIT $start_from,$limit ");
        }
    }

    function searchStudent($fromdate, $todate, $start_from, $limit) {

        if ($_SESSION['user_type'] == 'Admin') {
            return $this->connection->query("SELECT * FROM student where create_date BETWEEN '$fromdate' AND '$todate' ORDER BY studentID desc LIMIT $start_from,$limit  ");
        } else {
            return $this->connection->query("SELECT * FROM student where (create_date BETWEEN '$fromdate' AND '$todate') and create_userID=" . $_SESSION['user_id'] . " ORDER BY studentID desc LIMIT $start_from,$limit  ");
        }
    }

    function deleteRecord($table, $column, $id) {
        return $this->connection->query("DELETE FROM $table where $column = $id");
    }

    function studentPayment($data, $id) {
        $array = array();

        $result = $this->connection->query("SELECT * FROM student where studentID ='$id' LIMIT 1");
        $st = $result->fetch_object();

        $course_paid = $data['course_paid'];

        $course_remaining_amount = $st->course_remaining_amt - $course_paid;


        $course_paid_amount = $st->course_paid + $course_paid;

        $this->connection->query("UPDATE student SET course_paid='$course_paid_amount',course_remaining_amt='$course_remaining_amount', last_installment_amt='$course_paid'  WHERE studentID=" . $id);

        date_default_timezone_set('Asia/Kolkata');
        $date = date('Y-m-d H:i:s');
           $res = $this->connection->query("INSERT INTO student_installments (franchisee_name,code, name, country, state, city, address, email, phone)
VALUES ('" . $data['franchisee_name'] . "', '" . $data['franchisee_code'] . "','" . $data['name'] . "','" . $data['country'] . "','" . $data['state'] . "','" . $_SESSION['user_id'] . "')");
     
           
             $res = $this->connection->query("INSERT INTO student_installments (studentID,courseID, course_amount, installments_amount, course_remaining_amt, course_paid, date)
VALUES ('" . $id . "', '" . $st->courseID . "','" . $data['name'] . "','" .  $st->course_amount . "','" . $course_paid . "','" . $course_remaining_amount . "','" . $course_paid_amount . "','" . $date . "')");
     return true;
    }

    function addFranchaisee($data, $file) {
           $target_dir = UPLOAD_PATH;

        $imageFileType = strtolower(pathinfo($file["photo"]["name"], PATHINFO_EXTENSION));

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 30; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $filename = $randomString . '.' . $imageFileType;
        $target_file = $target_dir . $filename;


        if (!move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
            $target_file = 'defualt.png';
        }
        $password = password_hash($data['password '], PASSWORD_DEFAULT);

       
   $res = $this->connection->query("INSERT INTO teacher (usertypeID,franchisee_name,code, name, country, state, city, address, email, phone, dob,jod, sex, photo, username, newpassword,create_username,create_usertype,create_userID,create_date,modify_date,active)
VALUES ('2', '" . $data['franchisee_name'] . "', '" . $data['franchisee_code'] . "','" . $data['name'] . "','" . $data['country'] . "','" . $data['state'] . "','" . $data['city'] . "','" . $data['address'] . "','" . $data['email'] . "','" . $data['phone'] . "','" . $data['dob'] . "','" . $data['joining_date'] . "','" . $data['gender'] . "','" . $filename . "','" . $data['username'] . "','" . $password . "','" . $_SESSION['login_user_name'] . "','" . $_SESSION['user_type'] . "','" . $_SESSION['user_id'] . "','".date('Y-m-d H:i:s')."','".date('Y-m-d H:i:s')."','1')");
        if ($res) {
            return true;
        } else {
            return false;
        }
    }

    function updateFranchaisee($data, $file, $id) {
        $target_dir = UPLOAD_PATH;

        $imageFileType = strtolower(pathinfo($file["photo"]["name"], PATHINFO_EXTENSION));

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 30; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $filename = $randomString . '.' . $imageFileType;
        $target_file = $target_dir . $filename;

        if (!empty($file["photo"]["name"])) {
            if (!move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
                $filename = 'defualt.png';
            }
        } else {
            $filename = $data['oldfile'];
        }

        if (!empty($data['password'])) {
            $password = password_hash($data['password'], PASSWORD_DEFAULT);
        } else {
            $password = $data['oldpassword'];
        }
        $res = $this->connection->query("UPDATE teacher SET franchisee_name='" . $data['franchisee_name'] . "',code='" . $data['franchisee_code'] . "', name='" . $data['name'] . "', country='" . $data['country'] . "', state='" . $data['state'] . "', city='" . $data['city'] . "', address='" . $data['address'] . "', email='" . $data['email'] . "', phone='" . $data['phone'] . "', dob='" . $data['dob'] . "', jod='" . $data['joining_date'] . "', sex='" . $data['gender'] . "', photo='" . $filename . "', username='" . $data['username'] . "', newpassword='" . $password . "', create_username='" . $_SESSION['login_user_name'] . "', create_usertype='" . $_SESSION['user_type'] . "', create_userID='" . $_SESSION['user_id'] . "' where teacherID=" . $id);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }

    function addStudent($data, $file) {


        $target_dir = UPLOAD_PATH;

        $imageFileType = strtolower(pathinfo($file["photo"]["name"], PATHINFO_EXTENSION));

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 30; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $filename = $randomString . '.' . $imageFileType;
        $target_file = $target_dir . $filename;


        if (!move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
            $target_file = 'defualt.png';
        }
        $password = password_hash($data['password'], PASSWORD_DEFAULT);
        $courses = implode(",", $data['courseID']);

        $result = $this->connection->query("SELECT * FROM student order by studentID desc LIMIT 1");
        $prn = $result->fetch_object();

        $prnno = ++$prn->prn;
        $res = $this->connection->query("INSERT INTO student (name, sex, email, phone, address, qualification, course_amount,last_installment_amt,  courseID,state, affliated_center, center_code, pincode, 
                         username, newpassword,usertypeID,library,hostel,transport,createschoolyearID,schoolyearID,create_date,modify_date, create_userID, create_username, create_usertype, active,appid,dob,photo,prn)
VALUES ('" . $data['name'] . "', '" . $data['sex'] . "','" . $data['email'] . "','" . $data['phone'] . "','" . $data['address'] . "','" . $data['qualification'] . "','" . $data['amount'] . "','" . $data['amount'] . "','" . $courses . "','" . $data['state'] . "','" . $data['center_name'] . "','" . $data['code'] . "','" . $data['pincode'] . "',"
                . "'" . $data['username'] . "','" . $password . "', '3','0','0','0','1','1','" . date("Y-m-d h:i:s") . "','" . date("Y-m-d h:i:s") . "','" . $_SESSION['user_id'] . "','" . $_SESSION['login_user_name'] . "','" . $_SESSION['user_type'] . "','1','" . 'MMITI' . sprintf('%08d', mt_rand(0, time())) . "','" . $data['dob'] . "','$filename','" . $prnno . "')");
        if ($res) {
            $insert_id = $this->connection->insert_id;

            foreach ($data['courseID'] as $courseid) {

                $result = $this->connection->query("SELECT * FROM courses where courseID=" . $courseid);
                $course = $result->fetch_object();

                $res = $this->connection->query("INSERT INTO student_course (course_name,studentID, courseID, date_added)
VALUES ('" . $course->course_name . "','" . $insert_id . "','" . $courseid . "','" . date("Y-m-d h:i:s") . "')");
            }

            return true;
        } else {
            return false;
        }
    }

    function updateStudent($data, $file, $id) {
        $target_dir = UPLOAD_PATH;

        $imageFileType = strtolower(pathinfo($file["photo"]["name"], PATHINFO_EXTENSION));

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 30; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $filename = $randomString . '.' . $imageFileType;
        $target_file = $target_dir . $filename;

        if (!empty($file["photo"]["name"])) {
            if (!move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
                $filename = 'defualt.png';
            }
        } else {
            $filename = $data['oldfile'];
        }
        $courses = implode(",", $data['courseID']);

        $res = $this->connection->query("UPDATE student SET "
                . "name='" . $data['name'] . "',"
                . "sex='" . $data['sex'] . "',"
                . " email='" . $data['email'] . "',"
                . " phone='" . $data['phone'] . "',"
                . " address='" . $data['address'] . "',"
                . " qualification='" . $data['qualification'] . "',"
                . " course_amount='" . $data['amount'] . "',"
                . " courseID='" . $courses . "',"
                . " state='" . $data['state'] . "',"
                . " affliated_center='" . $data['center_name'] . "',"
                . " center_code='" . $data['code'] . "',"
                . " pincode='" . $data['pincode'] . "',"
                . " photo='" . $filename . "',"
                . " modify_date='" . date("Y-m-d h:i:s") . "',"
                . "dob='" . $data['dob'] . "', "
                . "photo='$filename' where studentID=" . $id);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }

}
