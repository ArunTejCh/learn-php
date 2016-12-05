<?php
/**
 * Created by PhpStorm.
 * User: chennadi
 * Date: 12/4/2016
 * Time: 9:22 PM
 */

$a1 = array(1,2,3,4,5,6,7);

print_r($a1);

foreach ($a1 as $val)
    echo $val;

echo "<br>";
$arand = "arun rox i think so wtf is this shit";

$a2 = explode(" ", $arand);

echo "<br>";
foreach ($a2 as $val)
    echo $val;