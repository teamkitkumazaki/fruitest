<?php

add_theme_support('post-thumbnails');

//カスタム投稿タイプの追加
add_action( 'init', 'create_post_type' );
function create_post_type() {
//カスタム投稿タイプ１（ここから）
register_post_type(
'news',
array(
'labels' => array(
'name' => __( '時間割管理' ),
'singular_name' => __( 'news' )
),
'public' => true,
'menu_position' =>5,
'has_archive' => false,
'supports' => array('title','editor','thumbnail')
)
);
}

function wpcf7_main_validation_filter( $result, $tag ) {
  $type = $tag['type'];
  $name = $tag['name'];
  $_POST[$name] = trim( strtr( (string) $_POST[$name], "\n", " " ) );
  if ( 'email' == $type || 'email*' == $type ) {
    if (preg_match('/(.*)_confirm$/', $name, $matches)){
      $target_name = $matches[1];
      if ($_POST[$name] != $_POST[$target_name]) {
        if (method_exists($result, 'invalidate')) {
          $result->invalidate( $tag,"確認用のメールアドレスが一致していません");
      } else {
          $result['valid'] = false;
          $result['reason'][$name] = '確認用のメールアドレスが一致していません';
        }
      }
    }
  }
  return $result;
}

add_filter( 'wpcf7_validate_email', 'wpcf7_main_validation_filter', 11, 2 );
add_filter( 'wpcf7_validate_email*', 'wpcf7_main_validation_filter', 11, 2 );


?>
