<?php
$pageTitle = "Code Archive";
require 'inc_header.php';
require 'loop_old_code.php';

?>

<div class="container">
    <h1>About the Code Archive</h1>
    <p>
        This is where all of my less useful code will live.<br>
        I am talking about all the code that was created due to a standard homework assigment.<br>
        Like debug this script, draw a circle on the screen, remove all the red from this picture.<br>
        Just stuff like that nothing special, nothing fancy.<br>
        For web code links will be provided to view it running, however just check out my github it will all be there.
    </p>
    
    <?php
    
    $arraylist = array(
        array ("Javascript", 0, "./javascript.php"),
        array ("Web Programming 1", 0, "./web-pro-1.php"),
        array ("Web Programming 2", 0, "./web-pro-2"),
        array ("High School Web Design", 1, "./archive/high-school-web-design"),
        
        array ("Java 1", 0, "https://github.com/Sinkidonk/Java-1-Code"),
        array ("Java 2", 0, "https://github.com/Sinkidonk/Java-2-Code"),
        
        array ("PHP Basics", 0, "https://github.com/Sinkidonk/PHP-Basics"),
        array ("PowerShell", 0, "https://github.com/Sinkidonk/PowerShell-Code"),
        array ("Advance PHP", 0, "https://github.com/Sinkidonk/Advance-PHP"),
        array ("asp.net 1", 0, "https://github.com/Sinkidonk/asp.net-1-code"),
        array ("asp.net 2", 0, "https://github.com/Sinkidonk/asp.net-2-code"),
        array ("Android Code", 0, "https://github.com/Sinkidonk/Android-Code"),
       
        
        array ("Python", 0, "https://github.com/Sinkidonk/Python-Code")
        
        
        
    ); // end of array
    
    $love = tagsloop($arraylist);
    echo $love;
    ?>
    
</div> <!-- container -->




<?php 
require 'inc_footer.php';
 ?>
