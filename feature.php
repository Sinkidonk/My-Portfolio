<?php

$pageTitle = "Feature";
require 'inc_header.php';
require 'pdo_connect.php';
?>

<div class="container">
    <div class="row mw-100">
    <div class="col-12">
                    <h1>About Feature Page</h1>
        <p>This page will feature all of the stuff I worked on that required actual efforts from me to work on.<br>
            My final project’s as well as personal projects, anything that wasn’t just straight out of a book where it was like oh do this and then do that, oh finds and correct these errors in the code. Type of deal.
        </p>
        </div>
    </div>
    
    <?php 
    /* little function that will loop through my database and printout formatted html tags with values pulled from my database */
    function printBlocks($conn) {
    $query = $conn->prepare('SELECT Name,About,DorV,Download_View,View_Code FROM Feature');
    $query->execute();
        
        foreach ($query as $row) {
    ?>
    <div class="altcoloring">
    <div class="row mw-100">
        <div class="col-12">
            <h4 style="font-weight:bold;"><?php echo $row['Name'];?></h4>
                  
            <p><?php print $row['About']?></p>
        </div>
    </div>
    <div class="row mw-100">
        <div class="col-6">
            <a class="filldiv text-center pt-2 pb-2" target="_blank" href="<?php echo $row['Download_View'];?>">
            <?php
                /* Switch code to either say Download or View in Web
                Based on if I see a value of 0 being I have to download to see the output
                or if I see a value of 1 meaning I can just display the output in the browser. */
                switch ($row['DorV']) {
                    case 0:
                        echo "Download";
                        break;
                    case 1:
                        echo "View in Web";
                        break;
                    default:
                        echo "Who are you and how did you do this?";
                }
            ?>
            </a>
        </div>
        <div class="col-6">
            <a class="filldiv text-center pt-2 pb-2" target="_blank" href="<?php echo $row['View_Code'];?>">View Code</a>
            
        </div>
    </div>
        </div>
        <?php 
    }
}
    printBlocks($MyPDO);
    
    
    ?>

</div>






<?php 
require 'inc_footer.php';
?>

      
      
      
