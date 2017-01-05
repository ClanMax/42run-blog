<?php theme_include('header'); ?>
        
    <article class="posttext">
        <div class="container">
             <h3 class="posttext_h3"><?php echo page_title(); ?></h3>
             
             <?php if(article_custom_field('post_image', '')!=""): ?>
            <img src="<?php echo article_custom_field('post_image', ''); ?>" alt=""  class="post_image">
        <?php endif; ?>
            
             <div class="posttext_p">
                  <?php echo page_content(); ?>
            </div>
        </div>
    </article>
<?php theme_include('footer'); ?>