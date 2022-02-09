<?php 
    $email = $_GET['email'];
    $code  = $_GET['code'];
    $conn = mysqli_Connect('localhost','root','','db_tlu_phonebook');
    if(!$conn) {
        die();
    }
    $sql = "SELECT * FROM db_users WHERE user_email = '$email' OR user_code = '$code'";
    $result = mysqli_Query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $sql_2 = "UPDATE db_users SET user_status = 1 WHERE user_email = '$email'";
        $result_2 = mysqli_Query($conn,$sql_2);
        if($result_2 > 0){
            echo 'Tài khoản đã được kích hoạt !';
        }
    }else{
        echo 'Không thể kích hoạt tài khoản !';
    }
?>