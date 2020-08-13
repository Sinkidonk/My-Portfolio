<?php
$pageTitle = "F.A.Q";
require 'inc_header.php';
require 'loop_old_code.php';

$QaA = array(
    //array("Question", "answer")
    array(
        "What made you go and create this website?", 
          "Well I am looking to get an internship when I start back at college, in the fall. This 3rd degree will be my last and I think it a good time to start trying to gain work experience."
    ),
    array(
        "What you got two degrees already but in what and from where?",
        "I got both of my degrees from Gateway Technical College.<br>
        One in IT Cybersecurity Specialist, and the other in IT Web Software Developer."
    ),
    array(
        "Since you got two degrees do you have a preferred subject area?",
        "Yes, I actually strongly prefer Cybersecurity.<br>
        I am always excited to learn something new in the Cybersecurity space."
    ),
    array(
        "Why are you showing off web and other coding work if you enjoy Cybersecurity more?",
        "I am not even sure where to begin to show people how I harden a network, or disabled ports, or how I use Wireshark, or me setting
        up VM’s to test out how pfsense firewall work.<br>
        There just no easy way to show off cybersecurity skills over the internet on a website.<br>
        So, I do the next best thing I show off all of my coding skills online.br>
        If you know of a way to show off Cybersecurity skills easily on the web, please let me know."
    ),
    array(
        "Your website look horrible!",
        "Thanks, you I never claimed to be an artist, I just like the color green, and know how to code."
    ),
    array(
        "What your third degree going to be in and what college are you going to get it?",
        "My Third degree is going to be from the University of Wisconsin Whitewater.<br>
        My major is an Information Technology BBA, with an Emphasis in Networking and Security, with a Minor in Cybersecurity."
    )
    
    
    
);



?>

<div class="container">
    
    <!-- going to make an function with an array input to handle this -->
    <h1>Frequently Asked Questions</h1>
    <p>
        If you are asking, yourself who are asking these questions well me I am. This page for now is going to be used for answering all the questions that I asked myself that I think other people would ask me.
    </p>
    <ul>
    <?php 
    
    foreach ($QaA as $qanda) {
        echo "<li class='question'>$qanda[0]</li>";
        echo "<li class='answers'>$qanda[1]</li>";
        
    }
    
    ?>
    </ul>
    <?php
    require 'inc_footer.php';
    ?>
</div> <!-- container -->




<?php 
require 'inc_scripts.php';
 ?>
