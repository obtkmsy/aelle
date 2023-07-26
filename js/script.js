
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
       // $('.hamburger').on('touchstart', function(){
$(document).on("click", ".hamburger", function() {
            $(this).children().toggleClass("active");
            $('.hamburger').toggleClass("active");
            $('.menu').toggleClass("active");
            $('.header').toggleClass("active");
            $('body').toggleClass("stop-scroll");
            // $(".sp-navi__hamburger-menu").fadeToggle(200);
            $(".float-menu").fadeToggle(300);
        });

        // $(document).on(clickEventType,'.menu-item',function(){
        //     $('.sp-navi__btn-trigger').removeClass("active");
        //     $(".sp-navi__hamburger-menu").fadeOut(200);
        // });
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


// jQuery(function($) {
//   if ( $('.prapoli .error')[0] ) {
//     $('.btn').addClass('error');
//   }
// });






