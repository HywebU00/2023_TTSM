var wow = new WOW({
  boxClass: 'wow', // animated element css class (default is wow)
  animateClass: 'animated', // animation css class (default is animated)
  offset: 0, // distance to the element when triggering the animation (default is 0)
  mobile: true, // trigger animations on mobile devices (default is true)
  live: true, // act on asynchronously loaded content (default is true)
});
wow.init();

(function () {
  const header = document.querySelector('header');
  let windowScroll = window.scrollY;

  window.addEventListener('load', sticky);
  window.addEventListener('scroll', sticky);
  function sticky() {
    windowScroll = window.scrollY;
    if (windowScroll > 10) {
      header.classList.add('fixed');
    } else {
      header.classList.remove('fixed');
    }
  }
})();

$(function () {
  $('header .menu li').has('ul').addClass('nextLv').append('<span class="toggleBtn"></span>');

  $('.nextLv').hover(
    function () {
      if ($(window).outerWidth() > 1000) {
        $(this).children('ul').stop().off().slideDown('fast');
        $(this).addClass('active');
      }
    },
    function () {
      if ($(window).outerWidth() > 1000) {
        $(this).children('ul').stop().off().slideUp('fast');
        $(this).removeClass('active');
      }
    }
  );
  $('.nextLv > a').on('click', function (e) {
    if ($(window).outerWidth() <= 1000 && $(this).attr('href') === '#') {
      e.preventDefault();
      $(this).siblings('.toggleBtn').trigger('click');
    }
  });
  $('.nextLv .toggleBtn').on('click', function () {
    $(this).parents('li').siblings('li').not($(this).parents('li')).children('ul').slideUp('fast');
    $(this).siblings('ul').stop().slideToggle('fast');
    $(this).parent('li').toggleClass('active');
  });
});

let checkWidth;
let p = true;
let m = true;
$('body').prepend('<aside class="sidebar"><div class="m_area"><button type="button" class="sidebarClose">關閉</button></div></aside>');
$('.m_area').append($('.menu').clone());
$('.sidebarCtrl').on('click', function () {
  $(this).toggleClass('is-active');
  $('.sidebar').toggleClass('is-active');
  $('.m_search').stop().slideUp('fast');
  $('.searchCtrl').removeClass('is-active');
});
$('.sidebarClose').on('click', function () {
  $('.sidebarCtrl').removeClass('is-active');
  $('.sidebar').removeClass('is-active');
});
$('.searchCtrl').on('click', function () {
  $(this).toggleClass('is-active');
  $('.sidebarCtrl').removeClass('is-active');
  $('.sidebar').removeClass('is-active');
  $('.search').stop().slideToggle('fast');
});

$('.search .closeBtn').on('click', function () {
  $('.search').slideUp();
});

$('.KV-Banner .col').append($('.KV-Banner .picBox').clone().addClass('navBox').removeClass('picBox'));
$('.KV-Banner .navBox a').on('click', function (e) {
  e.preventDefault();
});

$('.exhibition .container').prepend('<div class="topBox wow fadeInDown" data-wow-delay=".2s"></div>');
$('.exhibition .topBox').append($('.exhibition .navBox .item').eq(0).clone());
$('.exhibition .navBox .item a').on('click', function (e) {
  e.preventDefault();
  $('.exhibition .topBox .item').remove();
  $('.exhibition .topBox').append($(this).parent('.item').clone());
});

$('.MP .video .container .bottomBox').append('<div class="control"><div class="count"></div></div>');

const checkWidthFn = () => {
  let windowWidth = $('body').width();
  windowWidth > 981 ? (checkWidth = true) : (checkWidth = false);
  $('.sidebar').removeClass('active');

  if (checkWidth && p) {
    p = false;

    $('.search').removeClass('m_search').removeAttr('style');
    $('.search').appendTo('.header');
    $('.navigation').appendTo('.header .container');
    $('.searchCtrl').removeClass('is-active');
    $('.sidebar').removeClass('is-active');
    $('.sidebarCtrl').removeClass('is-active');
    $('.MP .exhibition .navBox').hasClass('slick-initialized') ? $('.MP .exhibition .navBox').slick('unslick') : '';
    $('.MP .partner .listBox').hasClass('slick-initialized') ? $('.MP .partner .listBox').slick('unslick') : '';
    $('.MP .video .listBox').hasClass('slick-initialized') ? $('.MP .video .listBox').slick('unslick') : '';
    $('.MP .video .listBox').append('<div class="sideBox wow fadeInRight" data-wow-delay=".2s"></div>');
    $('.MP .video .listBox .item').each(function (i) {
      i >= 1 ? $(this).appendTo($('.MP .video .listBox .sideBox')) : '';
    });

    m = true;
  } else if (!checkWidth && m) {
    m = false;
    $('.search').addClass('m_search');
    $('.search').prependTo('body');
    $('.navigation').appendTo('.m_area');

    $('.MP .video .sideBox .item').each(function (i) {
      $(this).appendTo($('.MP .video .listBox'));
    });
    $('.MP .video .listBox .sideBox').remove();

    if (!$('.MP .exhibition .navBox').hasClass('slick-initialized')) {
      $('.MP .exhibition .navBox').slick({
        dots: false,
        arrows: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        pauseOnHover: true,
        pauseOnFocus: true,
        focusOnSelect: true,
        responsive: [
          {
            breakpoint: 1000,
            settings: {
              centerMode: true,
              slidesToShow: 3,
            },
          },
          {
            breakpoint: 767,
            settings: {
              centerMode: true,
              slidesToShow: 2,
            },
          },
          {
            breakpoint: 575,
            settings: {
              centerMode: true,
              slidesToShow: 1,
            },
          },
        ],
      });
    }

    if (!$('.MP .video .listBox').hasClass('slick-initialized')) {
      let $status = $('.MP .video .control .count');
      let $slickElement = $('.MP .video .listBox');
      $slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
        console.log('a');
        let i = (currentSlide ? currentSlide : 0) + 1;
        $status.text(i + '/' + slick.slideCount);
      });
      $('.MP .video .listBox').slick({
        dots: false,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        appendArrows: $('.MP .video .control'),
        pauseOnHover: true,
        pauseOnFocus: true,
        focusOnSelect: true,
      });
    }

    if (!$('.MP .partner .listBox').hasClass('slick-initialized')) {
      $('.MP .partner .listBox').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        centerMode: false,
        infinite: false,
        responsive: [
          {
            breakpoint: 1000,
            settings: {
              slidesToShow: 4.5,
            },
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 3.5,
            },
          },
          {
            breakpoint: 575,
            settings: {
              slidesToShow: 2.3,
            },
          },
        ],
      });
    }

    p = true;
  }
};

window.addEventListener('load', checkWidthFn);
window.addEventListener('resize', checkWidthFn);

// 自行加入的JS請寫在這裡
$(function () {
  $('.KV-Banner .picBox').slick({
    dots: false,
    arrows: true,
    speed: 600,
    autoplay: false,
    fade: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplaySpeed: 3000,
    pauseOnHover: true,
    pauseOnFocus: true,
    focusOnSelect: true,
    asNavFor: '.KV-Banner .navBox',
    responsive: [
      {
        breakpoint: 991,
        settings: {
          arrows: false,
          dots: true,
        },
      },
    ],
  });

  $('.KV-Banner .navBox').slick({
    dots: false,
    arrows: false,
    autoplay: false,
    fade: false,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplaySpeed: 3000,
    pauseOnHover: true,
    pauseOnFocus: true,
    focusOnSelect: true,
    asNavFor: '.KV-Banner .picBox',
  });

  // $('.exhibition .container').append($('.exhibition .topBox').clone().addClass('navBox').removeClass('topBox'));
  // $('.exhibition .navBox a').on('click', function (e) {
  //   e.preventDefault();
  // });

  // $('.exhibition .topBox').slick({
  //   fade: true,
  //   dots: false,
  //   arrows: false,
  //   slidesToShow: 1,
  //   slidesToScroll: 1,
  //   pauseOnHover: true,
  //   pauseOnFocus: true,
  //   focusOnSelect: true,
  //   asNavFor: '.exhibition .navBox',
  // });

  $('.m_adSlider').slick({
    dots: false,
    infinite: true,
    speed: 500,
    autoplay: true,
    arrows: true,
    autoplaySpeed: 1000,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          arrows: true,
        },
      },
      {
        breakpoint: 575,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: true,
        },
      },
    ],
  });
  $('.adSlider-small').slick({
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: false,
    arrows: true,
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
          arrows: true,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          arrows: true,
        },
      },
      {
        breakpoint: 575,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          arrows: true,
        },
      },
    ],
  });

  //燈箱slick+lightBox組合
  $('.cp_slider').slick({
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: false,
    autoplaySpeed: 1500,
    pauseOnHover: true,
    pauseOnFocus: true,
    focusOnSelect: true,
    accessibility: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          arrows: true,
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          arrows: true,
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
  // $('.cp_slider').slickLightbox({
  //   caption: 'caption',
  //   useHistoryApi: 'true',
  //   lazy: true,
  // });

  $('.mp_slider').slick({
    arrows: true, //左右箭頭
    autoplay: false, //自動播放
    autoplaySpeed: 3000, //自動播放秒數
    dots: true, //顯示圓點
    dotsClass: 'slick-dots', //原點css
    draggable: true, //滑鼠可以拖曳
    infinite: true, //無限輪播
    pauseOnHover: true, //滑鼠移過後暫停自動撥放
    pauseOnDotsHover: false, //滑鼠移過圓點後暫停自動撥放
    rtl: false, //改變輪播方向
    slidesToShow: 3, //一次顯示幾張
    slidesToScroll: 1, //一次輪播幾張
    vertical: false, //改成垂直方向
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
          arrows: true,
        },
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          arrows: true,
        },
      },
      {
        breakpoint: 575,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: true,
        },
      },
    ],
  });

  /*-----------------------------------*/
  //////////// Accordion設定 ////////////
  /*-----------------------------------*/
  $('.accordion-QA').each(function () {
    $(this).find('.accordion-content').hide();
    var _accordionItem = $(this).children('ul').children('li').children('a');
    _accordionItem.each(function () {
      function accordion(e) {
        $(this).parent('li').siblings().children('a').removeClass('active');
        $(this).toggleClass('active');
        $(this).parent('li').siblings().children('.accordion-content').slideUp();
        $(this).next('.accordion-content').slideToggle();
        e.preventDefault();
      }
      $(this).click(accordion);
      $(this).keyup(accordion);
    });
  });
});
