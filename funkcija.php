<?php

function cifra_stotina($broj){
    $c=$broj /100 % 10;
    return $c;

}

$cifra=cifra_stotina(4566);
echo $cifra;
