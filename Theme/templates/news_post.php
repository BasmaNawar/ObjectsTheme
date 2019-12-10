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

        <div class="postf-date pl-2 align-text-bottom"><span><?php the_time('F j, Y') ?></span></div>

    </div>
</div>