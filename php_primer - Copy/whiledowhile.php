<?php 
    $title = "While and Do While";
    include 'includes/header.php'
?>
    <h1>While Loop</h1>
    <?php
        $grade = 0;
        // Infinite loop
        //while($grade < 10){
        //    echo '<p>I AM LESS THAN 10!</p>';
        //}
        // Pre-Condition Loop
        while($grade < 10){
            echo '<p>I AM LESS THAN 10!</p>';
            $grade++;
        }

        echo 'Exit LOOP';
    ?>
    
    <h1>Do-While Loop</h1>
    <?php
    // Post-Condition Loop
    $grade = 0;
        do{
            echo '<p>I AM LESS THAN 10!</p>';
            $grade++;
        }while($grade < 10);
        echo 'Exit LOOP';
    ?>
    <?php require 'includes/footer.php'?>