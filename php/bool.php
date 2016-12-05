<?php
/**
 * Created by PhpStorm.
 * User: chennadi
 * Date: 12/4/2016
 * Time: 8:34 PM
 */

$a = true;

$b = false;

$c = true;

echo "a&b<br>";
echo $a && $b;


echo "a&c<br>";
echo $a && $c."<br>";

echo "a|b<br>";
echo $a || $b."<br>";

echo "a|c<br>";
echo $a || $c."<br>";

echo "axorb<br>";
echo $a xor $b;

echo "axorc<br>";
echo $a xor $c;