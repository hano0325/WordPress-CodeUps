<?php get_header(); ?>
<div id="mv" class="mv-lower mv-lower--mask">
    <div class="mv-lower__inner">
        <div class="mv-lower__title">
            <h1 class="mv-lower__title-main">Contact</h1>
        </div>
        <div class="mv-lower__img">
            <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/contact-pc.jpg"
                    media="(min-width: 768px)" />
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/contact-sp.jpg"
                    alt="海と砂が広がっている写真" />
            </picture>
        </div>
    </div>
</div>
<div class="main">
    <div class="thanks-page thanks-page-layout">
        <div class="thanks-page__inner inner">
            <div class="thanks-page__text">
                <p class="thanks-page__text-main">お問い合わせ内容を送信完了しました。</p>
                <p class="thanks-page__text-sub">このたびは、お問い合わせ頂き<br class="u-mobile">誠にありがとうございます。<br>お送り頂きました内容を確認の上、<br
                        class="u-mobile">3営業日以内に折り返しご連絡させて頂きます。<br class="u-desktop">また、ご記入頂いたメールアドレスへ、<br
                        class="u-mobile">自動返信の確認メールをお送りしております。</p>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>