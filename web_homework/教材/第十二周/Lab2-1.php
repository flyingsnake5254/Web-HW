<?php
$array = array(
    1,
    2,
    array("3","4","5"),
);

function output($data){
    if (is_array($data)){
        foreach($data as $element){
            output($element);
        }
    
    }
    else{
        print_r($data);
        echo "<br/>";
    }
}

output($array)
?>