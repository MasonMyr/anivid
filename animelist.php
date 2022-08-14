<?php 
    if (!isset($_COOKIE['user']))   
    {   
        include 'php/header.php';;  
    } else {
        include 'php/header_logged.php';
    } 

    $mysql = new mysqli('localhost','root','','practice');
    $user_id = $mysql->query("SELECT * FROM registration WHERE `Username` = '$_COOKIE[user]'");
    $user_id = $user_id->fetch_assoc();
    $user_id = $user_id['id'];
?>
<main>
    <div class="container-fluid tabforlist">
        <ul class="nav nav-tabslist" id="mytabs">
            <li class="nav-itemreg">
                <a class="nav-linkreg active" data-toggle="tab" href="#smotr">Смотрю</a>
            </li>
            <li class="nav-itemreg">
                <a class="nav-linkreg" data-toggle="tab" href="#zaplan">Запланировано</a>
            </li>
            <li class="nav-itemreg">
                <a class="nav-linkreg" data-toggle="tab" href="#prosm">Просмотрено</a>
            </li>
            <li class="nav-itemreg">
                <a class="nav-linkreg" data-toggle="tab" href="#drop">Брошено</a>
            </li>
        </ul>
        <div class="tab-content p-3 tablist">
            <div class="tab-pane fade show active" id="smotr">
                <div class="d-flex align-items-center  justify-content-center" id="list_watching">

                </div>
            </div>
            <div class="tab-pane fade show" id="zaplan">
                <div class="d-flex align-items-center  justify-content-center" id="list_plan">
                    
                </div>
            </div>
            <div class="tab-pane fade show" id="prosm">
                <div class="d-flex align-items-center  justify-content-center" id="list_watched">
                    
                </div>
            </div>
            <div class="tab-pane fade show" id="drop">
                <div class="d-flex align-items-center  justify-content-center" id="list_drop">
                    
                </div>
            </div>
        </div>
    </div>
</main>
<?php 
    include 'php/footer.php';
?>