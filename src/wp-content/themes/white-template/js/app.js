// import $ from 'jquery';
import faqSchemeGenerator from './modules/faqSchemeGenerator';
// import './modules/autoreg.js';

// export for others scripts to use
$(document).ready(function(){
    $('.post-content').prependTo($('.main-text'));
    $('.post-content h1').appendTo($('.for-h'));

    //menu toggle
    // $('#menu-toggle-but').click(function () {
    //     $(this).toggleClass('open');
    //     $(".main-nav").slideToggle('fast');
    // });


    // $('.burger').on('click', function () {
    //     $('.burger').toggleClass('burger_active')
    //     $('body').toggleClass('hidden')
    //     $('.main-nav').slideToggle('slow')
    // })


    $('.burger').on('click', function () {
      $(this).toggleClass("burger_active");
      $(".header__nav-wrapper").fadeToggle("slow");
      $('.header__nav-menu').toggleClass('header__nav-menu-active');
      // $(".small-btn").toggleClass("hide-btn");
      // $("body").toggleClass("overflow-block");
  });
  $(".header__nav-wrapper").on('click', function (e) {
      // console.log(e);
      if (e.currentTarget == e.target) {
      // $(this).fadeOut("slow");
      $(".header__nav").removeClass('header__nav-menu-active');
      $('.burger').removeClass('burger_active');
      }
    //  console.log(e.currentTarget)
  });

    	// faq
	$('.faq .faq-item')
    .eq(0)
    .addClass('active')
    .find('.faq-item__body')
    .slideDown()

$('.faq').on('click', function (e) {
    const $item = $(e.target).closest('.faq-item')

    if (!$item.length) return false

    if ($item.hasClass('active')) {
        $item.removeClass('active')
        $item.find('.faq-item__body').slideUp()
        return false
    }

    $(this)
        .find('.faq-item')
        .each(function () {
            $(this).removeClass('active')
            $(this).find('.faq-item__body').slideUp()
        })

    $item.toggleClass('active')
    $item.find('.faq-item__body').slideToggle()
})

    faqSchemeGenerator(
		'.faq',
		'.faq-item',
		'.faq-item__header',
		'.faq-item__body'
	)

    	// Autoreg
	$('[data-link]').on('click', function () {
		console.log('tap')
		var link = $(this).data('link')
		window.open('/' + atob(link))
    })


    //Slider
    $('.blog-post-slider').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 7000,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      })
})


      