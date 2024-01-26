<?php
 $title = "Index";
 include 'includes/header.php'
 ?>
    <!-- Basic HTML -->
    <h1>Hello Wolrd - PHP Primer</h1>

    <?php  
        //Priting to HTML using echo 
        echo "Hello PHP!";
        echo "<br/>";
        echo "Second line";
        echo "<br/>";
    
        //Declare variable
        $name = "Carlos Velazques";
        $age = 19;
        //echo variable
        echo $name;
        echo "<h1>My Name Is: ".$name." <h1>";
        echo "<h1>My Age Is: ".$age." <h1>";
    ?>
    <button type="button" class="btn btn-dark">CLICK ME!</button>
    <button type="button" class="btn btn-primary">CLICK ME!</button>
    <button type="button" class="btn btn-success">CLICK ME!</button>
    <a href="https://www.heroku.com" target="_blank" class="btn btn-danger">Heroku.com</a>
<?php require 'includes/footer.php'?>