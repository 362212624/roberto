<?php
    $title = "String Manipulation";
    include 'includes/header.php'
?>
    <h1>PHP String Manipulation</h1>
    <?php
    //Concatenation of strings
        $phrase1 = "Student who came late";
        $phrase2 = "In class, stand with Rock";
        $name = "antonio vega";
        echo $phrase1 . ", named Tiffany, ". $phrase2;
        echo '<br/>';
        echo '<hr/>';
        // String transformation
        echo 'Uppercase firts letter: ' . ucfirst($name). '<br/>';
        echo 'Uppercase firts letter of each word: ' . ucwords($name). '<br/>';
        echo 'Upper case: '. strtoupper($name).'<br/>';
        echo 'Lower case: '. strtolower("THIS WAS ALL UPPER CASE").'<br/>';
        echo '<hr/>';
        echo 'Reapeast String: ' . str_repeat('a',10) . '<br/>';
        echo 'Reapeast String - Nested Function: ' . strtoupper(str_repeat('a',10)) . '<br/>';
        echo 'Get a Substring: ' . substr($name, 5, 10).'<br/>';

        echo 'Get posotion of string: ' . strpos($name, 'V').'<br/>';
        //Return NULL
        //echo 'Get position of string: ' . strpos($combine, 'z').'<br/>;
        echo 'Find Character "A": ' . strchr($name, 'A').'<br/>';
        echo 'Find Character "t": ' . strchr($name, 't').'<br/>';
        echo 'Find Character "o": ' . strchr($name, 'o').'<br/>';
        echo 'Find Character "i": ' . strchr($name, 'i').'<br/>';

        echo 'Find Lenght of String: ' . strlen($name).'<br/>';

        echo 'Without Trim: ' . "A" . "B C D". "E" . '<br/>';
        echo 'Trim spaces on both sides: ' . "A" . trim(" B C D "). "E" . '<br/>';
        echo 'Trim spaces to the left: ' . "A" . ltrim(" B C D "). "E" . '<br/>';
        echo 'Trim spaces to the right: ' . "A" . rtrim(" B C D "). "E" . '<br/>';

        echo 'Replace string with another: '. str_replace("stand", "sit", $phrase2 ). '<br/>';
        
    ?>
    <?php require 'includes/footer.php'?>