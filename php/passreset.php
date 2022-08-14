<?php
    $code = $_POST['code'];
    $code_submit = $_POST['code_submit'];
    $email = $_POST['email'];

    $mysql = new mysqli('localhost','root','','practice');

    if ($code_submit === $code) {
        $salt = "abchefghjkmnpqrstuvwxyz0123456789";
        for($i = 0; $i < 15; $i++){
            $new_pass .= $salt{rand(0, 33)};
        }
        
        $mysql -> query("UPDATE registration SET Password = '$new_pass' WHERE Email = '$_POST[email]'");
    } else {
        die('Неправильный код подтверждения');
    }

    header('Location: ../index.php');
?>