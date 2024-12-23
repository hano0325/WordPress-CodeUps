<?php get_header(); ?>
<div id="mv" class="mv-lower mv-lower--mask">
    <div class="mv-lower__inner">
        <div class="mv-lower__title">
            <h1 class="mv-lower__title-main">Blog</h1>
        </div>
        <div class="mv-lower__img">
            <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/blog-lower-pc.jpg"
                    media="(min-width: 768px)" />
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/blog-lower-sp.jpg"
                    alt="大群の魚が泳いでいる海中の写真。青い水中に無数の魚が一方向に泳いでいる様子が描かれている。">
            </picture>
        </div>
    </div>
</div>
<div class="breadcrumb breadcrumb-layout">
    <?php get_template_part('breadcrumb'); ?>
</div>
<main>
    <section class="blog-lower blog-lower-layout">
        <div class="blog-lower__inner">
            <div class="blog-lower__section">
                <div class="blog-lower__container">
                    <ul class="blog-lower__cards cards cards--blog">
                        <?php if ( have_posts() ) : ?>
                        <?php while( have_posts() ) : the_post(); ?>
                        <li class="cards__card card">
                            <a href="<?php the_permalink(); ?>" class="card__container">
                                <div class="card__content">
                                    <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('full'); ?>
                                    <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/ocean.jpg"
                                        alt="猫の画像">
                                    <?php endif; ?>
                                </div>
                                <div class="card__block">
                                    <time datetime="<?php echo get_the_date('Y-m-d'); ?>"
                                        class="card__block-date"><?php echo get_the_date('Y.m/d'); ?></time>
                                    <p class="card__block-title"><?php  the_title(); ?></p>
                                    <p class="card__block-subtext">
                                        <?php the_content(); ?>
                                    </p>
                                </div>
                            </a>
                        </li>
                        <?php endwhile;?>
                        <?php endif; ?>
                    </ul>
                    <div class="blog-lower__pagenavi pagenavi">
                        <?php wp_pagenavi(); ?>
                    </div>
                </div>
                <aside class="blog-lower-slideber blog-lower-slideber-layout">
                    <div class="blog-lower-slideber__inner">
                        <div class="blog-lower-slideber__title title-side">
                            <div class="title-side__container">
                                <div class="title-side__container-img-ber">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/title-ber.svg"
                                        alt="|">
                                </div>
                                <div class="title-side__container-img-fish">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/fish-title.svg"
                                        alt="">
                                </div>
                                <h2 class="title-side__main">人気記事</h2>
                            </div>
                        </div>
                        <ul class="blog-lower-slideber__article-cards cards-article">
                            <li class="cards-article__card card-article">
                                <a class="card-article__container">
                                    <div class="card-article__img">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/gallery4-sp.jpg"
                                            alt="黄色い魚が水中を泳いでいる様子" />
                                    </div>
                                    <div class="card-article__text-box">
                                        <time datetime="2023-11-17" class="card-article__date">2023.11/17</time>
                                        <p class="card-article__title">ライセンス取得</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="blog-lower-reviews blog-lower-reviews-layout">
                            <div class="blog-lower-reviews__title title-side">
                                <div class="title-side__container">
                                    <div class="title-side__container-img-ber">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/title-ber.svg"
                                            alt="|">
                                    </div>
                                    <div class="title-side__container-img-fish">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/fish-title.svg"
                                            alt="">
                                    </div>
                                    <h2 class="title-side__main">口コミ</h2>
                                </div>
                            </div>
                            <div class="blog-lower-reviews__cards cards-reviews">
                                <?php
if (have_posts()): 
    while (have_posts()): the_post();
        // Smart Custom Fieldsで繰り返しフィールドを取得
        $voice_cards = SCF::get('voice_cards');

        // voice_cardsの中身があるか確認
        if (!empty($voice_cards)):
            // 最新の1件だけを取得
            $latest_card = $voice_cards[0]; // 繰り返しフィールドの最初のデータを取得
            ?>
                                <ul class="cards-reviews">
                                    <li class="cards-reviews__card card-reviews">
                                        <a href="<?php echo $voice?>" class="card-reviews__container">
                                            <!-- 画像 -->
                                            <div class=" card-reviews__img">
                                                <?php if (!empty($latest_card['image'])): ?>
                                                <img src="<?php echo esc_url(wp_get_attachment_url($latest_card['image'])); ?>"
                                                    alt="">
                                                <?php endif; ?>
                                            </div>
                                            <!-- テキストボックス -->
                                            <div class="card-reviews__text-box">
                                                <!-- 性別・年齢 -->
                                                <?php if (!empty($latest_card['gender_age'])): ?>
                                                <div class="card-reviews__profile">
                                                    <?php echo esc_html($latest_card['gender_age']); ?></div>
                                                <?php endif; ?>

                                                <!-- タイトル -->
                                                <?php if (!empty($latest_card['title'])): ?>
                                                <p class="card-reviews__text">
                                                    <?php echo esc_html($latest_card['title']); ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <?php endif;
                                    endwhile;
                                endif;?>
                                <div class="blog-lower-reviews__button">
                                    <a href="<?php echo esc_url(home_url('voice')); ?>" class="button">
                                        <div class="button__container">
                                            <p>View more</p>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/Vector.png"
                                                alt="" class="button__arrow">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <aside class="blog-lower-campaign blog-lower-campaign-layout">
                            <div class="blog-lower-campaign__title title-side">
                                <div class="title-side__container">
                                    <div class="title-side__container-img-ber">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/title-ber.svg"
                                            alt="|">
                                    </div>
                                    <div class="title-side__container-img-fish">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/fish-title.svg"
                                            alt="">
                                    </div>
                                    <h2 class="title-side__main">キャンペーン</h2>
                                </div>
                            </div>
                            <div class="blog-lower-campaign__contents">
                                <?php
                                        // 最新のキャンペーン投稿を2件取得
                                        $args = array(
                                            'post_type'      => 'campaign', // 投稿タイプ（キャンペーン投稿を想定）
                                            'posts_per_page' => 2,      // 表示する投稿数を2件に設定
                                        );
                                        $query = new WP_Query($args);

                                        if ($query->have_posts()):
                                            ?>
                                <ul class="blog-lower-campaign__contents-content">
                                    <?php
                                    while ($query->have_posts()): $query->the_post();
                                        // SCFで繰り返しフィールドを取得
                                        $campaign_archives = SCF::get('campaign_archives');
                                        if (!empty($campaign_archives)):
                                            foreach ($campaign_archives as $campaign):
                                                ?>
                                    <li class="blog-lower-campaign__content-card">
                                        <div class="blog-lower-campaign__container">
                                            <div class="blog-lower-campaign__img">
                                                <?php if (has_post_thumbnail()): ?>
                                                <?php the_post_thumbnail('full'); ?>
                                                <?php else: ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/cats.jpg"
                                                    alt="デフォルト画像" />
                                                <?php endif; ?>
                                            </div>
                                            <div class="blog-lower-campaign__container-text">
                                                <div class="blog-lower-campaign__text-box">
                                                    <!-- サブタイトル -->
                                                    <p class="blog-lower-campaign__text-box-title">
                                                        <?php echo esc_html($campaign['sub_title']); ?>
                                                    </p>
                                                </div>
                                                <div class="blog-lower-campaign__money">
                                                    <!-- 金額タイトル -->
                                                    <p class="blog-lower-campaign__money-title">
                                                        <?php echo esc_html($campaign['money_title']); ?>
                                                    </p>
                                                    <div class="blog-lower-campaign__fee">
                                                        <!-- 割引価格 -->
                                                        <p class="blog-lower-campaign__discount">
                                                            ¥<?php echo esc_html($campaign['discount_price']); ?>
                                                        </p>
                                                        <!-- メイン価格 -->
                                                        <p class="blog-lower-campaign__main">
                                                            ¥<?php echo esc_html($campaign['main_price']); ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php
                                        endforeach;
                                    endif;
                                endwhile;
                                ?>
                                </ul>
                                <?php endif; ?>
                            </div>
                            <div class="blog-lower-reviews__button">
                                <a href="<?php echo esc_url(home_url('campaign')); ?>" class="button">
                                    <div class="button__container">
                                        <p>View more</p>
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/Vector.png"
                                            alt="" class="button__arrow" />
                                    </div>
                                </a>
                            </div>
                        </aside>
                        <aside class="blog-lower-archive blog-lower-archive-layout">
                            <div class="blog-lower-archive__title title-side">
                                <div class="title-side__container">
                                    <div class="title-side__container-img-ber">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/title-ber.svg"
                                            alt="|">
                                    </div>
                                    <div class="title-side__container-img-fish">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/fish-title.svg"
                                            alt="">
                                    </div>
                                    <h2 class="title-side__main">アーカイブ</h2>
                                </div>
                            </div>
                            <div class="blog-lower-archive__container archive">
                                <ul class="archive-list">
                                    <li class="archive-list__item">
                                        <button class="archive-list__year is-active" aria-expanded="true">
                                            2023
                                        </button>
                                        <ul class="archive-list__months">
                                            <li class="archive-list__month">
                                                <a href="#">3月</a>
                                            </li>
                                            <li class="archive-list__month">
                                                <a href="#">2月</a>
                                            </li>
                                            <li class="archive-list__month">
                                                <a href="#">1月</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="archive-list__item">
                                        <button class="archive-list__year" aria-expanded="false">
                                            2022
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </aside>
            </div>
        </div>
        </div>
    </section>
    <?php get_footer(); ?>