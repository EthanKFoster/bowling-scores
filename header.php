<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head() ?>
</head>
<body>
    <header>
        <h1><?php echo get_the_title() ?></h1>
    </header>
    
        <?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
            <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                <?php dynamic_sidebar( 'home_right_1' ); ?>
            </div><!-- #primary-sidebar -->
        <?php endif; ?>
    
