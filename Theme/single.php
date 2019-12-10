<?php get_header();?>


<div class="container pt-5 pb-5">
    <div class="row post-content">
        <div class="col-sm-12">

            <div class="text-center">

                <?php
        if ( in_category('news') ) { ?>
                <div class="col-sm-12">
                    <div class="post-link mt-2 mb-4"><a href="<?php echo get_site_url(); ?>/category/news"><i
                                class="fas fa-long-arrow-alt-left"></i> &nbsp; Back to News </a></div>
                </div>
                <?php }
         elseif( in_category('projects')){ ?>
                <div class="col-sm-12">
                    <div class="post-link mt-2 mb-4"><a href="<?php echo get_site_url(); ?>/category/projects"><i
                                class="fas fa-long-arrow-alt-left"></i> &nbsp; Back to Projects </a></div>
                </div>
                <?php } ?>


                <h2><?php the_title(); ?></h2>

                <div class="postf-date my-4"><span><?php the_time('F j, Y') ?></span></div>

            </div>

            <?php if(has_post_thumbnail()):?>

            <?php the_post_thumbnail('largest', ['class' => 'img-fluid main-img px-4 mb-4','title' => 'Post Image']) ?>

            <?php endif;?>

            <?php if ( have_posts()) : while ( have_posts() ) : the_post();?>

            <div class="mb-5 p-4">
                <?php the_content(); ?>

            </div>
            <?php endwhile; endif ?>
        </div>
    </div>

    <hr />

    <div class="row">
        <div class="col-sm-12">

            <div class="mt-3 mb-5 pl-4">
                <span class="mr-5 social-title">Share on Social Media</span>
                <span class="social-span">

                    <a href="https://web.facebook.com/"><i class='fab fa-facebook-square fa-face'></i></a>
                    <a href="https://twitter.com/"><i class='fab fa-twitter-square fa-twit'></i></a>
                </span></div>

        </div>

    </div>

    <hr />
    <div class="row">

        <?php
    if ( in_category('news') ) { ?>
        <div class="col-sm-12">

            <h3 class="text-center my-5">Related News</h3>
        </div>

        <?php $new_query = new WP_Query( array (
                    'category_name' => 'news',
                    'posts_per_page' => 4
                )) ?>

        <?php if ($new_query->have_posts()) : ?>
        <?php while($new_query->have_posts()) :$new_query->the_post(); ?>
        <div class="col-sm-3">

            <?php
            include 'templates/news_post.php';
            ?>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata();?>
        <?php else: ?>
        <p classs="text-info">No Recent News</p>
        <?php endif;?>
        <?php } ?>


        <?php if( in_category('projects')){ ?>
        <div class="col-sm-12">

            <h3 class="text-center my-5">Related Projects</h3>
        </div>

        <?php $new_query = new WP_Query( array (
                    'category_name' => 'projects',
                    'posts_per_page' => 3
                )) ?>
        <?php if ($new_query->have_posts()) : ?>
        <?php while($new_query->have_posts()) :$new_query->the_post(); ?>
        <div class="col-sm-4">

            <?php 
                include 'templates/projects_post.php';
            ?>

        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata();?>
        <?php else: ?>
        <p classs="text-info">No Recent Projects</p>
        <?php endif;?>
        <?php } ?>
    </div>
</div>


<?php get_footer();?>