(function ($) {
    "use strict";

    jQuery(document).ready(function($){

        // initialize live clock
        const clock = new Clock();
        clock.start();

        // banner slider
        var testimonialCarousel = $('.banner-slider');
        testimonialCarousel.owlCarousel({
            loop: true,
            dots: true,
            nav: true,
            autoplay: true,
            navText: ['<i class="fas fa-angle-left"></i>','<i class="fas fa-angle-right"></i>'],
            startPosition: 2,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                960: {
                    items: 1
                },
                1200: {
                    items: 1
                },
                1920: {
                    items: 1
                }
            }
        }); 


        // testimonial slider
        var testimonialCarousel = $('.testimonial-slider');
        testimonialCarousel.owlCarousel({
            loop: true,
            dots: true,
            nav: false,
            margin: 30,
            autoplay: true,
            startPosition: 2,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                960: {
                    items: 1
                },
                1200: {
                    items: 1
                },
                1920: {
                    items: 1
                }
            }
        }); 
        $('.testimonial-slider').on('translate.owl.carousel', function(){
            $(this).find('.owl-item').find('.single-testimonial').find('.part-img').removeClass('add-anim').css('opacity', '0');
        });
        $('.testimonial-slider').on('translated.owl.carousel', function(){
            $(this).find('.owl-item.active').find('.single-testimonial').find('.part-img').addClass('add-anim').css('opacity', '1');
        });

        $('body').css('padding-right', '0');
        $('.number-of-stake').val(1);
    });
    
    // lock screen title
    function lockScroll() {
        var scrollPosition = [
            self.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft,
            self.pageYOffset || document.documentElement.scrollTop  || document.body.scrollTop
        ];
        var html = jQuery('html'); // it would make more sense to apply this to body, but IE7 won't have that
        html.data('scroll-position', scrollPosition);
        html.data('previous-overflow', html.css('overflow'));
        html.css('overflow', 'hidden');
    }
    function unlockScroll() {
        var html = jQuery('html');
        var scrollPosition = html.data('scroll-position');
        html.css('overflow', html.data('previous-overflow'));
        window.scrollTo(scrollPosition[0], scrollPosition[1]);
    }

    // bet number function
    function stakeIncreme() {
        var stakeCount = parseInt($('.number-of-stake').val());
        if(stakeCount < 90) {
            stakeCount++;
            $('.number-of-stake').val(stakeCount);
            $('.altv-2').html(stakeCount);
        }
    }
    function stakeDecreme() {
        var stakeCount = parseInt($('.number-of-stake').val());
        if(stakeCount > 1) {
            stakeCount--;
            $('.number-of-stake').val(stakeCount);
            $('.altv-2').html(stakeCount);
        }
    }
    function stakeNumber() {
        var odds = $('.bet-modal').find('.number-of-stake').val();
        $('.bet-modal').find('.number-of-stake-count').val(odds);
        $('.altv-3').html(odds);
    }
    function estReturn() {
        var betNumber = $('.bet-modal').find('.place-of-bet-number').val();
        var stakeCount = $('.bet-modal').find('.number-of-stake-count').val();
        var betTotal = betNumber * stakeCount;
        var n = betTotal.toFixed(2);
        $('.bet-modal').find('.number-of-bet-count').html(n);
    }

    

    // all click event for placing bet
    $('.single-place-to-bet').find('a').on('click', function(){
        event.preventDefault();
        $('body').css('padding-right', '17px');
        lockScroll();
        var betTitle = $(this).find('.result-for-final').html();
        var teamName1st = $(this).closest('.single-place-to-bet').parent().siblings(".part-team").find('li:first-child').find('.team-name').html();
        var teamName2nd = $(this).closest('.single-place-to-bet').parent().siblings(".part-team").find('li:last-child').find('.team-name').html();
        var team1stScore = $(this).closest('.single-place-to-bet').parent().siblings(".part-team").find('li:first-child').find('.score-number').html();
        var team2ndScore = $(this).closest('.single-place-to-bet').parent().siblings(".part-team").find('li:last-child').find('.score-number').html();
        var betPrice = $(this).find('.bet-price').html();
        $('.place-of-bet-number').val(betPrice);
        $('.bet-modal').find('.place-of-bet').find('.place-of-bet-title').html(betTitle);
        $('.bet-modal').find('.bet-descr').find('.team-name-1st').html(teamName1st);
        $('.bet-modal').find('.bet-descr').find('.team-name-2nd').html(teamName2nd);
        $('.bet-modal').find('.bet-descr').find('.team-score').find('.team-first-score').html(team1stScore);
        $('.bet-modal').find('.bet-descr').find('.team-score').find('.team-second-score').html(team2ndScore);
        $('.bet-modal').find('.number-of-bet-count').html(betPrice);

        // placing bet modal form
        var altv_1 = $('.place-of-bet-number');
        var altv_val = $('.place-of-bet-number').val();
        altv_1.before('<span class="altv-1"></span>');
        $('.altv-1').html(altv_val);
        altv_1.hide();
        var altv_2 = $('.number-of-stake');
        altv_2.before('<span class="altv-2"></span>');
        $('.altv-2').html(altv_2.val());
        altv_2.hide();
        var altv_3 = $('.number-of-stake-count');
        altv_3.before('<span class="altv-3"></span>');
        $('.altv-3').html(altv_3.val());
        altv_3.hide();

        // animation for modal form
        $('.bet-modal-bg').addClass('show');
        $('.bet-modal').addClass('open');
    });

    // when close button will be clicked
    $('.cls-btn').on('click', function() {
        $('.bet-modal-bg').removeClass('show');
        $('.bet-modal').removeClass('open');
        $('body').css('padding-right', '0');
        unlockScroll();
        $('.number-of-stake').val(1); 
        $('.number-of-stake-count').val(1);
        $('.altv-1').remove();
        $('.altv-2').remove();
        $('.altv-3').remove();

        // animation for modal form
        $('.bet-modal-bg').removeClass('show');
    });

    // when (+) plus button will be clicked
    $('.plus-number').on('click', function(){
        stakeIncreme();
        stakeNumber();
        estReturn();
    });

    // when (-) minus button will be clicked
    $('.minus-number').on('click', function(){
        stakeDecreme();
        stakeNumber();
        estReturn();
    });



    $(window).on('load',function(){
        var preLoder = $(".preloader");
        preLoder.fadeOut(1000);

        var $filterizr = $('.filterizr__elements');
        if($filterizr.length) {
            var $filterizrControls = $('.filterizr__controls');
            $filterizr.filterizr();
            $filterizrControls.children('li').click(function() {
                $filterizrControls.find('li.active').removeClass('active');
                $(this).addClass('active');
            });
        }
    });

    // fixed navbar
    window.onscroll = function() {fixedNavbar()};
    var navbar = document.getElementById("navbar");
    var fixNav = navbar.offsetTop;
    function fixedNavbar() {
        if(window.pageYOffset >= fixNav) { 
            navbar.classList.add('fadeInDown');
            navbar.classList.add('navbar-fixed');
            navbar.classList.add('animated');
        } else {
            navbar.classList.remove('fadeInDown');
            navbar.classList.remove('navbar-fixed');
            navbar.classList.remove('animated');
        }
    }

    // count down
    var nodes = $('.timer');
    $.each(nodes, function (_index, value) {
        var date = $(this).data('date');

        setInterval(() => {

            var endTime = new Date(date);
            endTime = (Date.parse(endTime) / 1000);

            var now = new Date();
            now = (Date.parse(now) / 1000);

            var timeLeft = endTime - now;

            var days = Math.floor(timeLeft / 86400);
            var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
            var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
            var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

            if (hours < "10") { hours = "0" + hours; }
            if (minutes < "10") { minutes = "0" + minutes; }
            if (seconds < "10") { seconds = "0" + seconds; }

            $(value).find('.day').html(days);
            $(value).find('.hour').html(hours);
            $(value).find('.minute').html(minutes);
            $(value).find('.second').html(seconds);

        }, 1000);

    }); 

    
}(jQuery));	







