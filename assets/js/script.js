/**
 * celebrity
 */
 jQuery(document).ready(function($) {
    var celebrity_talk_div_data = $('#celebrity_talk_div').data('celebrity_talk_array');
    var base_url='https://www.eaglesdance.com/';
    var celeb_talk = new Array();
    var celeb_pos = 1;
    celeb_talk[1] = {
        "name": "Ferdous Ahmed",
        "photo": base_url+"assets/images/celeb-talk/ferdous-ahmed.png",
        "profession": "Actor",
        "comment": "<small>Thank You!<br>Eagles Dance Company.<br>Great Experience With You. Best Wishes.</small>"
    };
    celeb_talk[2] = {
        "name": "Dilara Hanif Purnima",
        "photo": base_url+"assets/images/celeb-talk/purnima.png",
        "profession": "Actor",
        "comment": "<small>Great Experience!<br>Great Work Ethics.<br>Love To Work With Again And Again.</small>"
    };
    celeb_talk[3] = {
        "name": "Shakib Khan",
        "photo": base_url+"assets/images/celeb-talk/shakib-khan.png",
        "profession": "Actor",
        "comment": "<small>Very Professional!<br>Had Fun Working With You.<br>Looking Forword To Work With You Again.</small>"
    };
    celeb_talk[4] = {
        "name": "Mehazabien Chowdhury",
        "photo": base_url+"assets/images/celeb-talk/mehjabin.png",
        "profession": "Actor",
        "comment": "<small>One Of The Best Place To Work!<br>Nice Studio And Best People.<br>Best Wishes To You.</small>"
    };
    celeb_talk[5] = {
        "name": "Bidya Sinha Saha Mim",
        "photo": base_url+"assets/images/celeb-talk/bidya-sinha-shaha-mim.png",
        "profession": "Actor",
        "comment": "<small>Best Experience!<br>A Team Of Very Good Dancers.<br>We Expect Many Great Things In The Future.</small>"
    };
    $(document).on('click', '#c-left', function () {
        $('#celeb-talk-photo').removeClass('animated flipOutY flipInY');
        $('#celeb-talk-photo').addClass('animated flipOutY');
        if (celeb_pos === 1) {
            celeb_pos = celeb_talk.length - 1;
        } else {
            celeb_pos--;
        }
        $('#celeb-talk-name').removeClass('animated fadeOut fadeIn').addClass('animated fadeOut');
        $('#celeb-talk-profession').removeClass('animated fadeOut fadeIn').addClass('animated fadeOut');
        $('#celeb-talk-comment').removeClass('animated fadeOut fadeIn').addClass('animated fadeOut');
        setTimeout(function () {
            $('#celeb-talk-photo').removeClass('animated flipOutY flipInY');
            $('#celeb-talk-photo').attr('src', celeb_talk[celeb_pos].photo).addClass('animated flipInY');
            $('#celeb-talk-name').html(celeb_talk[celeb_pos].name).removeClass('animated fadeOut fadeIn').addClass('animated fadeIn');
            $('#celeb-talk-profession').html(celeb_talk[celeb_pos].profession).removeClass('animated fadeOut fadeIn').addClass('animated fadeIn');
            $('#celeb-talk-comment').html(celeb_talk[celeb_pos].comment).removeClass('animated fadeOut fadeIn').addClass('animated fadeIn');
        }, 500);
    });
    $(document).on('click', '#c-right', function () {
        $('#celeb-talk-photo').removeClass('animated flipOutY flipInY');
        $('#celeb-talk-photo').addClass('animated flipOutY');
        if (celeb_pos === (celeb_talk.length - 1)) {
            celeb_pos = 1;
        } else {
            celeb_pos++;
        }
        $('#celeb-talk-name').removeClass('animated fadeOut fadeIn').addClass('animated fadeOut');
        $('#celeb-talk-profession').removeClass('animated fadeOut fadeIn').addClass('animated fadeOut');
        $('#celeb-talk-comment').removeClass('animated fadeOut fadeIn').addClass('animated fadeOut');
        setTimeout(function () {
            $('#celeb-talk-photo').removeClass('animated flipOutY flipInY');
            $('#celeb-talk-photo').attr('src', celeb_talk[celeb_pos].photo).addClass('animated flipInY');
            $('#celeb-talk-name').html(celeb_talk[celeb_pos].name).removeClass('animated fadeOut fadeIn').addClass('animated fadeIn');
            $('#celeb-talk-profession').html(celeb_talk[celeb_pos].profession).removeClass('animated fadeOut fadeIn').addClass('animated fadeIn');
            $('#celeb-talk-comment').html(celeb_talk[celeb_pos].comment).removeClass('animated fadeOut fadeIn').addClass('animated fadeIn');
        }, 500);
    });
    $(document).on('click', '.img-celeb-anim', function(){
        $('#celeb-talk-photo').removeClass('animated flipOutY flipInY');
        $('#celeb-talk-photo').addClass('animated flipOutY');
        celeb_pos = parseInt($(this).attr('data-key'));
        $('#celeb-talk-name').removeClass('animated fadeOut fadeIn').addClass('animated fadeOut');
        $('#celeb-talk-profession').removeClass('animated fadeOut fadeIn').addClass('animated fadeOut');
        $('#celeb-talk-comment').removeClass('animated fadeOut fadeIn').addClass('animated fadeOut');
        setTimeout(function () {
            $('#celeb-talk-photo').removeClass('animated flipOutY flipInY');
            $('#celeb-talk-photo').attr('src', celeb_talk[celeb_pos].photo).addClass('animated flipInY');
            $('#celeb-talk-name').html(celeb_talk[celeb_pos].name).removeClass('animated fadeOut fadeIn').addClass('animated fadeIn');
            $('#celeb-talk-profession').html(celeb_talk[celeb_pos].profession).removeClass('animated fadeOut fadeIn').addClass('animated fadeIn');
            $('#celeb-talk-comment').html(celeb_talk[celeb_pos].comment).removeClass('animated fadeOut fadeIn').addClass('animated fadeIn');
        }, 500);
    });
});
