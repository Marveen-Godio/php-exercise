<?php
function prout($un, $deux){
    if($un > $deux){
        return "Le premier nombre est plus grand";
    }
    elseif($un < $deux){
        return "Le premier nombre est plus petit";
    }
    else{
        return "Les deux nombres sont identiques";
    }
}
echo prout(1,2)
?>