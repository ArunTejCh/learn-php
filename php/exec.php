<?php
/**
 * Created by PhpStorm.
 * User: chennadi
 * Date: 12/4/2016
 * Time: 8:25 PM
 */

$cmd = "dir";

$result = shell_exec($cmd);

echo $result;