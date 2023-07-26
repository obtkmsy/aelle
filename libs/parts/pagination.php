<?php
function pagination($pages, $paged) {
    $pages = ( int ) $pages;//全体ページ数
    $paged = $paged ?: 1;//個別ページ数

function is_my_mobile()
{
 $size = $_SESSION[windowSize];
 if($size == 0)
  {
  if(is_mobile()){return 'xs';}
  elseif(wp_is_mobile()){return 'sm';}
  else{return 'pc';}
  }
 elseif($size <= 767){return 'xs';}
 elseif(768 <= $size && $size <= 991){return 'sm';}
 else{return 'pc';}
}

//1ページの時
    if ( $pages === 1 || $pages === 0) return;

        //２ページ以上の時
        echo '<ul class="pagination">';
       if ( $paged > 1 ) {
           // 「前へ」 の表示
           echo '<li class="prev"><a href="', get_pagenum_link( $paged - 1 ) ,'">
<img src="' , tmpdir() , '/img/common/arrow-return.svg"></a></li>';
       }

//全体が3ページ以上かつ現在ページが最大ページ
    if (($pages >= 3) && ($paged === $pages)) {
        echo '<li><a href="' . get_pagenum_link( $paged -2 ) . '">'.($paged -2).'</a></li>';
    }

//全体が2ページ以上かつ現在ページが１以上
    if ( ($pages >= 2) && ($paged > 1)) {
        echo '<li><a href="' . get_pagenum_link( $paged -1 ) . '">'.($paged -1).'</a></li>';
    }
//カレントは常に表示
echo '<li class="current"><span>'.$paged.'</span></li>';
//現在ページが1もしくは、ページ数が3以上かつ、ラストページ以外
if ( ($paged === 1) || ($pages >= 3) && ($paged !== $pages)) {
echo '<li><a href="' . get_pagenum_link( $paged +1 ) . '">'.($paged +1).'</a></li>';
}
//現在ページが1かつ全体ページが３以上の場合
 if ( ($paged === 1) && ($pages >= 3)) {
         echo '<li><a href="' . get_pagenum_link( $paged +2 ) . '">'.($paged +2).'</a></li>';
   }
//全体ページが4以上かつ、現在ページがラスト、ラストの前のページ出ない場合
if(($pages >= 4) && ($pages !== ($paged +1)) && ($pages !== $paged)){
echo '<li class="ellipsis">…</li>';
  echo '<li><a href="', get_pagenum_link( $pages ) ,'">'.$pages.'</a></li>';
}

//最終ページ以外
       if ( $paged < $pages ) {
           // 「次へ」 の表示
           echo '<li class="next"><a href="', get_pagenum_link( $paged + 1 ) ,'" class="next">
<img src="' , tmpdir() , '/img/common/arrow-forward.svg"></a></li>';
       }

// if(wp_is_mobile()){
//   echo '<div class="arrowbox">';
//        if ( $paged > 1 ) {
//            // 「前へ」 の表示
//            echo '<li class="prev sp"><a href="', get_pagenum_link( $paged - 1 ) ,'">〈</a></li>';
//        }
//        if ( $paged < $pages ) {
//            // 「次へ」 の表示
//            echo '<li class="next sp"><span><a href="', get_pagenum_link( $paged + 1 ) ,'" class="next">〉</a></span></li>';
//        }
//   echo '</div>';
// }


echo '</ul>';
}




