<?php
    $conn = mysqli_connect('localhost','root','','db_tlu_phonebook');
    if(!$conn){
        die();
    }
    $sql = "SELECT * FROM db_users WHERE user_email = '$email'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0 ){
        $row = mysqli_fetch_assoc($result);
        $pass_hash = $row['user_pass'];
        if(password_verify($pass,$pass_hash)){
            echo 'Mật khẩu khớp !';
        }else{
            echo 'Mật khẩu không khớp !';
        }
    }else {
         echo "Email không tồn tại ! ";
    }
?>