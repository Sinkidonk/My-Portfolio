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
    
    $num = count($myarray);
    
    $math = ceil($num/4);
    
    $count = 0;
    /*
    For this to work I need the inner loop to create 4 cols
    I also need a way to loop throught the array to input the
    array values while making sure there are no repeats.
    While also having it drop down to the next row
    once cols are created. To do this I will need
    a carry over a variable outside of the loop
    and to keep it from running if no more input I can
    use the AND logical operators.
    
    
    */
    while($count <= $num) {
        $output .= '<div class="row mw-100" style="margin-left: 0px;">';
        $x = 0;
        $innerCount = 0;
        
        while($count < $num && $innerCount <= $math && $x < 4) {
            $output .= '<div class="col-sm-3">';
            $output .= '<p>';
            $output .= $myarray[$count][0];
            $output .= '</p>';
            $output .= '<a class="text-center pb-t pt-2" target="_blank" href="';
            $output .= $myarray[$count][2];
            $output .= '">';
            switch ($myarray[$count][1]) {
                case 0:
                    $output .= 'Go to Page</a>';
                    break;
                case 1:
                    $output .= 'Web demo</a>';
                    break;
                case 2:
                    $output .= 'View on Github</a>';
                default:
                    $output .= 'Um how did you get here</a>';
                    
            }
            $output .= '</div>';
            $count++;
            $innerCount++;
            $x++;
            
        }
        $count++;
        $output .= "</div>";
    }
    $output .= "</div>";
           
    

    
    
    
    return $output;
};
?>