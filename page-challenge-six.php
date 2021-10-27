<?php get_header(); ?>
<?php dynamic_sidebar(); ?>
<main>

<?php 

/* Challenge #6 (Bouns!)
Move the foreach loop logic into a function
*/

// function lives in functions.php file! :) 
two_player_bowling_game(); 

?>

</main>
<?php get_footer(); ?>