<?php
session_start();
require 'db.php';
$errors=array();
define('AWS_S3_KEY', 'AKIAZM2VNNHL4UWIFLES');
define('AWS_S3_SECRET', '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');
define('AWS_S3_REGION', 'ap-south-1');
define('AWS_S3_BUCKET', 'klradio');
define('AWS_S3_URL', 'http://s3.'.AWS_S3_REGION.'.amazonaws.com/'.AWS_S3_BUCKET.'/');
date_default_timezone_set('Asia/Kolkata');
$current_time=date("Y-m-d H:i:s");

if(isset($_POST['signup'])){
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $sid=mysqli_real_escape_string($con,$_POST['sid']);
    $mobile=mysqli_real_escape_string($con,$_POST['mobile']);
    $password=mysqli_real_escape_string($con,$_POST['password']);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email-error']="Invalid Email";
    }else{
        $query="SELECT * FROM `user` WHERE email='$email'";
        $sql=mysqli_query($con,$query);
        if(mysqli_num_rows($sql)>0){
            $errors['email-exists']="Email Already Exist!! Please try Logging In!";
        }
    }
    $query="SELECT * FROM `user` WHERE sid='$sid'";
    $sql=mysqli_query($con,$query);
    if(mysqli_num_rows($sql)){
        $errors['Sid']="Student ID Already Used!";
    }
    if(count($errors)===0){
        $tmpfile = $_FILES['image']['tmp_name'];
        $filename = $_FILES["image"]["name"];
        $file_basename = substr($filename, 0, strripos($filename, '.')); 
        $file_ext = substr($filename, strripos($filename, '.'));
        $newfilename = "klradio_user_profile_".time(). $file_ext;
        if (defined('AWS_S3_URL')) {
            require_once('S3.php');
            S3::setAuth('AKIAZM2VNNHL4UWIFLES', 'mxSojLy6Keaa8dFKEEPI8yeSgumHXEfYLVDHqghI');
            S3::setRegion('ap-south-1');
            S3::setSignatureVersion('v4');
            S3::putObject(S3::inputFile($tmpfile), AWS_S3_BUCKET,$newfilename, S3::ACL_PUBLIC_READ);
            unlink($tmpfile);
            $image = AWS_S3_URL.$newfilename;
            $otp=rand(100000,999999);
            $_SESSION['otp']=$otp;
            $_SESSION['name']=$name;
            $_SESSION['email']=$email;
            $_SESSION['sid']=$sid;
            $_SESSION['mobile']=$mobile;
            $_SESSION['password']=$password;
            $_SESSION['image']=$image;
            $to = $email;
            $subject = "Account Verification OTP";
            $message = "Hello ".$name."\n Your Verification Code is:".$otp;
            $headers = "From:" . $from;
            if(makeCurl($email,$message,$subject)==true){
                $_SESSION['otp-status']="Verification code sent on Registred Email.";
                header("Location:otp.php");
            }else{
                $_SESSION['otp-status']="Unable to Send Verification OTP.Please Try Again Later!!";
            }       
        }
        
    }

}

if(isset($_POST['verify'])){
    $otp=mysqli_real_escape_string($con,$_POST['otp']);
    if($_SESSION['otp']==$otp){
        $email=$_SESSION['email'];
        $name=$_SESSION['name'];
        $sid=$_SESSION['sid'];
        $mobile=$_SESSION['mobile'];
        $password=$_SESSION['password'];
        $image=$_SESSION['image'];
        $query="INSERT INTO `user` (`email`, `name`, `sid`, `mobile`, `password`, `createdOn`, `designation`, `profile`,`status`) VALUES ('$email','$name','$sid','$mobile','".md5($password)."','$current_time',0,'$image',1)";
        $sql=mysqli_query($con,$query);
        $query="SELECT id FROM `user` WHERE email='$email'";
        $sql=mysqli_query($con,$query);
        $row=mysqli_fetch_row($sql);
        $_SESSION['id']=$row[0];
        $id=$row[0];
        $query="INSERT INTO `login_history`(`id`, `log_count`, `last_login`) VALUES ('$id',1,'$current_time')";
        $sql=mysqli_query($con,$query);
        $query="INSERT INTO `session_history`(`id`,`session`) VALUES ('$id','$current_time')";
        $sql=mysqli_query($con,$query);
        header("Location:profile.php");
    } else{
        $error['otp']="Invalid OTP";
    }
}

function passwordGenerate(){
    $length = 8;
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


function resetPassword($email){
    $con = mysqli_connect("sql786.main-hosting.eu","u535541061_pulse","Pulse@2022","u535541061_pulse");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $query="SELECT * FROM `users` WHERE `email`='$email'";
    $sql=mysqli_query($con,$query);
    if(mysqli_num_rows($sql)>0){
        $pass=passwordGenerate();
        $to = $email;
        $subject = "Your Account Credentials";
        $message = "Hey\n\n\nWe heard that you forgot you're Password Don't Worry we are here.Use this Credentials\n\nEmail: ".$email."\nPassword: ".$pass."\nThis Password is Temporary Please Update it in Profile Section.\nThanks for Registering in KL Radio.\n\n\n\nRegards\nTeam KL Radio.";
        $headers = "From:" . $from;
        $subq="UPDATE `users` SET `password`='".md5($pass)."' WHERE `email`='$email'";
        $subsql= mysqli_query($con,$subq);
        if(makeCurl($email,$message,$subject)==true){
            $_SESSION['mail-stat']="Password Reset Mail has been sent to you're Email.";
        }else{
             $_SESSION['mail-unstat']="Unable to Send Reset Password.Please try again after sometime.";
        }
    } else {
        $_SESSION['invalid']="This mail is not Registered Please Create an Account.";
    }
}

if(isset($_POST['forgot-password'])){
    extract($_POST);
    resetPassword($email);
}

function makeCurl($email,$message,$subject){
    $type="TEXT";
    $service_url = 'http://jogireddybethi.me:8091/v1.0/send/mail';
    $curl = curl_init($service_url);
    $file=array("fileName"=>"string");
    $data = array("fileDto" => $file,
        "fromAddress" => "support@klradio.live",
        "mailType" => $type,
        "message" => $message,
        "service" => "KLRADIO",
        "subject" => $subject,
        "toAddress" => $email );
    $payload = json_encode($data);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $curl_response = curl_exec($curl);
    if ($curl_response === false) {
        $info = curl_getinfo($curl);
        curl_close($curl);
        die('error occured during curl exec. Additioanl info: ' . var_export($info));
    }
    curl_close($curl);
    $decoded = json_decode($curl_response);
    if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
        return false;
    }
    return true;
}

if(isset($_POST['signin'])){
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $password=mysqli_real_escape_string($con,$_POST['password']);
    if($email=="klradio@gmail.com" && $password=="KLRadio@$001"){
        $_SESSION['admin']=$email;
        header("Location:admin.php");
    } else{
        $query="SELECT * FROM `user` WHERE `email`='$email' and `password`='".md5($password)."'";
        $sql=mysqli_query($con,$query);
        if(mysqli_num_rows($sql)>0) {
            $row=mysqli_fetch_row($sql);
            $_SESSION['id']=$row[0];
            $id=$row[0];
            $query="INSERT INTO `session_history` (`id`,`session`) VALUES('$id','$current_time')";
            $sql=mysqli_query($con,$query);
            $query="SELECT * FROM `login_history` WHERE `id`='$id'";
            $sql=mysqli_query($con,$query);
            $row=mysqli_fetch_row($sql);
            $login_count=$row[1];
            $login_count++;
            $query="UPDATE `login_history` SET `log_count`='$login_count',`last_login`='$current_time' WHERE id='$id'";
            $sql=mysqli_query($con,$query);
            $query="UPDATE `user` SET `status`=1 WHERE id='$id'";
            $sql=mysqli_query($con,$query);
            header("Location:profile.php");
        } else {
            $errors['login']="Invalid Email/Password!!";
        }
    }
    
}

if(isset($_POST['update-profile'])){
    extract($_POST);
    $id=$_SESSION['id'];
    $query="UPDATE `user` SET `name`='$name',`sid`='$sid',`mobile`='$mobile' where id='$id'";
    $sql=mysqli_query($con,$query);
    $query="SELECT * FROM `update_history` where id='$id'";
    $sql=mysqli_query($con,$query);
    if(mysqli_num_rows($sql)>0){
        $query="UPDATE `update_history` SET `updatedOn`='$current_time' WHERE id='$id'";
        $sql=mysqli_query($con,$query);
    }else{
        $query="INSERT INTO `update_history`(`id`, `updatedOn`) VALUES ('$id','$current_time')";
        $sql=mysqli_query($con,$query);
    }
}

if(isset($_POST['update-password'])){
    $oldpassword=mysqli_real_escape_string($con,$_POST['oldpassword']);
    $password=mysqli_real_escape_string($con,$_POST['password']);
    $id=$_SESSION['id'];
    $cpassword=md5($oldpassword);
    $query="SELECT * FROM `user` WHERE `password`='$cpassword'";
    $sql=mysqli_query($con,$query);
    if(mysqli_num_rows($sql)>0){
        $pass=md5($password);
        $query="UPDATE `user` SET `password`='$pass' WHERE `id`='$id'";
        $sql=mysqli_query($con,$query);
    }else{
        $errors['old-pass-error']="Invalid Old Password!!";
    }
}

if(isset($_POST['delete-profile'])){
    $id=(int)mysqli_real_escape_string($con,$_POST['id']);
    $query="DELETE FROM `user` WHERE `id`='$id'";
    $sql=mysqli_query($con,$query);
    $query="DELETE FROM `login_history` WHERE `id`='$id'";
    $sql=mysqli_query($con,$query);
    $query="DELETE FROM `update_history` WHERE `id`='$id'";
    $sql=mysqli_query($con,$query);
    $query="DELETE FROM `session_history` WHERE `id`='$id'";
    $sql=mysqli_query($con,$query);
}

if(isset($_POST['add-team-member'])){
    extract($_POST);
    $query="UPDATE `user` SET `designation`=1 WHERE sid='$sid'";
    $sql=mysqli_query($con,$query);
    $query="SELECT * FROM `team_members` WHERE `sid`='$sid'";
    $sql=mysqli_query($con,$query);
    if(mysqli_num_rows($sql)>0){
        $errors['alreadyinteam']="Student ID Already Exists!!!";
    }else{
        $query="INSERT INTO `team_members`(`name`, `sid`, `branch`, `wing`, `twitter`, `facebook`, `instagram`, `linkedin`, `image`, `addedOn`) VALUES ('$name','$sid','$branch','$wing','','','','','','$current_time')";
        $sql=mysqli_query($con,$query);
    }
}

if(isset($_POST['update-team-profile'])){
    extract($_POST);
    $id=$_SESSION['id'];
    $query="SELECT `sid` FROM `user` WHERE `id`='$id'";
    $sql=mysqli_query($con,$query);
    $sid=mysqli_fetch_row($sql)[0];
    $tmpfile = $_FILES['image']['tmp_name'];
    $filename = $_FILES["image"]["name"];
    $file_basename = substr($filename, 0, strripos($filename, '.')); 
    $file_ext = substr($filename, strripos($filename, '.'));
    $newfilename = "klradio_team_profile_".time(). $file_ext;
    extract($_POST);
    if (defined('AWS_S3_URL')) {
        require_once('S3.php');
        S3::setAuth('AKIAZM2VNNHL4UWIFLES', 'mxSojLy6Keaa8dFKEEPI8yeSgumHXEfYLVDHqghI');
        S3::setRegion('ap-south-1');
        S3::setSignatureVersion('v4');
        S3::putObject(S3::inputFile($tmpfile), AWS_S3_BUCKET,$newfilename, S3::ACL_PUBLIC_READ);
        unlink($tmpfile);
        $image = AWS_S3_URL.$newfilename;
        $query="UPDATE `team_members` SET `name`='$name',`twitter`='$twitter',`facebook`='$facebook',`instagram`='$instagram',`linkedin`='$linkedin',`image`='$image' WHERE `sid`='$sid'";
        $sql=mysqli_query($con,$query);
    }
}

if(isset($_POST['remove-member'])){
    extract($_POST);
    $query="SELECT `sid` FROM `team_members` WHERE `id`='$id'";
    $sql=mysqli_query($con,$query);
    $row=mysqli_fetch_row($sql);
    $sid=$row[0];
    $query="UPDATE `user` SET `designation`=0 WHERE `sid`='$sid'";
    $sql=mysqli_query($con,$query);
    $query="DELETE FROM `team_members` WHERE `id`='$id'";
    $sql=mysqli_query($con,$query);
}

if(isset($_POST['chat-bot'])){
    extract($_POST);
    $query="INSERT INTO `chat-bot`(`sid`, `name`, `category`, `message`, `addedOn`) VALUES('$sid','$name','$category','$message','$current_time')";
    $sql=mysqli_query($con,$query);
    //Trigger Mailing Service
    //TODO
}

if(isset($_POST['post-idea'])){
    $id=$_SESSION['id'];
    extract($_POST);
    $tmpfile = $_FILES['image']['tmp_name'];
    $filename = $_FILES["image"]["name"];
    $file_basename = substr($filename, 0, strripos($filename, '.')); 
    $file_ext = substr($filename, strripos($filename, '.'));
    $newfilename = "klradio_student_block_profile_".time(). $file_ext;
    if (defined('AWS_S3_URL')) {
        require_once('S3.php');
        S3::setAuth('AKIAZM2VNNHL4UWIFLES', 'mxSojLy6Keaa8dFKEEPI8yeSgumHXEfYLVDHqghI');
        S3::setRegion('ap-south-1');
        S3::setSignatureVersion('v4');
        S3::putObject(S3::inputFile($tmpfile), AWS_S3_BUCKET,$newfilename, S3::ACL_PUBLIC_READ);
        unlink($tmpfile);
        $image = AWS_S3_URL.$newfilename;
        $query="INSERT INTO `student_block`(`sid`, `title`, `description`, `image`, `addedOn`) VALUES ('$id','$title','$description','$image','$current_time')";
        $sql=mysqli_query($con,$query);
    }
}

if(isset($_POST['delete-idea'])){
    $sid=$_SESSION['id'];
    $id=mysqli_real_escape_string($con,$_POST['id']);
    $query="DELETE FROM `student_block` WHERE `id`='$id' and `sid`='$sid'";
    $sql=mysqli_query($con,$query);
}

if(isset($_POST['download-user-data'])){
    $file_name = "user_data.xls";
    header("Content-Disposition: attachment; filename=\"$file_name\"");
    header("Content-Type: application/vnd.ms-excel");
    readfile($file_name);    
    $query="SELECT * FROM `user`";
    $sql=mysqli_query($con,$query);
    $user_data=array();
    while($row=mysqli_fetch_assoc($sql)){
        $temp_data=array(
            'Id'=>$row['id'],
            'Name'=>$row['name'],
            'Email'=>$row['email'],
            'Mobile'=>$row['mobile'],
            'Student Id'=>$row['sid'],
            'Created On'=>$row['createdOn']
        );
        array_push($user_data,$temp_data);
    }
    $column_names = false;
    foreach ($user_data as $row) {
        if (!$column_names) {
            echo implode("\t", array_keys($row)) . "\n";
            $column_names = true;
        }
        array_walk($row, 'filterCustomerData');
        echo implode("\t", array_values($row)) . "\n";
    }
    exit;
}

if(isset($_POST['download-team-data'])){
    $file_name = "team_data.xls";
    header("Content-Disposition: attachment; filename=\"$file_name\"");
    header("Content-Type: application/vnd.ms-excel");
    readfile($file_name);    
    $query="SELECT * FROM `team_members`";
    $sql=mysqli_query($con,$query);
    $user_data=array();
    while($row=mysqli_fetch_assoc($sql)){
        $temp_data=array(
            'Id'=>$row['id'],
            'Name'=>$row['name'],
            'Branch'=>$row['branch'],
            'Student Id'=>$row['sid'],
            'Wing'=>$row['wing'],
            'Member Since'=>$row['addedOn']
        );
        array_push($user_data,$temp_data);
    }
    $column_names = false;
    foreach ($user_data as $row) {
        if (!$column_names) {
            echo implode("\t", array_keys($row)) . "\n";
            $column_names = true;
        }
        array_walk($row, 'filterCustomerData');
        echo implode("\t", array_values($row)) . "\n";
    }
    exit;
}

function filterCustomerData(&$str) {
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if (strstr($str, '"'))
        $str = '"' . str_replace('"', '""', $str) . '"';
}

?>