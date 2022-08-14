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
                    <form class="formaregistacii" action="php/login.php">
                        <div class="d-flex flex-column align-items-center">
                            <div class="form-group">
                                <input type="email" class="form-control formrega" placeholder="EMAIL" required name="email">
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control formrega" placeholder="Пароль" required name="password">
                            </div>

                            <div class="form-check d-flex justify-content-between flex-row">
                                <div>
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck1"
                                        >
                                    <label class="form-check-label" for="invalidCheck1">
                                        Запомнить меня
                                    </label>
                                </div>
                                <div class="passreset">
                                    <a href="resetpassword.php">Забыл пароль</a>
                                </div>
                            </div>
                            <button class="btn btn-primary btnreg" type="submit">Войти</button>
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
                <form class="formaregistacii" action="php/reg.php">
                    <div class="d-flex flex-column align-items-center">
                        <div class="form-group">
                            <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control formrega" placeholder="EMAIL" name="email" required>
                        </div>
                        <div class="form-group">
                            <input type="name" class="form-control formrega" placeholder="Отображаемое имя" pattern="[a-zA-Z0-9-_.]+" name="username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control formrega" placeholder="Пароль" required name="password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control formrega" placeholder="Подтверждение пароля" required name="confpassword">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                            <label class="form-check-label usloviya" for="invalidCheck2">
                                Я прочитал(-а) и принимаю <a href="terms.php">Условия
                                    использования</a>
                            </label>
                        </div>
                        <button class="btn btn-primary btnreg" type="submit">Зарегистрироваться</button>
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