<?php
    $anime_id = $_POST['anime_id'];
    $list_id = $_POST['list_id'];

    if (isset($anime_id) && isset($list_id)){
        $mysql = new mysqli('localhost','root','','practice');

        $users = $mysql->query("SELECT * FROM registration WHERE Username = '$_COOKIE[user]'");
        $users = $users->fetch_assoc();
        $user_id = $users['id'];

        $anime = $mysql->query("SELECT * FROM anime_list WHERE `Anime_ID` = '$anime_id' AND `User_ID` = '$user_id'");
        $anime = $anime->fetch_assoc();
        if (count($anime) > 0) {
            $mysql -> query("UPDATE anime_list SET `List_ID` = '$list_id' WHERE `Anime_ID` = '$anime_id' AND `User_ID` = '$user_id'");
        } else {
            $mysql -> query("INSERT INTO `anime_list`(`Anime_ID`, `User_ID`, `List_ID`) VALUES ('$anime_id', '$user_id', '$list_id')");
        }

        $mysql -> close();
    }

    $get_anime_id = $_GET['anime_id'];
    if (isset($get_anime_id)) {
        $mysql = new mysqli('localhost','root','','practice');

        $users = $mysql->query("SELECT * FROM registration WHERE Username = '$_COOKIE[user]'");
        $users = $users->fetch_assoc();
        $user_id = $users['id'];

        $anime = $mysql->query("SELECT * FROM anime_list WHERE `Anime_ID` = '$get_anime_id' AND `User_ID` = '$user_id'");
        $anime = $anime->fetch_assoc();
        if (count($anime) > 0) {
            echo $anime['List_ID'];
            return $anime['List_ID'];
        }

        $mysql -> close();
    }
?>