<div class="main_post mb-5">
    <?php if(has_post_thumbnail()):?>
    <div class="post-img">
        <?php the_post_thumbnail('', ['class' => 'img-fluid img-thumbnail','title' => 'Project Image']) ?>
    </div>
    <?php endif;?>
    <div class="post_data px-4">
        <div class="post-date my-3"><span><?php the_time('Y') ?></span></div>
        <div class="post-title my-3">
            <h3><?php the_title () ?></h3>
        </div>
        <div class="post-author my-3">by <span><?php the_author_posts_link () ?></span></div>
        <div class="post-link my-3"><a href="<?php the_permalink() ?>">Explore Project &nbsp; <i
                    class="fas fa-long-arrow-alt-right"></i></a>
        </div>
    </div>
</div>