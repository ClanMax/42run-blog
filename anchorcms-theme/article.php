<?php theme_include('header'); ?>

<div class="page-wrap">
   <div class="main-aside">
        <main class="left-column">
        <div class="title">
                <h1 class="title_h1">Совместные сборы в Турции
                </h1>
            </div>
        <div class="author">
                 <span class="author_byline">Разместил <a href="http://vk.com/oleg42run"><?php echo article_author(); ?></a>  <time datetime="<?php echo article_date(); ?>"><?php echo article_date(); ?></time></span>
             </div>
        <div class="post">
               <?php echo article_markdown(); ?>
        </div>
    </main>
    
		<?php endif; ?>

<?php theme_include('footer'); ?>
