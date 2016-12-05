<?php
/**
 * Created by PhpStorm.
 * User: chennadi
 * Date: 12/4/2016
 * Time: 7:37 PM
 */

$moo = "complexity player<br>";

$zfreek = "complexity carry<br>";

echo $moo;

echo $zfreek;

$zfreek = $moo;

$zfreek = "complexity offlane<br>";


echo $moo;

echo $zfreek;

$zfreek = &$moo;

$zfreek = "complexity pos5<br>";


echo $moo;

echo $zfreek;

$a = "hello";
$$a = "world";

echo "$a ${$a}<br>";

echo "$$a<br>";

$b = "hello";
$b .= "there";

echo $b."<br>";
print_r(phpinfo());

