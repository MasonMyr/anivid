<?php 
    if (!isset($_COOKIE['user']))   
    {   
        include 'php/header.php';;  
    } else {
        include 'php/header_logged.php';
    }
?>
<main>
  <div class="animePageBG coniner-fluid h-auto w-100">
    <div class="d-flex flex-row justify-content-start animePageInf">
      <div>
        <img
        class="AnimePageCard w-100 h-auto"
        src="img\Naruto-Shippuden-Card.png"
        alt="Naruto Shippuden"
      />
      </div>
      
      <div class="d-flex flex-column animePageDescription">
        <h1 class="AnimePageTitle">Наруто: Ураганные хроники</h1>
        <p
          style=" 
          font-style: normal;
          font-weight: 600;
          font-size: 18px;
          line-height: 24px;
          color: rgba(255, 255, 255, 0.8);">
          15+ · 2007 · 500 серий
        </p>
        <div class="add-to-list" style="width: 220px;">
          <div id="add-to-list-btn" class="d-flex align-items-center justify-content-center addToListBtn" data-toggle="collapse" data-target="#add-to-list" role="button">
            <span>
              Добавить в список
              <span><i class="fas fa-chevron-down"></i></span>
            </span>
          </div>
          <div class="card-block p-0 collapse" id="add-to-list"> 
            <div class="list-group mt-minus-1">
              <span id="watch" class="list-group-item list-group-item-action py-2" data-list="1" data-anime-id="1">Смотрю</span>
              <span id="plan" class="list-group-item list-group-item-action py-2" data-list="2" data-anime-id="1">Планирую</span>
              <span id="watched" class="list-group-item list-group-item-action py-2" data-list="3" data-anime-id="1">Посмотрел</span>
              <span id="abandon" class="list-group-item list-group-item-action py-2" data-list="4" data-anime-id="1">Брошено</span>
            </div>
          </div>
        </div>
        <p 
          style="
          font-style: normal;
          font-weight: bold;
          font-size: 24px;
          line-height: 32px;
          color: #FFFFFF;"
        >
          Наруто Узумаки вернулся!
        </p>
        <p
          style="max-width: 804px;"
        >
          Наруто Узумаки вернулся! После двух с половиной лет тренировок в
          дороге с Джирайей из Саннинов Наруто вернулся в Деревню, Скрытую в
          Листьях, и готов продемонстрировать свои новые навыки. Он и Сакура
          объединяются, чтобы сразиться со своим старым мастером Какаши, который
          очень впечатлен их успехами.
        </p>
        <div class="flex-row genresList">
          <span class="Action">Экшен</span>
          <span class="Adventure">Приключение</span>
          <span class="Drama">Драма</span>
          <span class="Mortial_Arts">Боевые искусства</span>
          <span class="Shonen">Сёнен</span>
          <span class="Super_Power">Супер сила</span>
          <span class="Supernatural">Сверхъестественные</span>
        </div>
      </div>
      
    </div>
  </div>
  
  <div class="animeFrames">
      <p>Кадры из аниме</p>
      <div class="d-flex justify-content-center">
        <img src="img\frames\naruto_frame_1.png" alt="">
        <img src="img\frames\naruto_frame_2.png" alt="">
        <img src="img\frames\naruto_frame_3.png" alt="">
        <img src="img\frames\naruto_frame_4.png" alt="">
        <img src="img\frames\naruto_frame_5.png" alt="">
        <img src="img\frames\naruto_frame_6.png" alt="">
        <img src="img\frames\naruto_frame_7.png" alt="">
      </div>
    </div>

  <div class="animePagePlayer">
      <p>Смотреть</p>
      <div class="d-flex justify-content-center">
        <iframe src="//aniqit.com/serial/18194/3d5c8e3100e53ca206acf8c4e6f3c3d8/720p" width="1705" height="836" frameborder="0" allowfullscreen allow="autoplay *; fullscreen *"></iframe>
      </div>
  </div>
  <div class="animeSeriesList d-flex flex-row justify-content-center">
    <div class="seriaChoose d-flex flex-column justify-content-center">
      <div class="seriaImg">
        <img src="img/seria_frames/naruto_seria_1.png" alt="">
      </div>
      <div class="seriaDesc">
        <h5>1. Возвращение домой</h5>
        <p>В ворота проходит фигура. Это повзрослевший Наруто, который вернулся из долгого тренировочного путешествия с Джирайей. Наруто Узумаки вернулся!</p>
      </div>
    </div>
    <div class="seriaChoose d-flex flex-column justify-content-center">
      <div class="seriaImg">
        <img src="img/seria_frames/naruto_seria_1.png" alt="">
      </div>
      <div class="seriaDesc">
        <h5>1. Возвращение домой</h5>
        <p>В ворота проходит фигура. Это повзрослевший Наруто, который вернулся из долгого тренировочного путешествия с Джирайей. Наруто Узумаки вернулся!</p>
      </div>
    </div>
    <div class="seriaChoose d-flex flex-column justify-content-center">
      <div class="seriaImg">
        <img src="img/seria_frames/naruto_seria_1.png" alt="">
      </div>
      <div class="seriaDesc">
        <h5>1. Возвращение домой</h5>
        <p>В ворота проходит фигура. Это повзрослевший Наруто, который вернулся из долгого тренировочного путешествия с Джирайей. Наруто Узумаки вернулся!</p>
      </div>
    </div>
    <div class="seriaChoose d-flex flex-column justify-content-center">
      <div class="seriaImg">
        <img src="img/seria_frames/naruto_seria_1.png" alt="">
      </div>
      <div class="seriaDesc">
        <h5>1. Возвращение домой</h5>
        <p>В ворота проходит фигура. Это повзрослевший Наруто, который вернулся из долгого тренировочного путешествия с Джирайей. Наруто Узумаки вернулся!</p>
      </div>
    </div>
    <div class="seriaChoose d-flex flex-column justify-content-center">
      <div class="seriaImg">
        <img src="img/seria_frames/naruto_seria_1.png" alt="">
      </div>
      <div class="seriaDesc">
        <h5>1. Возвращение домой</h5>
        <p>В ворота проходит фигура. Это повзрослевший Наруто, который вернулся из долгого тренировочного путешествия с Джирайей. Наруто Узумаки вернулся!</p>
      </div>
    </div>
  </div>
</main>
<?php 
  include 'php/footer.php';
?>