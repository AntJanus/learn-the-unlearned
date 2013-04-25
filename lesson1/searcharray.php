<?php
function searchArray($array, $term){
    $found = FALSE;
    $position = 0;
    foreach($array as $key => $value){
        if($value == $term){
            $found = true;
            $position = $key;
            return $key;
        }
    }
    if($found == FALSE){
        return 'Not found';
    }
}

$fruits = array('oranges', 'apples', 'bananas');
$apples = searchArray($fruits, 'watermelon');
echo $apples;
?>