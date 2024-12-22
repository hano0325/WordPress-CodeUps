	<?php
/**
 * Functions
 */

/**
 * WordPress標準機能
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
 */
function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );



/**
 * CSSとJavaScriptの読み込み
 *
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 */
function my_script_init()
{
// css
	wp_enqueue_style('swiper-css', '//cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array(), '8.4.7', 'all');
	wp_enqueue_style('style-css', get_template_directory_uri(). '/assets/css/style.css', array(), '1.0.1', 'all');
	wp_enqueue_style('google-font', '//fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans+JP:wght@400;700&family=Noto+Serif+JP:wght@300;400;500;700&display=swap');

  // js
	wp_enqueue_script('jquery-cdn', '//code.jquery.com/jquery-3.6.0.js', array (), '1.0.1', true );
	wp_enqueue_script('swiper-js', '//cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array( 'jquery' ), '8.4.7', true );
	wp_enqueue_script('inview-js', get_template_directory_uri(). '/assets/js/jquery.inview.min.js', array(), '8.0.0', true );
	wp_enqueue_script('script-js', get_template_directory_uri(). '/assets/js/script.js', array( 'jquery' ), '1.0.1', true );

}
add_action('wp_enqueue_scripts', 'my_script_init');




/**
 * メニューの登録
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */
// function my_menu_init() {
// 	register_nav_menus(
// 		array(
// 			'global'  => 'ヘッダーメニュー',
// 			'utility' => 'ユーティリティメニュー',
// 			'drawer'  => 'ドロワーメニュー',
// 		)
// 	);
// }
// add_action( 'init', 'my_menu_init' );
/**
 * メニューの登録
 *
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */


/**
 * ウィジェットの登録
 *
 * @codex http://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_sidebar
 */
// function my_widget_init() {
// 	register_sidebar(
// 		array(
// 			'name'          => 'サイドバー',
// 			'id'            => 'sidebar',
// 			'before_widget' => '<div id="%1$s" class="p-widget %2$s">',
// 			'after_widget'  => '</div>',
// 			'before_title'  => '<div class="p-widget__title">',
// 			'after_title'   => '</div>',
// 		)
// 	);
// }
// add_action( 'widgets_init', 'my_widget_init' );


/**
 * アーカイブタイトル書き換え
 *
 * @param string $title 書き換え前のタイトル.
 * @return string $title 書き換え後のタイトル.
 */

/**
 * @param string $page_title ページのtitle属性値
 * @param string $menu_title 管理画面のメニューに表示するタイトル
 * @param string $capability メニューを操作できる権限（manage_options とか）
 * @param string $menu_slug オプションページのスラッグ。ユニークな値にすること。
 * @param string|null $icon_url メニューに表示するアイコンの URL
 * @param int $position メニューの位置
 */
SCF::add_options_page( 'ページタイトル', 'タブボタン', 'manage_options', 'theme-options' );


/**
 * 抜粋文の文字数の変更
 *
 * @param int $length 変更前の文字数.
 * @return int $length 変更後の文字数.
 */
function my_excerpt_length( $length ) {
	return 80;
}
add_filter( 'excerpt_length', 'my_excerpt_length', 999 );


/**
 * 抜粋文の省略記法の変更
 *
 * @param string $more 変更前の省略記法.
 * @return string $more 変更後の省略記法.
 */
function my_excerpt_more( $more ) {
	return '...';

}
add_filter( 'excerpt_more', 'my_excerpt_more' );


function remove_wysiwyg() {
	remove_post_type_support( 'recruit', 'editor' );
	}
	add_action( 'init', 'remove_wysiwyg' );

	add_action( 'pre_get_posts', 'my_custom_query_vars' );
function my_custom_query_vars( $query ) {
	/* @var $query WP_Query */
	if ( !is_admin() && $query->is_main_query()) {
		if ( is_post_type_archive('campaign') ) {
			$query->set( 'posts_per_page' , -1 );//表示したい数
		}
	}
	return $query;
}

// campaignアーカイブページの投稿数を4件に設定
function set_campaign_posts_per_page($query) {
    // 管理画面ではなく、メインクエリが対象
    if (!is_admin() && $query->is_main_query()) {
        // カスタム投稿タイプ "campaign" のアーカイブページ
        if ($query->is_post_type_archive('campaign')) {
            $query->set('posts_per_page', 4); // 1ページあたり4件表示
        }
    }
}
// pre_get_posts フックを追加
add_action('pre_get_posts', 'set_campaign_posts_per_page');

// "blog" カスタム投稿タイプの投稿数を10件に設定
function set_blog_posts_per_page($query) {
    // 管理画面ではなく、メインクエリが対象
    if (!is_admin() && $query->is_main_query()) {
        // カスタム投稿タイプ "blog" のアーカイブページ
        if ($query->is_post_type_archive('blog')) {
            $query->set('posts_per_page', 10); // 1ページあたり10件表示
        }
    }
}
// pre_get_posts フックを追加
add_action('pre_get_posts', 'set_blog_posts_per_page');


/* ---------- 「投稿」の表記変更 ---------- */
function Change_menulabel() {
	global $menu;
	global $submenu;
	$name = 'ブログ';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name.'一覧';
	$submenu['edit.php'][10][0] = '新規'.$name.'投稿';
  }
  function Change_objectlabel() {
	global $wp_post_types;
	$name = 'ブログ';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('追加', $name);
	$labels->add_new_item = $name.'の新規追加';
	$labels->edit_item = $name.'の編集';
	$labels->new_item = '新規'.$name;
	$labels->view_item = $name.'を表示';
	$labels->search_items = $name.'を検索';
	$labels->not_found = $name.'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
  }
  add_action( 'init', 'Change_objectlabel' );
  add_action( 'admin_menu', 'Change_menulabel' );