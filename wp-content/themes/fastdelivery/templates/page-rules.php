<?php
/*
Template Name: Rules
*/
?>
<?php get_header() ?>
<!-- Page Content -->

<div class="page-delivery">
    <div class="rules space-header">

        <div class="rules__header mg-bt-3">
            <?php
            $image_rules = get_field('image_rules');
            if ($image_rules) echo '<img src="' . $image_rules['url'] . '" alt="' . $image_rules['title'] . '">'
            ?>

        </div>

        <div class="rules__container">
            <div class="rules__main-content">
                <h1 class="page-delivery__title-type-2 text-center mg-bt-1"><?php the_field('title_rules') ?></h1>

                <div class="rules__content">
                    <?php echo get_the_content() ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container -->
<?php get_footer() ?>