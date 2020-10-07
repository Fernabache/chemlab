<?php


function form_one($a,$b,$c,$d,$t,$p){

return exp(((-$a/($t*$t)) + $b - ($c * log($p)) + ($d/($p*$p))));

}

function form_two($a,$b,$c,$d,$t,$p){

return  exp(((-$a/($t*$t)) + $b - ($c * log($p)) + ($d/($p))));

}

function form_three($a,$b,$c,$t,$p){

return  exp(((-$a/($t)) + $b - ($c * log($p))));

}


/*
echo form_one(292860,8.2445,0.8951,59.8465,$t,$p)."\methane";

echo form_one(600076.9,7.90595,0.84677,42.94594,$t,$p) ."ethylene";


echo form_three(7646.816,12.48457,0.73152,$t,$p).octane;
* 
* echo form_three(9760.457,13.80354,0.7147,$t,$p).decane;
* 
* 

*/


?>
