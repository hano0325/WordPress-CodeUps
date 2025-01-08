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
            <?php
                $args = [
                    "post_type" => "fee",
                    "orderby" => "date", // 日付順
                    "order" => "ASC", // 昇順
                ];
                $the_query = new WP_Query($args);
                ?>
            <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <?php
                $section_id = sanitize_title(get_the_title());
                ?>
            <div class="price-lower__list list-price" id="<?php echo esc_attr($section_id); ?>">
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
                    <?php
                        $price_list = SCF::get('price_list');
                        ?>
                    <?php if (!empty($price_list)) : ?>
                    <?php foreach ($price_list as $price) : ?>
                    <tbody>
                        <tr class="list-price__item">
                            <td class="list-price__date"><?php echo nl2br(esc_html($price['course_name'])); ?></td>
                            <td class="list-price__price">¥<?php echo esc_html($price['course_price']); ?></td>
                        </tr>
                    </tbody>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </table>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>

    <?php get_footer(); ?>