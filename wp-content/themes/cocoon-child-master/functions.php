<?php //子テーマ用関数
if (!defined('ABSPATH')) exit;

//子テーマ用のビジュアルエディタースタイルを適用
add_editor_style();

//以下に子テーマ用の関数を書く
function add_swiper_files()
{
  if (is_front_page() || is_page(19)) {
    //CSS
    wp_enqueue_style('swiper-style', get_stylesheet_directory_uri() . '/assets/swiper/swiper.min.css', array(), '1.0.0');
    wp_enqueue_style('swiper-css-style', get_stylesheet_directory_uri() . '/css/swiper-custom.css', array('swiper-style'), '1.0.0');
    //js
    wp_enqueue_script('swiper-script', get_stylesheet_directory_uri() . '/assets/swiper/swiper-bundle.min.js', array(), '1.0.0', true);
    wp_enqueue_script('swiper-js-script', get_stylesheet_directory_uri() . '/js/swiper-custom.js', array('swiper-script'), '1.0.0', true);
  }
}

add_action('wp_enqueue_scripts', 'add_swiper_files');
