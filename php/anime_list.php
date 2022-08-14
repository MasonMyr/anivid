<?php
    $watching = $_GET['watching'];
    $plan = $_GET['plan'];
    $watched = $_GET['watched'];
    $drop = $_GET['drop'];

    $watching_id = [];
    $plan_id = [];
    $watched_id = [];
    $drop_id = [];

    $response = [];

    $mysql = new mysqli('localhost','root','','practice');

    $user_id = $mysql -> query ("SELECT * FROM `registration` WHERE `Username` = '$_COOKIE[user]'");
    $user_id = $user_id -> fetch_assoc();
    $user_id = $user_id['id'];

    $watching_list = $mysql -> query("SELECT `Anime_ID` FROM `anime_list` WHERE `User_ID` = '$user_id' AND `List_ID` = '$watching'");
    // $watching_list = $watching_list -> fetch_assoc();

    if (mysqli_num_rows($watching_list) > 0) {
        while ($id = $watching_list->fetch_row()) {
            $watching_id[] = $id;
        }
    } else {
        $watching_id[] = "false";
    };

    $plan_list = $mysql -> query("SELECT `Anime_ID` FROM `anime_list` WHERE `User_ID` = '$user_id' AND `List_ID` = '$plan'");

    if (mysqli_num_rows($plan_list) > 0) {
        while ($id = $plan_list->fetch_row()) {
            $plan_id[] = $id;
        }
    } else {
        $plan_id[] = "false";
    };
    
    $watched_list = $mysql -> query("SELECT `Anime_ID` FROM `anime_list` WHERE `User_ID` = '$user_id' AND `List_ID` = '$watched'");

    if (mysqli_num_rows($watched_list) > 0) {
        while ($id = $watched_list->fetch_row()) {
            $watched_id[] = $id;
        }
    } else {
        $watched_id[] = "false";
    };

    $drop_list = $mysql -> query("SELECT `Anime_ID` FROM `anime_list` WHERE `User_ID` = '$user_id' AND `List_ID` = '$drop'");

    if (mysqli_num_rows($drop_list) > 0) {
        while ($id = $drop_list->fetch_row()) {
            $drop_id[] = $id;
        }
    } else {
        $drop_id[] = "false";
    };

    $response = [
        "watching_id" => $watching_id,
        "plan_id" => $plan_id,
        "watched_id" => $watched_id,
        "drop_id" => $drop_id
    ];

    echo json_encode($response);
?>