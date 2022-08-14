<?php 
    if (!isset($_COOKIE['user']))   
    {   
        include 'php/header.php';;  
    } else {
        include 'php/header_logged.php';
    }
    
?>
    <main>
        <!---------------Карусель--------------->
        <div id="carouselAnime" class="carousel slide" data-ride="carousel" data-interval="5000">
            <ol class="carousel-indicators">
                <li data-target="#carouselAnime" data-slide-to="0" class="active"></li>
                <li data-target="#carouselAnime" data-slide-to="1"></li>
                <li data-target="#carouselAnime" data-slide-to="2"></li>
                <li data-target="#carouselAnime" data-slide-to="3"></li>
                <li data-target="#carouselAnime" data-slide-to="4"></li>
                <li data-target="#carouselAnime" data-slide-to="5"></li>
                <li data-target="#carouselAnime" data-slide-to="6"></li>
                <li data-target="#carouselAnime" data-slide-to="7"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a class="gradient">
                        <img src="img/slider/konosuba-slider.jpg" class="d-block h-auto w-100" alt="...">
                    </a>
                    <div class="carousel-caption">
                        <div class="container-fluid carouselAnimeCaption">
                            <h5>Да благословят боги сей расчудесный мир!</h5>
                            <a href="#">Начать смотреть</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <a class="gradient">
                        <img src="img/slider/k-return-slider.jpg" class="d-block h-auto w-100" alt="...">
                    </a>
                    <div class="carousel-caption">
                        <div class="container-fluid carouselAnimeCaption">
                            <h5>К: возвращение королей</h5>
                            <a href="#">Начать смотреть</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <a class="gradient">
                        <img src="img/slider/vivy-slider.jpg" class="d-block h-auto w-100" alt="...">
                    </a>
                    <div class="carousel-caption">
                        <div class="container-fluid carouselAnimeCaption">
                            <h5>Виви: Песнь флюоритового глаза</h5>
                            <a href="#">Начать смотреть</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <a class="gradient">
                        <img src="img/slider/hero-academia-slider.png" class="d-block h-auto w-100" alt="...">
                    </a>
                    <div class="carousel-caption">
                        <div class="container-fluid carouselAnimeCaption">
                            <h5>Моя геройская академия</h5>
                            <a href="#">Начать смотреть</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <a class="gradient">
                        <img src="img/slider/attack-on-titan-slider.jpg" class="d-block h-auto w-100" alt="...">
                    </a>
                    <div class="carousel-caption">
                        <div class="container-fluid carouselAnimeCaption">
                            <h5>Атакая титанов</h5>
                            <a href="#">Начать смотреть</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <a class="gradient">
                        <img src="img/slider/naruto-slider.jpg" class="d-block h-auto w-100" alt="...">
                    </a>
                    <div class="carousel-caption">
                        <div class="container-fluid carouselAnimeCaption">
                            <h5>Наруто</h5>
                            <a href="#">Начать смотреть</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <a class="gradient">
                        <img src="img/slider/ghoul-slider.jpg" class="d-block h-auto w-100" alt="...">
                    </a>
                    <div class="carousel-caption">
                        <div class="container-fluid carouselAnimeCaption">
                            <h5>Токийский гуль</h5>
                            <a href="#">Начать смотреть</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <a class="gradient">
                        <img src="img/slider/kimetsu-slider.jpg" class="d-block h-auto w-100" alt="...">
                    </a>
                    <div class="carousel-caption">
                        <div class="container-fluid carouselAnimeCaption">
                            <h5>Клинок, рассекающий демонов</h5>
                            <a href="#">Начать смотреть</a>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselAnime" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselAnime" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div> 
        <!---------------В тренде--------------->
        <div class="container-fluid inTrend h-auto w-100">
            <div class="d-flex flex-row justify-content-between align-items-baseline">
                <h1 class="animeCardTitle">В тренде</h1>
                <!-- <div class="container-xl d-flex justify-content-end">
                    <button type="button" class="carouselBtnMobile prevBtnMobile"><img src="img/prev-white.png" alt="Предыдущий"></button>
                    <button type="button" class="carouselBtnMobile nextBtnMobile"><img src="img/next-white.png" alt="Следующий"></button>
                </div> -->
                <a href="in_trend.php" class="allBtn">Все</a>
            </div>
            <div class="d-flex flex-row justify-content-between">
                <a class="prevBtn">
                    <img src="img/prev.png" alt="">
                </a>
                <div class="d-flex flex-row justify-content-center inTrendCarousel"
                    style="background-color: linear-gradient(180deg, rgba(78, 0, 180, 0) 0%, #4E00B4 30.52%);">
                    <div class="card">
                        <img src="img/Attack-On-Titan-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Атака титанов
                            </h5>
                            <p class="card-text">
                                15+ · 2013 · 75 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Boku-No-Hero-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Моя геройская академия
                            </h5>
                            <p class="card-text">
                                15+ · 2016 · 99 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Onepucnhman-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Ванпанчмен
                            </h5>
                            <p class="card-text">
                                15+ · 2015 · 24 серии
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/History-About-Guy-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                История о пареньке из деревни
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 12 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Kimetsu-No-Yaiba-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Клинок, рассекающий демонов
                            </h5>
                            <p class="card-text">
                                15+ · 2019 · 29 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Reinkarnacia-Bezrabotnogo-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Реинкарнация безработного
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 11 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Bucket-Of-Fruits-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Корзинка фруктов
                            </h5>
                            <p class="card-text">
                                15+ · 2019 · 56 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Attack-On-Titan-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Атака титанов
                            </h5>
                            <p class="card-text">
                                15+ · 2013 · 75 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Boku-No-Hero-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Моя геройская академия
                            </h5>
                            <p class="card-text">
                                15+ · 2016 · 99 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Onepucnhman-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Ванпанчмен
                            </h5>
                            <p class="card-text">
                                15+ · 2015 · 24 серии
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/History-About-Guy-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                История о пареньке из деревни
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 12 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Kimetsu-No-Yaiba-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Клинок, рассекающий демонов
                            </h5>
                            <p class="card-text">
                                15+ · 2019 · 29 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Reinkarnacia-Bezrabotnogo-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Реинкарнация безработного
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 11 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Bucket-Of-Fruits-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Корзинка фруктов
                            </h5>
                            <p class="card-text">
                                15+ · 2019 · 56 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Attack-On-Titan-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Атака титанов
                            </h5>
                            <p class="card-text">
                                15+ · 2013 · 75 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Boku-No-Hero-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Моя геройская академия
                            </h5>
                            <p class="card-text">
                                15+ · 2016 · 99 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Onepucnhman-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Ванпанчмен
                            </h5>
                            <p class="card-text">
                                15+ · 2015 · 24 серии
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/History-About-Guy-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                История о пареньке из деревни
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 12 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Kimetsu-No-Yaiba-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Клинок, рассекающий демонов
                            </h5>
                            <p class="card-text">
                                15+ · 2019 · 29 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Reinkarnacia-Bezrabotnogo-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Реинкарнация безработного
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 11 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Bucket-Of-Fruits-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Корзинка фруктов
                            </h5>
                            <p class="card-text">
                                15+ · 2019 · 56 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Attack-On-Titan-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Атака титанов
                            </h5>
                            <p class="card-text">
                                15+ · 2013 · 75 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Boku-No-Hero-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Моя геройская академия
                            </h5>
                            <p class="card-text">
                                15+ · 2016 · 99 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Onepucnhman-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Ванпанчмен
                            </h5>
                            <p class="card-text">
                                15+ · 2015 · 24 серии
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/History-About-Guy-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                История о пареньке из деревни
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 12 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Kimetsu-No-Yaiba-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Клинок, рассекающий демонов
                            </h5>
                            <p class="card-text">
                                15+ · 2019 · 29 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Reinkarnacia-Bezrabotnogo-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Реинкарнация безработного
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 11 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Bucket-Of-Fruits-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Корзинка фруктов
                            </h5>
                            <p class="card-text">
                                15+ · 2019 · 56 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Attack-On-Titan-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Атака титанов
                            </h5>
                            <p class="card-text">
                                15+ · 2013 · 75 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Boku-No-Hero-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Моя геройская академия
                            </h5>
                            <p class="card-text">
                                15+ · 2016 · 99 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Onepucnhman-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Ванпанчмен
                            </h5>
                            <p class="card-text">
                                15+ · 2015 · 24 серии
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/History-About-Guy-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                История о пареньке из деревни
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 12 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Kimetsu-No-Yaiba-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Клинок, рассекающий демонов
                            </h5>
                            <p class="card-text">
                                15+ · 2019 · 29 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Reinkarnacia-Bezrabotnogo-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Реинкарнация безработного
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 11 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Bucket-Of-Fruits-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Корзинка фруктов
                            </h5>
                            <p class="card-text">
                                15+ · 2019 · 56 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                </div>
                <a class="nextBtn">
                    <img src="img/next.png" alt="">
                </a>
            </div>
        </div>
        <!---------------Мир Наруто--------------->
        <div class="container-fluid narutoWorld h-auto w-100">
            <div class="d-flex flex-row justify-content-between">
                <h1 class="animeCardTitle">Мир Наруто</h1>
            </div>
            <div class="d-flex flex-row justify-content-between">
                <a class="narutoWorld_prevBtn">
                    <img src="img/prev.png" alt="">
                </a>
                <div class="d-flex flex-row justify-content-center narutoWorldCarousel">
                    <div class="card">
                        <img src="img/Naruto-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Наруто
                            </h5>
                            <p class="card-text">
                                15+ · 2005 · 220 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Naruto-Shippuden-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Наруто: Ураганные хроники
                            </h5>
                            <p class="card-text">
                                15+ · 2007 · 500 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="animepage.php">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Boruto-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Боруто: Новое поколение Наруто
                            </h5>
                            <p class="card-text">
                                15+ · 2017 · 198 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Naruto-Film-Blood-Prison-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Фильм Наруто: Кровавая Тюрьма
                            </h5>
                            <p class="card-text">
                                15+ · 20011 · 1ч 42м
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Naruto-Film-Road-To-Ninja-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Фильм Наруто: Путь ниндзя
                            </h5>
                            <p class="card-text">
                                15+ · 2012 · 1ч 50м
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Naruto-Film-The-Last-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Фильм Наруто: Последний
                            </h5>
                            <p class="card-text">
                                15+ · 2014 · 1ч 52м
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Naruto-Film-Boruto-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Фильм Наруто: Боруто
                            </h5>
                            <p class="card-text">
                                15+ · 2015 · 1ч 35м
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Naruto-Film-Boruto-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Фильм Наруто: Боруто
                            </h5>
                            <p class="card-text">
                                15+ · 2015 · 1ч 35м
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Naruto-Film-Boruto-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Фильм Наруто: Боруто
                            </h5>
                            <p class="card-text">
                                15+ · 2015 · 1ч 35м
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Naruto-Film-Boruto-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Фильм Наруто: Боруто
                            </h5>
                            <p class="card-text">
                                15+ · 2015 · 1ч 35м
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                </div>
                <a class="narutoWorld_nextBtn">
                    <img src="img/next.png" alt="">
                </a>
            </div>
            
        </div>
        <!---------------Популярное--------------->
        <div class="container-fluid popular h-auto w-100">
            <div class="d-flex flex-row justify-content-between align-items-baseline">
                <h1 class="animeCardTitle">Популярное</h1>
                <a href="#" class="allBtn">Все</a>
            </div>
            <div class="d-flex flex-row justify-content-between">
                <a class="popular_prevBtn">
                    <img src="img/prev.png" alt="">
                </a>
                <div class="d-flex flex-row justify-content-start popularCarousel">
                    <div class="card">
                        <img src="img/Boku-No-Hero-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Моя геройская академия
                            </h5>
                            <p class="card-text">
                                15+ · 2016 · 99 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Hunter-x-Hunter-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Охотник x Охотник
                            </h5>
                            <p class="card-text">
                                15+ · 2011 · 148 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Naruto-Shippuden-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Наруто: Ураганные хроники
                            </h5>
                            <p class="card-text">
                                15+ · 2007 · 500 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Fairy-Tail-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Сказка о Хвосте феи
                            </h5>
                            <p class="card-text">
                                15+ · 2009 · 328 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Attack-On-Titan-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Атака титанов
                            </h5>
                            <p class="card-text">
                                15+ · 2013 · 75 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Onepucnhman-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Ванпанчмен
                            </h5>
                            <p class="card-text">
                                15+ · 2015 · 24 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Kimetsu-No-Yaiba-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Клинок, рассекающий демонов
                            </h5>
                            <p class="card-text">
                                15+ · 2019 · 29 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Boku-No-Hero-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Моя геройская академия
                            </h5>
                            <p class="card-text">
                                15+ · 2016 · 99 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Hunter-x-Hunter-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Охотник x Охотник
                            </h5>
                            <p class="card-text">
                                15+ · 2011 · 148 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Naruto-Shippuden-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Наруто: Ураганные хроники
                            </h5>
                            <p class="card-text">
                                15+ · 2007 · 500 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Fairy-Tail-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Сказка о Хвосте феи
                            </h5>
                            <p class="card-text">
                                15+ · 2009 · 328 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Attack-On-Titan-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Атака титанов
                            </h5>
                            <p class="card-text">
                                15+ · 2013 · 75 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Onepucnhman-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Ванпанчмен
                            </h5>
                            <p class="card-text">
                                15+ · 2015 · 24 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Kimetsu-No-Yaiba-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Клинок, рассекающий демонов
                            </h5>
                            <p class="card-text">
                                15+ · 2019 · 29 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                </div>
                <a class="popular_nextBtn">
                    <img src="img/next.png" alt="">
                </a>
            </div>
        </div>
        <!---------------Коллекция Dead Inside'а--------------->
        <div class="container-fluid deadInside h-auto w-100">
            <div class="d-flex flex-row justify-content-between">
                <h1 class="animeCardTitle">Коллекция Dead Inside'а</h1>
            </div>
            <div class="d-flex flex-row justify-content-left deadInsideCarousel">
                <div class="card">
                    <img src="img/Tokyo-Ghoul-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Токийский гуль
                        </h5>
                        <p class="card-text">
                            18+ · 2014 · 12 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Tokyo-Ghoul-2-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Токийский гуль 2
                        </h5>
                        <p class="card-text">
                            18+ · 2015 · 12 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Tokyo-Ghoul-3-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Токийский гуль 3: Перерождение
                        </h5>
                        <p class="card-text">
                            18+ · 2018 · 12 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Tokyo-Ghoul-Jack-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Токийский гуль: "Джек"
                        </h5>
                        <p class="card-text">
                            18+ · 2015 · OVA
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Tokyo-Ghoul-Pinto-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Токийский гуль: "Пинто"
                        </h5>
                        <p class="card-text">
                            18+ · 2015 · OVA
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
            </div>
        </div>
        <!---------------Недавно добавлено--------------->
        <div class="container-fluid recentlyadded h-auto w-100">
            <div class="d-flex flex-row justify-content-between align-items-baseline">
                <h1 class="animeCardTitle">Недавно добавлено</h1>
                <a href="#" class="allBtn">Все</a>
            </div>
            <div class="d-flex flex-row justify-content-between">
                <a class="recentlyadded_prevBtn">
                    <img src="img/prev.png" alt="">
                </a>
                <div class="d-flex flex-row justify-content-center recentlyaddedCarousel">
                <div class="card">
                    <img src="img/SK8-The-Infinity-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            SK8: На скейте в бесконечность
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 13 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Strike-Witches-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Штурмовые ведьмы: Дорога
                        </h5>
                        <p class="card-text">
                            15+ · 2020 · 2 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Bottom-Tier-Character-Card.png" alt="Низкоуровневый персонаж Томодзаки"
                        class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Низкоуровневый персонаж Томодзаки
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 12 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Konosuba-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Да благославит боги сей прекрасный мир
                        </h5>
                        <p class="card-text">
                            15+ · 2016 · 21 серия
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Link-o-Click-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Агент времени
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 4 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/The-Ouintessential-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Пять невест
                        </h5>
                        <p class="card-text">
                            15+ · 2019 · 20 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Adati-And-Shimamura-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Адати и Симамура
                        </h5>
                        <p class="card-text">
                            15+ · 2020 · 12 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/SK8-The-Infinity-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            SK8: На скейте в бесконечность
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 13 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Strike-Witches-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Штурмовые ведьмы: Дорога
                        </h5>
                        <p class="card-text">
                            15+ · 2020 · 2 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Bottom-Tier-Character-Card.png" alt="Низкоуровневый персонаж Томодзаки"
                        class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Низкоуровневый персонаж Томодзаки
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 12 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Konosuba-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Да благославит боги сей прекрасный мир
                        </h5>
                        <p class="card-text">
                            15+ · 2016 · 21 серия
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Link-o-Click-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Агент времени
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 4 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/The-Ouintessential-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Пять невест
                        </h5>
                        <p class="card-text">
                            15+ · 2019 · 20 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Adati-And-Shimamura-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Адати и Симамура
                        </h5>
                        <p class="card-text">
                            15+ · 2020 · 12 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/SK8-The-Infinity-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            SK8: На скейте в бесконечность
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 13 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Strike-Witches-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Штурмовые ведьмы: Дорога
                        </h5>
                        <p class="card-text">
                            15+ · 2020 · 2 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Bottom-Tier-Character-Card.png" alt="Низкоуровневый персонаж Томодзаки"
                        class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Низкоуровневый персонаж Томодзаки
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 12 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Konosuba-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Да благославит боги сей прекрасный мир
                        </h5>
                        <p class="card-text">
                            15+ · 2016 · 21 серия
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Link-o-Click-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Агент времени
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 4 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/The-Ouintessential-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Пять невест
                        </h5>
                        <p class="card-text">
                            15+ · 2019 · 20 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Adati-And-Shimamura-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Адати и Симамура
                        </h5>
                        <p class="card-text">
                            15+ · 2020 · 12 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                </div>
                <a class="recentlyadded_nextBtn">
                    <img src="img/next.png" alt="">
                </a>
            </div>
            
        </div>
        <!---------------Самые топовые аниме--------------->
        <div class="container-fluid mostTopAnime h-auto w-100">
            <div class="d-flex flex-row justify-content-between">
                <h1 class="animeCardTitle">Самые топовые аниме</h1>
            </div>
            <div class="d-flex flex-row justify-content-between">
                <a class="recentlyadded_prevBtn" id="mostTopAnime_prevBtn">
                    <img src="img/prev.png" alt="">
                </a>
                <div class="d-flex flex-row justify-content-center mostTopAnimeCarousel">
                    <div class="card">
                        <img src="img/Naruto-Shippuden-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Наруто: Ураганные хроники
                            </h5>
                            <p class="card-text">
                                15+ · 2007 · 500 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Kimetsu-No-Yaiba-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Клинок, рассекающий демонов
                            </h5>
                            <p class="card-text">
                                15+ · 2019 · 29 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Attack-On-Titan-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Атака титанов
                            </h5>
                            <p class="card-text">
                                15+ · 2013 · 75 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Onepucnhman-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Ванпанчмен
                            </h5>
                            <p class="card-text">
                                15+ · 2015 · 24 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Hunter-x-Hunter-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Охотник x Охотник
                            </h5>
                            <p class="card-text">
                                15+ · 2011 · 148 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Tokyo-Ghoul-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Токийский гуль
                            </h5>
                            <p class="card-text">
                                18+ · 2014 · 48 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Jojo-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Невероятные приключения ДжоДжо
                            </h5>
                            <p class="card-text">
                                15+ · 2012 · 155 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Jojo-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Невероятные приключения ДжоДжо
                            </h5>
                            <p class="card-text">
                                15+ · 2012 · 155 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Jojo-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Невероятные приключения ДжоДжо
                            </h5>
                            <p class="card-text">
                                15+ · 2012 · 155 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Jojo-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Невероятные приключения ДжоДжо
                            </h5>
                            <p class="card-text">
                                15+ · 2012 · 155 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div> 
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                </div>
                <a class="recentlyadded_nextBtn" id="mostTopAnime_nextBtn">
                    <img src="img/next.png" alt="">
                </a>
            </div>
        </div>
        <!---------------Все озвученные--------------->
        <div class="container-fluid alldubbed h-auto w-100">
            <div class="d-flex flex-row justify-content-between align-items-baseline">
                <h1 class="animeCardTitle">Все озвученные</h1>
                <a href="#" class="allBtn">Все</a>
            </div>
            <div class="d-flex flex-row justify-content-between">
                <a class="alldubbed_prevBtn">
                    <img src="img/prev.png" alt="">
                </a>
                <div class="d-flex flex-row justify-content-center alldubbedCarousel"
                 >
                    <div class="card">
                        <img src="img/SK8-The-Infinity-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                SK8: На скейте в бесконечность
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 13 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Horimiya-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Хоримия
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 13 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Cells-At-Work-Black-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Клетки за работой: Тёмная
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 13 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/History-About-Guy-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                История о пареньке из деревни
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 12 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Reinkarnacia-Bezrabotnogo-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Реинкарнация безработного
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 11 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Hunter-x-Hunter-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Охотник x Охотник
                            </h5>
                            <p class="card-text">
                                15+ · 2011 · 148 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Adati-And-Shimamura-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Адати и Симамура
                            </h5>
                            <p class="card-text">
                                15+ · 2020 · 12 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/SK8-The-Infinity-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                SK8: На скейте в бесконечность
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 13 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Horimiya-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Хоримия
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 13 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Cells-At-Work-Black-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Клетки за работой: Тёмная
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 13 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/History-About-Guy-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                История о пареньке из деревни
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 12 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Reinkarnacia-Bezrabotnogo-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Реинкарнация безработного
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 11 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Hunter-x-Hunter-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Охотник x Охотник
                            </h5>
                            <p class="card-text">
                                15+ · 2011 · 148 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Adati-And-Shimamura-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Адати и Симамура
                            </h5>
                            <p class="card-text">
                                15+ · 2020 · 12 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/SK8-The-Infinity-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                SK8: На скейте в бесконечность
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 13 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Horimiya-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Хоримия
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 13 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Cells-At-Work-Black-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Клетки за работой: Тёмная
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 13 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/History-About-Guy-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                История о пареньке из деревни
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 12 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Reinkarnacia-Bezrabotnogo-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Реинкарнация безработного
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 11 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Hunter-x-Hunter-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Охотник x Охотник
                            </h5>
                            <p class="card-text">
                                15+ · 2011 · 148 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Adati-And-Shimamura-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Адати и Симамура
                            </h5>
                            <p class="card-text">
                                15+ · 2020 · 12 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/SK8-The-Infinity-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                SK8: На скейте в бесконечность
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 13 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Horimiya-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Хоримия
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 13 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Cells-At-Work-Black-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Клетки за работой: Тёмная
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 13 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/History-About-Guy-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                История о пареньке из деревни
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 12 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Reinkarnacia-Bezrabotnogo-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Реинкарнация безработного
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 11 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Hunter-x-Hunter-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Охотник x Охотник
                            </h5>
                            <p class="card-text">
                                15+ · 2011 · 148 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Adati-And-Shimamura-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Адати и Симамура
                            </h5>
                            <p class="card-text">
                                15+ · 2020 · 12 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                </div>
                <a class="alldubbed_nextBtn">
                    <img src="img/next.png" alt="">
                </a>
            </div>
        </div>
        <!---------------Судьба Коллекция--------------->
        <div class="container-fluid fateCollection h-auto w-100">
            <div class="d-flex flex-row justify-content-between">
                <h1 class="animeCardTitle">Судьба Коллекция</h1>
            </div>
            <div class="d-flex flex-row justify-content-between"> 
                <a class="alldubbed_prevBtn" id="fateCollection_prevBtn">
                    <img src="img/prev.png" alt="">
                </a>
                <div class="d-flex flex-row justify-content-center fateCollectionCarousel">
                    <div class="card">
                        <img src="img/Fate-Start-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Судьба/Начало
                            </h5>
                            <p class="card-text">
                                18+ · 2011 · 13 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Fate-Start-2-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Судьба/Начало 2
                            </h5>
                            <p class="card-text">
                                18+ · 2012 · 12 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Fate-Stay-Night-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Судьба/Ночь схватки
                            </h5>
                            <p class="card-text">
                                18+ · 2006 · 24 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Fate-Grand-Order-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Судьба/Великий приказ
                            </h5>
                            <p class="card-text">
                                18+ · 2016 · 1 серия
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Fate-Grand-Order-2-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Судьба/Великий приказ: Ва
                            </h5>
                            <p class="card-text">
                                18+ · 2019 · 1 серия
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Fate-Apocryphe-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Судьба/Апокриф
                            </h5>
                            <p class="card-text">
                                18+ · 2017 · 25 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Fate-Devochka-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Судьба/Девочка-Волшебница
                            </h5>
                            <p class="card-text">
                                18+ · 2013 · 10 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Fate-Devochka-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Судьба/Девочка-Волшебница
                            </h5>
                            <p class="card-text">
                                18+ · 2013 · 10 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Fate-Devochka-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Судьба/Девочка-Волшебница
                            </h5>
                            <p class="card-text">
                                18+ · 2013 · 10 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Fate-Devochka-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Судьба/Девочка-Волшебница
                            </h5>
                            <p class="card-text">
                                18+ · 2013 · 10 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                </div>
                <a class="alldubbed_nextBtn" id="fateCollection_nextBtn">
                    <img src="img/next.png" alt="">
                </a>
            </div>
        </div>
        <!---------------Все с субтитрами--------------->
        <div class="container-fluid allsubbed h-auto w-100">
            <div class="d-flex flex-row justify-content-between align-items-baseline">
                <h1 class="animeCardTitle">Все с субтитрами</h1>
                <a href="#" class="allBtn">Все</a>
            </div>
            <div class="d-flex flex-row justify-content-between">
                <a class="allsubbed_prevBtn">
                    <img src="img/prev.png" alt="">
                </a>
                <div class="d-flex flex-row justify-content-center allsubbedCarousel">
                <div class="card">
                    <img src="img/Pretty-Boy-Detective-Club-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Клуб красавчиков-детективный клуб
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 6 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Vivy-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Виви: Песнь флюоритовоинов
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 8 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Super-Cub-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Супер Каб
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 6 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Wonder-Egg-Priority-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Приоритет чудо-яйца
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 12 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Link-o-Click-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Агент времени
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 4 серии
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Bottom-Tier-Character-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Низкоуровневые персонажи
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 12 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/History-About-Guy-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            История о пареньке из деревни
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 12 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Pretty-Boy-Detective-Club-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Клуб красавчиков-детективный клуб
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 6 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Vivy-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Виви: Песнь флюоритовоинов
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 8 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Super-Cub-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Супер Каб
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 6 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Wonder-Egg-Priority-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Приоритет чудо-яйца
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 12 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Link-o-Click-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Агент времени
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 4 серии
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Bottom-Tier-Character-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Низкоуровневые персонажи
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 12 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/History-About-Guy-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            История о пареньке из деревни
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 12 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Pretty-Boy-Detective-Club-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Клуб красавчиков-детективный клуб
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 6 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Vivy-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Виви: Песнь флюоритовоинов
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 8 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Super-Cub-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Супер Каб
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 6 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Wonder-Egg-Priority-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Приоритет чудо-яйца
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 12 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Link-o-Click-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Агент времени
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 4 серии
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Bottom-Tier-Character-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Низкоуровневые персонажи
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 12 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/History-About-Guy-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            История о пареньке из деревни
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 12 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Pretty-Boy-Detective-Club-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Клуб красавчиков-детективный клуб
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 6 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Vivy-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Виви: Песнь флюоритовоинов
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 8 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Super-Cub-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Супер Каб
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 6 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Wonder-Egg-Priority-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Приоритет чудо-яйца
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 12 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Link-o-Click-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Агент времени
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 4 серии
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Bottom-Tier-Character-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Низкоуровневые персонажи
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 12 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/History-About-Guy-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            История о пареньке из деревни
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 12 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Pretty-Boy-Detective-Club-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Клуб красавчиков-детективный клуб
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 6 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Vivy-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Виви: Песнь флюоритовоинов
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 8 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Super-Cub-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Супер Каб
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 6 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Wonder-Egg-Priority-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Приоритет чудо-яйца
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 12 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Link-o-Click-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Агент времени
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 4 серии
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Bottom-Tier-Character-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            Низкоуровневые персонажи
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 12 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/History-About-Guy-Card.png" alt="" class="card-img-top m-auto">
                    <div class="card-body justify-content-start">
                        <h5 class="card-title text-truncate">
                            История о пареньке из деревни
                        </h5>
                        <p class="card-text">
                            15+ · 2021 · 12 серий
                        </p>
                        <div class="flex-row typeTrans">
                            <span class="subbed">Субтитры</span>
                            <span class="dubbed">Озвучено</span>
                        </div>
                    </div>
                    <div class="startWatchingBtn">
                        <a href="#">
                            Начать смотреть
                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                        </a>
                    </div>
                    <div class="additionalInfo d-flex align-items-center">
                        <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                            которые не обладают особым интеллектом, зато едят людей и получают от 
                            этого удовольствие. После продолжительной борьбы остатки человечества 
                            построили высокую стену, окружившую страну людей, через которую титаны 
                            пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                            стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                            свидетелями страшного события — участок стены разрушается супертитаном, 
                            появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                            видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                            убьёт всех титанов и отомстит за человечество.</p>
                    </div>
                </div>
                </div>
                <a class="allsubbed_nextBtn">
                    <img src="img/next.png" alt="">
                </a>
            </div>
            
        </div>
        <!---------------Жанры--------------->
        <div class="container-fluid allGenres">
            <div class="d-flex flex-row justify-content-between align-items-baseline">
                <h1 class="animeCardTitle">Жанры</h1>
                <a href="#" class="allBtn">Все</a>
            </div>
            <div class="d-flex flex-row justify-content-center">
                <div class="card">
                    <img src="img/genres/Action-Card.png" alt="Action-Card" class="card-img-top m-auto">
                    <div class="card-body align-items-center m-auto">
                        <h5 class="card-title text-truncate genreTitle m-auto">
                            Экшен
                        </h5> 
                    </div>
                </div>
                <div class="card">
                    <img src="img/genres/Adventure-Card.png" alt="Action-Card" class="card-img-top m-auto">
                    <div class="card-body align-items-center m-auto">
                        <h5 class="card-title text-truncate genreTitle m-auto">
                            Приключения
                        </h5>
                    </div>
                </div>
                <div class="card">
                    <img src="img/genres/Shonen-Card.png" alt="Action-Card" class="card-img-top m-auto">
                    <div class="card-body align-items-center m-auto">
                        <h5 class="card-title text-truncate genreTitle m-auto">
                            Сёнэн
                        </h5>
                    </div>
                </div>
                <div class="card">
                    <img src="img/genres/Sport-Card.png" alt="Action-Card" class="card-img-top m-auto">
                    <div class="card-body align-items-center m-auto">
                        <h5 class="card-title text-truncate genreTitle m-auto">
                            Спорт
                        </h5>
                    </div>
                </div>
                <div class="card">
                    <img src="img/genres/Comedy-Card.png" alt="Action-Card" class="card-img-top m-auto">
                    <div class="card-body align-items-center m-auto">
                        <h5 class="card-title text-truncate genreTitle m-auto">
                            Комедия
                        </h5>
                    </div>
                </div>
                <div class="card">
                    <img src="img/genres/Drama-Card.png" alt="Action-Card" class="card-img-top m-auto">
                    <div class="card-body align-items-center m-auto">
                        <a href="" class="card-title text-truncate genreTitle m-auto">
                            Драма
                        </a>
                    </div>
                </div>
                <div class="card">
                    <img src="img/genres/Fantasy-Card.png" alt="Action-Card" class="card-img-top m-auto">
                    <div class="card-body align-items-center m-auto">
                        <h5 class="card-title text-truncate genreTitle m-auto">
                            Фэнтези
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <!---------------Всё аниме--------------->
        <div class="container-fluid allAnime h-auto w-100">
            <div class="d-flex flex-row justify-content-between align-items-baseline">
                <h1 class="animeCardTitle">Всё аниме</h1>
                <a href="#" class="allBtn">Все</a>
            </div>
            <div class="d-flex flex-row justify-content-between">
                <a class="allAnime_prevBtn">
                    <img src="img/prev.png" alt="">
                </a>
                <div class="d-flex flex-row justify-content-center allAnimeCarousel">
                    <div class="card">
                        <img src="img/Attack-On-Titan-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Атака титанов
                            </h5>
                            <p class="card-text">
                                15+ · 2013 · 75 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Horimiya-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Хоримия
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 13 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Naruto-Shippuden-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Наруто: Ураганные хроники
                            </h5>
                            <p class="card-text">
                                15+ · 2007 · 500 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Kimetsu-No-Yaiba-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Клинок, рассекающий демонов
                            </h5>
                            <p class="card-text">
                                15+ · 2019 · 29 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Onepucnhman-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Ванпанчмен
                            </h5>
                            <p class="card-text">
                                15+ · 2015 · 24 серии
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Adati-And-Shimamura-Card.png" alt="..." class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Адати и Симамура
                            </h5>
                            <p class="card-text">
                                15+ · 2020 · 12 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Hunter-x-Hunter-Card.png" alt="..." class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Охотник x Охотник
                            </h5>
                            <p class="card-text">
                                15+ · 2011 · 148 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Attack-On-Titan-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Атака титанов
                            </h5>
                            <p class="card-text">
                                15+ · 2013 · 75 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Horimiya-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Хоримия
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 13 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Naruto-Shippuden-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Наруто: Ураганные хроники
                            </h5>
                            <p class="card-text">
                                15+ · 2007 · 500 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Kimetsu-No-Yaiba-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Клинок, рассекающий демонов
                            </h5>
                            <p class="card-text">
                                15+ · 2019 · 29 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Onepucnhman-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Ванпанчмен
                            </h5>
                            <p class="card-text">
                                15+ · 2015 · 24 серии
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Adati-And-Shimamura-Card.png" alt="..." class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Адати и Симамура
                            </h5>
                            <p class="card-text">
                                15+ · 2020 · 12 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Hunter-x-Hunter-Card.png" alt="..." class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Охотник x Охотник
                            </h5>
                            <p class="card-text">
                                15+ · 2011 · 148 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Attack-On-Titan-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Атака титанов
                            </h5>
                            <p class="card-text">
                                15+ · 2013 · 75 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Horimiya-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Хоримия
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 13 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Naruto-Shippuden-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Наруто: Ураганные хроники
                            </h5>
                            <p class="card-text">
                                15+ · 2007 · 500 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Kimetsu-No-Yaiba-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Клинок, рассекающий демонов
                            </h5>
                            <p class="card-text">
                                15+ · 2019 · 29 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Onepucnhman-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Ванпанчмен
                            </h5>
                            <p class="card-text">
                                15+ · 2015 · 24 серии
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Adati-And-Shimamura-Card.png" alt="..." class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Адати и Симамура
                            </h5>
                            <p class="card-text">
                                15+ · 2020 · 12 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Hunter-x-Hunter-Card.png" alt="..." class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Охотник x Охотник
                            </h5>
                            <p class="card-text">
                                15+ · 2011 · 148 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Attack-On-Titan-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Атака титанов
                            </h5>
                            <p class="card-text">
                                15+ · 2013 · 75 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Horimiya-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Хоримия
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 13 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Naruto-Shippuden-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Наруто: Ураганные хроники
                            </h5>
                            <p class="card-text">
                                15+ · 2007 · 500 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Kimetsu-No-Yaiba-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Клинок, рассекающий демонов
                            </h5>
                            <p class="card-text">
                                15+ · 2019 · 29 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Onepucnhman-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Ванпанчмен
                            </h5>
                            <p class="card-text">
                                15+ · 2015 · 24 серии
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Adati-And-Shimamura-Card.png" alt="..." class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Адати и Симамура
                            </h5>
                            <p class="card-text">
                                15+ · 2020 · 12 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Hunter-x-Hunter-Card.png" alt="..." class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Охотник x Охотник
                            </h5>
                            <p class="card-text">
                                15+ · 2011 · 148 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Attack-On-Titan-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Атака титанов
                            </h5>
                            <p class="card-text">
                                15+ · 2013 · 75 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Horimiya-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Хоримия
                            </h5>
                            <p class="card-text">
                                15+ · 2021 · 13 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Naruto-Shippuden-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Наруто: Ураганные хроники
                            </h5>
                            <p class="card-text">
                                15+ · 2007 · 500 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Kimetsu-No-Yaiba-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Клинок, рассекающий демонов
                            </h5>
                            <p class="card-text">
                                15+ · 2019 · 29 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Onepucnhman-Card.png" alt="" class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Ванпанчмен
                            </h5>
                            <p class="card-text">
                                15+ · 2015 · 24 серии
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Adati-And-Shimamura-Card.png" alt="..." class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Адати и Симамура
                            </h5>
                            <p class="card-text">
                                15+ · 2020 · 12 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Hunter-x-Hunter-Card.png" alt="..." class="card-img-top m-auto">
                        <div class="card-body justify-content-start">
                            <h5 class="card-title text-truncate">
                                Охотник x Охотник
                            </h5>
                            <p class="card-text">
                                15+ · 2011 · 148 серий
                            </p>
                            <div class="flex-row typeTrans">
                                <span class="subbed">Субтитры</span>
                                <span class="dubbed">Озвучено</span>
                            </div>
                        </div>
                        <div class="startWatchingBtn">
                            <a href="#">
                                Начать смотреть
                                <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                            </a>
                        </div>
                        <div class="additionalInfo d-flex align-items-center">
                            <p>Уже многие годы человечество ведёт борьбу с титанами — огромными существами, 
                                которые не обладают особым интеллектом, зато едят людей и получают от 
                                этого удовольствие. После продолжительной борьбы остатки человечества 
                                построили высокую стену, окружившую страну людей, через которую титаны 
                                пройти не могли. С тех пор прошло сто лет, люди мирно живут под защитой 
                                стены. Но однажды подросток Эрэн и его сводная сестра Микаса становятся 
                                свидетелями страшного события — участок стены разрушается супертитаном, 
                                появившимся прямо из воздуха. Титаны нападают на город, и дети в ужасе 
                                видят, как один из монстров заживо съедает их мать. Эрэн клянётся, что 
                                убьёт всех титанов и отомстит за человечество.</p>
                        </div>
                    </div> 
                </div>
                <a class="allAnime_nextBtn">
                    <img src="img/next.png" alt="">
                </a>
            </div>
        </div>
    </main>
<?php 
    include 'php/footer.php';
?>