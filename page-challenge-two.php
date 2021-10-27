<?php get_header(); ?>
<?php dynamic_sidebar(); ?>
<main>
    <?php 
        /* Challenge #2
        Adding on to challenge number 1
        At the end have it state
        "Total I scored Y" */

        $frames = array(1,2,3,4,5,6,7,8,9,10);
        $scores = array();

        foreach($frames as $frame)
        {
            $frameScore = rand(0, 10);
            echo nl2br ("In frame " . $frame . ", I scored " . $frameScore . "." . "\n");
            array_push($scores, $frameScore);
        }
        
        $totalScore = array_sum($scores);
        echo "In total, I scored " . $totalScore;

    ?>
</main>
<?php get_footer(); ?>