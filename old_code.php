<?php
$pageTitle = "Code Archive";
require 'inc_header.php';
require 'loop-old-code.php';

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
    $arraylist = array("Java 1","Java 2","asp.net 1","asp.net 2");
    
    $elementsloop = new loop_old_code();
    $elementsloop->set_array_values = $arraylist;
    $elementsloop->creation();
    ?>
    
</div> <!-- container -->




<?php 
require 'inc_footer.php';
 ?>
