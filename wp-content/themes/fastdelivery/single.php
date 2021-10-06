<?php get_header() ?>
<!-- Page Content -->
<div class="space-header">
    <div class="single">
        <div class="wrapper-og">
            <div class="single__breadcrumb"><?php m_breadcrumbs() ?></div>

            <div class="single__container">


                <?php if (have_posts()) : ?>

                    <?php while (have_posts()) : the_post(); ?>

                        <h1 class="singe__title"><?php the_title() ?></h1>
                        <div class="single__row">
                            <div class="single__col single__col--left">
                                <div class="single__featured-image">
                                    <?php the_post_thumbnail() ?>
                                </div>

                                <div class="single__content">
                                    <?php the_content() ?>
                                </div>
                            </div>
                            <div class="single__col single__col--right">
                                <?php get_latest_post(6) ?>
                            </div>
                        </div>

                    <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!-- /.container -->
<?php get_footer() ?>