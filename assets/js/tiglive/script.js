//============================================================
//　slick
//============================================================

$(function() {
  $('.c-slider__slick-logo').slick({
    arrows: false,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 3000,
    infinite: true,
    pauseOnHover: false,
    pauseOnFocus: false,
    cssEase: 'linear',
    slidesToShow: 7,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 5,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 3.5,
        }
      }
    ]
  });
  $('.c-slider__slick-case').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: true,
    prevArrow: '<div class="c-slider__slick--prev"></div>',
    nextArrow: '<div class="c-slider__slick--next"></div>',
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });
});

//============================================================
//　faqアコーディオン
//============================================================
$(function() {
  $('.p-faq__list dd').hide();
  $('.p-faq__list div').click(function() {
    $(this).toggleClass('is-active');
    $(this).children().next().slideToggle();
  });
});


//============================================================
//　ヘッダー・ボタンまわり
//============================================================
$(function(){

  $(window).on('scroll', function(){
    // SPの場合お問い合わせボタンが下部に追従する
    var scroll = $(window).scrollTop();
    var mvOffset = $('.l-mainvisual').offset();
    var mvH = $('.l-mainvisual').innerHeight();
    var contactOffset = $('#is-form').offset(); //フォーム設置の場合

    if(scroll > (mvH + mvOffset.top) && scroll < contactOffset.top -200){
      $('.l-header__navItem--contact').addClass('is-active');
    } else{
      $('.l-header__navItem--contact').removeClass('is-active');
    }
  });
});


//============================================================
//　スムーススクロール
//============================================================
$(function(){
  $('a[href^="#"]').click(function(){
    //スクロールのスピード
    var speed = 800;
    //リンク元を取得
    var href= $(this).attr("href");
    //リンク先を取得
    var target = $(href == "#" || href == "" ? 'html' : href);
    //リンク先までの距離を取得
    var position = target.offset().top;
    //スムーススクロール
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
});


//============================================================
//　ヘッダーの追従変化
//============================================================
$(function() {
  var $win = $(window),
      $header = $('header'),
      animationClass = 'is-animation';

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > 100 ) {
      $header.addClass(animationClass);
    } else {
      $header.removeClass(animationClass);
    }
  });
});


//============================================================
//　スクロールアニメーション
//============================================================
$(function () {
  var scrollAnimationClass = 'sa';
  var scrollAnimationShowClass = 'is-show';
  var triggerMarginDefault = 100;

  var scrollAnimationElm = document.querySelectorAll('.' + scrollAnimationClass);
  var scrollAnimationFunc = function() {
    var dataMargin = scrollAnimationClass + '_margin';
    var dataTrigger = scrollAnimationClass + '_trigger';
    var dataDelay = scrollAnimationClass + '_delay';
    for(var i = 0; i < scrollAnimationElm.length; i++) {
      var triggerMargin = triggerMarginDefault;
      var elm = scrollAnimationElm[i];
      var showPos = 0;
      if(elm.dataset[dataMargin] != null) {
        triggerMargin = parseInt(elm.dataset[dataMargin]);
      }
      if(elm.dataset[dataTrigger]) {
        showPos = document.querySelector(elm.dataset[dataTrigger]).getBoundingClientRect().top + triggerMargin;
      } else {
        showPos = elm.getBoundingClientRect().top + triggerMargin;
      }
      if (window.innerHeight > showPos) {
        var delay = (elm.dataset[dataDelay])? elm.dataset[dataDelay] : 0;
        setTimeout(function(index) {
          scrollAnimationElm[index].classList.add('is-show');
        }.bind(null, i), delay);
      }
    }
  }
  window.addEventListener('load', scrollAnimationFunc);
  window.addEventListener('scroll', scrollAnimationFunc);
});


//============================================================
// Tig modal
//============================================================
$(function(){
  $('#is-moviebtn').click(function() {
        $(".tig-modal").addClass('tig-open');
    })
});
