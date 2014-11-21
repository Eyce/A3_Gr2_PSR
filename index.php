<?php
/*
 * @author François Peureux
 */

require __DIR__.'/vendor/autoload.php';

//$slugify = new \Cocur\Slugify\Slugify();
//echo $slugify->slugify('Mes Règles 123');

//echo \OKLM\StringGenerator\PasswordGenerator::generate(10,\OKLM\StringGenerator\PasswordGenerator::PASSWORD_MEDIUM);
echo PHP_EOL.PHP_EOL;
echo \OKLM\StringGenerator\TextGenerator::generate(120,5);

