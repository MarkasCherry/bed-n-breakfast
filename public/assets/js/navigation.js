$(document).ready(function () {

    //Start music button
    var play = $('#play');
    var audio = $("#audio")[0];

    play.click(function() {
        if (audio.paused == false) {
            play.removeClass('fa-pause-circle');
            play.addClass('fa-play-circle')
            $(".hover-box p").text('Enjoy the music I listen while coding');
            audio.pause();
        } else {
            play.removeClass('fa-play-circle');
            play.addClass('fa-pause-circle')
            $(".hover-box p").text('Kudesai - The Girl I Haven\'t Met');
            audio.play();
        }
    });

    // Function to change the nav-bar on scroll
    $(window).scroll(function () {
        if ($('#menuButton').is(':checked')) {
            $('.the-bass').removeClass('dropped'),
                $('#menuButton').removeAttr('checked')
        } else {
            $('#menuButton').removeAttr('checked');
        }
        ($(window).scrollTop() >= 100) ? (
            $('.fixed-nav-bar').addClass('scrolled'),
                $('#logo-image').css('height', '50'),
                $('.auth').css('margin-top', '2vh'),
                $('.auth2').css('margin-top', '2vh'),
                $('.the-bass').addClass('scrolled')
        ) : (
            $('.fixed-nav-bar').removeClass('scrolled'),
                $('#logo-image').css('height', '80'),
                $('.auth').css('margin-top', '4vh'),
                $('.auth2').css('margin-top', '4vh'),
                $('.the-bass').removeClass('scrolled')
        );
    });

    $('.drop-down-item').on('click', function () {
        $('#menuButton').removeAttr('checked');
        $('.the-bass').removeClass('dropped')
    });


    // Drop Down Function
    $('#menuButton').on('click', function () {
        ($('#menuButton').is(':checked')) ? (
            $('.the-bass').addClass('dropped')
        ) : (
            $('.the-bass').removeClass('dropped')
        );
    });
});

if (window.innerWidth > 886) {
    $('.auth').css('display', 'block');
    $('.menu-button-label').css('display', 'none');

}

if (window.innerWidth < 870) {
    $('.auth').css('display', 'none');
    $('.menu-button-label').css('display', 'block');
}


$(window).resize(function () {

    if (window.innerWidth > 886) {
        $('.auth').css('display', 'block');
        $('.menu-button-label').css('display', 'none');

    }

    if (window.innerWidth < 870) {
        $('.auth').css('display', 'none');
        $('.menu-button-label').css('display', 'block');
    }

});

