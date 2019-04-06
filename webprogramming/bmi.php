<?php
/**
 * User: Anmol
 * Date: 01/04/2019
 * Time: 11:52
 */
$min_weight = filter_input(INPUT_GET, 'min_weight');
$max_weight = filter_input(INPUT_GET, 'max_weight');
$min_height = filter_input(INPUT_GET,'min_height');
$max_height = filter_input(INPUT_GET, 'max_height');

$min_height2 =$min_height;
for ($min_height2; $min_height2<=$max_height; $min_height2+5&&$min_weight+5){
    ;
}

