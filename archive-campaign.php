<?php get_header(); ?>
<div id="mv" class="mv-lower mv-lower--mask">
    <div class="mv-lower__inner">
        <div class="mv-lower__title">
            <h1 class="mv-lower__title-main">Campaign</h1>
        </div>
        <div class="mv-lower__img">
            <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/campaign-mv-pc.jpg"
                    media="(min-width: 768px)" />
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/campaign-mv-sp.jpg"
                    alt="海の中に黄色い魚が二匹いる写真">
            </picture>
        </div>
    </div>
</div>
<?php get_template_part('breadcrumb'); ?>
<main>
    <section class="campaign-lower campaign-lower-layout">
        <div class="campaign-lower__inner">
            <div class="campaign-lower__tab tab">
                <!-- タブボタン -->
                <div class="tab__list">
                    <?php
                        $is_archive_page = is_post_type_archive('campaign');
                        $terms = get_terms(array(
                            'taxonomy' => 'campaign_category',
                            'hide_empty' => true,
                        ));
                        ?>
                    <!-- "ALL" タブボタン -->
                    <a class="tab__button <?php echo $is_archive_page ? 'is-active' : ''; ?>"
                        href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>">
                        ALL
                    </a>
                    <?php
                    if (!empty($terms)) :
                        foreach ($terms as $term) :
                            $is_active_term = is_tax('campaign_category', $term->slug);
                            ?>
                    <a class="tab__button <?php echo $is_active_term ? 'is-active' : ''; ?>"
                        href="<?php echo esc_url(get_term_link($term)); ?>">
                        <?php echo esc_html($term->name); ?>
                    </a>
                    <?php endforeach;
                endif; ?>
                </div>
                <div class="tab__campaign-contents">
                    <ul class="tab__campaign-contents-content">
                        <?php
                            $args = [
                                "post_type" => "campaign",
                                "posts_per_page" => 4
                            ];
                            $the_query = new WP_Query($args);
                            ?>
                        <?php if ($the_query->have_posts()) : // $the_queryに対してhave_postsをチェック ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <?php
                            $campaign_archives = SCF::get('campaign_archives'); ?>
                        <?php if (!empty($campaign_archives)) : ?>
                        <?php foreach ($campaign_archives as $campaign) : ?>
                        <li class="tab__campaign-card">
                            <div class="tab__campaign-container">
                                <div class="tab__campaign-img">
                                    <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('full'); ?>
                                    <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/cats.jpg"
                                        alt="デフォルト画像" />
                                    <?php endif; ?>
                                </div>
                                <div class="tab__campaign-container-text">
                                    <div class="tab__campaign-text-box">
                                        <p class="tab__campaign-text-box-maintitle">
                                            <?php echo esc_html($campaign['main_tab']); // メインタブ ?>
                                        </p>
                                        <p class="tab__campaign-text-box-subtitle">
                                            <?php echo esc_html($campaign['sub_title']); // サブタイトル ?>
                                        </p>
                                    </div>
                                    <div class="tab__campaign-money">
                                        <p class="tab__campaign-money-title">
                                            <?php echo esc_html($campaign['money_title']); // 金額タイトル ?>
                                        </p>
                                        <div class="tab__campaign-fee">
                                            <p class="tab__campaign-discount">
                                                ¥<?php echo esc_html($campaign['discount_price']); // 割引価格 ?>
                                            </p>
                                            <p class="tab__campaign-main">
                                                ¥<?php echo esc_html($campaign['main_price']); // メイン価格 ?>
                                            </p>
                                        </div>
                                        <p class="tab__campaign-text-main u-desktop">
                                            <?php echo nl2br(esc_html($campaign['main_text'])); // 詳細テキスト ?>
                                        </p>
                                        <div class="tab__campaign-date-container u-desktop">
                                            <p class="tab__campaign-date-time">
                                                <?php echo esc_html($campaign['data_time']); // 日付範囲 ?>
                                            </p>
                                            <p class="tab__campaign-date-text">
                                                <?php echo esc_html($campaign['data_text']); // 補足テキスト ?>
                                            </p>
                                            <div class="tab__campaign-form-button">
                                                <?php
                                                    // 現在の投稿IDを取得
                                                    $campaign_id = get_the_ID();
                                                    // ContactページのURLにクエリパラメータとしてIDを追加
                                                    $contact_url = add_query_arg('campaign_id', $campaign_id, home_url('contact'));
                                                    ?>
                                                <a href="<?php echo esc_url($contact_url); ?>" class="button">
                                                    <div class="button__container">
                                                        <p>Contact us</p>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/Vector.png"
                                                            alt="矢印" class="button__arrow">
                                                    </div>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php endforeach; ?>
                        <?php endif; ?>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="campaign-lower__pagenavi pagenavi">
                <?php wp_pagenavi(); ?>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>