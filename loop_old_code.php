<?php
/* array("code name", 1 or 0, link) 
1 for see on github
0 for view in web

*/

function tagsloop($myarray)
{
    $output = '<div class="altcoloring">';
    
    
    for ($count = 0; $count < count($myarray); $count++){
        $output .= '<div class="row mw-100">';
        // might have to use math to create loops that can do what I want
        for ($eachcol = 0; $eachcol < count($myarray); $eachcol++){
            $output .= '<div class="col-sm-3">';
            $output .= '<h4>';
            $output .= $myarray[$count][0];
            $output .= '</h4>';
            $output .= '</div>';
        }
        
        $output .= "</div>";
    }
    
    
    
    return $output;
};
?>