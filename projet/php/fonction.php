<?php
function sommeTableau($nb, $operation){

    switch ($operation) {
        case '+':
        echo  array_sum($nb);
            break;
        case '*':
        echo array_product($nb);
            break;

    }


}

?>