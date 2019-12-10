<?php get_header();?>


<div class="page-header main-header py-5">
<div class="container">

<div class="row">
<div class="col-sm-12">
<h1 class="text-white main-title pl-5"><?php single_cat_title(); ?></h1>

</div>

</div>
</div>

</div>

<div class="container p-5">

    <div class="row mb-4">
    <?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
      <?php
        if ( in_category('news') ) { ?>
           <div class="col-sm-3">
                <?php
                include 'templates/news_post.php';
                ?>
           </div>
        <?php }
         elseif( in_category('projects')){ ?>
            <div class="col-sm-4">
                <?php 
                    include 'templates/projects_post.php';
                ?>
            </div>
        <?php } ?>



    <?php endwhile; endif ?>
</div>
</div>


<?php get_footer();?>