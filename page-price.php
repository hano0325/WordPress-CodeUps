<?php get_header(); ?>
<div id="mv" class="mv-lower mv-lower--mask">
    <div class="mv-lower__inner">
        <div class="mv-lower__title">
            <h1 class="mv-lower__title-main">Price</h1>
        </div>
        <div class="mv-lower__img">
            <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/price-mv-pc.jpg"
                    media="(min-width: 768px)" />
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/price-mv-sp.jpg"
                    alt="海面上にダイバーが複数人いる写真">
            </picture>
        </div>
    </div>
</div>
<?php get_template_part('breadcrumb'); ?>
<main>
    <section class="price-lower price-lower-layout">
        <div class="price-lower__inner inner">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <?php
                $price_list = SCF::get('price_list'); ?>
            <?php if (!empty($price_list)) : ?>
            <?php foreach ($price_list as $price) : ?>
            <div class="price-lower__list list-price">
                <div class="list-price__container">
                    <picture>
                        <source
                            srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/fish-white-big.svg"
                            media="(min-width: 768px)" />
                        <img class="list-price__img"
                            src="<?php echo get_template_directory_uri() ?>/assets/images/common/fish-white.svg" alt="">
                    </picture>
                    <p class="list-price__title"><?php echo get_the_title(); ?></p>
                </div>
                <table class="list-price__table">
                    <tbody>
                        <tr class="list-price__item">
                            <td class="list-price__date"><?php echo nl2br(esc_html($price['course_name'])); ?></td>
                            <td class="list-price__price">¥
                                <?php echo esc_html($price['course_price']); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
    <?php get_footer(); ?>