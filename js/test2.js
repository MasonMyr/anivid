// $(document).ready(function () {

  

//   let url =
//     "https://kodikapi.com/list?token=3a6e13fd86d8beb9c09127e5ef9836b9&limit=100&types=anime-serial&with_episodes=true&with_material_data=true&camrip=false&anime_status=ongoing,released&kinopoisk_rating=6-10&year=2018,2019,2020,2021";

//   let firstFetch = (url) => {
//     let imdbID = []; 
//     let titles = []; 
//     let shikimoriId = [];
//     let key;
//     let key2;
//     let list = document.querySelector(".inTrendCarousel");

//     fetch(url, {
//       method: "GET",
//     })
//       .then((content) => content.json())
//       .then((content) => {
//         let test = content["results"];
//         for (key in test) {
          
//           let i = test[key];
//           let j = i["material_data"];
//           if (typeof(i["imdb_id"]) !== "undefined" && typeof(i["shikimori_id"]) !== "undefined") { 

//             for (key2 in test) {
//               if (i["imdb_id"] === test[key2]["imdb_id"] || i["shikimori_id"] === test[key2]["shikimori_id"] || j["title"] === test[key2]["material_data"]["title"]) {
//                 test.splice(key2, 1);
//               }
//             }            

//             if ("description" in j) {
//               imdbID.push(i["imdb_id"]); 
//               titles.push(j["title"]);
//               shikimoriId.push(i["shikimori_id"])
//               list.innerHTML += `
//                     <div class="card">
//                         <img src="${j["poster_url"]}" data-lazy="${j["poster_url"]}" alt="${j["title"]}" class="card-img-top m-auto">
//                         <div class="card-body justify-content-start">
//                             <h5 class="card-title text-truncate">
//                                 ${j["title"]}
//                             </h5>
//                             <p class="card-text">
//                                 15+ · ${i["year"]} · ${j["episodes_aired"]} серий 
//                             </p>
//                             <div class="flex-row typeTrans">
//                                 <span class="subbed">Субтитры</span>
//                                 <span class="dubbed">Озвучено</span>
//                             </div>
//                         </div>
//                         <div class="startWatchingBtn">
//                             <a href="#">
//                                 Начать смотреть
//                                 <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
//                             </a>
//                         </div>
//                         <div class="additionalInfo d-flex align-items-center">
//                             <p>${j["description"]}</p> 
//                         </div>
//                     </div> 
//                   `;
//             } else {
//               test.splice(key, 1);
//             }
//           } else {
//             test.splice(key, 1);
//           }
//         }
//         return content
//       })
//       .then((content) => {
//         fetch(content["next_page"], {
//           method: "GET",
//         })
//           .then((content) => content.json())
//           .then((content) => { 
//             let test = content["results"];

//             for (key in test) {
//               let i = test[key];
//               let j = i["material_data"];
              
//               if (typeof(i["imdb_id"]) !== "undefined") {  

//                 for (key2 in test) {
//                   if (i["imdb_id"] === test[key2]["imdb_id"] || i["shikimori_id"] === test[key2]["shikimori_id"]) {
//                     test.splice(key2, 1);
//                   } else {
//                     continue
//                   }
//                 }
                
//                 if ("description" in j) {
//                   imdbID.push(i["imdb_id"]);  
//                   titles.push(j["title"]);
//                   shikimoriId.push(i["shikimori_id"])
//                   list.innerHTML += `
//                   <div class="card">
//                       <img src="${j["poster_url"]}" alt="${j["title"]}" class="card-img-top m-auto">
//                       <div class="card-body justify-content-start">
//                           <h5 class="card-title text-truncate">
//                               ${j["title"]}
//                           </h5>
//                           <p class="card-text">
//                               15+ · ${i["year"]} · ${j["episodes_aired"]} серий 
//                           </p>
//                           <div class="flex-row typeTrans">
//                               <span class="subbed">Субтитры</span>
//                               <span class="dubbed">Озвучено</span>
//                           </div>
//                       </div>
//                       <div class="startWatchingBtn">
//                           <a href="#">
//                               Начать смотреть
//                               <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
//                           </a>
//                       </div>
//                       <div class="additionalInfo d-flex align-items-center">
//                           <p>${j["description"]}</p> 
//                       </div>
//                   </div> 
//                 `;
//                 } else {
//                   test.splice(key, 1);
//                 }
//               } else {
//                 test.splice(key, 1);
//               }
//             }
//             console.log(imdbID);
//             return content;
//           })
//           .then((content) => {
//             fetch(content["next_page"], {
//               method: "GET",
//             })
//               .then((content) => content.json())
//               .then((content) => { 
//                 let test = content["results"];
    
//                 for (key in test) {
//                   let i = test[key];
//                   let j = i["material_data"];

//                   for (let k of imdbID) {
//                     for (let key3 in test) {
//                       if (k === test[key3]["imdb_id"]) {
//                         test.splice(key3, 1); 
//                       } else {
//                         continue
//                       }
//                     }
//                   }

//                   for (let l of shikimoriId) {
//                     for (let key4 in test) {
//                       if (l === test[key4]["shikimori_id"]) {
//                         test.splice(key4, 1); 
//                       } else {
//                         continue
//                       }
//                     }
//                   }
  
//                   for (let m of titles) {
//                     for (let key5 in test) {
//                       if (m === test[key5]["material_data"]["title"]) {
//                         test.splice(key5, 1); 
//                       } else {
//                         continue
//                       }
//                     }
//                   }               

//                   if (typeof(i["imdb_id"]) !== "undefined") {  
    
//                     for (key2 in test) {
//                       if (i["imdb_id"] === test[key2]["imdb_id"] || i["shikimori_id"] === test[key2]["shikimori_id"]) {
//                         test.splice(key2, 1);
//                       }
//                     }
                    
//                     if ("description" in j) {
//                       imdbID.push(i["imdb_id"]);  
//                       titles.push(j["title"]);
//                       shikimoriId.push(i["shikimori_id"])
//                       list.innerHTML += `
//                       <div class="card">
//                           <img src="${j["poster_url"]}" alt="${j["title"]}" class="card-img-top m-auto">
//                           <div class="card-body justify-content-start">
//                               <h5 class="card-title text-truncate">
//                                   ${j["title"]}
//                               </h5>
//                               <p class="card-text">
//                                   15+ · ${i["year"]} · ${j["episodes_aired"]} серий 
//                               </p>
//                               <div class="flex-row typeTrans">
//                                   <span class="subbed">Субтитры</span>
//                                   <span class="dubbed">Озвучено</span>
//                               </div>
//                           </div>
//                           <div class="startWatchingBtn">
//                               <a href="#">
//                                   Начать смотреть
//                                   <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
//                               </a>
//                           </div>
//                           <div class="additionalInfo d-flex align-items-center">
//                               <p>${j["description"]}</p> 
//                           </div>
//                       </div> 
//                     `;
//                     } else {
//                       test.splice(key, 1);
//                     }
//                   } else {
//                     test.splice(key, 1);
//                   }
//                 }
//                 return content;
//               })
//           }) 
//       })
//   };

//   firstFetch(url);

  setTimeout(function test() {
    $(document).ready(function () {
      $(".inTrendCarousel").slick({
        infinite: false,
        lazyLoad: 'ondemand',
        dots: false,
        draggable: false,
        speed: 1000,
        nextArrow: $(".nextBtn"),
        prevArrow: $(".prevBtn"),
        //   mobileFirst: true,
        rows: 1,
        slidesToShow: 6,
        slidesToScroll: 5,
        responsive: [
          {
            breakpoint: 1201,
            settings: {
              nextArrow: $(".nextBtnMobile"),
              prevArrow: $(".prevBtnMobile"),
              draggable: true,
              rows: 1,
              slidesToShow: 6,
              slidesToScroll: 5,
            },
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 4,
              nextArrow: $(".nextBtnMobile"),
              prevArrow: $(".prevBtnMobile"),
              draggable: true,
              rows: 1,
              slidesToScroll: 4,
            },
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 3,
              nextArrow: $(".nextBtnMobile"),
              prevArrow: $(".prevBtnMobile"),
              draggable: true,
              rows: 1,
              slidesToScroll: 3,
            },
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 2,
              nextArrow: $(".nextBtnMobile"),
              prevArrow: $(".prevBtnMobile"),
              draggable: true,
              rows: 1,
              slidesToScroll: 2,
            },
          },
        ],
      });

      $(".narutoWorldCarousel").slick({
        infinite: false,
        dots: false,
        draggable: false,
        nextArrow: $(".narutoWorld_nextBtn"),
        prevArrow: $(".narutoWorld_prevBtn"),
        speed: 1000,
        //   mobileFirst: true,
        rows: 1,
        slidesToShow: 6,
        slidesToScroll: 5,
        responsive: [
          {
            breakpoint: 1201,
            settings: {
              nextArrow: $(".nextBtnMobile"),
              prevArrow: $(".prevBtnMobile"),
              draggable: true,
              rows: 1,
              slidesToShow: 6,
              slidesToScroll: 5,
            },
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 4,
              nextArrow: $(".nextBtnMobile"),
              prevArrow: $(".prevBtnMobile"),
              draggable: true,
              rows: 1,
              slidesToScroll: 4,
            },
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 3,
              nextArrow: $(".nextBtnMobile"),
              prevArrow: $(".prevBtnMobile"),
              draggable: true,
              rows: 1,
              slidesToScroll: 3,
            },
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 2,
              nextArrow: $(".nextBtnMobile"),
              prevArrow: $(".prevBtnMobile"),
              draggable: false,
              rows: 1,
              slidesToScroll: 2,
            },
          },
        ],
      });

      $(".fateCollectionCarousel").slick({
        infinite: false,
        dots: false,
        draggable: false,
        nextArrow: $("#fateCollection_nextBtn"),
        prevArrow: $("#fateCollection_prevBtn"),
        speed: 1000,
        //   mobileFirst: true,
        rows: 1,
        slidesToShow: 6,
        slidesToScroll: 5,
        responsive: [
          {
            breakpoint: 1201,
            settings: {
              nextArrow: $(".nextBtnMobile"),
              prevArrow: $(".prevBtnMobile"),
              draggable: true,
              rows: 1,
              slidesToShow: 6,
              slidesToScroll: 5,
            },
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 4,
              nextArrow: $(".nextBtnMobile"),
              prevArrow: $(".prevBtnMobile"),
              draggable: true,
              rows: 1,
              slidesToScroll: 4,
            },
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 3,
              nextArrow: $(".nextBtnMobile"),
              prevArrow: $(".prevBtnMobile"),
              draggable: true,
              rows: 1,
              slidesToScroll: 3,
            },
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 2,
              nextArrow: $(".nextBtnMobile"),
              prevArrow: $(".prevBtnMobile"),
              draggable: false,
              rows: 1,
              slidesToScroll: 2,
            },
          },
        ],
      });

      $(".popularCarousel").slick({
        infinite: false,
        dots: false,
        draggable: false,
        nextArrow: $(".popular_nextBtn"),
        prevArrow: $(".popular_prevBtn"),
        speed: 1000,
        //   mobileFirst: true,
        rows: 1,
        slidesToShow: 6,
        slidesToScroll: 5,
        responsive: [
          {
            breakpoint: 1201,
            settings: {
              nextArrow: $(".nextBtnMobile"),
              prevArrow: $(".prevBtnMobile"),
              draggable: true,
              rows: 1,
              slidesToShow: 6,
              slidesToScroll: 5,
            },
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 4,
              nextArrow: $(".nextBtnMobile"),
              prevArrow: $(".prevBtnMobile"),
              draggable: true,
              rows: 1,
              slidesToScroll: 4,
            },
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 3,
              nextArrow: $(".nextBtnMobile"),
              prevArrow: $(".prevBtnMobile"),
              draggable: true,
              rows: 1,
              slidesToScroll: 3,
            },
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 2,
              nextArrow: $(".nextBtnMobile"),
              prevArrow: $(".prevBtnMobile"),
              draggable: false,
              rows: 1,
              slidesToScroll: 2,
            },
          },
        ],
      });

      $(".recentlyaddedCarousel").slick({
        infinite: false,
        dots: false,
        draggable: false,
        nextArrow: $(".recentlyadded_nextBtn"),
        prevArrow: $(".recentlyadded_prevBtn"),
        speed: 1000,
        //   mobileFirst: true,
        rows: 1,
        slidesToShow: 6,
        slidesToScroll: 5,
        responsive: [
          {
            breakpoint: 1201,
            settings: {
              nextArrow: $(".nextBtnMobile"),
              prevArrow: $(".prevBtnMobile"),
              draggable: true,
              rows: 1,
              slidesToShow: 6,
              slidesToScroll: 5,
            },
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 4,
              nextArrow: $(".nextBtnMobile"),
              prevArrow: $(".prevBtnMobile"),
              draggable: true,
              rows: 1,
              slidesToScroll: 4,
            },
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 3,
              nextArrow: $(".nextBtnMobile"),
              prevArrow: $(".prevBtnMobile"),
              draggable: true,
              rows: 1,
              slidesToScroll: 3,
            },
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 2,
              nextArrow: $(".nextBtnMobile"),
              prevArrow: $(".prevBtnMobile"),
              draggable: false,
              rows: 1,
              slidesToScroll: 2,
            },
          },
        ],
      });

      $(".allsubbedCarousel").slick({
        infinite: false,
        dots: false,
        draggable: false,
        nextArrow: $(".allsubbed_nextBtn"),
        prevArrow: $(".allsubbed_prevBtn"),
        speed: 1000,
        //   mobileFirst: true,
        rows: 1,
        slidesToShow: 6,
        slidesToScroll: 5,
        responsive: [
          {
            breakpoint: 1201,
            settings: {
              nextArrow: $(".nextBtnMobile"),
              prevArrow: $(".prevBtnMobile"),
              draggable: true,
              rows: 1,
              slidesToShow: 6,
              slidesToScroll: 5,
            },
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 4,
              nextArrow: $(".nextBtnMobile"),
              prevArrow: $(".prevBtnMobile"),
              draggable: true,
              rows: 1,
              slidesToScroll: 4,
            },
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 3,
              nextArrow: $(".nextBtnMobile"),
              prevArrow: $(".prevBtnMobile"),
              draggable: true,
              rows: 1,
              slidesToScroll: 3,
            },
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 2,
              nextArrow: $(".nextBtnMobile"),
              prevArrow: $(".prevBtnMobile"),
              draggable: false,
              rows: 1,
              slidesToScroll: 2,
            },
          },
        ],
      });

      $(".alldubbedCarousel").slick({
        infinite: false,
        dots: false,
        draggable: false,
        nextArrow: $(".alldubbed_nextBtn"),
        prevArrow: $(".alldubbed_prevBtn"),
        speed: 1000,
        //   mobileFirst: true,
        rows: 1,
        slidesToShow: 6,
        slidesToScroll: 5,
        responsive: [
          {
            breakpoint: 1201,
            settings: {
              nextArrow: $(".nextBtnMobile"),
              prevArrow: $(".prevBtnMobile"),
              draggable: true,
              rows: 1,
              slidesToShow: 6,
              slidesToScroll: 5,
            },
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 4,
              nextArrow: $(".nextBtnMobile"),
              prevArrow: $(".prevBtnMobile"),
              draggable: true,
              rows: 1,
              slidesToScroll: 4,
            },
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 3,
              nextArrow: $(".nextBtnMobile"),
              prevArrow: $(".prevBtnMobile"),
              draggable: true,
              rows: 1,
              slidesToScroll: 3,
            },
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 2,
              nextArrow: $(".nextBtnMobile"),
              prevArrow: $(".prevBtnMobile"),
              draggable: false,
              rows: 1,
              slidesToScroll: 2,
            },
          },
        ],
      });

      $(".allAnimeCarousel").slick({
        infinite: false,
        dots: false,
        draggable: false,
        nextArrow: $(".allAnime_nextBtn"),
        prevArrow: $(".allAnime_prevBtn"),
        speed: 1000,
        //   mobileFirst: true,
        rows: 1,
        slidesToShow: 6,
        slidesToScroll: 5,
        responsive: [
          {
            breakpoint: 1201,
            settings: {
              nextArrow: $(".nextBtnMobile"),
              prevArrow: $(".prevBtnMobile"),
              draggable: true,
              rows: 1,
              slidesToShow: 6,
              slidesToScroll: 5,
            },
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 4,
              nextArrow: $(".nextBtnMobile"),
              prevArrow: $(".prevBtnMobile"),
              draggable: true,
              rows: 1,
              slidesToScroll: 4,
            },
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 3,
              nextArrow: $(".nextBtnMobile"),
              prevArrow: $(".prevBtnMobile"),
              draggable: true,
              rows: 1,
              slidesToScroll: 3,
            },
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 2,
              nextArrow: $(".nextBtnMobile"),
              prevArrow: $(".prevBtnMobile"),
              draggable: false,
              rows: 1,
              slidesToScroll: 2,
            },
          },
        ],
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
  }, 5000);

