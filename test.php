<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <title>Document</title>
</head>

<body>
<?php 
    include 'php/header.php';
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
                            <p>Сезон 2 - в озвучке</p>
                            <a href="#">Начать смотреть</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <a class="gradient">
                        <img src="img/slider/full-dive-slider.jpg" class="d-block h-auto w-100" alt="...">
                    </a>
                    <div class="carousel-caption">
                        <div class="container-fluid carouselAnimeCaption">
                            <h5 style="font-size: 45px; line-height: 50px; margin-bottom: 2%;">Что, если чрезвычайно
                                развитая ролевая игра с полным погружением вызывает большее привыкание, чем реальность
                            </h5>
                            <a href="#">Начать смотреть</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <a class="gradient">
                        <img src="img/slider/konosuba-slider.jpg" class="d-block h-auto w-100" alt="...">
                    </a>
                    <div class="carousel-caption">
                        <div class="container-fluid carouselAnimeCaption">
                            <h5>Да благословят боги сей расчудесный мир!</h5>
                            <p>Сезон 2 - в озвучке</p>
                            <a href="#">Начать смотреть</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <a class="gradient">
                        <img src="img/slider/konosuba-slider.jpg" class="d-block h-auto w-100" alt="...">
                    </a>
                    <div class="carousel-caption">
                        <div class="container-fluid carouselAnimeCaption">
                            <h5>Да благословят боги сей расчудесный мир!</h5>
                            <p>Сезон 2 - в озвучке</p>
                            <a href="#">Начать смотреть</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <a class="gradient">
                        <img src="img/slider/konosuba-slider.jpg" class="d-block h-auto w-100" alt="...">
                    </a>
                    <div class="carousel-caption">
                        <div class="container-fluid carouselAnimeCaption">
                            <h5>Да благословят боги сей расчудесный мир!</h5>
                            <p>Сезон 2 - в озвучке</p>
                            <a href="#">Начать смотреть</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <a class="gradient">
                        <img src="img/slider/konosuba-slider.jpg" class="d-block h-auto w-100" alt="...">
                    </a>
                    <div class="carousel-caption">
                        <div class="container-fluid carouselAnimeCaption">
                            <h5>Да благословят боги сей расчудесный мир!</h5>
                            <p>Сезон 2 - в озвучке</p>
                            <a href="#">Начать смотреть</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <a class="gradient">
                        <img src="img/slider/konosuba-slider.jpg" class="d-block h-auto w-100" alt="...">
                    </a>
                    <div class="carousel-caption">
                        <div class="container-fluid carouselAnimeCaption">
                            <h5>Да благословят боги сей расчудесный мир!</h5>
                            <p>Сезон 2 - в озвучке</p>
                            <a href="#">Начать смотреть</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <a class="gradient">
                        <img src="img/slider/konosuba-slider.jpg" class="d-block h-auto w-100" alt="...">
                    </a>
                    <div class="carousel-caption">
                        <div class="container-fluid carouselAnimeCaption">
                            <h5>Да благословят боги сей расчудесный мир!</h5>
                            <p>Сезон 2 - в озвучке</p>
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
                <div class="d-flex flex-row justify-content-center alldubbedCarousel">

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
                <a class="carouselBtn" id="fateCollection_prevBtn">
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
                <a class="carouselBtn" id="fateCollection_nextBtn">
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

                </div>
                <a class="allAnime_nextBtn">
                    <img src="img/next.png" alt="">
                </a>
            </div>
        </div>
    </main>
    <!---------------Футер--------------->
    <footer>
        <div class="footergrid">
            <a href="terms.php" class="footertext">Соглашение</a>
            <div class="mediaLinks">
                <a href="https://www.youtube.com/watch?v=DLzxrzFCyOs"><img src="img/social/VK-Icon-Link.png" alt=""></a>
                <a href="https://www.youtube.com/watch?v=DLzxrzFCyOs"><img src="img/social/Int-Icon-Link.png"
                        alt=""></a>
                <a href="https://www.youtube.com/watch?v=DLzxrzFCyOs"><img src="img/social/Twitter-Icon-Link.png"
                        alt=""></a>
                <a href="https://www.youtube.com/watch?v=DLzxrzFCyOs"><img src="img/social/Telegram-Icon-Link.png"
                        alt=""></a>
            </div>
            <a class="footertext">© anivid.io 2021</a>
        </div>
    </footer>
    <style type="text/css">
        #hellopreloader>p {
            display:none;
        }
        #hellopreloader_preload {
            display: block;
            position: fixed;
            z-index: 99999;
            top: 0;left: 0;
            width: 100%;
            height: 100%;
            min-width: 400px;
            background: #6705e7 url(http://hello-site.ru//main/images/preloads/oval.svg) center center no-repeat;
            background-size:91px;}
    </style>
    <div id="hellopreloader">
        <div id="hellopreloader_preload">
        </div>
    </div>
    <script type="text/javascript">
        var hellopreloader = document.getElementById("hellopreloader_preload");
        function fadeOutnojquery(el){ 
            el.style.opacity = 1;
            var interhellopreloader = setInterval(function() {
                el.style.opacity = el.style.opacity - 0.05;
                if (el.style.opacity <=0.05) { 
                    clearInterval(interhellopreloader);
                    hellopreloader.style.display = "none";
                    }
                },16);
        }
        window.onload = function() {
            setTimeout(function() {
                fadeOutnojquery(hellopreloader);
                    },4000);
                };
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="slick/slick.js"></script>
    <script src="js/test2.js"></script>
    <script src="https://kit.fontawesome.com/c0b154b39b.js" crossorigin="anonymous"></script>
    <script src="js/test3.js"></script>
    <!-- <script src="js/slider.js"></script> -->
</body>
</html>