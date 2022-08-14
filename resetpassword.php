<?php 
    include 'php/header.php';
?>
<main>
    <div class="container-fluid resetpassform">
        <div class="d-flex align-items-center  justify-content-center">
            <form class="formaregistacii" action="submit_reset.php" method="POST">
                <div class="d-flex flex-column align-items-center">
                    <p class="alertpassreset">Введите адрес электронной почты, который вы использовали для регистрации. Вам будет отправлено письмо с новым паролем</p>
                    <div class="form-group">
                        <input type="text" class="form-control formrega" placeholder="EMAIL" name="email">
                    </div>
                    <button class="btn btn-primary" type="submit">Отправить письмо</button>
                    <div class="lica d-flex justify-content-center flex-column">
                        <a style="text-align: center;" href="terms.php">Лицензионное Соглашение</a>
                        <div class="est">
                            <p class="pereprava">Вспомнили пароль учётной записи на ANIVID.IO?</p>
                            <div class="estlink">
                                <a href="registration.php">Войти</a>
                            </div>   
                        </div>     
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
<?php 
    include 'php/footer.php';
?>