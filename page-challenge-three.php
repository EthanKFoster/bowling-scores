<?php get_header(); ?>
<?php dynamic_sidebar(); ?>
<main>
    <?php 
        /* Challenge #3
        Adding on to challenge 1 & 2
        In the foreach loop
        If the score was odd echo out "that is an odd number"
        If the score was odd echo out "that is an even number"
        */

        $frames = array(1,2,3,4,5,6,7,8,9,10);
        $scores = array();

        foreach($frames as $frame)
        {
            $frameScore = rand(0, 10);
            echo nl2br ("In frame " . $frame . ", I scored " . $frameScore . "." . "\n");
            array_push($scores, $frameScore);

            if ($frameScore % 2 == 0) {
                echo nl2br ("that is an even number \n");
            } else {
                echo nl2br ("that is an odd number \n");
            }
        }
        
        $totalScore = array_sum($scores);
        echo "<p>In total, I scored " . $totalScore . "</p><br>";

        if ($totalScore % 2 == 0) {
            echo nl2br ("that is an even number \n");
        } else {
            echo nl2br ("that is an odd number \n");
        }
    ?>
</main>
<?php get_footer(); ?>