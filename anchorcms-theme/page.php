<?php theme_include('header'); ?>

		<div class="page-wrap">
           <div class="main-aside">
             <main class="left-column">
			    <h1></h1>
                <div class="title">
                    <h1 class="title_h1"><?php echo page_title(); ?>
                </h1>
                </div>
                <div class="post">
                    <?php echo page_content(); ?>
                </div>    
               </main>
            </div>
        </div>
<?php theme_include('footer'); ?>