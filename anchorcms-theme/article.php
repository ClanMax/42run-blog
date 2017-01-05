<?php theme_include('header'); ?>

<article class="posttext">
    <div class="container">
         <h3 class="posttext_h3"><?php echo article_title(); ?></h3>
          <div class="posttext_p"><?php echo article_markdown(); ?></div>
    </div>
</article>

<?php theme_include('footer'); ?>
