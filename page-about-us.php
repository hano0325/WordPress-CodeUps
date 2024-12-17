<?php get_header(); ?>
<div id="mv" class="mv-lower mv-lower--mask">
    <div class="mv-lower__inner">
        <div class="mv-lower__title">
            <h1 class="mv-lower__title-main">About us</h1>
        </div>
        <div class="mv-lower__img">
            <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/about-lower.jpg"
                    media="(min-width: 768px)" />
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/about-lower-sp.jpg"
                    alt="青空とシーサーが写っている写真">
            </picture>
        </div>
    </div>
</div>
<div class="breadcrumb breadcrumb-layout">
    <div class="breadcrumb__inner">
        <div class="breadcrumb__container">
            <?php get_template_part('breadcrumb'); ?>
        </div>
    </div>
</div>
<main>
    <section class="dive-lower dive-lower-layout">
        <div class="dive-lower__inner inner">
            <div class="dive-lower__img-container">
                <div class="dive-lower__img-main">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/ocean2.jpg"
                        alt="海の中に黄色い魚が二匹いる写真" />
                </div>
                <div class="dive-lower__img-sub u-desktop">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/ocean1.jpg" alt="沖縄の屋根" />
                </div>
            </div>
            <div class="dive-lower__text-container">
                <p class="dive-lower__text-container-title">
                    Dive into<br>
                    the Ocean
                </p>
                <div class="dive-lower__container-sub">
                    <p class="dive-lower__container-subtext text">
                        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入り
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery gallery-layout">
        <div class="gallery__inner inner">
            <div class="gallery__title title">
                <p class="title__main">Gallery</p>
                <h2 class="title__sub">フォト</h2>
            </div>
            <?php
                // SCFで設定した繰り返しフィールドを取得
                $gallery_images = SCF::get('gallery_images');
                ?>
            <?php if (!empty($gallery_images)) : ?>
            <ul class="gallery__list gallery-list">
                <?php foreach ($gallery_images as $gallery) : ?>
                <?php
                    // PC画像のURL
                    $pc_image = wp_get_attachment_image_url($gallery['pc_image'], 'large');
                    // SP画像のURL
                    $sp_image = wp_get_attachment_image_url($gallery['sp_image'], 'medium');
                    // 代替テキスト
                    $alt_text = !empty($gallery['alt_text']) ? esc_attr($gallery['alt_text']) : '';
                    ?>
                <li class="gallery-list__item">
                    <picture>
                        <!-- PC画像の表示 -->
                        <?php if ($pc_image) : ?>
                        <source srcset="<?php echo esc_url($pc_image); ?>" media="(min-width: 768px)">
                        <?php endif; ?>
                        <!-- SP画像の表示 -->
                        <?php if ($sp_image) : ?>
                        <img src="<?php echo esc_url($sp_image); ?>" alt="<?php echo $alt_text; ?>">
                        <?php endif; ?>
                    </picture>
                </li>
                <?php endforeach; ?>
                <?php endif; ?>
            </ul>
            <div id="grayDisplay" class="gallery-list__grayDisplay"></div>
        </div>
    </section>
    <?php get_footer(); ?>