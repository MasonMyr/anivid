$(document).ready(function() {
    let anime_id = $('#watch').attr('data-anime-id');

    $.ajax ({
        url: 'php/add_to_list.php',
        type: 'GET',
        data: {anime_id: anime_id},
        response: 'text',
        success: function (result) {
            $('.list-group-item').each(function() {
                if ($(this).attr('data-list') === result){
                    $('#add-to-list-btn').addClass('addedToList');
                    $('#add-to-list-btn').removeClass('addToListBtn').html('<span>' + $(this).text() + '<span style="margin-left: 5px;"><i class="fas fa-chevron-down"></i></span> </span>');
                    $(this).addClass('none');
                }
            })
        }
    })
})

$('#watch').click(function(e) {
    $('#add-to-list-btn').addClass('addedToList');
    $('#add-to-list-btn').removeClass('addToListBtn').html('<span> Смотрю <span><i class="fas fa-chevron-down"></i></span> </span>');
    $('.list-group-item').each(function() {
        if ($(this).hasClass('none')){
            $(this).removeClass('none');
        }
    })

    let anime_id = $(this).attr('data-anime-id');
    let list_id = $(this).attr('data-list');

    $.ajax({
        url: "php/add_to_list.php",
        type: "POST",
        dataType: "json",
        data: {
            anime_id: anime_id,
            list_id: list_id,
        },
    });

    $(this).addClass('none');

    console.log(anime_id, list_id);
});

$('#plan').click(function(e) {
    $('#add-to-list-btn').addClass('addedToList');
    $('#add-to-list-btn').removeClass('addToListBtn').html('<span> Планирую <span><i class="fas fa-chevron-down"></i></span> </span>');
    $('.list-group-item').each(function() {
        if ($(this).hasClass('none')){
            $(this).removeClass('none');
        }
    });

    let anime_id = $(this).attr('data-anime-id');
    let list_id = $(this).attr('data-list');

    $.ajax({
        url: "php/add_to_list.php",
        type: "POST",
        dataType: "json",
        data: {
            anime_id: anime_id,
            list_id: list_id,
        },
    });

    $(this).addClass('none');
});

$('#watched').click(function(e) {
    $('#add-to-list-btn').addClass('addedToList');
    $('#add-to-list-btn').removeClass('addToListBtn').html('<span> Посмотрел <span><i class="fas fa-chevron-down"></i></span> </span>');
    $('.list-group-item').each(function() {
        if ($(this).hasClass('none')){
            $(this).removeClass('none');
        }
    });

    let anime_id = $(this).attr('data-anime-id');
    let list_id = $(this).attr('data-list');

    $.ajax({
        url: "php/add_to_list.php",
        type: "POST",
        dataType: "json",
        data: {
            anime_id: anime_id,
            list_id: list_id,
        },
    });

    $(this).addClass('none');
});

$('#abandon').click(function(e) {
    $('#add-to-list-btn').addClass('addedToList');
    $('#add-to-list-btn').removeClass('addToListBtn').html('<span> Брошено <span><i class="fas fa-chevron-down"></i></span> </span>');
    $('.list-group-item').each(function() {
        if ($(this).hasClass('none')){
            $(this).removeClass('none');
        }
    });

    let anime_id = $(this).attr('data-anime-id');
    let list_id = $(this).attr('data-list');

    $.ajax({
        url: "php/add_to_list.php",
        type: "POST",
        dataType: "json",
        data: {
            anime_id: anime_id,
            list_id: list_id,
        },
    });

    $(this).addClass('none');
});