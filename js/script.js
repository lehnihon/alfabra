( function( $ ) {
    var offset = $('#secundario').offset().top;
    var $meuMenu = $('#secundario'); // guardar o elemento na memoria para melhorar performance
    $(document).on('scroll', function () {
        if (offset <= $(window).scrollTop()) {
            $meuMenu.addClass('fixar');
        } else {
            $meuMenu.removeClass('fixar animated fadeInDown');
        }
    });

  	$(function() {
        $('.slider').slick({
            mobileFirst:true,
            arrows:false
        });

        $('.slickleft').click(function(){
            $('.slider').slick('slickPrev');
        });

        $('.slickright').click(function(){
            $('.slider').slick('slickNext');
        });

        for (i = 1; i < 9; i++) {
            $('.item'+i).on('click', function(){
                $('.slider').slick( "slickGoTo", i );
                
            });
        };



        $('.videoWrapper').click(function () {
            $('.videoWrapper iframe').css("pointer-events", "auto");
        });

        $('.audio').on('click',function(){
            if ($(".audio-arquivo")[0].paused) {
                $('.audio').attr("src",templateUrl+"/images/audioa.jpg");
                $(".audio-arquivo")[0].play();
            }else{
                $('.audio').attr("src",templateUrl+"/images/audio.jpg");
                $(".audio-arquivo")[0].pause();
            }
        })
        $('#myTabs a').click(function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
	});

} )( jQuery );