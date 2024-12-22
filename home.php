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
<section class="blog-lower blog-lower-layout">
    <div class="blog-lower__inner">
        <div class="blog-lower__section">
            <div class="blog-lower__container">
                <ul class="blog-lower__cards cards cards--blog">
                    <li class="cards__card card">
                        <a href="<?php the_permalink(); ?>" class="card__container">
                            <div class="card__content">
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
                </ul>
                <div class="blog-lower__pagenavi pagenavi">
                    <?php wp_pagenavi(); ?>
                </div>
                <aside class="blog-lower-slideber blog-lower-slideber-layout">
                    <div class="blog-lower-slideber__inner">
                        <div class="blog-lower-slideber__title title-side">
                            <div class="title-side__container">
                                <div class="title-side__container-img-ber">
                                    <img src="./assets/images/common/title-ber.svg" alt="|">
                                </div>
                                <div class="title-side__container-img-fish">
                                    <img src="./assets/images/common/fish-title.svg" alt="">
                                </div>
                                <h2 class="title-side__main">人気記事</h2>
                            </div>
                        </div>
                        <ul class="blog-lower-slideber__article-cards cards-article">
                            <li class="cards-article__card card-article">
                                <a class="card-article__container">
                                    <div class="card-article__img">
                                        <img src="./assets/images/common/gallery4-sp.jpg" alt="黄色い魚が水中を泳いでいる様子" />
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
                                        <img src="./assets/images/common/title-ber.svg" alt="|">
                                    </div>
                                    <div class="title-side__container-img-fish">
                                        <img src="./assets/images/common/fish-title.svg" alt="">
                                    </div>
                                    <h2 class="title-side__main">口コミ</h2>
                                </div>
                            </div>
                            <ul class="blog-lower-reviews__cards cards-reviews">
                                <li class="cards-reviews__card card-reviews">
                                    <a class="card-reviews__container">
                                        <div class="card-reviews__img">
                                            <img src="./assets/images/common/review.jpg" alt="女性が男性に腕を回している写真" />
                                        </div>
                                        <div class="card-reviews__text-box">
                                            <div class="card-reviews__profile">30代(カップル)</div>
                                            <p class="card-reviews__text">ここにタイトルが入ります。ここにタイトル</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="blog-lower-reviews__button">
                                <a href="#" class="button">
                                    <div class="button__container">
                                        <p>View more</p>
                                        <img src="./assets/images/common/Vector.png" alt="" class="button__arrow" />
                                    </div>
                                </a>
                            </div>
                        </div>
                        <aside class="blog-lower-campaign blog-lower-campaign-layout">
                            <div class="blog-lower-campaign__title title-side">
                                <div class="title-side__container">
                                    <div class="title-side__container-img-ber">
                                        <img src="./assets/images/common/title-ber.svg" alt="|">
                                    </div>
                                    <div class="title-side__container-img-fish">
                                        <img src="./assets/images/common/fish-title.svg" alt="">
                                    </div>
                                    <h2 class="title-side__main">キャンペーン</h2>
                                </div>
                            </div>
                            <div class="blog-lower-campaign__contents">
                                <ul class="blog-lower-campaign__contents-content">
                                    <li class="blog-lower-campaign__content-card">
                                        <div class="blog-lower-campaign__container">
                                            <div class="blog-lower-campaign__img">
                                                <img src="./assets/images/common/campaign1.jpg" alt="海の中に複数の魚がいる写真" />
                                            </div>
                                            <div class="blog-lower-campaign__container-text">
                                                <div class="blog-lower-campaign__text-box">
                                                    <p class="blog-lower-campaign__text-box-title">
                                                        ライセンス講習
                                                    </p>
                                                </div>
                                                <div class="blog-lower-campaign__money">
                                                    <p class="blog-lower-campaign__money-title">
                                                        全部コミコミ(お一人様)
                                                    </p>
                                                    <div class="blog-lower-campaign__fee">
                                                        <p class="blog-lower-campaign__discount">¥56,000</p>
                                                        <p class="blog-lower-campaign__main">¥46,000</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog-lower-reviews__button">
                                <a href="#" class="button">
                                    <div class="button__container">
                                        <p>View more</p>
                                        <img src="./assets/images/common/Vector.png" alt="" class="button__arrow" />
                                    </div>
                                </a>
                            </div>
                        </aside>
                        <aside class="blog-lower-archive blog-lower-archive-layout">
                            <div class="blog-lower-archive__title title-side">
                                <div class="title-side__container">
                                    <div class="title-side__container-img-ber">
                                        <img src="./assets/images/common/title-ber.svg" alt="|">
                                    </div>
                                    <div class="title-side__container-img-fish">
                                        <img src="./assets/images/common/fish-title.svg" alt="">
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
</section>

<?php get_footer(); ?>