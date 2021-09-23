<?php
/*
Template Name: Home Page
*/
?>
<?php get_header() ?>

<section class="home-ss ss-intro">
    <div class="full-screen">
        <div class="wrapper-og h-100">
            <div class="home-ss__row ss-intro__container">
                <!-- <div class="col-lg-6"> -->
                <div class="home-ss__content ss-intro__content">
                    <h2 class="ss-intro__title animate" data-animate-name="fadeInLeft"><?php the_field('title_intro') ?></h2>
                    <div class="ss-intro__desc">
                        <p class="ss-intro__desc-en animate" data-animate-name="fadeInLeft"><strong><?php the_field('description_en_intro') ?></strong></p>
                        <p class="ss-intro__desc-vi animate" data-animate-name="fadeInLeft"><?php the_field('description_vi_intro') ?></p>
                    </div>

                    <?php if (have_rows('app_intro')) : ?>
                        <div class="intro__app">
                            <?php while (have_rows('app_intro')) : the_row();
                                $image_app_intro = get_sub_field('image');
                                $link_app_intro = get_sub_field('link');
                            ?>
                                <a href="<?php echo $link_app_intro ?>" class="animate" data-animate-name="fadeInLeft">
                                    <img src="<?php echo $image_app_intro['url'] ?>" alt="image app">
                                </a>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <!-- </div> -->
                <!-- <div class="col-lg-6"> -->
                <div class="intro__preview-app">
                    <?php
                    $preview_app = get_field('preview_app');
                    if ($preview_app) :
                    ?>
                        <img src="<?php echo $preview_app['url'] ?>" alt="" class="animate" data-animate-name="fadeInRight">
                    <?php endif; ?>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
</section>

<section class="home-ss ss-ads transform-logo bg-gradient-1">
    <div class="full-screen">
        <div class="wrapper-og h-100">
            <div class="home-ss__row ss-ads__row h-100 pss-relative">
                <!-- <div class="col-lg-7"> -->
                <div class="home-ss__content home-ss__content---ads home-ss__pd-top">
                    <h2 class="home-ss__title font-bold-1 cl-white mg-bt-1 animate" data-animate-name="fadeInLeft"><?php the_field('title_ss_1') ?></h2>
                    <div class="home-ss__desctiption cl-white animate" data-animate-name="fadeInLeft">
                        <?php
                        $description_ss_1 = get_field('description_ss_1');
                        $button_ss_1 = get_field('button_ss_1');
                        ?>
                        <div><?php echo $description_ss_1['content'] ?></div>
                        <div class="home-ss__desc-italic"><?php echo $description_ss_1['content_itallic'] ?></div>
                    </div>
                    <a href="<?php echo $button_ss_1['url'] ?>" class="home-ss__see-more type-btn-1 animate" data-animate-name="fadeInLeft"><?php echo $button_ss_1['title'] ?></a>
                </div>
                <!-- </div> -->
                <!-- <div class="col-lg-5 h-100 pss-relative"> -->
                <div class="home-ss__image home-ss__image--ads">
                    <?php
                    $image_ss_1 = get_field('image_ss_1');
                    if ($image_ss_1) :
                    ?>
                        <img src="<?php echo $image_ss_1['url'] ?>" alt="" class="animate" data-animate-name="fadeInRight">
                    <?php endif; ?>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
    <div class="full-screen ss-ads-2">
        <div class="wrapper-og h-100">
            <div class="home-ss__row ss-ads-2__row h-100 pss-relative z-index-5">
                <div class="home-ss__image home-ss__image--ads-2">
                    <?php
                    $image_ss_2 = get_field('image_ss_2');
                    if ($image_ss_2) :
                    ?>
                        <img src="<?php echo $image_ss_2['url'] ?>" alt="" class="animate" data-animate-name="fadeInLeft">
                    <?php endif; ?>
                </div>

                <div class="home-ss__content home-ss__content--ads-2 home-ss__pd-top pss-relative z-index-10">
                    <h2 class="home-ss__title font-bold-1 cl-white mg-bt-1 animate" data-animate-name="fadeInRight"><?php the_field('title_ss_2') ?></h2>
                    <div class="home-ss__desctiption cl-white animate" data-animate-name="fadeInRight">
                        <?php
                        $description_ss_2 = get_field('description_ss_2');
                        $button_ss_2 = get_field('button_ss_2')
                        ?>
                        <div><?php echo $description_ss_2['content'] ?></div>

                    </div>
                    <a href="<?php echo $button_ss_2['url'] ?>" class="home-ss__see-more type-btn-1 animate" data-animate-name="fadeInRight"><?php echo $button_ss_2['title'] ?></a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="home-ss">
    <div class="full-screen">
        <div class="wrapper-og h-100">
            <div class="home-ss__row flex-row align-ct h-100">
                <div class="col-lg-6">
                    <div class="home-ss__content home-ss__content--together">
                        <h2 class="home-ss__title home-ss__title--type-2 animate" data-animate-name="fadeInLeft"><?php the_field('title_ss_3') ?></h2>
                        <div class="home-ss__desctiption animate" data-animate-name="fadeInLeft">
                            <?php
                            $description_ss_3 = get_field('description_ss_3');
                            $button_ss_3 = get_field('button_ss_3')
                            ?>
                            <div><?php echo $description_ss_3['content'] ?></div>

                        </div>
                        <a href="<?php echo $button_ss_3['url'] ?>" class="home-ss__see-more type-btn-1 animate" data-animate-name="fadeInLeft"><?php echo $button_ss_3['title'] ?></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="home-ss__image home-ss__image--together">
                        <?php
                        $image_ss_3 = get_field('image_ss_3');
                        if ($image_ss_3) :
                        ?>
                            <img src="<?php echo $image_ss_3['url'] ?>" alt="" class="animate" data-animate-name="fadeInRight">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-ss home-ss-partner transform-logo">
    <div class="full-screen">
        <div class="wrapper-og h-100">
            <div class="home-ss__row home-ss__row--promotion mdp-flex align-ct h-100 pss-relative">
                <div class="home-ss__content home-ss__content--promotion">
                    <h2 class="home-ss__title home-ss__title--type-2 cl-white animate" data-animate-name="fadeInLeft"><?php the_field('title_ss_4') ?></h2>
                    <div class="home-ss__desctiption cl-white animate" data-animate-name="fadeInLeft">
                        <?php
                        $description_ss_4 = get_field('description_ss_4');
                        $button_ss_4 = get_field('button_ss_4')
                        ?>
                        <div><?php echo $description_ss_4['content'] ?></div>

                    </div>
                    <a href="<?php echo $button_ss_4['url'] ?>" class="home-ss__see-more home-ss__see-more--partner type-btn-1 animate" data-animate-name="fadeInLeft"><?php echo $button_ss_4['title'] ?></a>
                </div>

                <div class="home-ss__image home-ss__image--promotion h-100">
                    <?php
                    $image_ss_4 = get_field('image_ss_4');
                    if ($image_ss_4) :
                    ?>
                        <img src="<?php echo $image_ss_4['url'] ?>" alt="" class="animate" data-animate-name="fadeInRight">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer() ?>