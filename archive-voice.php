<?php get_header(); ?>
<div id="mv" class="mv-lower mv-lower--mask">
    <div class="mv-lower__inner">
        <div class="mv-lower__title">
            <h1 class="mv-lower__title-main">Voice</h1>
        </div>
        <div class="mv-lower__img">
            <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/voice-pc.jpg"
                    media="(min-width: 768px)" />
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/voice-sp.jpg"
                    alt="海面上にダイバーが複数人いる写真">
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
                        $is_archive_page = is_post_type_archive('voice');
                        $terms = get_terms(array(
                            'taxonomy' => 'voice_category',
                            'hide_empty' => true,
                        ));
                        ?>
                    <!-- "ALL" タブボタン -->
                    <a class="tab__button <?php echo $is_archive_page ? 'is-active' : ''; ?>"
                        href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>" data-tab="all">
                        ALL
                    </a>
                    <?php
                    // 各タームごとにタブを生成
                    if (!empty($terms)) :
                        foreach ($terms as $term) :
                            // 現在のタームページと一致しているかチェック
                            $is_active_term = is_tax('voice_category', $term->slug);
                            ?>
                    <a class="tab__button <?php echo $is_active_term ? 'is-active' : ''; ?>"
                        href="<?php echo esc_url(get_term_link($term)); ?>"
                        data-tab="<?php echo esc_html($term->slug); ?>">
                        <?php echo esc_html($term->name); ?>
                    </a>
                    <?php endforeach;
                endif; ?>
                </div>
                <div class="tab-voice__contents">
                    <ul class="tab-voice__contents-content">
                        <li class="tab-voice__card card-voice">
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
                    </ul>
                </div>
                <div class="voice-lower__pagenavi pagenavi">
                    <?php wp_pagenavi(); ?>
                </div>
            </div>
    </section>
    <?php get_footer(); ?>