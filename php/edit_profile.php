<?php

    $mysql = new mysqli('localhost','root','','practice');

    $result = $mysql -> query("SELECT * FROM `registration` WHERE `Username` = '$_COOKIE[user]'");
    $result = $result -> fetch_assoc();

    if ($_FILES['avatar']['size'] !== 0) {
        $old_avatar = $result['Avatar'];
        $allowed_filetypes = array('.jpg','.gif','.bmp','.png'); // Допустимые типы файлов
        $max_filesize = 524288; // Максимальный размер файла в байтах (в данном случае он равен 0.5 Мб).
        $upload_path = '../img/avatars/'; // Папка, куда будут загружаться файлы .
        $filename = $_FILES['avatar']['name']; // В переменную $filename заносим имя файла (включая расширение).
        $ext = substr($filename, strpos($filename,'.'), strlen($filename)-1); // В переменную $ext заносим расширение загруженного файла.
        
        if(!in_array($ext, $allowed_filetypes)) {
            print_r ($_FILES);
            die('Данный тип файла не поддерживается.');
        } // Сверяем полученное расширение со списком допутимых расширений. 
        

        if(filesize($_FILES['avatar']['tmp_name']) > $max_filesize) {
            die('Фаил слишком большой.');
        } // Проверим размер загруженного файла.
        
        
        if(!is_writable($upload_path)) {
            print_r($_FILES);
            die('Невозможно загрузить фаил в папку. Установите права доступа - 777.');
            
        } // Проверяем, доступна ли на запись папка.
        
        $new_filename = $result['id']."_avatar".$ext;
        $new_avatar = 'img/avatars/' . $new_filename;

        // Загружаем фаил в указанную папку.
        if(move_uploaded_file($_FILES['avatar']['tmp_name'], $upload_path .  $new_filename))
        {
            $mysql -> query("UPDATE registration SET Avatar = '$new_avatar' where Username = '$_COOKIE[user]'");

        } else {
            echo 'При загрузке возникли ошибки. Попробуйте ещё раз.';
        }
    }

    if ($_POST['login']) {
        $nickname_check = $mysql -> query("SELECT * FROM `registration` WHERE `Username` = '$_POST[login]'");
        $nickname_check = $nickname_check -> fetch_assoc();

        if (count($nickname_check) === 0) {
            $mysql -> query("UPDATE registration SET Username = '$_POST[login]' WHERE Username = '$_COOKIE[user]'");
        } else {
            die('Имя пользователя занято');
        }
        unset($_COOKIE['user']);
        setcookie('user', null, -1, '/');
        header('Location: ../index.php');
    }

    if ($_POST['email']) {
        $email_check = $mysql -> query("SELECT * FROM `registration` WHERE `Email` = '$_POST[email]'");
        $email_check = $email_check -> fetch_assoc();

        if ($_POST['login']) {
            if (count($email_check) === 0) {
                $mysql -> query("UPDATE registration SET Email = '$_POST[email]' WHERE Username = '$_POST[login]'");
            } else {
                die('Данная почта зарегестрирована');
            }
        }

        if (count($email_check) === 0) {
            $mysql -> query("UPDATE registration SET Email = '$_POST[email]' WHERE Username = '$_COOKIE[user]'");
        } else {
            die('Данная почта зарегестрирована');
        }
        header('Location: ../index.php');
    }

    if ($_POST['password']) {
        if ($_POST['login']) {
            $mysql -> query("UPDATE registration SET Password = '$_POST[password]' WHERE Username = '$_POST[login]'");
        } else {
            $mysql -> query("UPDATE registration SET Password = '$_POST[password]' WHERE Username = '$_COOKIE[user]'");
        }
        unset($_COOKIE['user']);
        setcookie('user', null, -1, '/');
        header('Location: ../index.php');
    }
?>