$('document').ready(function() {
    let inTrend = document.querySelector(".inTrendCarousel");
    let popular = document.querySelector(".popularCarousel");
    let recentlyAdded = document.querySelector(".recentlyaddedCarousel");
    let mostTopAnime = document.querySelector(".mostTopAnimeCarousel");
    let allDubbed = document.querySelector(".alldubbedCarousel");
    let allAnime = document.querySelector(".allAnimeCarousel");

    $.getJSON('json/anime-serial.json', function(data) {
        for (let key = 0; key < 1000; key++){
            let i = data[key];
            let j = i['material_data'];

            if (typeof(i['imdb_id']) !== "undefined") {
                for (let key2 = 0; key2 < 1000; key2++) {
                    if (i['imdb_id'] === data[key2]['imdb_id'] || i['kinopoisk_id'] === data[key2]['kinopoisk_id']) {
                        delete data[key2]['imdb_id'];
                    }
                }

                if (typeof(j) !== "undefined") {
                    if (typeof(j['imdb_rating']) !== "undefined") {
                        if(j['imdb_rating'] >= 8 && j['anime_status'] === "ongoing") {
                            inTrend.innerHTML += `
                              <div class="card">
                                  <img src="${j["poster_url"]}" alt="${j["title"]}" class="card-img-top m-auto">
                                  <div class="card-body justify-content-start">
                                      <h5 class="card-title text-truncate">
                                          ${j["title"]}
                                      </h5>
                                      <p class="card-text">
                                          15+ · ${i["year"]} · ${j["episodes_aired"]} серий 
                                      </p>
                                      <div class="flex-row typeTrans">
                                          <span class="subbed">Субтитры</span>
                                          <span class="dubbed">Озвучено</span>
                                      </div>
                                  </div>
                                  <div class="startWatchingBtn">
                                      <a href="#" data-anime-id="${key}" class="watchingBtn">
                                          Начать смотреть
                                          <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                                      </a>
                                  </div>
                                  <div class="additionalInfo d-flex align-items-center">
                                      <p>${j["description"]}</p> 
                                  </div>
                              </div> 
                            `;
                            // console.log(i);
                            }

                            if(j['imdb_rating'] >= 8 && j['anime_status'] === "released" && i['year'] >= 2015) {
                                popular.innerHTML += `
                                <div class="card">
                                    <img src="${j["poster_url"]}" alt="${j["title"]}" class="card-img-top m-auto">
                                    <div class="card-body justify-content-start">
                                        <h5 class="card-title text-truncate">
                                            ${j["title"]}
                                        </h5>
                                        <p class="card-text">
                                            15+ · ${i["year"]} · ${j["episodes_aired"]} серий 
                                        </p>
                                        <div class="flex-row typeTrans">
                                            <span class="subbed">Субтитры</span>
                                            <span class="dubbed">Озвучено</span>
                                        </div>
                                    </div>
                                    <div class="startWatchingBtn">
                                        <a href="#" data-anime-id="${key}" class="watchingBtn">
                                            Начать смотреть
                                            <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                                        </a>
                                    </div>
                                    <div class="additionalInfo d-flex align-items-center">
                                        <p>${j["description"]}</p> 
                                    </div>
                                </div> 
                                `;
                                // console.log(i);
                            }

                            if(j['anime_status'] === "ongoing") {
                                recentlyAdded.innerHTML += `
                                  <div class="card">
                                      <img src="${j["poster_url"]}" alt="${j["title"]}" class="card-img-top m-auto">
                                      <div class="card-body justify-content-start">
                                          <h5 class="card-title text-truncate">
                                              ${j["title"]}
                                          </h5>
                                          <p class="card-text">
                                              15+ · ${i["year"]} · ${j["episodes_aired"]} серий 
                                          </p>
                                          <div class="flex-row typeTrans">
                                              <span class="subbed">Субтитры</span>
                                              <span class="dubbed">Озвучено</span>
                                          </div>
                                      </div>
                                      <div class="startWatchingBtn">
                                          <a href="#" data-anime-id="${key}" class="watchingBtn">
                                              Начать смотреть
                                              <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                                          </a>
                                      </div>
                                      <div class="additionalInfo d-flex align-items-center">
                                          <p>${j["description"]}</p> 
                                      </div>
                                  </div> 
                                `;
                                // console.log(i);
                            }

                            if(j['imdb_rating'] >= 9 || j['shikimori_rating'] >= 9) {
                                mostTopAnime.innerHTML += `
                                  <div class="card">
                                      <img src="${j["poster_url"]}" alt="${j["title"]}" class="card-img-top m-auto">
                                      <div class="card-body justify-content-start">
                                          <h5 class="card-title text-truncate">
                                              ${j["title"]}
                                          </h5>
                                          <p class="card-text">
                                              15+ · ${i["year"]} · ${j["episodes_aired"]} серий 
                                          </p>
                                          <div class="flex-row typeTrans">
                                              <span class="subbed">Субтитры</span>
                                              <span class="dubbed">Озвучено</span>
                                          </div>
                                      </div>
                                      <div class="startWatchingBtn">
                                          <a href="#" data-anime-id="${key}" class="watchingBtn">
                                              Начать смотреть
                                              <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                                          </a>
                                      </div>
                                      <div class="additionalInfo d-flex align-items-center">
                                          <p>${j["description"]}</p> 
                                      </div>
                                  </div> 
                                `;
                                // console.log(i);
                            }

                            if(i['translation']['type'] = "voice") {
                                allDubbed.innerHTML += `
                                  <div class="card">
                                      <img src="${j["poster_url"]}" alt="${j["title"]}" class="card-img-top m-auto">
                                      <div class="card-body justify-content-start">
                                          <h5 class="card-title text-truncate">
                                              ${j["title"]}
                                          </h5>
                                          <p class="card-text">
                                              15+ · ${i["year"]} · ${j["episodes_aired"]} серий 
                                          </p>
                                          <div class="flex-row typeTrans">
                                              <span class="subbed">Субтитры</span>
                                              <span class="dubbed">Озвучено</span>
                                          </div>
                                      </div>
                                      <div class="startWatchingBtn">
                                          <a href="#" data-anime-id="${key}" class="watchingBtn">
                                              Начать смотреть
                                              <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                                          </a>
                                      </div>
                                      <div class="additionalInfo d-flex align-items-center">
                                          <p>${j["description"]}</p> 
                                      </div>
                                  </div> 
                                `;
                                // console.log(i);
                            }

                            if(i['year'] >= 2015) {
                                allAnime.innerHTML += `
                                  <div class="card">
                                      <img src="${j["poster_url"]}" alt="${j["title"]}" class="card-img-top m-auto">
                                      <div class="card-body justify-content-start">
                                          <h5 class="card-title text-truncate">
                                              ${j["title"]}
                                          </h5>
                                          <p class="card-text">
                                              15+ · ${i["year"]} · ${j["episodes_aired"]} серий 
                                          </p>
                                          <div class="flex-row typeTrans">
                                              <span class="subbed">Субтитры</span>
                                              <span class="dubbed">Озвучено</span>
                                          </div>
                                      </div>
                                      <div class="startWatchingBtn">
                                          <a href="#" data-anime-id="${key}" class="watchingBtn">
                                              Начать смотреть
                                              <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
                                          </a>
                                      </div>
                                      <div class="additionalInfo d-flex align-items-center">
                                          <p>${j["description"]}</p> 
                                      </div>
                                  </div> 
                                `;
                                // console.log(i);
                            }
                        }
                    }
                }
            } 
        // fetch('https://kodikapi.com/search?token=3a6e13fd86d8beb9c09127e5ef9836b9&title=Токийский%20гуль%20анидаб&with_material_data=true', {
        //     method: 'GET',
        // })
        // .then((content) => content.json())
        // .then((content) => {
        //     for (let key in content['results']) {
        //         let i = content['results'][key]
        //         let j = i['material_data']
        //         // for (let key2 in content['results']) {
        //         //     let k = content['results'][key2]
        //         //     if (i['imdb_id'] === k['imdb_id']) {
        //         //         content['results'].splice(key2, 1);
        //         //     }
        //         // }
        //         deadInside.innerHTML += `
        //                       <div class="card">
        //                           <img src="${j["poster_url"]}" alt="${j["title"]}" class="card-img-top m-auto">
        //                           <div class="card-body justify-content-start">
        //                               <h5 class="card-title text-truncate">
        //                                   ${j["title"]}
        //                               </h5>
        //                               <p class="card-text">
        //                                   15+ · ${i["year"]}
        //                               </p>
        //                               <div class="flex-row typeTrans">
        //                                   <span class="subbed">Субтитры</span>
        //                                   <span class="dubbed">Озвучено</span>
        //                               </div>
        //                           </div>
        //                           <div class="startWatchingBtn">
        //                             <a href="#" data-anime-id="${key}" class="watchingBtn">
        //                                 Начать смотреть
        //                                 <span class="fas fa-chevron-right" style="margin-left: 40px;"></span>
        //                             </a>
        //                           </div>
        //                           <div class="additionalInfo d-flex align-items-center">
        //                               <p>${j["description"]}</p> 
        //                           </div>
        //                       </div> 
        //                     `;
        //     }
        //     console.log(content);
        // })
        console.log(data);
        
    })
})

$('.watchingBtn').click(function (e) {
    e.preventDefault();
    console.log("1");
    localStorage.setItem('anime_id', $(this).attr('data-anime-id'));
})