<?php
//include 'send.php';
include 'sendmail.php';
if (isset($_POST['btnSubmit'])) {
    $name = $_POST['txtName'];
    $email = $_POST['txtEmail'];
    $pass1 = $_POST['txtPass1'];
    $pass2 = $_POST['txtPass2'];
    } 
    $conn = mysqli_connect('localhost', 'root', '', 'db_tlu_phonebook');
    if (!$conn) {
        die();
    }
    $sql = "SELECT * FROM db_users WHERE user_email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "Email đã tồn tại !";
    } else {
        $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
        $code = md5(uniqid(rand(), true));
        $sql2 = "INSERT INTO db_users (user_name, user_email, user_pass,user_code)
            VALUES ('$name', '$email','$pass_hash', '$code')";
        $result2 = mysqli_query($conn, $sql2);
        if ($result2 >= 1) {
            $_SESSION ['ok'] = "Đăng ký thành công !";
            echo 'Đăng kí thành công !' . '</br>';
            //sendEmail($email,$code);
        } else {
            echo 'Không thành công !';
        }
    }
?>