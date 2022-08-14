$(document).ready(function(){
    $('.inTrendCarousel').slick({
      infinite: false,
      dots: false, 
      draggable: false,
      speed: 1000,
      nextArrow: $('.nextBtn'),
      prevArrow: $('.prevBtn'),
    //   mobileFirst: true,
      rows: 1,
      slidesToShow: 7,
      slidesToScroll: 7,
      variableWidth: true,
      waitForAnimate: false,
      responsive: [
          {
            breakpoint: 1201,
            settings: {
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: true,
            rows: 1,
            slidesToShow: 4,
            slidesToScroll: 4
          }
        },
          {
            breakpoint: 992,
            settings: {
            slidesToShow: 4,
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: true,
            rows: 1,
            slidesToScroll: 4
          }
        },
          {
            breakpoint: 768,
            settings: {
            slidesToShow: 3,
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: true,
            rows: 1,
            slidesToScroll: 3
          }
        },
        {
            breakpoint: 576,
            settings: {
            slidesToShow: 2,
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: true,
            rows: 1,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 415,
          settings: {
          slidesToShow: 1,
          nextArrow: $('.nextBtnMobile'),
          prevArrow: $('.prevBtnMobile'),
          draggable: true,
          rows: 1,
          slidesToScroll: 1
        }
      }  
      ]
    });

    $('.popularCarousel').slick({
      infinite: false,
      dots: false, 
      draggable: false,
      nextArrow: $('.popular_nextBtn'),
      prevArrow: $('.popular_prevBtn'),
      speed: 1000,
    //   mobileFirst: true,
      rows: 1,
      slidesToShow: 7,
      slidesToScroll: 7,
      responsive: [
          {
            breakpoint: 1201,
            settings: {
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: true,
            rows: 1,
            slidesToShow: 6,
            slidesToScroll: 6
          }
        },
          {
            breakpoint: 992,
            settings: {
            slidesToShow: 4,
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: true,
            rows: 1,
            slidesToScroll: 4
          }
        },
          {
            breakpoint: 768,
            settings: {
            slidesToShow: 3,
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: true,
            rows: 1,
            slidesToScroll: 3
          }
        },
        {
            breakpoint: 576,
            settings: {
            slidesToShow: 2,
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: false,
            rows: 1,
            slidesToScroll: 2
          }
        } 
      ]
    });

    $('.recentlyaddedCarousel').slick({
      infinite: false,
      dots: false, 
      draggable: false,
      nextArrow: $('.recentlyadded_nextBtn'),
      prevArrow: $('.recentlyadded_prevBtn'),
      speed: 1000,
    //   mobileFirst: true,
      rows: 1,
      slidesToShow: 7,
      slidesToScroll: 7,
      responsive: [
          {
            breakpoint: 1201,
            settings: {
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: true,
            rows: 1,
            slidesToShow: 6,
            slidesToScroll: 6
          }
        },
          {
            breakpoint: 992,
            settings: {
            slidesToShow: 4,
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: true,
            rows: 1,
            slidesToScroll: 4
          }
        },
          {
            breakpoint: 768,
            settings: {
            slidesToShow: 3,
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: true,
            rows: 1,
            slidesToScroll: 3
          }
        },
        {
            breakpoint: 576,
            settings: {
            slidesToShow: 2,
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: false,
            rows: 1,
            slidesToScroll: 2
          }
        } 
      ]
    });

    $('.allsubbedCarousel').slick({
      infinite: false,
      dots: false, 
      draggable: false,
      nextArrow: $('.allsubbed_nextBtn'),
      prevArrow: $('.allsubbed_prevBtn'),
      speed: 1000,
    //   mobileFirst: true,
      rows: 1,
      slidesToShow: 7,
      slidesToScroll: 7,
      responsive: [
          {
            breakpoint: 1201,
            settings: {
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: true,
            rows: 1,
            slidesToShow: 6,
            slidesToScroll: 6
          }
        },
          {
            breakpoint: 992,
            settings: {
            slidesToShow: 4,
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: true,
            rows: 1,
            slidesToScroll: 4
          }
        },
          {
            breakpoint: 768,
            settings: {
            slidesToShow: 3,
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: true,
            rows: 1,
            slidesToScroll: 3
          }
        },
        {
            breakpoint: 576,
            settings: {
            slidesToShow: 2,
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: false,
            rows: 1,
            slidesToScroll: 2
          }
        } 
      ]
    });

    $('.alldubbedCarousel').slick({
      infinite: false,
      dots: false, 
      draggable: false,
      nextArrow: $('.alldubbed_nextBtn'),
      prevArrow: $('.alldubbed_prevBtn'),
      speed: 1000,
    //   mobileFirst: true,
      rows: 1,
      slidesToShow: 7,
      slidesToScroll: 7,
      responsive: [
          {
            breakpoint: 1201,
            settings: {
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: true,
            rows: 1,
            slidesToShow: 6,
            slidesToScroll: 6
          }
        },
          {
            breakpoint: 992,
            settings: {
            slidesToShow: 4,
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: true,
            rows: 1,
            slidesToScroll: 4
          }
        },
          {
            breakpoint: 768,
            settings: {
            slidesToShow: 3,
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: true,
            rows: 1,
            slidesToScroll: 3
          }
        },
        {
            breakpoint: 576,
            settings: {
            slidesToShow: 2,
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: false,
            rows: 1,
            slidesToScroll: 2
          }
        } 
      ]
    });

    $('.allAnimeCarousel').slick({
      infinite: false,
      dots: false, 
      draggable: false,
      nextArrow: $('.allAnime_nextBtn'),
      prevArrow: $('.allAnime_prevBtn'),
      speed: 1000,
    //   mobileFirst: true,
      rows: 1,
      slidesToShow: 7,
      slidesToScroll: 7,
      responsive: [
          {
            breakpoint: 1201,
            settings: {
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: true,
            rows: 1,
            slidesToShow: 6,
            slidesToScroll: 6
          }
        },
          {
            breakpoint: 992,
            settings: {
            slidesToShow: 4,
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: true,
            rows: 1,
            slidesToScroll: 4
          }
        },
          {
            breakpoint: 768,
            settings: {
            slidesToShow: 3,
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: true,
            rows: 1,
            slidesToScroll: 3
          }
        },
        {
            breakpoint: 576,
            settings: {
            slidesToShow: 2,
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: false,
            rows: 1,
            slidesToScroll: 2
          }
        } 
      ]
    });
    $('.narutoWorldCarousel').slick({
      infinite: false,
      dots: false, 
      draggable: false,
      nextArrow: $('.narutoWorld_nextBtn'),
      prevArrow: $('.narutoWorld_prevBtn'),
      speed: 1000,
    //   mobileFirst: true,
      rows: 1,
      slidesToShow: 6,
      slidesToScroll: 6,
      responsive: [
          {
            breakpoint: 1201,
            settings: {
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: true,
            rows: 1,
            slidesToShow: 6,
            slidesToScroll: 6
          }
        },
          {
            breakpoint: 992,
            settings: {
            slidesToShow: 4,
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: true,
            rows: 1,
            slidesToScroll: 4
          }
        },
          {
            breakpoint: 768,
            settings: {
            slidesToShow: 3,
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: true,
            rows: 1,
            slidesToScroll: 3
          }
        },
        {
            breakpoint: 576,
            settings: {
            slidesToShow: 2,
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: false,
            rows: 1,
            slidesToScroll: 2
          }
        } 
      ]
    });
    $('.deadInsideCarousel').slick({
      infinite: false,
      dots: false, 
      draggable: false,
      arrows: false,
      speed: 1000,
    //   mobileFirst: true,
      rows: 1,
      slidesToShow: 4,
      // slidesToScroll: 6,
      responsive: [
          {
            breakpoint: 1201,
            settings: {
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: true,
            rows: 1,
            slidesToShow: 4,
            slidesToScroll: 4
          }
        },
          {
            breakpoint: 992,
            settings: {
            slidesToShow: 3,
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: true,
            rows: 1,
            slidesToScroll: 3
          }
        },
          {
            breakpoint: 768,
            settings: {
            slidesToShow: 2,
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: true,
            rows: 1,
            slidesToScroll: 2
          }
        },
        {
            breakpoint: 576,
            settings: {
            slidesToShow: 1, 
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: false,
            rows: 1,
            slidesToScroll: 1
          }
        } 
      ]
    });
    $('.fateCollectionCarousel').slick({
      infinite: false,
      dots: false, 
      draggable: false,
      nextArrow: $('#fateCollection_nextBtn'),
      prevArrow: $('#fateCollection_prevBtn'),
      speed: 1000,
      variableWidth: true,
    //   mobileFirst: true,
      rows: 1,
      slidesToShow: 7,
      slidesToScroll: 7,
      responsive: [
          {
            breakpoint: 1201,
            settings: {
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: true,
            rows: 1,
            slidesToShow: 4,
            slidesToScroll: 4
          }
        },
          {
            breakpoint: 992,
            settings: {
            slidesToShow: 3,
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: true,
            rows: 1,
            slidesToScroll: 3
          }
        },
          {
            breakpoint: 768,
            settings: {
            slidesToShow: 2,
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: true,
            rows: 1,
            slidesToScroll: 2
          }
        },
        {
            breakpoint: 576,
            settings: {
            slidesToShow: 1, 
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: false,
            rows: 1,
            slidesToScroll: 1
          }
        } 
      ]
    });
    $('.mostTopAnimeCarousel').slick({
      infinite: false,
      dots: false, 
      draggable: false,
      nextArrow: $('#mostTopAnime_nextBtn'),
      prevArrow: $('#mostTopAnime_prevBtn'),
      speed: 1000,
      variableWidth: true,
    //   mobileFirst: true,
      rows: 1,
      slidesToShow: 7,
      slidesToScroll: 7,
      responsive: [
          {
            breakpoint: 1201,
            settings: {
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: true,
            rows: 1,
            slidesToShow: 4,
            slidesToScroll: 4
          }
        },
          {
            breakpoint: 992,
            settings: {
            slidesToShow: 3,
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: true,
            rows: 1,
            slidesToScroll: 3
          }
        },
          {
            breakpoint: 768,
            settings: {
            slidesToShow: 2,
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: true,
            rows: 1,
            slidesToScroll: 2
          }
        },
        {
            breakpoint: 576,
            settings: {
            slidesToShow: 1, 
            nextArrow: $('.nextBtnMobile'),
            prevArrow: $('.prevBtnMobile'),
            draggable: false,
            rows: 1,
            slidesToScroll: 1
          }
        } 
      ]
    });
  });