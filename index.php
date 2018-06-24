<?php
require_once 'autoload.php';

use App\Singleton\SampleSingleton;

$singleton = SampleSingleton::getInstance();

echo $singleton->getId();

$singleton2 = SampleSingleton::getInstance();

echo '<br><br>';
echo $singleton2->getId();


//$new = new SampleSingleton();   // ×
//echo $new->getId();

//$clone = clone $singleton;      // ×
//echo $clone->getId();