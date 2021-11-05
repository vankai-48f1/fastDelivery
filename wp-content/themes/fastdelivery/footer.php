<?php
if (!is_front_page()) get_template_part('template-parts/content', 'footer') ?>

<!-- Bootstrap core JavaScript -->
<script src="<?php echo get_template_directory_uri() ?>/vendor/jquery/jquery.min.js"></script>
<!-- <script src="< ?php echo get_template_directory_uri() ?>/vendor/bootstrap/js/bootstrap.min.js"></script> -->
<script src="<?php echo get_template_directory_uri() ?>/slick/slick.js"></script>
<!-- <script type="text/javascript" src="< ?php echo get_template_directory_uri() ?>/vendor/fullPage/fullpage.min.js"></script> -->



<?php if (is_front_page()) : ?>
    <!-- <script type="text/javascript" src="< ?php echo get_template_directory_uri() ?>/vendor/onepage/onepagescroll.js"></script> -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/vendor/fullPage/jquery.fullpage.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/vendor/fullPage/fullpage.extensions.min.js"></script>


    <script>
        const widthWindow = window.innerWidth ||
            document.documentElement.clientWidth ||
            document.body.clientWidth;

        if (widthWindow >= 1024) {
            new fullpage('#fullPage', {
                menu: '#menu-home-menu',
                anchors: [ 'intro','', '', 'driver', 'partner', 'apply'],
            });
        }
    </script>

<?php endif; ?>

<script type="module" src="<?php echo get_template_directory_uri() ?>/js/main.js"></script>

<?php wp_footer() ?>
</body>

</html>