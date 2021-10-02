<?php
/*
Template Name: Partner
*/
?>
<?php get_header() ?>
<!-- Page Content -->

<div class="page-delivery space-header">
    <div class="page-delivery__header">
        <div class="wrapper-og">
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

        <section class="partner__ss-2 mg-bt-4">
            <?php $ss_partner_2 = get_field('content_ss_partner_2') ?>
            <div class="wrapper-og">
                <div class="partner__ss-2-content">
                    <h2 class="page-delivery__title-type-2 mg-bt-3 cl-white"><?php echo $ss_partner_2['title'] ?></h2>

                    <div class="partner__ss-2-grid">
                        <div class="partner__ss-2-col partner__ss-2-col--left">
                            <?php echo do_shortcode($ss_partner_2['form']); ?>
                        </div>
                        <div class="partner__ss-2-col--right">
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

