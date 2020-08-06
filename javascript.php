<?php
$pageTitle = "Javascript Archive";
require 'inc_header.php';
require 'loop_old_code.php';

?>

<div class="container">
    <h1>Javascript Archive</h1>
    <p>
        This is where all of my Javascript based code live.
        Enjoy your stay.
    </p>
    
    <?php
    
    $arraylist = array(
        array("Unit 1 Hands on Project 1-1", 1, "./archive/javascript/u1/hands-on-project1-1/index.htm"),
        array("Unit 1 Hands on Project 1-2", 1, "./archive/javascript/u1/hands-on-project1-2/index.htm"),
        array("Unit 1 Hands on Project 1-3", 1, "./archive/javascript/u1/hands-on-project1-3/index.htm"),
        array("Unit 1 Hands on Project 1-4", 1, "./archive/javascript/u1/hands-on-project1-4/index.htm"),
        array("Unit 1 Hands on Project 1-5", 1, "./archive/javascript/u1/hands-on-project1-5/index.htm"),
        
        array("Unit 2 Hands on Project 2-1", 1, "./archive/javascript/u2/hands-on-project2-1/index.htm"),
        array("Unit 2 Hands on Project 2-2", 1, "./archive/javascript/u2/hands-on-project2-2/index.htm"),
        array("Unit 2 Hands on Project 2-3", 1, "./archive/javascript/u2/hands-on-project2-3/index.htm"),
        array("Unit 2 Hands on Project 2-4", 1, "./archive/javascript/u2/hands-on-project2-4/index.htm"),
        array("Unit 2 Hands on Project 2-5", 1, "./archive/javascript/u2/hands-on-project2-5/index.htm"),
        
        array("Unit 3 Hands on Project 3-1", 1, "./archive/javascript/u3/hands-on-project3-1/index.htm"),
        array("Unit 3 Hands on Project 3-2", 1, "./archive/javascript/u3/hands-on-project3-2/index.htm"),
        array("Unit 3 Hands on Project 3-3", 1, "./archive/javascript/u3/hands-on-project3-3/index.htm"),
        array("Unit 3 Hands on Project 3-4", 1, "./archive/javascript/u3/hands-on-project3-4/index.htm"),
        array("Unit 3 Hands on Project 3-5", 1, "./archive/javascript/u3/hands-on-project3-5/index.htm"),
        
        array("Unit 4 Hands on Project 4-1", 1, "./archive/javascript/u4/hands-on-project4-1/tractor.htm"),
        array("Unit 4 Hands on Project 4-2", 1, "./archive/javascript/u4/hands-on-project4-2/tractor.htm"),
        array("Unit 4 Hands on Project 4-3", 1, "./archive/javascript/u4/hands-on-project4-3/index.htm"),
        array("Unit 4 Hands on Project 4-4", 1, "./archive/javascript/u4/hands-on-project4-4/index.htm"),
        array("Unit 4 Hands on Project 4-5", 1, "./archive/javascript/u4/hands-on-project4-5/index.htm"),
        
        array("Unit 5 Hands on Project 5-1", 1, "./archive/javascript/u5/hands-on-project5-1/index.htm"),
        array("Unit 5 Hands on Project 5-2", 1, "./archive/javascript/u5/hands-on-project5-2/index.htm"),
        array("Unit 5 Hands on Project 5-3", 1, "./archive/javascript/u5/hands-on-project5-3/index.htm"),
        array("Unit 5 Hands on Project 5-4", 1, "./archive/javascript/u5/hands-on-project5-4/index.htm"),
        array("Unit 5 Hands on Project 5-5", 1, "./archive/javascript/u5/hands-on-project5-5/index.htm"),
        
        array("Unit 6 Hands on Project 6-1", 1, "./archive/javascript/u6/hands-on-project6-1/index.htm"),
        array("Unit 6 Hands on Project 6-2", 1, "./archive/javascript/u6/hands-on-project6-2/index.htm"),
        array("Unit 6 Hands on Project 6-3", 1, "./archive/javascript/u6/hands-on-project6-3/index.htm"),
        array("Unit 6 Hands on Project 6-4", 1, "./archive/javascript/u6/hands-on-project6-4/index.htm"),
        array("Unit 6 Hands on Project 6-5", 1, "./archive/javascript/u6/hands-on-project6-5/index.htm"),
        
        array("Unit 7 Hands on Project 7-1", 1, "./archive/javascript/u7/hands-on-project7-1/index.htm"),
        array("Unit 7 Hands on Project 7-2", 1, "./archive/javascript/u7/hands-on-project7-2/index.htm"),
        array("Unit 7 Hands on Project 7-3", 1, "./archive/javascript/u7/hands-on-project7-3/index.htm"),
        array("Unit 7 Hands on Project 7-4", 1, "./archive/javascript/u7/hands-on-project7-4/index.htm"),
        array("Unit 7 Hands on Project 7-5", 1, "./archive/javascript/u7/hands-on-project7-5/index.htm"),
        
        array("Unit 8 Hands on Project 8-1", 1, "./archive/javascript/u8/hands-on-project8-1/index.htm"),
        array("Unit 8 Hands on Project 8-2", 1, "./archive/javascript/u8/hands-on-project8-2/index.htm"),
        array("Unit 8 Hands on Project 8-3", 1, "./archive/javascript/u8/hands-on-project8-3/index.htm"),
        array("Unit 8 Hands on Project 8-4", 1, "./archive/javascript/u8/hands-on-project8-4/index.htm"),
        array("Unit 8 Hands on Project 8-5", 1, "./archive/javascript/u8/hands-on-project8-5/index.htm"),
        
        array("Unit 9 Hands on Project 9-1", 1, "./archive/javascript/u9/hands-on-project9-1/index.htm"),
        array("Unit 9 Hands on Project 9-2", 1, "./archive/javascript/u9/hands-on-project9-2/index.htm"),
        array("Unit 9 Hands on Project 9-3", 1, "./archive/javascript/u9/hands-on-project9-3/index.htm"),
        array("Unit 9 Hands on Project 9-4", 1, "./archive/javascript/u9/hands-on-project9-4/index.htm"),
        array("Unit 9 Hands on Project 9-5", 1, "./archive/javascript/u9/hands-on-project9-5/index.htm"),
        
        array("Unit 10 Hands on Project 11-1", 1, "./archive/javascript/u10/hands-on-project11-1/search.htm"),
        array("Unit 10 Hands on Project 11-2", 1, "./archive/javascript/u10/hands-on-project11-2/stocks.htm"),
        array("Unit 10 Hands on Project 11-3", 1, "./archive/javascript/u10/hands-on-project11-3/stocks.htm"),
        array("Unit 10 Hands on Project 11-4", 1, "./archive/javascript/u10/hands-on-project11-4/address.htm"),
        array("Unit 10 Hands on Project 11-5", 1, "./archive/javascript/u10/hands-on-project11-5/address.htm"),
        
        array("Unit 12 Hands on Project 12-1", 1, "./archive/javascript/u12/hands-on-project12-1/index.htm"),
        array("Unit 12 Hands on Project 12-2", 1, "./archive/javascript/u12/hands-on-project12-2/index.htm"),
        array("Unit 12 Hands on Project 12-3", 1, "./archive/javascript/u12/hands-on-project12-3/index.htm"),
        array("Unit 12 Hands on Project 12-4", 1, "./archive/javascript/u12/hands-on-project12-4/index.htm"),
        array("Unit 12 Hands on Project 12-5", 1, "./archive/javascript/u12/hands-on-project12-5/index.htm")
        
        
    ); // end of array
    
    $love = tagsloop($arraylist);
    echo $love;
    ?>
    
</div> <!-- container -->




<?php 
require 'inc_footer.php';
 ?>
