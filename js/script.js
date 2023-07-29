//グローバルナビのフロート
var winW = $(window).width();
var devW = 767;
$('.header').removeClass('float');
if (winW >= devW) {
    $(window).scroll(function(){
        indicateHeight = 0;
        indicateHeight = $('.header').height(); 
    if ($(window).scrollTop() > indicateHeight) {
        console.log(indicateHeight) ;
    $('.header').addClass('float');
    } else {
    $('.header').removeClass('float');
    }
    });
}else{
    $('.header').css('position','fixed');
}


//アンカーリンク(別ページからでも)＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
$(function(){
    var headerHeight = $('.header').outerHeight();
    var urlHash = location.hash;
    var height_x = '';

    var winW = $(window).width();
    var devW = 767;
    if (winW >= devW) {
        var height_x = 150;
    }else{
        var height_x = 93;
    }

    if(urlHash) {
        $('body,html').stop().scrollTop(0);
        setTimeout(function(){
            var target = $(urlHash);
            var position = target.offset().top - height_x;
            $('body,html').stop().animate({scrollTop:position}, 500);
        }, 100);
    }
    
      $('a[href*="#"]').on('click', function(){
        var href = $(this).attr("href").split("#")[1];
        var position = $("#" + href ).offset().top - height_x;
        $("html, body").animate({
          scrollTop: position}, 500);
       });
    
     });


//TOPへ戻る＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝

$(function() {
    var TopBtn = $('#pagetop');   
    var BottomPos = 60; // ボタンの画面下からの位置を指定
    if(navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)){
        var BottomPos = 16; // ボタンの画面下からの位置を指定
    }
    TopBtn.hide();
    $(window).scroll(function(e) {
        $window = $(e.currentTarget);
        WindowHeight = $window.height(); // ウィンドウの高さ
        PageHeight = $(document).height(); // ページの高さ
        footerHeight = $(".footer_bottom").outerHeight(); // フッターの高さ
        ScrollTop = $window.scrollTop(); // スクロールした量
        MoveTopBtn = WindowHeight + ScrollTop + footerHeight - PageHeight;
        //スクロール位置が100でボタンを表示
        if ($(this).scrollTop() > 100) {
            TopBtn.fadeIn();
        } 
        else {
            TopBtn.fadeOut();
        }
        // フッターまでスクロールするとボタンを移動
        if(ScrollTop >= PageHeight - WindowHeight - footerHeight + BottomPos) { 
            TopBtn.css({ bottom: MoveTopBtn });
        }
        else {
            TopBtn.css({ bottom: BottomPos });
        } 
    });

    //ボタンを押下するとトップへ移動
    TopBtn.click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 300);
        return false;
    });
});

//ハンバーガーメニュー

$(function(){
$(document).on("click", ".hamburger", function() {
            $(this).children().toggleClass("active");
            $('.hamburger').toggleClass("active");
            $('.menu').toggleClass("active");
            $('.header').toggleClass("active");
            $('body').toggleClass("stop-scroll");
            $(".float-menu").fadeToggle(300);
        });
        $(document).on("click", ".menu-item a", function() {
            $('.header').removeClass("active");
            $('body').removeClass("stop-scroll");
            $('.hamburger').removeClass("active");
        });
    });


$(window).on('load resize', function(){
  var winW = $(window).width();
  var devW = 767;
  if (winW >= devW) {
            $('.hamburger__btn').removeClass("active");
            $('.hamburger').removeClass("active");
            $('.menu').removeClass("active");
            $('.header').removeClass("active");
            $('body').removeClass("stop-scroll");
  }
});






