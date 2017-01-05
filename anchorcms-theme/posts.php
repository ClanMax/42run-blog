<?php theme_include('header'); ?>

<a href="<?php echo article_url(); ?>">
    <article class="post">
        <img src="i/1-post.png" alt=""  class="post_image">
        <div class="post_about">
            <h1 class="post_topic"><?php echo article_title(); ?></h1>
            <time class="post_date"><?php echo relative_time(article_time()); ?></time>
        </div>
    </article>
    </a>

<?php theme_include('footer'); ?>
