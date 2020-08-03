<?php
/* array("code name", 1 or 0, link) 
1 for see on github
0 for view in web

*/

// todo: need a way to carry variable info into the inner loop.

// might have to rewrite as a do while loop

function tagsloop($myarray)
{
    $output = '<div class="altcoloring">';
    
    $math = count($myarray)/4;
    
    for ($count = 0; $count < count($myarray); $count++){
        $output .= '<div class="row mw-100">';
        // might have to use math to create loops that can do what I want
        for ($eachcol = 0; $eachcol < $math; $eachcol++){
            $output .= '<div class="col-sm-3">';
            $output .= '<p>';
            $output .= $myarray[$count][0];
            $output .= '</p>';
            $output .= '<a class="text-center pb-t pt-2" target="_blank" href="';
            $output .= $myarray[$count][2];
            $output .= '">';
            switch ($myarray[$count][1]) {
                case 0:
                    $output .= 'View in GitHub</a>';
                    break;
                case 1:
                    $output .= 'View in Web</a>';
                    break;
                default:
                    $output .= 'Um how did you get here</a>';
                    
            }
            $output .= '</div>';
            $count++;
        }
        
        $output .= "</div>";
    }
    
    
    
    return $output;
};
?>