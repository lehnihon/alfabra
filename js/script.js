( function( $ ) {
    var offset = $('#secundario').offset().top;
    var $meuMenu = $('#secundario'); // guardar o elemento na memoria para melhorar performance
    $(document).on('scroll', function () {

        if (offset <= $(window).scrollTop()-100) {
            $meuMenu.addClass('fixar');
        } else {
            $meuMenu.removeClass('fixar animated fadeInDown');
        }
    });

  	$(function() {

        $('.videoWrapper').click(function () {
            $('.videoWrapper iframe').css("pointer-events", "auto");
        });

	});

} )( jQuery );