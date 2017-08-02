--TEST--
Test ucfirst() - Uppercase first letter of a string
--FILE--
<?php

$string = "name";
$string_already_uppercase = "NAME";

var_dump(ucfirst($string));
var_dump(ucfirst($string_already_uppercase));

?>
--EXPECTF--

string(4) "Name"
string(4) "NAME"
