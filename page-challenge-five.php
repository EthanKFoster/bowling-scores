<?php get_header(); ?>
<?php dynamic_sidebar(); ?>
<main>

<?php /* Challenge #5 (BONUS!)
Compare the finals score for player 1 & 2
Whoever one state "player X won"
*/
?>


<?php /*
        $frames = array(1,2,3,4,5,6,7,8,9,10);
        $players = array("player1", "player2");

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
        */
?> 


<?php
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
           
?>

</main>
<?php get_footer(); ?>