<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Alexandre
 * Date: 18/11/14
 * Time: 10:09
 * To change this template use File | Settings | File Templates.
 */

require __DIR__.'/vendor/autoload.php';

/*$title ='Mé zarzafazfa fkzefezkfez ihugzyfdu jionubiyvut';

$slugify = new \Cocur\Slugify\Slugify();
echo $slugify->slugify($title);*/

$passwordGenerator = new \Web1\StringGenerator\PasswordGenerator();

echo $passwordGenerator->generateRandomString(25,\Web1\StringGenerator\PasswordGenerator::PASSWORD_HARD);
