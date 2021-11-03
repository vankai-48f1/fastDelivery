<!-- Footer -->
<footer class="footer">
    <div class="wrapper-og">

        <div class="footer-bt">
            <div class="">
                <div class="footer-bt__row">
                    <div class="footer-bt__col footer-bt__col--left">
                        <div class="footer-bt__content">
                            <div class="footer-bt__logo">
                                <img src="<?php the_field('logo_footer', 'options_footer') ?>" alt="footer logo">
                            </div>

                            <?php if (have_rows('app_icon_ft', 'options_footer')) : ?>
                                <div class="footer-bt__app">
                                    <?php while (have_rows('app_icon_ft', 'options_footer')) : the_row();
                                        $icon_app = get_sub_field('icon');
                                        $link_app = get_sub_field('link_app');
                                    ?>
                                        <a href="<?php echo $link_app ?>">
                                            <img src="<?php echo $icon_app ?>" alt="image app">
                                        </a>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="footer-bt__col footer-bt__col--middle">
                        <div class="footer-bt__content">

                            <div class="footer-bt__info">
                                <?php
                                $title_info_ft = get_field('title_contact_add_ft', 'options_footer');

                                $address_ft = get_field('address', 'options_footer');
                                $office_address = get_field('office_address', 'options_footer');
                                $phone_number_ft = get_field('phone_number', 'options_footer');
                                $hotline_ft = get_field('hotline', 'options_footer');
                                $website_link_ft = get_field('website_link', 'options_footer');
                                $email_ft = get_field('email', 'options_footer');
                                ?>

                                <h3><?php echo $title_info_ft ?></h3>

                                <?php

                                if ($address_ft)        echo '<div class="footer-bt__info-item"><b>Địa chỉ: </b>' . $address_ft . '</div>';
                                if ($office_address)        echo '<div class="footer-bt__info-item"><b>Địa chỉ văn phòng: </b>' . $office_address . '</div>';

                                ?>
                                <div class="flex-row">
                                    <?php
                                    if ($phone_number_ft)   echo '<div class="footer-bt__info-item col-md-5 col-12"><b>Điện thoại: </b><a href="tel:' . $phone_number_ft . '">' . $phone_number_ft . '</a></div>';
                                    if ($hotline_ft)        echo '<div class="footer-bt__info-item col-md-5 col-12"><b>Hotline: </b><a href="tel:' . $hotline_ft . '">' . $hotline_ft . '</a></div>';
                                    ?>
                                </div>
                                <div class="flex-row">
                                    <?php
                                    if ($website_link_ft)   echo '<div class="footer-bt__info-item col-md-5 col-12"><b>Website: </b><a href="' . $website_link_ft['url'] . '">' . $website_link_ft['title'] . '</a></div>';
                                    if ($email_ft)          echo '<div class="footer-bt__info-item col-md-5 col-12"><b>Email: </b><a href="mailto:' . $email_ft . '">' . $email_ft . '</a></div>';
                                    ?>
                                </div>
                                <!-- navigation footer -->
                                <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location'  => 'footer-menu',
                                        'depth'  => 3,
                                        'container'  => '',
                                        'menu_class'  => 'footer-bt__nav',
                                    )
                                );
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bt__col footer-bt__col--right">
                        <div class="footer-bt__content">

                            <div class="footer-bt__license">
                                <div class="footer-bt__license-ct">
                                    <?php the_field('license', 'options_footer') ?>
                                </div>

                                <div class="footer-bt__license-icon">
                                    <?php $licence_icon = get_field('license_icon', 'options_footer');
                                    if ($licence_icon) echo '<img src="' . $licence_icon . '" alt=""/>'
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="<?php echo get_template_directory_uri() ?>/vendor/jquery/jquery.min.js"></script>
<!-- <script src="< ?php echo get_template_directory_uri() ?>/vendor/bootstrap/js/bootstrap.min.js"></script> -->
<script src="<?php echo get_template_directory_uri() ?>/slick/slick.js"></script>
<!-- <script type="text/javascript" src="< ?php echo get_template_directory_uri() ?>/vendor/fullPage/fullpage.min.js"></script> -->



<?php if (is_front_page()) : ?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/vendor/onepage/onepagescroll.js"></script>

    <script>
        const widthWindow = window.innerWidth ||
            document.documentElement.clientWidth ||
            document.body.clientWidth;
            
        if (widthWindow >= 1024) {
            onepagescroll('#fullPage', {
                pagination: false,
                direction: 'vertical',
                pageContainer: 'section',
                infinite: false,
            })
        }
    </script>


<?php endif; ?>
<script type="module" src="<?php echo get_template_directory_uri() ?>/js/main.js"></script>

<?php wp_footer() ?>
</body>

</html>

