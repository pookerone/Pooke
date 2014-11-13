<?php
$i = true;
$dql = "sld = ".$i;

$a  = array([0]=> array('d' => 232 ));
print("$a[0]['d']");

$at=  array('cole' =>1 ,'te'=>2 );
$k = 1;
foreach ($at as $key => $value) {
    $key = "cc".$k;
    $k++;   
}
print_r($at);
?>

 