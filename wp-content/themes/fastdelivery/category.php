<?php get_header() ?>
<!-- Page Content -->

<div class="category space-header">
    <div class="wrapper-og">
        <div class="category__header">

            <?php
            $categories = get_the_category();
            $img_cate = get_field('featured_image', $categories);
            if ($img_cate) :
            ?>
                <img src="<?php echo $img_cate['url'] ?>" alt="<?php echo $img_cate['title'] ?>">
            <?php endif; ?>
        </div>
    </div>
</div>


<div class="wrapper-og">
    <div class="list-post">
        <?php if (have_posts()) : $i = 0; ?>

            <?php while (have_posts()) : the_post();
                ++$i; ?>

                <article class="list-posts__item <?php echo $i === 1 ? 'list-posts__item-first' : '' ?>">
                    <div class="list-posts__thumb">
                        <a href="<?php the_permalink() ?>" class="list-posts__thumb-wrap">
                            <?php the_post_thumbnail() ?>
                        </a>
                    </div>
                    <div class="list-posts__content">
                        <h3>
                            <a href="<?php the_permalink() ?>" class="list-posts__item-title hover-black">
                                <?php the_title() ?>
                            </a>
                        </h3>
                        <?php if ( $i === 1) { ?>
                            <div class="list-posts__item-excerpt">
                                <a href="<?php the_permalink() ?>" class="hover-black">
                                    <?php the_excerpt() ?>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </article>
            <?php endwhile; ?>

        <?php endif; ?>
    </div>
    <!-- Pagination -->
    <div class="mg-t-2 mg-bt-5 text-center">
        <?php m_paginate() ?>
    </div>
</div>
<!-- /.container -->
<?php get_footer() ?>