<?php
/*
Template Name: Partner
*/
?>
<?php get_header() ?>
<!-- Page Content -->

<div class="page-delivery space-header">
    <div class="wrapper-og">
        <div class="page-delivery__header page-delivery__header--partner">
            <div class="page-delivery__header-content page-delivery__header-content--partner">
                <h1 class="page-delivery__header-title ss-intro__title"><?php the_field('title_partner') ?></h1>
            </div>
        </div>
    </div>

    <div class="partner">
        <section class="partner__ss-1 mg-bt-4">
            <div class="wrapper-og">
                <div class="partner__ss-1-content">
                    <h2 class="page-delivery__title-type-2 mg-bt-3"><?php the_field('title_ss_partner_1') ?></h2>

                    <?php
                    if (have_rows('content_ss_partner_1')) :;
                        $i = 0; ?>
                        <div class="driver__ss-1-group">
                            <?php while (have_rows('content_ss_partner_1')) : the_row();
                                $i++;
                                $ss_1_image = get_sub_field('image');
                                $ss_1_title = get_sub_field('title');
                            ?>
                                <div class="driver__ss-1-item driver__ss-1-item--partner text-center">
                                    <div class="driver__ss-1-thumb">
                                        <img src="<?php echo $ss_1_image['url'] ?>" alt="<?php echo $ss_1_image['title'] ?>">
                                    </div>

                                    <h3><?php echo $ss_1_title ?></h3>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="partner-final">

            <?php $partner_final_1 = get_field('content_pn_final_1'); ?>
            <div class="partner-final__top">
                <div class="wrapper-og">
                    <div class="partner-final__top-content">
                        <div class="partner-final__top-image">
                            <?php
                            if ($partner_final_1['image']) :
                            ?>
                                <img src="<?php echo $partner_final_1['image'] ?>" alt="<?php echo $partner_final_1['image'] ?>">
                            <?php endif; ?>
                        </div>
                        <div class="partner-final__top-text">
                            <?php echo $partner_final_1['text'] ?>
                        </div>
                    </div>
                </div>
            </div>


            <?php
            $partner_final_2 = get_field('content_pn_final_2');
            $partner_final_3 = get_field('content_pn_final_3');
            $partner_final_4 = get_field('content_pn_final_4');
            $partner_final_5 = get_field('content_pn_final_5');
            $partner_final_6 = get_field('content_pn_final_6');
            $partner_final_7 = get_field('content_pn_final_7');
            $partner_final_8 = get_field('content_pn_final_8');

            // var_dump($partner_final_7);
            ?>
            <div class="partner-final__content-group">
                <div class="wrapper-og">
                    <div class="partner-final__content-row">

                        <!-- left -->
                        <div class="partner-final__content-col partner-final__content-col--left">
                            <div class="partner-final__content-item-left partner-final__content-item-left--1">
                                <div class="partner-final__item-img">
                                    <?php
                                    if ($partner_final_2) :
                                    ?>
                                        <img src="<?php echo esc_url($partner_final_2['image']) ?>" alt="">
                                    <?php endif; ?>
                                </div>

                                <div class="partner-final__item-text">
                                    <?php echo $partner_final_2['text'] ?>
                                </div>
                                <span class="partner-final__line-left partner-line-width-md"></span>
                            </div>

                            <div class="partner-final__content-item-left partner-final__content-item-left--2">
                                <div class="partner-final__item-img">
                                    <?php
                                    if ($partner_final_3) :
                                    ?>
                                        <img src="<?php echo esc_url($partner_final_3['image']) ?>" alt="">
                                    <?php endif; ?>
                                </div>

                                <div class="partner-final__item-text">
                                    <?php echo $partner_final_3['text'] ?>
                                </div>
                                <span class="partner-final__line-left partner-line-width-md"></span>
                            </div>

                            <div class="partner-final__content-item-left partner-final__content-item-left--3">
                                <div class="partner-final__item-img">
                                    <?php
                                    if ($partner_final_4) :
                                    ?>
                                        <img src="<?php echo esc_url($partner_final_4['image']) ?>" alt="">
                                    <?php endif; ?>
                                </div>

                                <div class="partner-final__item-text">
                                    <?php echo $partner_final_4['text'] ?>
                                </div>
                                <span class="partner-final__line-left partner-line-width-sm"></span>
                            </div>
                        </div>

                        <!-- right -->
                        <div class="partner-final__content-col partner-final__content-col--right">
                            <div class="partner-final__content-item-right partner-final__content-item-right--1">
                                <div class="partner-final__item-img">
                                    <?php
                                    if ($partner_final_5) :
                                    ?>
                                        <img src="<?php echo esc_url($partner_final_5['image']) ?>" alt="">
                                    <?php endif; ?>
                                </div>
                                <div class="partner-final__item-text">
                                    <?php echo $partner_final_5['text'] ?>
                                </div>
                                <span class="partner-final__line-right partner-line-width-lg"></span>
                            </div>

                            <div class="partner-final__content-item-right partner-final__content-item-right--2">
                                <div class="partner-final__item-img">
                                    <?php
                                    if ($partner_final_6) :
                                    ?>
                                        <img src="<?php echo esc_url($partner_final_6['image']) ?>" alt="">
                                    <?php endif; ?>
                                </div>
                                <div class="partner-final__item-text">
                                    <?php echo $partner_final_6['text'] ?>
                                </div>
                                <span class="partner-final__line-right partner-line-width-sm"></span>
                            </div>

                            <div class="partner-final__content-item-right partner-final__content-item-right--3">
                                <div class="partner-final__item-img">
                                    <?php
                                    if ($partner_final_7) :
                                    ?>
                                        <img src="<?php echo esc_url($partner_final_7['image']) ?>" alt="">
                                    <?php endif; ?>
                                </div>
                                <div class="partner-final__item-text">
                                    <?php echo $partner_final_7['text'] ?>
                                </div>
                                <span class="partner-final__line-right partner-line-width-lg"></span>
                            </div>

                            <div class="partner-final__content-item-right partner-final__content-item-right--4">
                                <div class="partner-final__item-img">
                                    <?php
                                    if ($partner_final_8) :
                                    ?>
                                        <img src="<?php echo esc_url($partner_final_8['image']) ?>" alt="">
                                    <?php endif; ?>
                                </div>
                                <div class="partner-final__item-text">
                                    <?php echo $partner_final_8['text'] ?>
                                </div>
                                <span class="partner-final__line-right partner-line-width-lg"></span>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="partner-final__bottom">
                    <div class="wrapper-og pss-relative">
                        <div class="partner-final__bottom-content">
                            <div class="partner-final__bottom-image">
                                <?php
                                $partner_final_9 = get_field('content_pn_final_9');

                                if ($partner_final_9['image']) :
                                ?>
                                    <img src="<?php echo $partner_final_9['image'] ?>" alt="">
                                <?php endif; ?>
                            </div>
                            <div class="partner-final__bottom-text">
                                <?php echo $partner_final_9['text'] ?>
                            </div>
                        </div>

                        <div class="partner-final__bottom-contact">
                            <div><?php echo get_field('contact_info')['title'] ?></div>
                            <div><?php echo get_field('contact_info')['hotline'] ?></div>
                            <div><?php echo get_field('contact_info')['email'] ?></div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="partner__ss-2 mg-bt-4">
            <?php $ss_partner_2 = get_field('content_ss_partner_2') ?>
            <div class="wrapper-og">
                <div class="partner__ss-2-content">
                    <h2 class="page-delivery__title-type-2 mg-bt-3 cl-white"><?php echo $ss_partner_2['title'] ?></h2>

                    <div class="partner__ss-2-grid">
                        <div class="partner__ss-2-col partner__ss-2-col--left">
                            <?php echo do_shortcode($ss_partner_2['form']); ?>
                        </div>
                        <div class="partner__ss-2-col partner__ss-2-col--right">
                            <img src="<?php echo $ss_partner_2['image']['url']; ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- /.container -->
<?php get_footer() ?>