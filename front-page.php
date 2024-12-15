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
<?php get_header(); ?>
<div id="mv" class="mv">
    <div class="mv__inner">
        <div class="mv__slider swiper js-mv-swiper">
            <div class="mv__wrapper swiper-wrapper">
                <?php
                $mv_slides = SCF::get('mv_slides');
                if (!empty($mv_slides)) :
                    foreach ($mv_slides as $slide) :
                        $image_pc = wp_get_attachment_image_url($slide['image_pc'], 'full');
                        $image_sp = wp_get_attachment_image_url($slide['image_sp'], 'full');
                        $alt_text = esc_attr($slide['alt_text']);
                ?>
                <div class="mv__slide swiper-slide">
                    <picture>
                        <source srcset="<?php echo esc_url($image_pc); ?>" media="(min-width: 768px)" />
                        <img src="<?php echo esc_url($image_sp); ?>" alt="<?php echo $alt_text; ?>" />
                    </picture>
                </div>
                <?php
                    endforeach;
                endif;
                ?>
            </div>
            <div class="mv__title">
                <h1 class="mv__title-main">diving</h1>
                <p class="mv__title-sub">into the ocean</p>
            </div>
        </div>
    </div>
</div>
<main>
    <section class="campaign campaign-layout">
        <div class="campaign__inner inner">
            <div class="campaign__title title">
                <p class="title__main">Campaign</p>
                <h2 class="title__sub">キャンペーン</h2>
            </div>
            <div class="campaign__container">
                <div class="campaign__swiper swiper js-campaign-swiper">
                    <div class="campaign__wrapper swiper-wrapper">
                        <div class="campaign__slide swiper-slide">
                            <img src="./assets/images/common/campaign1.jpg" alt="海の中に複数の魚がいる写真" />
                            <div class="campaign__container-text text-container">
                                <div class="campaign__text-box text-box">
                                    <p class="campaign__text-box-maintitle text-box-maintitle">
                                        ライセンス講習
                                    </p>
                                    <p class="campaign__text-box-subtitle text-box-subtitle">
                                        ライセンス講習
                                    </p>
                                </div>
                                <div class="campaign__money">
                                    <p class="campaign__money-title">
                                        全部コミコミ(お一人様)
                                    </p>
                                    <div class="campaign__fee">
                                        <p class="campaign__discount">¥56,000</p>
                                        <p class="campaign__main">¥46,000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="campaign__slide swiper-slide">
                            <img src="./assets/images/common/campaign2.jpg" alt="青い海に船と山が映っている写真" />
                            <div class="campaign__container-text text-container">
                                <div class="campaign__text-box text-box">
                                    <p class="campaign__text-box-maintitle text-box-maintitle">
                                        体験ダイビング
                                    </p>
                                    <p class="campaign__text-box-subtitle text-box-subtitle">
                                        貸切体験ダイビング
                                    </p>
                                </div>
                                <div class="campaign__money">
                                    <p class="campaign__money-title">
                                        全部コミコミ(お一人様)
                                    </p>
                                    <div class="campaign__fee">
                                        <p class="campaign__discount">¥24,000</p>
                                        <p class="campaign__main">¥18,000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="campaign__slide swiper-slide">
                            <img src="./assets/images/common/campaign3.jpg" alt="暗い海の中にクラゲが複数匹いる写真" />
                            <div class="campaign__container-text text-container">
                                <div class="campaign__text-box text-box">
                                    <p class="campaign__text-box-maintitle text-box-maintitle">
                                        体験ダイビング
                                    </p>
                                    <p class="campaign__text-box-subtitle text-box-subtitle">
                                        ナイトダイビング
                                    </p>
                                </div>
                                <div class="campaign__money">
                                    <p class="campaign__money-title">
                                        全部コミコミ(お一人様)
                                    </p>
                                    <div class="campaign__fee">
                                        <p class="campaign__discount">¥10,000</p>
                                        <p class="campaign__main">¥8,000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="campaign__slide swiper-slide">
                            <img src="./assets/images/common/campaign4.jpg" alt="海面上にダイバーが複数人いる写真" />
                            <div class="campaign__container-text text-container">
                                <div class="campaign__text-box text-box">
                                    <p class="campaign__text-box-maintitle text-box-maintitle">
                                        ファンダイビング
                                    </p>
                                    <p class="campaign__text-box-subtitle text-box-subtitle">
                                        貸切ファンダイビング
                                    </p>
                                </div>
                                <div class="campaign__money">
                                    <p class="campaign__money-title">全部コミコミ(お一人様)</p>
                                    <div class="campaign__fee">
                                        <p class="campaign__discount">¥20,000</p>
                                        <p class="campaign__main">¥16,000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="campaign__button">
                <a href="campaign.html" class="button">
                    <div class="button__container">
                        <p>View more</p>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/Vector.png" alt="矢印"
                            class="button__arrow" />
                    </div>
                </a>
            </div>
        </div>
        <div class="campaign__button-container">
            <div class="campaign__button-next swiper-button-next"></div>
            <div class="campaign__button-prev swiper-button-prev"></div>
        </div>
    </section>
    <section class="dive dive-layout">
        <div class="dive__inner inner">
            <div class="dive__title title">
                <p class="title__main">About us</p>
                <h2 class="title__sub">私たちについて</h2>
            </div>
            <div class="dive__img-container">
                <div class="dive__img-main">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/ocean2.jpg"
                        alt="海の中に黄色い魚が二匹いる写真" />
                </div>
                <div class="dive__img-sub">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/ocean1.jpg" alt="沖縄の屋根" />
                </div>
            </div>
            <div class="dive__text-container">
                <div class="dive__text-container-title">
                    Dive into<br />
                    the Ocean
                </div>
                <div class="dive__container-sub">
                    <p class="dive__container-subtext">
                        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入り
                    </p>
                    <div class="dive__container-subbutton">
                        <a href="about.html" class="button button--transparent">
                            <div class="button__container">
                                <p>View more</p>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/Vector.png"
                                    alt="矢印" class="button__arrow" />
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="license license-layout">
        <div class="license__inner inner">
            <div class="license__title-main title">
                <p class="title__main">Information</p>
                <h2 class="title__sub">ダイビング情報</h2>
            </div>
            <div class="license__container">
                <div class="license__img colorbox">
                    <div class="color"></div>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/license.jpg"
                        alt="海の中に黄色の魚と稚魚がいる写真" />
                </div>
                <div class="license__text-container">
                    <p class="license__title-sub">ライセンス講習</p>
                    <p class="license__text text">
                        当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br />
                        正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
                    </p>
                    <div class="license__button">
                        <a href="information.html" class="button">
                            <div class="button__container">
                                <p>View more</p>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/Vector.png"
                                    alt="矢印" class="button__arrow" />
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog blog-layout">
        <div class="blog__inner inner">
            <div class="blog__title title">
                <p class="title__main title__main--white">Blog</p>
                <h2 class="title__sub title__sub--white">ブログ</h2>
            </div>
            <ul class="blog__cards cards">
                <li class="cards__card card">
                    <a href="blog.html" class="card__container">
                        <div class="card__content">
                            <img src="./assets/images/common/blog1.jpg" alt="ピンクの珊瑚と海" />
                        </div>
                        <div class="card__block">
                            <time datetime="2023-11-17" class="card__block-date">2023.11/17</time>
                            <p class="card__block-title">ライセンス取得</p>
                            <p class="card__block-subtext">
                                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります<br />
                                ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                            </p>
                        </div>
                    </a>
                </li>
                <li class="cards__card card">
                    <a href="#" class="card__container">
                        <div class="card__content">
                            <img src="./assets/images/common/blog-2.jpg" alt="ピンクの珊瑚と海" />
                        </div>
                        <div class="card__block">
                            <time datetime="2023-11-17" class="card__block-date">2023.11/17</time>
                            <p class="card__block-title">ライセンス取得</p>
                            <p class="card__block-subtext">
                                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                                ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                            </p>
                        </div>
                    </a>
                </li>
                <li class="cards__card card">
                    <a href="#" class="card__container">
                        <div class="card__content">
                            <img src="./assets/images/common/blog-3.jpg" alt="ピンクの珊瑚と海" />
                        </div>
                        <div class="card__block">
                            <time datetime="2023-11-17" class="card__block-date">2023.11/17</time>
                            <p class="card__block-title">ライセンス取得</p>
                            <p class="card__block-subtext">
                                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                                ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                            </p>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="blog__button">
                <a href="blog.html" class="button">
                    <div class="button__container">
                        <p>View more</p>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/Vector.png" alt=""
                            class="button__arrow" />
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="voice voice-layout">
        <div class="voice__inner inner">
            <div class="voice__title-main title">
                <p class="title__main">Voice</p>
                <h2 class="title__sub">お客様の声</h2>
            </div>
            <ul class="voice__cards cards-voice">
                <li class="cards-voice__card card-voice">
                    <div class="card-voice__container">
                        <div class="card-voice__container-text">
                            <div class="card-voice__text-box text-box">
                                <p class="card-voice__profile">20代(女性)</p>
                                <p class="card-voice__text-box-maintitle text-box-maintitle">
                                    ライセンス講習
                                </p>
                                <p class="card-voice__text-box-subtitle text-box-subtitle">
                                    ここにタイトルが入ります。ここにタイトル
                                </p>
                            </div>
                            <div class="card-voice__content colorbox">
                                <div class="color"></div>
                                <img src="./assets/images/common/voice.jpg" alt="麦わら帽子を被った女性の写真" />
                            </div>
                        </div>
                        <p class="card-voice__block-subtext">
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                            ここにテキストが入ります。ここにテキストが入ります。
                        </p>
                    </div>
                </li>
                <li class="cards-voice__card card-voice">
                    <div class="card-voice__container">
                        <div class="card-voice__container-text">
                            <div class="card-voice__text-box text-box">
                                <p class="card-voice__profile">30代(男性)</p>
                                <p class="card-voice__text-box-maintitle text-box-maintitle">
                                    ファンダイビング
                                </p>
                                <p class="card-voice__text-box-subtitle text-box-subtitle">
                                    ここにタイトルが入ります。ここにタイトル
                                </p>
                            </div>
                            <div class="card-voice__content colorbox">
                                <div class="color"></div>
                                <img src="./assets/images/common/voice-2.jpg" alt="サムズアップをしている黒シャツを着ている男性の写真" />
                            </div>
                        </div>
                        <p class="card-voice__block-subtext">
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                            ここにテキストが入ります。ここにテキストが入ります。
                        </p>
                    </div>
                </li>
            </ul>
            <div class="voice__button">
                <a href="voice.html" class="button">
                    <div class="button__container">
                        <p>View more</p>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/Vector.png" alt="矢印"
                            class="button__arrow" />
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="price price-layout">
        <div class="price__inner inner">
            <div class="price__title-main title">
                <p class="title__main">Price</p>
                <h2 class="title__sub">料金一覧</h2>
            </div>
            <div class="price__container">
                <div class="price__content colorbox">
                    <div class="color"></div>
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/price-pc.jpg"
                            media="(min-width: 768px)" />
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/price-sp.jpg"
                            alt="海の中に橙色の亀が写真" />
                    </picture>
                </div>
                <ul class="price__items">
                    <li class="price__item">
                        <div class="price__item-container">
                            <p class="price__item-title">ライセンス講習</p>
                            <div class="price__item-container-sub">
                                <div class="price__item-content">
                                    <p class="price__item-event">
                                        オープンウォーターダイバーコース
                                    </p>
                                    <p class="price__item-price">¥50,000</p>
                                </div>
                                <div class="price__item-content">
                                    <p class="price__item-event">
                                        アドバンスドオープンウォーターコース
                                    </p>
                                    <p class="price__item-price">¥60,000</p>
                                </div>
                                <div class="price__item-content">
                                    <p class="price__item-event">レスキュー+EFRコース</p>
                                    <p class="price__item-price">¥70,000</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="price__item">
                        <div class="price__item-container">
                            <p class="price__item-title">体験ダイビング</p>
                            <div class="price__item-container-sub">
                                <div class="price__item-content">
                                    <p class="price__item-event">
                                        ビーチ体験ダイビング(半日)
                                    </p>
                                    <p class="price__item-price">¥7,000</p>
                                </div>
                                <div class="price__item-content">
                                    <p class="price__item-event">ビーチ体験ダイビング(1日)</p>
                                    <p class="price__item-price">¥14,000</p>
                                </div>
                                <div class="price__item-content">
                                    <p class="price__item-event">
                                        ボート体験ダイビング(半日)
                                    </p>
                                    <p class="price__item-price">¥10,000</p>
                                </div>
                                <div class="price__item-content">
                                    <p class="price__item-event">ボート体験ダイビング(1日)</p>
                                    <p class="price__item-price">¥18,000</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="price__item">
                        <div class="price__item-container">
                            <p class="price__item-title">ファンダイビング</p>
                            <div class="price__item-container-sub">
                                <div class="price__item-content">
                                    <p class="price__item-event">ビーチダイビング(2ダイブ)</p>
                                    <p class="price__item-price">¥14,000</p>
                                </div>
                                <div class="price__item-content">
                                    <p class="price__item-event">ボートダイビング(2ダイブ)</p>
                                    <p class="price__item-price">¥18,000</p>
                                </div>
                                <div class="price__item-content">
                                    <p class="price__item-event">
                                        スペシャルダイビング(2ダイブ)
                                    </p>
                                    <p class="price__item-price">¥24,000</p>
                                </div>
                                <div class="price__item-content">
                                    <p class="price__item-event">ナイトダイビング(1ダイブ)</p>
                                    <p class="price__item-price">¥10,000</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="price__item">
                        <div class="price__item-container">
                            <p class="price__item-title">スペシャルダイビング</p>
                            <div class="price__item-container-sub">
                                <div class="price__item-content">
                                    <p class="price__item-event">貸切ダイビング(2ダイブ)</p>
                                    <p class="price__item-price">¥24,000</p>
                                </div>
                                <div class="price__item-content">
                                    <p class="price__item-event">1日ダイビング(3ダイブ)</p>
                                    <p class="price__item-price">¥32,000</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="price__button">
                <a href="<?php echo $price; ?>" class="button">
                    <div class="button__container">
                        <p>View more</p>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/Vector.png" alt="矢印"
                            class="button__arrow" />
                    </div>
                </a>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>