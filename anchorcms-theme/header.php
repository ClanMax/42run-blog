<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
     <title><?php echo page_title('Страница не найдена'); ?> - <?php echo site_name(); ?></title>
     <meta name="description" content="<?php echo site_description(); ?>">
    
    <link rel="stylesheet" href="<?php echo theme_url('main.css'); ?>">
    <?php if(customised()): ?>
		    <!-- Дополнительный CSS -->
    		<style><?php echo article_css(); ?></style>

    		<!--  Дополнительный Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>
</head>
<body>

<div class="header">
        <div class="header_menu">
            <a href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a>
        </div>
</div> 