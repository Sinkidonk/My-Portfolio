<?php

$pageTitle = "Feature";
require 'inc_header.php';




?>

<div class="container">
                    <h1>About Feature Page</h1>
        <p>This page will feature all of the stuff I worked on that required actual efforts from me to work on.<br>
            My final project’s as well as personal projects, anything that wasn’t just straight out of a book where it was like oh do this and then do that, oh finds and correct these errors in the code. Type of deal.
        </p>
    
    <?php 
    
    /* rewrite to use an two dimensional arrays to output into html formated text */
    
    $mydata = array ( // 0 for View in Web, 1 for Download from github
        /*array("Name of Project" [0], "About the project" [1], 0 or 1 [2], "links" [3], "View_Code" [4] ), */
        array("To Do List", 
              "This website was created as part of a final project in my Advance PHP class, it was nice going through the process of getting the PDO code to work, as well setting up the database for this project. I wouldn’t recommend people don’t go putting passwords you use for well anything else, password are encrypted but not salted. Also, this site only run off of http so no personal data. Note: Due to the the web server this is running on it always one database entry behind on update. Have no issues when running on my private testing server.",
              0, "./features/to-do-list", "https://github.com/Sinkidonk/To-Do-List-php"
             ),
        array("Alphatek", 
              "Was created for a client and as a final project for my basic php class. His wants for the website was to be a clone of one of his original websites just with updated code. In the end however my client just decided to go with one of those CMS shopping cart websites. I removed the ability of shopping on this website. As the prices and PayPal links to all the parts aren’t being updated.", 
              0, "./features/alphatek", "https://github.com/Sinkidonk/Alphatek-php-basic" 
             ),
        array("Firewall Powershell Script", 
              "This was a script created as part of a final project. I learn a lot from creating this script while it nice to know Powershell coding within it is kind of a pain.",
              1, "https://github.com/Sinkidonk/Firewall-Powershell/archive/master.zip", "https://github.com/Sinkidonk/Firewall-Powershell" 
             ),
        array("Minetest_coloredwater", 
              "Fun little personal project I was working on to fill a gap in the game minetest, no longer play so code might not work anymore", 
              1, "https://github.com/Sinkidonk/Minetest_coloredwater/archive/master.zip", "https://github.com/Sinkidonk/Minetest_coloredwater" 
             ),
        array("Linux Website", 
              "This was created as a final project for my Web Programming 1 class. It show off my love for linux.",
              0, "./features/linux-website", "https://github.com/Sinkidonk/linux-website-web-dev-1" 
             ),
        array("Spring 2018 Final Project", 
              "This project was a remake of my final project made for Web Programming code 1. It was created for both my Web Programming 2, and my Javascript final project. Back then iFrames was hard to work with in responsive design.", 
              0, "./features/sp-2018-final-project", "https://github.com/Sinkidonk/Spring-2018-Final-Project-Website" 
             ),
        array("Web Concepts Final", 
              "I created this as part of my Web Concepts class final project. It needed to be a simple website with pictures. It also show my love of Linux again.", 
              0, "./features/web-concepts", "https://github.com/Sinkidonk/network-web-concepts" 
             ),
        array("High School Web Design",
             "This website was created as part of a project back in highschool we created it using Dreamweaver.",
             0, "./features/high-school-web-design", "https://github.com/Sinkidonk/high-school-web-design-1")


    ); // end of array
    
    ?>     <div class="altcoloring"> <?php
    for ($row = 0; $row < count($mydata); $row++) {
    ?> 

    <div class="row mw-100" style="margin-left: 0px;">
        <div class="col-12">
            <h4 class="pt-4 font-weight-bold"><?php echo $mydata[$row][0];?></h4>
                  
            <p><?php echo $mydata[$row][1];?></p>
        </div>
    </div>
        <div class="row mw-100" style="margin-left: 0px;">
        <div class="col-6">
            <a class="filldiv text-center pt-2 pb-2" target="_blank" href="<?php echo $mydata[$row][3];?>">
            <?php
                /* Switch code to either say Download or View in Web
                Based on if I see a value of 0 being I have to download to see the output
                or if I see a value of 1 meaning I can just display the output in the browser. */
                switch ($mydata[$row][2]) {
                    case 0:
                        echo "View in Web";
                        break;
                    case 1:
                        echo "Download from Github";
                        break;
                    default:
                        echo "Who are you and how did you do this?";
                }
            ?>
            </a>
        </div>
        <div class="col-6">
            <a class="filldiv text-center pt-2 pb-2" target="_blank" href="<?php echo $mydata[$row][4];?>">View Code</a>
            
        </div>
    </div>
    

        
     <?php } ?>




</div> <!-- .altcoloring -->
    </div> <!-- .container -->
<?php 
    

require 'inc_footer.php';
?>

      
      
      
