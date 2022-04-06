<?php
require  '../vendor/autoload.php';
use App\Wcs\Hello;
use CowSay\Cow as CowSayCow;

$hello = new Hello();
echo $hello->talk();

$cow = new CowSayCow('Hey, BooBoo!');
echo $cow;
