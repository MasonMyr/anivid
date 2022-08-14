$(document).ready(function () {
    $.ajax({
        url: "php/anime_list.php",
        type: "GET",
        dataType: "json",
        data: { watching: 1,
                plan: 2,
                watched: 3,
                drop: 4,
            },
        response: "json",
        success: function (result) {
            if (result[0] != "false") {
                let watching_id = result['watching_id'];
                let watched_id = result['watched_id'];
                let plan_id = result['plan_id'];
                let drop_id = result['drop_id'];


                let watching_list = document.querySelector('#list_watching');
                let plan_list = document.querySelector('#list_plan');
                let watched_list = document.querySelector('#list_watched');
                let drop_list = document.querySelector('#list_drop');
                $.getJSON('json/anime-serial.json', function(data) {
                    for (key in watching_id) {
                        if (watching_id[key] !== "false") {
                            anime_id = watching_id[key][0];

                            let i = data[anime_id];
                            let j = i['material_data'];

                            watching_list.innerHTML += `
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
                        } else {
                            watching_list.innerHTML += `<h1 class="animeCardTitle">Список пуст.</h1>`;
                        }
                    }

                    for (key in watched_id) {
                        if (watched_id[key] !== "false") {
                            anime_id = watched_id[key][0];

                            let i = data[anime_id];
                            let j = i['material_data'];

                            watched_list.innerHTML += `
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
                        } else {
                            watched_list.innerHTML += `<h1 class="animeCardTitle">Список пуст.</h1>`;
                        }
                    }

                    for (key in plan_id) {
                        if (plan_id[key] !== "false") {
                            anime_id = plan_id[key][0];

                            let i = data[anime_id];
                            let j = i['material_data'];

                            plan_list.innerHTML += `
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
                        } else {
                            plan_list.innerHTML += `<h1 class="animeCardTitle">Список пуст.</h1>`;
                        }
                    }

                    for (key in drop_id) {
                        if (drop_id[key] !== "false") {
                            anime_id = drop_id[key][0];

                            let i = data[anime_id];
                            let j = i['material_data'];

                            drop_list.innerHTML += `
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
                        } else {
                            drop_list.innerHTML += `<h1 class="animeCardTitle">Список пуст.</h1>`;
                        }
                    }
                })
            }
        }
    })
})