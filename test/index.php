<?php
use \Erykai\Pluralize;
require "vendor/autoload.php";
echo (new Pluralize())->plural('friend');
//print friends
echo (new Pluralize())->plural('friends');
//print friend