//HOT NEWS BASKETBALL FUNCTIONS

var animationDuration = 40000; // Standart animation duration for UL element max-width 2500px

var movement1 = function(speed, dist){
    $(".al-list-animated").animate({"marginLeft": -dist}, speed, "linear",
        function(){
            movement2(speed, dist);
        });
}


var movement2 = function(speed, dist){
    $(".al-list-animated").css("margin-left", "0");
    movement1(animationDuration, dist);
}



$(document).ready(function(){
    //Hot News animation infinite with same speed call@@@@@@@@@@@@@@@
    //ul width dynamic
    var totalWidth = 40;
    var ulMain = $('.al-list-animated');
    var liWidth = ulMain.find('li');
    $(liWidth).each(function() {
        totalWidth += $(this).outerWidth( true );
    });
    ulMain.css('width', totalWidth);
    if(ulMain.outerWidth() < 1500){
        animationDuration = 30000;
    }
    if(ulMain.outerWidth() > 2500){
        animationDuration = 50000;
    }
    if(ulMain.outerWidth() > 4000){
        animationDuration = 80000;
    }
    if(ulMain.outerWidth() > 5500){
        animationDuration = 100000;
    }
    if(ulMain.outerWidth() > 7000){
        animationDuration = 120000;
    }
    if(ulMain.outerWidth() > 8500){
        animationDuration = 140000;
    }
    if(ulMain.outerWidth() > 10000){
        animationDuration = 180000;
    }
    //ul width dynamic complete+++++++++++++++++
    var elW = $(".urgent").width();
    var sInCm = totalWidth/38; //total width in cm
    var sInPx = totalWidth; //total width in pixels
    var t = animationDuration;
    var v = sInCm/animationDuration;
    var s = '';
    movement1(t, sInPx);
    //Hot News animation stop on hover@@@@@@@@@@@@@@@

    $(".al-list-animated").mouseenter(function(){
        $(this).stop();
    });
    $(".al-list-animated").mouseleave(function(){
        var currentP = $(this).offset().left - elW;
        var toCm = currentP/38;
        s = sInCm - (-toCm);
        t = (s/v);
        movement1(t, sInPx);
    });





    //Hot news hover fast box  @@@@@@@@@@@@@@@@

    $( ".al-main-link" ).parent('li').hover(
        function() {
            $( this ).find(".fast-box").css("display","block");
            $(".wrapper").css("height","500px");
        }, function() {
            $( this ).find(".fast-box").css("display","none");
            $(".wrapper").css("height","auto");
        }
    );

    //END OF HOT NEWS


    //Owl carousel  @@@@@@@@@@@@@@@


    $('#al-carousel-news').owlCarousel({
        loop:true,
        margin:20,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });


    $("#al-carousel-news").find(".owl-nav .owl-prev").addClass("long-left-arrow");
    $("#al-carousel-news").find(".owl-nav .owl-next").addClass("long-right-arrow");


    //Gallerry owl carousel  @@@@@@@@@@@@@@@
        $('#al-main-gallery-carousel').owlCarousel({
            center: true,
            items: 4,
            loop: true,
            margin: 15,
            dots: false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        });

    //Multimedia-carousel @@@@@@@@@@@@@@@@@@@@
    $('#al-main-multimedia-carousel').owlCarousel({
        center: true,
        items: 4,
        nav: true,
        loop: true,
        margin: 15,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            700:{
                items:2
            },
            1200:{
                items:4
            }
        }
    });

    //On page holidays.html church-calendar show all collapse menu
    $(function () {
        var active = true;
        $('#collapse-init').click(function () {
            if (active) {
                active = false;
                $('.panel-collapse').collapse('show');
                $('.panel-title').attr('data-toggle', '');
                $(this).text('Скрыть все');
            } else {
                active = true;
                $('.panel-collapse').collapse('hide');
                $('.panel-title').attr('data-toggle', 'collapse');
                $(this).text('Показать все');
            }
        });

        $('#accordion').on('show.bs.collapse', function () {
            if (active) $('#accordion .in').collapse('hide');
        });

    });

    //Multimedia carousel Load content effect

    $('#al-main-multimedia-carousel').find('.center').addClass('show-inner');
    $('#al-main-multimedia-carousel').find('.center').prev().addClass('show-inner');
    $('#al-main-multimedia-carousel').find('.center').next().addClass('show-inner');

    $(".owl-stage-outer").add('.owl-next').add('.owl-prev').mouseup(function() {
        setTimeout(function(){
            $('#al-main-multimedia-carousel').find('.show-inner').removeClass('show-inner');
            var prevEl = $('#al-main-multimedia-carousel').find('.center').prev();
            var nextEl = $('#al-main-multimedia-carousel').find('.center').next();
            $('#al-main-multimedia-carousel').find('.center').addClass('show-inner');
            prevEl.addClass('show-inner');
            nextEl.addClass('show-inner');
        }, 500);
    });


    $("#al-main-multimedia-carousel, #al-main-gallery-carousel").find(".owl-nav .owl-prev").addClass("slide-arrow-right");
    $("#al-main-multimedia-carousel, #al-main-gallery-carousel").find(".owl-nav .owl-next").addClass("slide-arrow-left");


    //Lavalamp menu  @@@@@@@@@@@@@@@@@

    $('#navlist').lavalamp({
        easing: 'easeOutBack'
    });
    $('#smallbar').lavalamp({
        easing: 'easeOutBack'
    });
    $('#smallbar2').lavalamp({
        easing: 'easeOutBack'
    });
    $('#threenavs').lavalamp({
        easing: 'easeOutBack'
    });
    $('#media-threenavs').lavalamp({
        easing: 'easeOutBack'
    });


    //Empty text in carousel navigation (for all)
    $(".owl-carousel").find(".owl-nav .owl-prev").html("");
    $(".owl-carousel").find(".owl-nav .owl-next").html("");

    // $('.al-toggle').click(function() {
    //     var obj = ['aktif1','aktif2','aktif3'];
    //     // $(this).find(".toggle").each(obj, function (index, value) {
    //     //
    //     // });
    //
    //     $.each(obj, function(index, value){
    //         $('.al-toggle').find(".toggle").addClass(value);
    //     });
    // });


    function toggleIcon(e) {
        $(e.target)
            .prev('.panel-heading')
            .find(".more-less")
            .toggleClass('plus-math-48 minus');
    }
    $('.panel-group').on('hidden.bs.collapse', toggleIcon);
    $('.panel-group').on('shown.bs.collapse', toggleIcon);

    //footer size fix script
    var footerH = $('.main-footer').outerHeight();
    $('body').css('margin-bottom',footerH);
});



