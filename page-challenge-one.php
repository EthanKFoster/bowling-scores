<?php get_header(); ?>
<?php dynamic_sidebar(); ?>
<main>
    <?php
    /* 
    Challenge #1
    Create a list of bowling frames
    Use a foreach loop, to loop through each score, saying:
    "In frame X I scored Y" 
    */  

        $frames = array(1,2,3,4,5,6,7,8,9,10);
        

        foreach($frames as $frame)
        {
            $frameScore = rand(0, 10);
            echo nl2br ("In frame " . $frame . ", I scored " . $frameScore . "." . "\n");
        }

    ?>
</main>
<?php get_footer(); ?>