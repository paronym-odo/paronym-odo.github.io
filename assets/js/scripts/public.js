var WinScroll;
var WinW;
var WinH;
var firstWinH;
var player;

jQuery(function($){

  /*-----------------------------------------------------------------------------------*/
  /* 画面サイズ設定
  /*-----------------------------------------------------------------------------------*/
  firstWinH = window.innerHeight ? window.innerHeight : $(window).height();
  Resize();
	//Vimeoをトップページでのみ再生
	if (location.pathname == '/'){
		playVimeo();
	} else if (location.pathname == '/en/'){
		playVimeo();
	}
  $(window).on('orientationchange load resize',function(){
    Resize();
  });
	
  function Resize(){
    WinW = $(window).width();
    WinH = window.innerHeight ? window.innerHeight : $(window).height();

    //var offset = 120;
    var offset = 0;
    var win_h = $(window).height();
    var win_w = $(window).width();
    var h = win_h - offset;
    var w = h * 16 / 9;

    if(win_w > w) {
        h = win_w * 9 / 16;
    }

    //youtube 851 x 479
    var deg=479/850;
    deg = 9 / 16;
    if(WinW*deg>(WinH+offset)){ // 横長
      $(".bgplayer_wrap iframe").width(WinW);
      $(".bgplayer_wrap iframe").height(WinW*deg);
      $(".bgplayer_wrap iframe").css({"margin-left":0, "margin-top":-((WinW*deg - WinH) / 2)});
    }else{
      $(".bgplayer_wrap iframe").width((WinH + offset)/deg);
      $(".bgplayer_wrap iframe").height(WinH + offset);
      $(".bgplayer_wrap iframe").css({"margin-left":-(((WinH + offset)/deg - WinW) / 2),"margin-top":-(offset / 2)});
    }
    if ( $(window).width() < 900){
      $(".bgplayer_wrap iframe").css({'display':'none'});
    } else {
      $(".bgplayer_wrap iframe").css({'display':'block'});
    }
  }
	
  /*-----------------------------------------------------------------------------------*/
  /* Vimeo設定
  /*-----------------------------------------------------------------------------------*/
  function playVimeo(){
    // プレーヤーのオプション設定
    var options = {
		id:'508366726',
        //url: 'https://player.vimeo.com/video/508366726?loop=1&muted=true', // VimeoのURL
        width:'100px',
		height:'100px',
		autoplay: true, // 自動再生
        loop: true, // ループ
        color: 'ff0000', // プレーヤーのカラー
        byline: false, // 投稿者部分の表示
        portrait: false, // 左上のVimeoのマークの表示
        title: false, // タイトルの表示
		muted:true,
		background:1
    };
 
    var player = new Vimeo.Player($('#bgplayer'), options);
 
    // プレーヤー再生時にconsole表示
    player.on('play', function() {
        //console.log('再生');
    });
}   
  /*-----------------------------------------------------------------------------------*/
  /* youtube設定
  /*-----------------------------------------------------------------------------------*/
//   var tag = document.createElement('script');
//   // tag.src = "https://www.youtube.com/iframe_api";
//   tag.src = "https://www.youtube.com/player_api";
//   var firstScriptTag = document.getElementsByTagName('script')[0];
//   firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

//    function onYouTubeIframeAPIReady() {
//      player = new YT.Player('bgplayer', {
//        width: '100%',//640
//        height: '100%',//360
//        videoId: 'S2NuUvhLzOk',
// //       videoId: 'azdY-n47gXI',
//        playerVars: {
//          controls: 0,              // コントロールバーを表示しない
//          showinfo: 0,              // 動画情報を表示しない
//          loop: 1,                  // ループの設定
//          playlist: 'S2NuUvhLzOk',  // 再生する動画のリスト
// //		   playlist: 'azdY-n47gXI',  // 再生する動画のリスト
//          rel: 0,

//          autohide: 1,
//          modestbranding:1,
//          start: 0,
//          color: 'white',
//          wmode: 'transparent',
//          enablejsapi: 1,
//          theme:'light'
//        },
//        events: {
//          'onReady': onPlayerReady,
//          'onStateChange': onPlayerStateChange
//        }
//      });
//    }

//    function onPlayerReady(event) {
//      event.target.setPlaybackQuality("hd720");
//      event.target.playVideo();
//      event.target.mute();        // 動画をミュートにする
//      // $('#bgplayer').css({'display':'block'});
//    }

//    function onPlayerStateChange(event) {
//      switch(event.data){
//        case YT.PlayerState.ENDED:
//            // console.log("play end")
//            player.playVideo();
//            break;
//        case YT.PlayerState.PLAYING:
//            $(".bgplayer_wrap iframe").css({'display':'block'});
//            break;
//        case YT.PlayerState.PAUSED:
//            break;
//        case YT.PlayerState.BUFFERING:
//            break;
//        case YT.PlayerState.CUED:
//            break;
//      }
//    }
//    function stopVideo() {
//      player.stopVideo();
//    }
//    window.onYouTubeIframeAPIReady = onYouTubeIframeAPIReady;

  /*-----------------------------------------------------------------------------------*/
  /* メニュー開閉
  /*-----------------------------------------------------------------------------------*/
  $('.menu_global_open').on('click', function(e){
    $('body').addClass('menu_open');
    $('body,html').css({"overflow":"hidden","height":"100vh"});
    $('#menu_global').addClass('open');
  });
  $('.menu_global_close').on('click', function(e){
    $('body').removeClass('menu_open');
    $('body,html').css({"overflow":"visible","height":"auto"});
    $('#menu_global').removeClass('open');
  });
  
  
  /*-----------------------------------------------------------------------------------*/
  /* FAQ開閉
  /*-----------------------------------------------------------------------------------*/
  // $('.faq .button').on('click', function(e){
  //   $(this).toggleClass('open');
  //   $(this).prev().children('.answer').toggleClass('open');
  // });
  $('.faq .posts article').on('click', function(e){
    $(this).find('.button').toggleClass('open');
    $(this).find('.answer').toggleClass('open');
  });
  

  /*-----------------------------------------------------------------------------------*/
  /* スライダー設定(slick)
  /*-----------------------------------------------------------------------------------*/
  $('.feature .posts_sp, .page-feature .posts_').slick({
    infinite: false,
    arrows: false,
    autoplay: false,
    slidesToShow: 5,
    slidesToScroll: 1,
        centerMode: true,
        centerPadding: '180px',
        variableWidth: true,
    responsive: [{
      breakpoint: 901,
      settings: {
        arrows: true,
        slidesToShow: 1,
        centerMode: true,
        centerPadding: '22vw',
      }
    }]
  });
  $('.company .posts').slick({
    arrows: true,
    autoplay:true,
    autoplaySpeed:5000,
    slidesToShow:6,
    slidesToScroll:1,
    responsive: [{
      breakpoint: 901,
      settings: {
        arrows: false,
        slidesToShow: 1,
        centerMode: true,
        centerPadding: '22vw',
      }
    }]
  });

  $('.tigservice .posts_thumb').slick({
    slidesToShow:7,
    slidesToScroll:1,
    asNavFor:'.tigservice .posts_info',
    arrows: true,
    dots: false,
    centerMode: true,
    focusOnSelect: true,
    // centerPadding: '19.4vw',
    responsive: [
      {
        breakpoint: 1243,
        settings: {
          slidesToShow:5,
        }
      },
      {
        breakpoint: 901,
        settings: {
          slidesToShow:3,
        }
      },
      {
        breakpoint: 581,
        settings: {
          slidesToShow:1,
          centerPadding: '20vw',
        }
      }
    ]
  });

  $('.tigservice .posts_info').slick({
    slidesToShow:1,
    slidesToScroll:1,
    arrows: false,
    asNavFor:'.tigservice .posts_thumb',
    focusOnSelect: true,
    autoplay: false,
  });  

  $('.usecase .posts_thumb').slick({
    arrows:true,
    asNavFor:'.usecase .posts_info',
    centerMode: true,
    centerPadding: '19.4vw',
    dots:true,
    responsive: [{
      breakpoint: 901,
      settings: {
        centerMode: false,
        centerPadding: '0',
      }
    }]
  });
  $('.usecase .posts_info').slick({
    arrows: false,
    asNavFor:'.usecase .posts_thumb',
    focusOnSelect: true,
    slidesToShow:1,
    slidesToScroll:1
  });
  
  $('.page-feature .posts, .page-feature-en .posts, .page-feature-cn .posts').slick({
    infinite: false,
    arrows: false,
    autoplay: false,
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [{
      breakpoint: 901,
      settings: {
        arrows: true,
        slidesToShow: 1,
        centerMode: true,
        centerPadding: '22vw',
        variableWidth: true,
      }
    }]
  });

  
  /*-----------------------------------------------------------------------------------*/
  /* ページ内アンカーへスムーズスクロール
  /*-----------------------------------------------------------------------------------*/
  // #で始まるアンカーをクリックした場合に処理
  $('a[href^=#]').click(function() {
  var rel = $(this).attr('rel');
  if( typeof rel !== 'undefined' && rel.match(/modal:/) ){
/*  if ( $(this).attr('rel').match(/modal:/) ){ */
      $(this).modal({
        fadeDelay: 1.50
      });
    } else {
      // スクロールの速度
      var speed = 400; // ミリ秒
      // アンカーの値取得
      var href= $(this).attr("href");
      // 移動先を取得
      var target = $(href == "#" || href == "" ? 'html' : href);
      // 移動先を数値で取得
      var position = target.offset().top;
      // スムーススクロール
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
    }
  });
  
  /*-----------------------------------------------------------------------------------*/
  /* 住所自動入力(ajaxzip3)
  /*-----------------------------------------------------------------------------------*/
  $( '.button_zip2addr' ).on('click', function( e ) {
    AjaxZip3.zip2addr('postalcode','','pref','addr');
  });
  /*-----------------------------------------------------------------------------------*/
  /* 住所自動入力(ajaxzip3)
  /*-----------------------------------------------------------------------------------*/
   $('.countto_tap').on('inview', function() {
     $('.countto_tap').countTo(902);
     $('.countto_stock').countTo(137);
     $('.countto_jump').countTo(47);
     $('.countto_last').countTo(52);
   });
   $('.countto_semi').on('inview', function() {
     $('.countto_semi').countTo(45);
     $('.countto_full').countTo(10);
   });
  /*-----------------------------------------------------------------------------------*/
  /* PRICE計算
  /*-----------------------------------------------------------------------------------*/
  $('button.price_calc').on('click', function(){
    var month   = $('.month').val();
    var playnum = $('.play').val();
    var tigset  = $('.tigset').val();
    var total   = 0;
    var price_ary = [0,0,0,0,0];

    if ( !($.isNumeric(month) && $.isNumeric(playnum) && $.isNumeric(tigset)) )
      return;

    price_mon = 50000 * month;
    price_set = 25000 * tigset;
    if ( playnum > (50000 - 0) ){ // 5万回未満
      price_ary[0] = 3 * 50000;
      playnum -= 50000;
    } else {
      price_ary[0] = 3 * playnum;
      playnum = 0;
    }
    if ( playnum > 50000 ){ // 5万1回以上10万回まで(100000 - 50000)
      price_ary[1] = 2 * 50000;
      playnum -= 50000;
    } else {
      price_ary[1] = 2 * playnum;
      playnum = 0;
    }
    if ( playnum > 200000 ){ // 10万1回以上30万回まで(300000 - 100000)
      price_ary[2] = 1.2 * 200000;
      playnum -= 200000;
    } else {
      price_ary[2] = 1.2 * playnum;
      playnum = 0;
    }
    if ( playnum > 200000 ){ // 30万1回以上50万回まで(500000 - 300000)
      price_ary[3] = 1 * 200000;
      playnum -= 200000;
    } else {
      price_ary[3] = 1 * playnum;
      playnum = 0;
    }
    // 50万1回以上
    price_ary[4] = 0.8 * playnum;

    console.log(price_mon, price_set, price_ary);
    total = price_mon + price_set + (price_ary[0] + price_ary[1] + price_ary[2] + price_ary[3] + price_ary[4]) * month;

    $('.price_total').text('' + total.toLocaleString());
  });
  /*-----------------------------------------------------------------------------------*/
  /* フォーム２重送信禁止
  /*-----------------------------------------------------------------------------------*/
  $('.mw_wp_form_input .button').on('click', function () {
    $(this).css('pointer-events','none');
  });
  $('.mw_wp_form_input .submit_send').on('click', function () {
    $(this).css('pointer-events','none');
  });
});
