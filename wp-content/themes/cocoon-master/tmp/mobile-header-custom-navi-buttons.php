<?php //モバイル用のグローバルナビメニューボタン
/**
 * Cocoon WordPress Theme
 * @author: yhira
 * @link: https://wp-cocoon.com/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if ( !defined( 'ABSPATH' ) ) exit; ?>

<?php if (has_nav_menu( NAV_MENU_HEADER_MOBILE_BUTTONS )): ?>
  <?php if(is_front_page()) : ?>
  <?php //ヘッダーナビ
  wp_nav_menu(
    array (
      //カスタムメニュー名
      'theme_location' => NAV_MENU_HEADER_MOBILE_BUTTONS,
      //ul 要素に適用するCSS クラス名
      'menu_class' => 'mobile-header-menu-buttons mobile-menu-buttons white',
      //メニューの深さ
      'depth' => 1,
      //コンテナを表示しない
      'container' => false,
      //カスタムメニューを設定しない際に固定ページでメニューを作成しない
      'fallback_cb' => false,
      'walker' => new mobile_menu_walker(),
    )
  );
    ?>
  <?php else:?>
  <?php //ヘッダーナビ
  wp_nav_menu(
    array (
      //カスタムメニュー名
      'theme_location' => NAV_MENU_HEADER_MOBILE_BUTTONS,
      //ul 要素に適用するCSS クラス名
      'menu_class' => 'mobile-header-menu-buttons mobile-menu-buttons',
      //メニューの深さ
      'depth' => 1,
      //コンテナを表示しない
      'container' => false,
      //カスタムメニューを設定しない際に固定ページでメニューを作成しない
      'fallback_cb' => false,
      'walker' => new mobile_menu_walker(),
    )
  );
    ?>
  <?php endif;?>
<?php endif ?>
