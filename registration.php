<?php 
    include 'php/header.php';
?>
<main>
    <div class="container-fluid tab"> 
        <ul class="nav nav-tabs" id="mytabs">
            <li class="nav-itemreg">
                <a class="nav-linkreg active" data-toggle="tab" href="#reg">Регистрация</a>
            </li>
            <li class="nav-itemreg">
                <a class="nav-linkreg" data-toggle="tab" href="#login">Вход</a>
            </li>

        </ul>
        <div class="tab-content p-3 formadlyareg">
            <div class="tab-pane fade show" id="login">
                <h2 class="h4 mb-3 anivtab logoreg">
                    ANIVID.IO
                </h2>
                <div class="d-flex align-items-center  justify-content-center">
                    <form class="formaregistacii formlogin" action="" method="post">
                        <div class="d-flex flex-column align-items-center">
                            <div class="form-group">
                                <input type="email" class="form-control formrega _reqforlogin _email" placeholder="EMAIL" name="email_login">
                                <div class="none errorMsg" id="LoginEmailIncorrect">
                                    <p>Введите корректный email</p>
                                </div>
                                <div class="none errorMsg" id="LoginNoneEmail">
                                    <p>Введите email</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control formrega _reqforlogin" placeholder="Пароль" name="password_login">
                                <div class="none errorMsg" id="LoginNonePass">
                                    <p>Введите пароль</p>
                                </div>
                                <div class="none errorMsg" id="LoginWrongPass">
                                    <p>Неправильный логин или пароль</p>
                                </div>
                            </div>

                            <div class="form-check d-flex justify-content-between flex-row">
                                <div>
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck1" name="remember"
                                        >
                                    <label class="form-check-label" for="invalidCheck1">
                                        Запомнить меня
                                    </label>
                                </div>
                                <div class="passreset">
                                    <a href="resetpassword.php">Забыл пароль</a>
                                </div>
                            </div>
                            <button class="btn btn-primary btnreg _loginbtn" type="submit">Войти</button>
                            <div class="lica">
                                <a href="terms.php">Лицензионное Соглашение</a>
                            </div>
                            <div class="est">
                                <p>У вас нет учётной записи на ANIVID.IO?</p>
                                <div class="estlink">
                                    <a href="registration.php">Зарегестрироваться</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade show active" id="reg">
                <h2 class="h4 mb-3 anivtab logoreg">
                    ANIVID.IO
                </h2>
                <form class="formaregistacii formregistration" action="" method="post">
                    <div class="d-flex flex-column align-items-center">
                        <div class="form-group">
                            <input type="email" class="form-control formrega _reqforreg _email" placeholder="EMAIL" name="email_reg" >
                            <div class="none errorMsg" id="NoneEmail">
                                <p>Введите email</p>
                            </div>
                            <div class="none errorMsg" id="EmailAlreadyUsed">
                                <p>Данный Email уже зарегистрирован</p>
                            </div>
                            <div class="none errorMsg" id="EmailIncorrect">
                                <p>Введите корректный email</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="name" class="form-control formrega _reqforreg _username" placeholder="Отображаемое имя" pattern="[a-zA-Z0-9-_.]+" name="username">
                            <div class="none errorMsg" id="UsernameAlreadyUsed">
                                <p>Данный username уже зарегистрирован</p>
                            </div>
                            <div class="none errorMsg" id="NoneUsername">
                                <p>Введите username</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control formrega _reqforreg _password" placeholder="Пароль"   name="password_reg">
                            <div class="none errorMsg" id="NonePass">
                                <p>Введите пароль</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control formrega _reqforreg _confpassword" placeholder="Подтверждение пароля"   name="confpassword">
                            <div class="none errorMsg" id="NoneConfPass">
                                <p>Повторите пароль</p>
                            </div>
                            <div class="none errorMsg" id="ConfPassError">
                                <p>Пароли должны совпадать</p>
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input _reqcheckbox" type="checkbox" value="conf" name="terms" id="invalidCheck2"  >
                            <label class="form-check-label usloviya" for="invalidCheck2">
                                Я прочитал(-а) и принимаю <a href="terms.php">Условия
                                    использования</a>
                            </label>
                        </div>
                        <div class="form-group none errorMsg" id="ConfTerms">
                            <p>Вы должны согласиться с Условиями использования</p>
                        </div>
                        <button class="btn btn-primary btnreg _regbtn" type="submit">Зарегестрироваться</button>
                        <div class="lica">
                            <a href="terms.php">Лицензионное Соглашение</a>
                        </div>
                        <div class="est">
                            <p>Есть учетная запись на ANIVID.IO?</p>
                            <div class="estlink"> 
                                <a href="registration.php">Войти</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php 
    include 'php/footer.php';
?>