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
                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <?php 
                            $cats = get_the_category();
                            if($cats):
                                ?>
                        <?php foreach($cats as $cat): ?>
                        <li class="cards__card card" data-year="<?php echo get_the_date('Y'); ?>"
                            data-month="<?php echo get_the_date('n'); ?>">
                            <a href="<?php echo the_permalink(); ?>" class="card__container">
                                <div class="card__content">
                                    <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('full'); ?>
                                    <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/ocean.jpg"
                                        alt="デフォルト画像">
                                    <?php endif; ?>
                                </div>
                                <div class="card__block">
                                    <time datetime="<?php echo get_the_date('Y-m-d'); ?>"
                                        class="card__block-date"><?php echo get_the_date('Y.m/d'); ?></time>
                                    <p class="card__block-title"><?php the_title(); ?></p>
                                    <div class="card__block-subtext">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <?php endforeach; ?>
                        <?php endif; ?>
                        <?php endwhile; ?>
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
                            <?php if (!is_user_logged_in() && !is_bot()) { 
                                setPostViews(get_the_ID()); 
                                } ?>
                            <?php
                                $popular_args = array(
                                    'post_type' => 'post', // 投稿タイプを指定
                                    'meta_key' => 'post_views_count', // 閲覧数を指定
                                    'orderby' => 'meta_value_num', // ソートの基準を閲覧数に
                                    'order' => 'DESC', // 降順（閲覧数が多い順）でソート
                                    'post_status' => 'publish', // 投稿ステータスは公開済み
                                    'posts_per_page' => 3, // 投稿表示件数は3件
                                );
                                $popular_query = new WP_Query($popular_args);
                                if ($popular_query->have_posts()): 
                                ?>
                            <ul class="cards-article">
                                <?php while ($popular_query->have_posts()): $popular_query->the_post(); ?>
                                <li class="cards-article__card card-article">
                                    <a href="<?php echo esc_url(get_permalink()); ?>" class="card-article__container">
                                        <div class="card-article__img">
                                            <?php if (has_post_thumbnail()) : ?>
                                            <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'post-thumbnail')); ?>"
                                                alt="<?php the_title_attribute(); ?>">
                                            <?php else: ?>
                                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/ocean.jpg"
                                                alt="デフォルト画像">
                                            <?php endif; ?>
                                        </div>
                                        <div class="card-article__text-box">
                                            <time datetime="<?php echo get_the_date('Y-m-d'); ?>"
                                                class="card-article__date">
                                                <?php echo esc_html(get_the_date('Y/m/d')); ?>
                                            </time>
                                            <p class="card-article__title"><?php echo esc_html(get_the_title()); ?></p>
                                        </div>
                                    </a>
                                </li>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
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
                                $voice_cards = SCF::get('voice_cards');
                                if (!empty($voice_cards)):
                                $latest_card = $voice_cards[0];
                                ?>
                                <ul class="cards-reviews">
                                    <li class="cards-reviews__card card-reviews">
                                        <a href="<?php echo $voice?>" class="card-reviews__container">
                                            <div class=" card-reviews__img">
                                                <?php if (!empty($latest_card['image'])): ?>
                                                <img src="<?php echo esc_url(wp_get_attachment_url($latest_card['image'])); ?>"
                                                    alt="">
                                                <?php endif; ?>
                                            </div>
                                            <div class="card-reviews__text-box">
                                                <?php if (!empty($latest_card['gender_age'])): ?>
                                                <div class="card-reviews__profile">
                                                    <?php echo esc_html($latest_card['gender_age']); ?></div>
                                                <?php endif; ?>
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
                                $args = array(
                                    'post_type'      => 'campaign',
                                    'posts_per_page' => 2,
                                );
                                $query = new WP_Query($args);
                                if ($query->have_posts()):
                                    ?>
                                <ul class="blog-lower-campaign__contents-content">
                                    <?php
                                    while ($query->have_posts()): $query->the_post();
                                            $campaign_archives = SCF::get('campaign_archives');
                                    if (!empty($campaign_archives)):
                                    foreach ($campaign_archives as $campaign):
                                    ?>
                                    <li class="blog-lower-campaign__content-card">
                                        <a href=" <?php echo esc_url(home_url('campaign')); ?>">
                                            <div class=" blog-lower-campaign__container">
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
                                                        <p class="blog-lower-campaign__text-box-title">
                                                            <?php echo esc_html($campaign['sub_title']); ?>
                                                        </p>
                                                    </div>
                                                    <div class="blog-lower-campaign__money">
                                                        <p class="blog-lower-campaign__money-title">
                                                            <?php echo esc_html($campaign['money_title']); ?>
                                                        </p>
                                                        <div class="blog-lower-campaign__fee">
                                                            <p class="blog-lower-campaign__discount">
                                                                ¥<?php echo esc_html($campaign['discount_price']); ?>
                                                            </p>
                                                            <p class="blog-lower-campaign__main">
                                                                ¥<?php echo esc_html($campaign['main_price']); ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
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
                                    <?php
                                        // 投稿データから年と月を取得
                                        global $wpdb;
                                        $archives = $wpdb->get_results(" SELECT DISTINCT YEAR(post_date) AS year, MONTH(post_date) AS month FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY post_date DESC");
                                        // 年ごとにアーカイブを作成
                                        $current_year = date('Y');
                                        $years = [];
                                        foreach ($archives as $archive) {
                                            $years[$archive->year][] = $archive->month;
                                        }
                                        foreach ($years as $year => $months) {
                                            $is_active = ($year == $current_year) ? 'is-active' : '';
                                            $aria_expanded = ($year == $current_year) ? 'true' : 'false';
                                            $style = ($year == $current_year) ? '' : 'style="display: none;"';
                                            echo '<li class="archive-list__item">';
                                            echo '<button class="archive-list__year ' . esc_attr($is_active) . '" aria-expanded="' . esc_attr($aria_expanded) . '">' . esc_html($year) . '</button>';
                                            echo '<ul class="archive-list__months" ' . $style . '>';
                                            foreach ($months as $month) {
                                                $month_name = date_i18n('F', mktime(0, 0, 0, $month, 1));
                                                $month_link = get_month_link($year, $month);
                                                echo '<li class="archive-list__month">';
                                                echo '<a href="' . esc_url($month_link) . '">' . esc_html($month_name) . '</a>';
                                                echo '</li>';
                                            }
                                            echo '</ul>';
                                            echo '</li>';
                                        }
                                        ?>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>