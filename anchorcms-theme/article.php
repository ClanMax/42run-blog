<?php theme_include('header'); ?>

<article class="posttext">
    <div class="container">
         <h3 class="posttext_h3"><?php echo article_title(); ?></h3>
         <?php if(article_custom_field('post_image', '')!=""): ?>
            <img src="<?php echo article_custom_field('post_image', ''); ?>" alt=""  class="posttext_image">
            <?php endif; ?>
          <div class="posttext_p"><?php echo article_markdown(); ?></div>
          <time class="post_date"><?php echo date('d-m-Y H:i', article_time()); ?></time>
    </div>
</article>

<?php theme_include('footer'); ?>
