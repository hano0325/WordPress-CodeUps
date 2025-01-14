<?php get_header(); ?>
<div id="mv" class="mv-lower mv-lower--mask">
    <div class="mv-lower__inner">
        <div class="mv-lower__title">
            <h1 class="mv-lower__title-main">Terms of Service</h1>
        </div>
        <div class="mv-lower__img">
            <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/site-pc.jpg"
                    media="(min-width: 768px)" />
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/site-sp.jpg"
                    alt=" サンゴ礁の上を多くの小さな魚が泳いでいる海中の風景。青い海と光の差し込む水中の様子が広がっている。" />
            </picture>
        </div>
    </div>
</div>
<?php get_template_part('breadcrumb'); ?>
<div class="sentence sentence-layout">
    <div class="sentence__inner">
        <h3 class="sentence__title"><?php echo the_title(); ?></h3>
        <dl class="sentence__items">
            <?php echo the_content(); ?>
        </dl>
    </div>
</div>
<?php get_footer(); ?>