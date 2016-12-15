<?php theme_include('header'); ?>

<div class="page-wrap">
   <div class="main-aside">
        <main class="left-column">
        <div class="title">
                <h1 class="title_h1"><?php echo article_title(); ?>
                </h1>
            </div>
        <div class="author">
                 <span class="author_byline">Разместил <a href="http://vk.com/oleg42run"><?php echo article_author(); ?></a>  <time datetime="<?php echo article_date(); ?>"><?php echo article_date(); ?></time></span>
             </div>
        <div class="post">
               <?php echo article_markdown(); ?>
        </div>
        </main>
        
        <aside class="right-column">
                <div class="post">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque nihil excepturi dolorum doloribus natus eaque omnis suscipit nam, sed quia, repellat architecto modi, iste id explicabo possimus, fugit. Laboriosam provident, minus, corporis eligendi explicabo suscipit consectetur ducimus voluptatum animi laudantium, porro! Ad molestias itaque alias unde fugit, amet at asperiores voluptate laudantium enim nobis, voluptatum odit quaerat debitis error neque illum porro labore, hic facere. Id officiis atque nostrum aliquam.
                    <button class="btn">Нажми</button>
                </div>
        </aside>
    </div>
</div>

<?php theme_include('footer'); ?>
