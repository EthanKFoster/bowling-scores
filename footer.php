
<footer>
    <?php 
        if (is_front_page())
        { ?>
            <h2>Welcome!</h2>
        <?php }
        else 
        { ?>
            <h2>How did I do? :)</h2>
        <?php };
    ?>
</footer>

<?php wp_footer() ?>

</body>
</html>