<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <title>Login</title>
    <style>
        .login {
            border: 1px solid grey;
            width: 35%;
            margin: 10% auto;
            padding: 2%;
        }
    </style>
</head>

<body>
    <div class="login">
        <!-- Login Form Starts HEre -->
        <form action="" method="POST" class="text-center">
            Username: <input type="email" name="txtEmail" placeholder="Enter UserEmail"><br><br>
            Password: <input type="password" name="txtPass" placeholder="Enter Password"><br><br>
            <button type="submit" name="btnLogin" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>

</html>

<?php
if (isset($_POST['btnLogin'])) {
    $email = $_POST['txtEmail'];
    $pass = $_POST['txtPass'];

    include 'checkPassword.php';

    $sql_2 = "SELECT * FROM db_users WHERE user_email = '$email' AND user_pass = '$pass'";
    $result_2 = mysqli_query($conn, $sql_2);
    if (mysqli_num_rows($result) > 0) {
        header("Location: index.php");
        $_SESSION['LoginOK'] = $user;
    } else {
        header("Location: login.php");
    }
}
?>