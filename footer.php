<?php
$home = esc_url( home_url( '/' ) );
$campaign = esc_url( home_url( '/campaign/' ) );
$about = esc_url( home_url( '/about/' ) );
$information = esc_url( home_url( '/information/' ) );
$blog = esc_url( home_url( '/blog/' ) );
$voice = esc_url( home_url( '/voice/' ) );
$price = esc_url( home_url( '/price/' ) );
$faq = esc_url( home_url( '/faq/' ) );
$contact = esc_url( home_url( '/contact/' ) );
$privacy = esc_url( home_url( '/privacy/' ) );
$terms = esc_url( home_url( '/terms/' ) );
$site = esc_url( home_url( '/site/' ) );
?>l

<?php if (!is_page(array('contact', 'thanks', 'error'))): ?>
<section class="contact contact-layout">
    <div class="contact__inner inner">
        <div class="contact__card">
            <div class="contact__container">
                <div class="contact__container-main">
                    <div class="contact__title-img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/CodeUps-img.png"
                            alt="Codeups" />
                    </div>
                    <div class="contact__address-container">
                        <ul class="contact__address">
                            <li class="contact__address-item">沖縄県那覇市1-1</li>
                            <li class="contact__address-item">TEL:0120-000-0000</li>
                            <li class="contact__address-item">営業時間:8:30-19:00</li>
                            <li class="contact__address-item">定休日:毎週火曜日</li>
                        </ul>
                        <div class="contact__map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3716.085776856419!2d-157.89591742652453!3d21.347111580383007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c006f441fbd3ef9%3A0x19d1808be9dbf05!2z5pel56uL44Gu5qi577yIVGhlIEhpdGFjaGkgVHJlZe-8iQ!5e0!3m2!1sja!2sjp!4v1724830564067!5m2!1sja!2sjp"
                                width="273" height="200" style="border: 0" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3716.085776856419!2d-157.89591742652453!3d21.347111580383007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c006f441fbd3ef9%3A0x19d1808be9dbf05!2z5pel56uL44Gu5qi577yIVGhlIEhpdGFjaGkgVHJlZe-8iQ!5e0!3m2!1sja!2sjp!4v1724830564067!5m2!1sja!2sjp"
                                width="295" height="200" style="border: 0" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="contact__container-sub">
                    <div class="contact__title title">
                        <h2 class="title__main title__main--large">Contact</h2>
                        <p class="title__sub title__sub--shadow">お問い合わせ</p>
                    </div>
                    <div class="contact__form-container">
                        <p class="contact__form-text">ご予約・お問い合わせはコチラ</p>
                        <div class="contact__form-button">
                            <a href="contact.html" class="button">
                                <div class="button__container">
                                    <p>Contact us</p>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/Vector.png"
                                        alt="矢印" class="button__arrow" />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<div class="cycle-button js-page-top"></div>
</main>
<footer class="footer footer-layout">
    <div class="footer__nav-inner inner">
        <div class="footer__nav-container">
            <div class="footer__logo-container">
                <p class="footer__logo">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/CodeUps-logo-light.svg"
                            alt="Codeups" />
                    </a>
                </p>
                <ul class="footer__sns-button-items">
                    <li class="footer__sns-button-item">
                        <a href="https://www.facebook.com/" target="_blank"><img
                                src="<?php echo get_template_directory_uri() ?>/assets/images/common/FacebookLogo.svg"
                                alt="facebookのアイコン" /></a>
                    </li>
                    <li class="footer__sns-button-item">
                        <a href="https://www.instagram.com/" target="_blank"><img
                                src="<?php echo get_template_directory_uri() ?>/assets/images/common/InstagramLogo.svg"
                                alt="Instagramのアイコン" /></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer__menu menu">
        <div class="menu__nav-inner">
            <div class="menu__nav-items">
                <div class="menu__nav-container-first">
                    <div class="menu__nav-content">
                        <ul class="menu__nav-item">
                            <li class="menu__nav-item-main">
                                <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>">キャンペーン</a>
                            </li>
                            <li class="menu__nav-item-sub">
                                <a href="<?php echo esc_url(get_post_type_archive_link('campaign') . '?tab=tab02'); ?>">
                                    ライセンス講習
                                </a>
                            </li>
                            <li class="menu__nav-item-sub">
                                <a href="<?php echo esc_url(get_post_type_archive_link('campaign') . '?tab=tab03'); ?>">
                                    ファンダイビング
                                </a>
                            </li>
                            <li class="menu__nav-item-sub">
                                <a href="<?php echo esc_url(get_post_type_archive_link('campaign') . '?tab=tab04'); ?>">
                                    体験ダイビング
                                </a>
                            </li>
                        </ul>

                        <ul class="menu__nav-item">
                            <li class="menu__nav-item-main">
                                <a href="<?php echo esc_url($about); ?>">私たちについて</a>
                            </li>
                        </ul>
                    </div>
                    <div class="menu__nav-content">
                        <ul class="menu__nav-item">
                            <li class="menu__nav-item-main">
                                <a href="<?php echo esc_url($information); ?>">ダイビング情報</a>
                            </li>
                            <li class="menu__nav-item-sub">
                                <a href="<?php echo esc_url($home); ?>?tab=tab01">ライセンス講習</a>
                            </li>
                            <li class="menu__nav-item-sub">
                                <a href="<?php echo esc_url($home); ?>?tab=tab03">体験ダイビング</a>
                            </li>
                            <li class="menu__nav-item-sub">
                                <a href="<?php echo esc_url($home); ?>?tab=tab02">ファンダイビング</a>
                            </li>
                        </ul>
                        <ul class="menu__nav-item">
                            <li class="menu__nav-item-main">
                                <a href="<?php echo esc_url($blog); ?>">ブログ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="menu__nav-container-second">
                    <div class="menu__nav-content">
                        <ul class="menu__nav-item">
                            <li class="menu__nav-item-main">
                                <a href="<?php echo esc_url($voice); ?>">お客様の声</a>
                            </li>
                        </ul>
                        <ul class="menu__nav-item">
                            <li class="menu__nav-item-main">
                                <a href="<?php echo esc_url($price); ?>">料金一覧</a>
                            </li>
                            <li class="menu__nav-item-sub">
                                <a href="<?php echo esc_url($price); ?>#license">ライセンス講習</a>
                            </li>
                            <li class="menu__nav-item-sub">
                                <a href="<?php echo esc_url($price); ?>#experience">体験ダイビング</a>
                            </li>
                            <li class="menu__nav-item-sub">
                                <a href="<?php echo esc_url($price); ?>#fun">ファンダイビング</a>
                            </li>
                        </ul>
                    </div>
                    <div class="menu__nav-content">
                        <ul class="menu__nav-item">
                            <li class="menu__nav-item-main">
                                <a href="<?php echo esc_url($faq); ?>">よくある質問</a>
                            </li>
                        </ul>
                        <ul class="menu__nav-item">
                            <li class="menu__nav-item-main">
                                <a href="<?php echo esc_url($privacy); ?>">プライバシー<br class="u-mobile" />ポリシー</a>
                            </li>
                        </ul>
                        <ul class="menu__nav-item">
                            <li class="menu__nav-item-main">
                                <a href="<?php echo esc_url($terms); ?>">利用規約</a>
                            </li>
                        </ul>
                        <ul class="menu__nav-item">
                            <li class="menu__nav-item-main">
                                <a href="<?php echo esc_url($site); ?>">サイトマップ</a>
                            </li>
                        </ul>
                        <ul class="menu__nav-item">
                            <li class="menu__nav-item-main">
                                <a href="<?php echo esc_url($contact); ?>">お問い合わせ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <p class="footer__copyright">
            Copyright © 2021 - 2023 CodeUps LLC. All Rights Reserved.
        </p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>