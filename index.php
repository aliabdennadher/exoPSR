<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 18/11/2014
 * Time: 11:34
 */

require __DIR__.'/vendor/autoload.php';

$passwordGenerator = new \Web1\StringGenerator\PasswordGenerator();

echo \Web1\StringGenerator\PasswordGenerator::getRandomString(50, \Web1\StringGenerator\PasswordGenerator::PASSWORD_HARD);