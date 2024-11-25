<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <?php wp_head(); ?>
</head>

<?php
$home = esc_url( home_url( '/' ) );
$campaign = esc_url( home_url( '/campaign/' ) );
$about = esc_url( home_url( '/about/' ) );
$information = esc_url( home_url( '/information/' ) );
$blog = esc_url( home_url( '/blog/' ) );
$voice = esc_url( home_url( '/voice/' ) );
$price = esc_url( home_url( '/price/' ) );
$faq = esc_url( home_url( '/faq/' ) );
$contact = esc_url( home_url( '/contact/' ) );
$privacy = esc_url( home_url( '/privacy/' ) );
$terms = esc_url( home_url( '/terms/' ) );
$site = esc_url( home_url( '/site/' ) );
?>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="header">
        <div class="header__inner">
            <?php if(is_front_page()): ?>
            <div class="header__logo">
                <?php endif; ?>
                <a href="<?php echo $home;?>">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/CodeUps.svg"
                        alt="Codeups" /></a>
            </div>
            <button class="header__hamburger hamburger js-hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul class="header__nav-items">
                <li class="header__nav-item">
                    <a href="<?php echo $campaign;?>" class="header__nav-link"><span>campaign</span>キャンペーン</a>
                </li>
                <li class="header__nav-item">
                    <a href="<?php echo $about;?>" class="header__nav-link"><span>about us</span>私たちについて</a>
                </li>
                <li class="header__nav-item">
                    <a href="<?php echo $information;?>" class="header__nav-link"><span>information</span>ダイビング情報</a>
                </li>
                <li class="header__nav-item">
                    <a href="<?php echo $blog;?>" class="header__nav-link"><span>blog</span>ブログ</a>
                </li>
                <li class="header__nav-item">
                    <a href="<?php echo $voice?>" class="header__nav-link"><span>voice</span>お客様の声</a>
                </li>
                <li class="header__nav-item">
                    <a href="<?php echo $price;?>" class="header__nav-link"><span>price</span>料金一覧</a>
                </li>
                <li class="header__nav-item">
                    <a href="<?php echo $faq;?>"
                        class="header__nav-link header__nav-link--large"><span>faq</span>よくある質問</a>
                </li>
                <li class="header__nav-item">
                    <a href="<?php echo $contact;?>" class="header__nav-link"><span>contact</span>お問い合わせ</a>
                </li>
            </ul>
            <nav class="header__drawer drawer js-drawer">
                <div class="drawer__inner">
                    <div class="drawer__logo">
                        <a href="<?php echo $home;?>">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/CodeUps.svg"
                                alt="Codeups" /></a>
                    </div>
                    <button class="drawer__hamburger hamburger js-hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <div class="drawer__menu menu">
                    <div class="menu__nav-inner">
                        <div class="menu__nav-items">
                            <div class="menu__nav-container-first">
                                <ul class="menu__nav-item">
                                    <li class="menu__nav-item-main">
                                        <a
                                            href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>">キャンペーン</a>
                                    </li>
                                    <?php $campaign_categories = get_terms(array('taxonomy' => 'campaign_category','hide_empty' => true,));
                                        if (!empty($campaign_categories) && !is_wp_error($campaign_categories)) :
                                            foreach ($campaign_categories as $category) :
                                        ?>
                                    <li class="menu__nav-item-sub">
                                        <a href="<?php echo esc_url(get_term_link($category)); ?>">
                                            <?php echo esc_html($category->name); ?>
                                        </a>
                                    </li>
                                    <?php endforeach; endif;?>
                                </ul>
                                <ul class="menu__nav-item">
                                    <li class="menu__nav-item-main">
                                        <a href="<?php echo esc_url($about); ?>">私たちについて</a>
                                    </li>
                                </ul>
                                <ul class="menu__nav-item">
                                    <li class="menu__nav-item-main">
                                        <a href="<?php echo esc_url($information); ?>">ダイビング情報</a>
                                    </li>
                                    <li class="menu__nav-item-sub">
                                        <a href="<?php echo esc_url($home); ?>?tab=tab01">ライセンス講習</a>
                                    </li>
                                    <li class="menu__nav-item-sub">
                                        <a href="<?php echo esc_url($home); ?>?tab=tab03">体験ダイビング</a>
                                    </li>
                                    <li class="menu__nav-item-sub">
                                        <a href="<?php echo esc_url($home); ?>?tab=tab02">ファンダイビング</a>
                                    </li>
                                </ul>
                                <ul class="menu__nav-item">
                                    <li class="menu__nav-item-main">
                                        <a href="<?php echo esc_url($blog); ?>">ブログ</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="menu__nav-container-second">
                                <ul class="menu__nav-item">
                                    <li class="menu__nav-item-main">
                                        <a href="<?php echo esc_url($voice); ?>">お客様の声</a>
                                    </li>
                                </ul>
                                <ul class="menu__nav-item">
                                    <li class="menu__nav-item-main">
                                        <a href="<?php echo esc_url($price); ?>">料金一覧</a>
                                    </li>
                                    <li class="menu__nav-item-sub">
                                        <a href="<?php echo esc_url($price); ?>#license">ライセンス講習</a>
                                    </li>
                                    <li class="menu__nav-item-sub">
                                        <a href="<?php echo esc_url($price); ?>#experience">体験ダイビング</a>
                                    </li>
                                    <li class="menu__nav-item-sub">
                                        <a href="<?php echo esc_url($price); ?>#fun">ファンダイビング</a>
                                    </li>
                                </ul>
                                <ul class="menu__nav-item">
                                    <li class="menu__nav-item-main">
                                        <a href="<?php echo esc_url($faq); ?>">よくある質問</a>
                                    </li>
                                </ul>
                                <ul class="menu__nav-item">
                                    <li class="menu__nav-item-main">
                                        <a href="<?php echo esc_url($privacy); ?>">プライバシー<br class="u-mobile" />ポリシー</a>
                                    </li>
                                </ul>
                                <ul class="menu__nav-item">
                                    <li class="menu__nav-item-main">
                                        <a href="<?php echo esc_url($terms); ?>">利用規約</a>
                                    </li>
                                </ul>
                                <ul class="menu__nav-item">
                                    <li class="menu__nav-item-main">
                                        <a href="<?php echo esc_url($site); ?>">サイトマップ</a>
                                    </li>
                                </ul>
                                <ul class="menu__nav-item">
                                    <li class="menu__nav-item-main">
                                        <a href="<?php echo esc_url($contact); ?>">お問い合わせ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </nav>
        </div>
    </header>