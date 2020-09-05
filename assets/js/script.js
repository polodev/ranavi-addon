/**
 * celebrity
 */

 jQuery(document).ready(function($) {
    $('.celebrity-talk-box').each(function (index, element) {
        var celeb_talk = $(this).data('celeb_talks');
        console.log('celeb_talk', celeb_talk)
        var celeb_pos = 1;
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

        

});
