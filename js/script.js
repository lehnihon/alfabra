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
        $('.fale-conosco-link').on('click',function(e){

            $('.fale-conosco-drop').toggle();
            e.preventDefault();
        });

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

        $('.item1').on('click', function(){
            $('.slider').slick( "slickGoTo", 0 );
            
        });
        $('.item2').on('click', function(){
            $('.slider').slick( "slickGoTo", 1 );
            
        });
        $('.item3').on('click', function(){
            $('.slider').slick( "slickGoTo", 2 );
            
        });
        $('.item4').on('click', function(){
            $('.slider').slick( "slickGoTo", 3 );
            
        });
        $('.item5').on('click', function(){
            $('.slider').slick( "slickGoTo", 4 );
            
        });
        $('.item6').on('click', function(){
            $('.slider').slick( "slickGoTo", 5 );
            
        });
        $('.item7').on('click', function(){
            $('.slider').slick( "slickGoTo", 6 );
            
        });
        $('.item8').on('click', function(){
            $('.slider').slick( "slickGoTo", 7 );
            
        });

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