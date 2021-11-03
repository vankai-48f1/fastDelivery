<?php

/**
 * Template Name: About Us
 */

get_header(); ?>
<div class="about-us space-header">
    <?php
    $intro_about_us = get_field('intro_about_us');
    ?>

    <div class="wrapper-og">
        <div class="about-us__header page-delivery__header--driver">
            <h1 class="about-us__header-title ss-intro__title cl-white"><?php echo $intro_about_us['title']; ?></h1>
            <h5 class="about-us__header-subtitle"><?php echo $intro_about_us['sub_title']; ?></h5>
            <div class="about-us__header-desc about-us__desc-style cl-white">
                <?php echo $intro_about_us['description']; ?>
            </div>
        </div>
    </div>

    <!-- about us content -->
    <div class="wrapper-og">
        <?php if (have_rows('content_about_us')) : ?>
            <div class="about-us__content">

                <?php while (have_rows('content_about_us')) : the_row();
                    $image = get_sub_field('image');
                    $title = get_sub_field('title');
                    $description = get_sub_field('description');
                ?>
                    <div class="about-us__content-row">
                        <div class="about-us__content-col">
                            <?php
                            if ($image) {
                            ?>
                                <div class="about-us__content-thumb">
                                    <img src="<?php echo $image['url'] ?>" alt="">
                                </div>
                            <?php } ?>

                        </div>
                        <div class="about-us__content-col about-us__content-col--right">
                            <h3 class="about-us__content-title page-delivery__title-type-2 cl-black"><?php echo $title ?></h3>
                            <div class="about-us__content-desc about-us__desc-style cl-black"><?php echo $description ?></div>
                        </div>
                    </div>
                <?php endwhile; ?>

            </div>
        <?php endif; ?>
    </div>

    <!-- about us bottom -->
    <div class="wrapper-og">
        <?php if (have_rows('bottom_about_us')) :
            while (have_rows('bottom_about_us')) : the_row(); ?>
                <?php $about_us_title = get_sub_field('title') ?>
                <div class="about-us__bottom">
                    <h2 class="about-us__bottom-title page-delivery__title-type-2"><?php echo $about_us_title ?></h2>

                    <?php if (have_rows('content_bottom_about_us')) : ?>
                        <ul class="about-us__bottom-group">

                            <?php while (have_rows('content_bottom_about_us')) : the_row();
                                $image = get_sub_field('image');
                                $title = get_sub_field('title');
                                $description = get_sub_field('description');
                            ?>
                                <li class="about-us__bottom-col">
                                    <?php
                                    if ($image) {
                                    ?>
                                        <div class="about-us__bottom-thumb">
                                            <img src="<?php echo $image['url'] ?>" alt="">
                                        </div>
                                    <?php } ?>

                                    <div class="about-us__bottom-col-ct">
                                        <h3 class="bout-us__bottom-col-title"><?php echo $title ?></h3>
                                        <div class="bout-us__bottom-col-desc about-us__desc-style cl-black"><?php echo $description ?></div>
                                    </div>
                                </li>
                            <?php endwhile; ?>

                        </ul>
                    <?php endif; ?>

                </div>
        <?php endwhile;
        endif; ?>
    </div>
</div>

<?php get_footer(); ?>