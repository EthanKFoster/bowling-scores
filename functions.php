<?php 

// set up styles and enqueue resources
function site_styles() {
    // wp_enqueue_style('bootstrap_styles', get_theme_file_uri('/bootstrap/css/bootstrap.min.css'));
    wp_enqueue_style('site_main_styles', get_theme_file_uri('/style.css'));
    // wp_enqueue_script('bootstrap_scripts', get_theme_file_uri('bootstrap/js/bootstrap.min.js'), '1.0', true);
    // wp_enqueue_script('font_awesome_icons', '//https://kit.fontawesome.com/885ee2c56d.js');
    // wp_enqueue_style( 'custom-fa', 'https://use.fontawesome.com/releases/v5.0.6/css/all.css' );
}

add_action('wp_enqueue_scripts', 'site_styles');


// set up dynamic page titles and menu tracking
function site_features() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
//     register_nav_menu('footerMenuLocation', 'Footer Menu Location');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'site_features');

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );




function two_player_bowling_game() {
    $frames = array(1,2,3,4,5,6,7,8,9,10);
    $players = array(
        "player1" => 0,
        "player2" => 0,
    );

    foreach($players as $current_player => $player_points) {

        $scores = array();

        foreach($frames as $frame)
        {
            $frameScore = rand(0, 10);
            echo nl2br ("In frame " . $frame . ", " . $current_player . " scored " . $frameScore . "." . "\n");
            array_push($scores, $frameScore);

            if ($frameScore % 2 == 0) {
                echo nl2br ("that is an even number \n");
            } else {
                echo nl2br ("that is an odd number \n");
            }
        }
        
        $players[$current_player] = array_sum($scores);

        echo "<p>In total, " . $current_player . " scored " . $players[$current_player] . "</p><br>";

        if ($players[$current_player] % 2 == 0) {
            echo nl2br ("that is an even number \n \n \n");
        } else {
            echo nl2br ("that is an odd number \n \n \n");
        }
    }

    if ( $players["player1"] > $players["player2"] ) {
        echo "Player 1 won!!!"; 
    } else {
        echo "Player 2 won!!!";
    }
}    
?>

