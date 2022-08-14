<?php 
    include 'php/header.php';
?>
<main>
    <div class="container-fluid resetpassform">
        <div class="d-flex align-items-center  justify-content-center">
            <form class="formaregistacii" action="php/passreset.php" method="POST">
                <div class="d-flex flex-column align-items-center">
                    <p class="alertpassreset">Введите код из письма</p>
                    <div class="form-group">
                        <input type="text" class="form-control" id="formpassreset" placeholder="Код" name="code_submit">
                        <?php 
                            $salt = "0123456789";
                            for($i = 0; $i < 6; $i++){
                                $rand_lost .= $salt{rand(0, 10)};
                            }
                            echo '<input type="text" name="code" style="display: none;" value="'.$rand_lost.'">';
                            echo '<input type="text" name="email" style="display: none;" value="'.$_POST['email'].'">';
                        ?>
                    </div>
                    <button class="btn btn-primary" type="submit">Подтвердить</button>
                </div>
            </form>
        </div>
    </div>
</main>
<?php 
    include 'php/footer.php';
?>