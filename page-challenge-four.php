<?php get_header(); ?>
<?php dynamic_sidebar(); ?>
<main>

<?php /* Challenge #4 (BONUS!)
Add another list for player 2
Add the scores in the list for player 2
*/
?>

<?php
        $frames = array(1,2,3,4,5,6,7,8,9,10);
        $players = array("player1","player2");

        foreach($players as $current_player) {

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
            
            $totalScore = array_sum($scores);

            echo "<p>In total, " . $current_player . " scored " . $totalScore . "</p><br>";

            if ($totalScore % 2 == 0) {
                echo nl2br ("that is an even number \n \n \n");
            } else {
                echo nl2br ("that is an odd number \n \n \n");
            }
        }
?>


</main>
<?php get_footer(); ?>