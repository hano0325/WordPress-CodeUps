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
<!-- パンくずリスト -->
（<?php get_template_part( 'breadcrumb' ); ?>）

<main>
    <section class="campaign-lower campaign-lower-layout">
        <div class="campaign-lower__inner">
            <!-- タブ -->
            <div class="campaign-lower__tab tab">
                <div class="tab__list">
                    <a class="tab__button <?php echo (!isset($_GET['tab']) || $_GET['tab'] === 'all') ? 'is-active' : ''; ?>"
                        href="?tab=all">ALL</a>
                    <a class="tab__button <?php echo (isset($_GET['tab']) && $_GET['tab'] === 'license') ? 'is-active' : ''; ?>"
                        href="?tab=license">ライセンス講習</a>
                    <a class="tab__button <?php echo (isset($_GET['tab']) && $_GET['tab'] === 'fun') ? 'is-active' : ''; ?>"
                        href="?tab=fun">ファンダイビング</a>
                    <a class="tab__button <?php echo (isset($_GET['tab']) && $_GET['tab'] === 'experience') ? 'is-active' : ''; ?>"
                        href="?tab=experience">体験ダイビング</a>
                </div>
            </div>
            <div class="tab__campaign-contents">
                <ul id="tab01" class="tab__campaign-contents-content is-active">
                    <?php if (have_posts()): ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <li class="tab__campaign-card">
                        <div class="tab__campaign-container">
                            <?php if (has_post_thumbnail()): ?>
                            <div class="tab__campaign-img">
                                <?php the_post_thumbnail('full'); ?>
                            </div>
                            <?php else: ?>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/cats.jpg"
                                alt="猫二匹映っている写真" />
                            <?php endif; ?>
                            <div class="tab__campaign-container-text">
                                <div class="tab__campaign-text-box">
                                    <p class="tab__campaign-text-box-maintitle">
                                        <?php echo get_the_title() ?>
                                    </p>
                                    <p class="tab__campaign-text-box-subtitle">
                                        <?php echo get_the_title() ?>
                                    </p>
                                </div>
                                <div class="tab__campaign-money">
                                    <p class="tab__campaign-money-title">
                                        <?php echo get_the_post() ?>
                                    </p>
                                    <div class="tab__campaign-fee">
                                        <p class="tab__campaign-discount">¥56,000</p>
                                        <p class="tab__campaign-main">¥46,000</p>
                                    </div>
                                    <p class="tab__campaign-text-main u-desktop">
                                        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                                    </p>
                                    <div class="tab__campaign-date-container u-desktop">
                                        <time class="tab__campaign-date-time" datetime="2023-06-01">2023/6/1</time>
                                        <time class="tab__campaign-date-time" datetime="2023-09-30">-9/30</time>
                                        <p class="tab__campaign-date-text">ご予約・お問い合わせはコチラ</p>
                                        <div class="tab__campaign-form-button">
                                            <a href="#" class="button">
                                                <div class="button__container">
                                                    <p>Contact us</p>
                                                    <img src="./assets/images/common/Vector.png" alt="矢印"
                                                        class="button__arrow" />
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>