<?php
require "vendor/autoload.php";
use CowSay\Cow;

$bessie = new Cow('sheeeeesh');
$bessie->setTongue('U');
echo $bessie;