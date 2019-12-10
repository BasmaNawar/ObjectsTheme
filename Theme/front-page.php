<?php get_header();?>



<div class="container pb-5">


    <div class="row mt-5 pr-5">

        <div class="col-sm-4">

            <h2 class="mt-5 mb-3">Latest News</h2>

            <div class="post-content">

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.</p>

            </div>
            <div class="post-link my-5"><a href="<?php echo get_site_url(); ?>/category/news">See All News &nbsp; <i
                        class="fas fa-long-arrow-alt-right"></i></a></div>

        </div>
        <div class="col-sm-8">

            <div class="owl-carousel owl-theme">
                <?php $new_query = new WP_Query( array (
                    'category_name' => 'news',
                    'posts_per_page' => 15,
                    'orderby'=> 'time',
                    'order' => 'ASC'
                )) ?>

                <?php if ($new_query->have_posts()) : ?>
                <?php while($new_query->have_posts()) :$new_query->the_post(); ?>
                <div class="item">
                    <div class="main_post h-100 mb-5">
                        <div class="post_data px-3">
                            <?php if(has_post_thumbnail()){?>
                            <div class="post_img">
                                <?php the_post_thumbnail('', ['class' => 'img-fluid img-thumbnail','title' => 'Post Image']) ?>
                            </div>
                            <?php };?>
                            <div>
                                <div class="post-title my-3">
                                    <h3>
                                        <a href="<?php the_permalink() ?>"><?php the_title () ?></a>
                                    </h3>
                                </div>
                                <div class="post-content mt-3 mb-5 px-2">
                                    <?php the_excerpt() ?>

                                </div>
                            </div>

                            <div class="postf-date pl-2 align-text-bottom"><span><?php the_time('F j, Y') ?></span>
                            </div>

                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata();?>
                <?php else: ?>
                <p classs="text-info">No Recent News</p>
                <?php endif;?>
            </div>
        </div>
    </div>


    <div class="row my-5">
        <div class="col-sm-6">
            <h2>Projects
                <?php single_cat_title(); ?>
            </h2>
        </div>
        <div class="col-sm-6">
            <div class="post-link text-right pt-3"><a href="<?php echo get_site_url(); ?>/category/projects">See All
                    Projects
                    &nbsp; <i class="fas fa-long-arrow-alt-right"></i></a></div>


        </div>

    </div>


    <div class="row mb-4">

        <?php $new_query = new WP_Query( array (
                    'category_name' => 'projects',
                    'posts_per_page' => 6,
                )) ?>

        <?php if ($new_query->have_posts()) : ?>
        <?php while($new_query->have_posts()) :$new_query->the_post(); ?>

        <div class="col-sm-4">
            <div class="main_post">
                <div class="post-img">
                    <img src="<?php the_post_thumbnail_url('largest');?>" class="img-fluid img-thumbnail" />
                </div>

                <div class="post_data px-4">
                    <div class="post-date my-3"><span><?php the_time('Y') ?></span></div>
                    <div class="post-title my-3">
                        <h3>
                            <a href="<?php the_permalink() ?>"><?php the_title () ?></a>
                        </h3>
                    </div>
                    <div class="post-author my-3">by <span><?php the_author_posts_link () ?></span></div>
                    <div class="post-link my-3"><a href="<?php the_permalink() ?>">Explore Project &nbsp; <i
                                class="fas fa-long-arrow-alt-right"></i></a></div>
                </div>


            </div>
        </div>


        <?php endwhile; ?>
        <?php wp_reset_postdata();?>
        <?php else: ?>
        <p classs="text-info">No Recent News</p>
        <?php endif;?>






    </div>


</div>






<?php get_footer();?>