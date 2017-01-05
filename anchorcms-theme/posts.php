<?php theme_include('header'); ?>



<?php if(has_posts()): ?> 
<?php $i = 0; while(posts()): $i++; ?>
<a href="<?php echo article_url(); ?>">
       <?php if(article_custom_field('post_image', '')!=""): ?>
            <img src="<?php echo article_custom_field('post_image', ''); ?>" alt=""  class="post_image">
        <?php endif; ?>
    <article class="post">
        <div class="post_about">
            <h1 class="post_topic"><?php echo article_title(); ?></h1>
            <time class="post_date"><?php echo relative_time(article_time()); ?></time>
        </div>
    </article>
    </a>
<?php endwhile; ?>
<?php else: ?>
		<p>There are no posts - get to it!</p>
<?php endif; ?> 
<?php theme_include('footer'); ?>
