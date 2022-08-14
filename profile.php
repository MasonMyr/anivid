<?php 
    include 'php/header_logged.php';

    $mysql = new mysqli('localhost','root','','practice');

    $result = $mysql -> query("SELECT * FROM `registration` WHERE `Username` = '$_COOKIE[user]'");
    $result = $result -> fetch_assoc();

    $watching_anime = $mysql -> query("SELECT `Anime_ID` FROM `anime_list` WHERE `User_ID` = '$result[id]' AND `List_ID` = '1'");
    $planned_anime = $mysql -> query("SELECT `Anime_ID` FROM `anime_list` WHERE `User_ID` = '$result[id]' AND `List_ID` = '2'");
    $watched_anime = $mysql -> query("SELECT `Anime_ID` FROM `anime_list` WHERE `User_ID` = '$result[id]' AND `List_ID` = '3'");
    $dropped_anime = $mysql -> query("SELECT `Anime_ID` FROM `anime_list` WHERE `User_ID` = '$result[id]' AND `List_ID` = '4'");
?>
<main>
    <div class="container-fluid tabprofile">
        <div class="backprofile">
            <ul class="nav nav-tabs" id="tabsforprofile">
                <li class="nav-itemprofile">
                    <a class="nav-linkprofile active" data-toggle="tab" href="#profile">Информация</a>
                </li>
                <li class="nav-itemprofile">
                    <a class="nav-linkprofile" data-toggle="tab" href="#edit">Редактирование</a>
                </li>

            </ul>
        </div>

        <div class="tab-content p-3 formadlyareg">
            <div class="tab-pane fade show" id="edit">
                <div class="d-flex align-items-center  justify-content-center">
                    <form method="post" action="php/edit_profile.php" enctype="multipart/form-data">
                        <div class="d-flex flex-column align-items-center">
                            <div class="example-1">
                            <div class="form-group avatarchange">
                                <label class="label">
                                    <?php 
                                        echo '<img src="'.$result['Avatar'].'" class="rounded-circle" alt="Avatar" style="height: 100px;"><br>'
                                    ?>
                                    <span class="smena">Нажмите на изображение вашего аватара чтобы изменить его</span>
                                    <input type="file" name="avatar" style="display: none;">
                                </label>
                            </div>
                        </div>
                            <div class="gridformedit">
                                <div class="form-group row formedit">
                                    <label for="inputText" class="col-form-label labeledit">Имя
                                        профиля</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="login" class="form-control formcontroledit" id="inputText"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row formedit">
                                    <label for="inputEmail" class="col-form-label labeledit">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" class="form-control formcontroledit" id="inputEmail"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row formedit">
                                    <label for="inputPassword" class="col-form-label labeledit">Пароль</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="password" class="form-control formcontroledit"
                                            id="inputPassword" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary btnsave" type="submit">Сохранить<i
                                    class="fas fa-save saveimg"></i></button>
                        </div>
                    </form>
                </div> 
            </div>
            <div class="tab-pane fade show active" id="profile">
                <div class="d-flex align-items-center  justify-content-center">
                    <form>
                        <div class="d-flex flex-column align-items-center">
                            <?php 

                                echo '<img src="'.$result['Avatar'].'" class="rounded-circle" alt="Avatar" style="height: 100px;"><br>'
                            ?>
                            <div class="gridformedit">
                                <div class="form-group row formedit">
                                    <label for="inputTextPro" class="col-form-label labeledit">Имя
                                        профиля</label>
                                    <div class="col-sm-10">
                                        <?php 
                                            echo '<input type="text" class="form-control formcontroledit" id="inputTextPro"
                                            placeholder="'.$result['Username'].'" disabled>';
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group row formedit">
                                    <label for="inputEmailPro" class="col-form-label labeledit">Email</label>
                                    <div class="col-sm-10">
                                        <?php
                                            echo '<input type="email" class="form-control formcontroledit" id="inputEmailPro"
                                            placeholder="'.$result['Email'].'" disabled>';
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <h3 class="h3stat">Статистика</h3>
                        <div class="stats">
                            <p>Смотрю</p> 
                            <?php
                                echo '<p id="smotryu">'.mysqli_num_rows($watching_anime).'</p>';
                            ?>
                            
                            <p>Запланировано</p>
                            <?php
                                echo '<p id="zaplan">'.mysqli_num_rows($planned_anime).'</p>';
                            ?>
                            <p>Просмотрено</p>
                            <?php
                                echo '<p id="prosmotreno">'.mysqli_num_rows($watched_anime).'</p>';
                            ?>
                            <p>Брошено</p>
                            <?php 
                                echo '<p id="brosheno">'.mysqli_num_rows($dropped_anime).'</p>';
                            ?>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</main>
<?php 
    include 'php/footer.php';
?>