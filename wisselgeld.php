<?php
$geld = intval($argv[1]);
if($geld >= 10){
    print (floor($geld / 10) . "x 10 euro\n");
    $geld = $geld % 10;
}
if($geld >= 5){
    print (floor($geld / 5) . "x 5 euro\n");
    $geld = $geld % 5;
}
if($geld >= 2){
    print (floor($geld / 2) . "x 2 euro\n");
    $geld = $geld % 2;
}
if ($geld > 0) {
    print ($geld . "x 1 euro\n");
    
}elseif($geld == 0) {
    echo "geen wisselgeld meer nodig";
}elseif($geld < 0) {
    echo "een min getal kan niet";
}
exit(0);
 

?>
