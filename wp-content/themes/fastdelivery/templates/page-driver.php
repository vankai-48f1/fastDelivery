<?php
/*
Template Name: Driver
*/
?>
<?php get_header() ?>
<!-- Page Content -->

<div class="page-delivery space-header">
    <div class="page-delivery__header page-delivery__header--driver">
        <div class="wrapper-og">
            <div class="page-delivery__header-content page-delivery__header-content--driver">
                <h1 class="page-delivery__header-title ss-intro__title"><?php the_field('title_driver') ?></h1>
            </div>
        </div>
    </div>

    <div class="driver">
        <section class="driver__ss-1 mg-bt-4">
            <div class="wrapper-og">
                <div class="driver__ss-1-content">
                    <h2 class="driver__ss-1-title page-delivery__title-type-2 text-center mg-bt-3"><?php the_field('title_ss_driver_1') ?></h2>


                    <?php
                     if (have_rows('content_ss_driver_1')) : ; $i = 0;?>
                        <div class="driver__ss-1-group">
                            <?php while (have_rows('content_ss_driver_1')) : the_row(); $i++;
                                $ss_1_image = get_sub_field('image');
                                $ss_1_title = get_sub_field('title');
                                $ss_1_desc = get_sub_field('description');

                            ?>
                                <div class="driver__ss-1-item driver__ss-1-item--driver text-center driver__ss-1-driver-item-<?php echo $i?>">
                                    <div class="driver__ss-1-thumb">
                                        <img src="<?php echo $ss_1_image['url'] ?>" alt="<?php echo $ss_1_image['title'] ?>">
                                    </div>

                                    <h3><?php echo $ss_1_title ?></h3>
                                    <div class="driver__ss-1-desc"><?php echo $ss_1_desc ?></div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="driver__ss-2 mg-bt-4">
            <div class="wrapper-og">
                <div class="driver__ss-2-content">
                    <h2 class="driver__ss-2-title page-delivery__title-type-2 text-center mg-bt-3"><?php the_field('title_ss_driver_2') ?></h2>


                    <?php if (have_rows('content_ss_driver_2')) : ?>
                        <div class="driver__ss-2-group">
                            <?php while (have_rows('content_ss_driver_2')) : the_row();
                                $ss_2_image = get_sub_field('image');
                                $ss_2_content = get_sub_field('content');

                            ?>
                                <div class="driver__ss-2-item driver__ss-2-item--left">
                                    <div class="driver__ss-2-thumb">
                                        <img src="<?php echo $ss_2_image['url'] ?>" alt="<?php echo $ss_2_image['title'] ?>">
                                    </div>
                                </div>

                                <div class="driver__ss-2-item driver__ss-2-item--right">
                                    <div class="driver__ss-2-content driver__ss-content"><?php echo $ss_2_content ?></div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="driver__ss-3 mg-bt-4">
            <?php $ss_driver_3 = get_field('content_ss_driver_3'); ?>
            <div class="driver__ss-3-background" style="background-image: url(<?php echo $ss_driver_3['background']['url'] ?>);">
                <div class="wrapper-og">
                    <div class="driver__ss-3-content text-center">
                        <h2 class="driver__ss-3-title page-delivery__title-type-2"><?php echo $ss_driver_3['title'] ?></h2>
                        <div class="driver__ss-3-desc"><?php echo $ss_driver_3['description'] ?></div>
                        <?php
                        if ($ss_driver_3['button']) :
                        ?>
                            <a href="<?php echo $ss_driver_3['button']['url'] ?>" class="driver__ss-3-button"><?php echo $ss_driver_3['button']['title'] ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="driver__ss-4 mg-bt-4">
            <div class="wrapper-og">
                <?php $ss_driver_4 = get_field('content_ss_driver_4'); ?>
                <div class="driver__ss-4-container">
                    <h2 class="page-delivery__title-type-2 mg-bt-3 text-center"><?php echo $ss_driver_4['title'] ?></h2>

                    <div class="driver__ss-4-content">
                        <div class="driver__ss-4-item driver__ss-4-left driver__ss-content">
                            <div class="driver__ss-4-left-ct">
                                <?php echo $ss_driver_4['description'] ?>
                            </div>

                            <?php
                            if ($ss_driver_4['button']) :
                            ?>
                                <a href="<?php echo $ss_driver_4['button']['url'] ?>" class="driver__ss-4-button"><?php echo $ss_driver_4['button']['title'] ?></a>
                            <?php endif; ?>
                        </div>
                        <div class="driver__ss-4-item driver__ss-4-right">
                            <div class="driver__ss-4-thumb">
                                <img src="<?php echo $ss_driver_4['background']['url'] ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- /.container -->
<?php get_footer() ?>