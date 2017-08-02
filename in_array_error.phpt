--TEST--
Testing wrong usage of in_array
--CREDITS--
Your Name <user [at] domain [dot] com>
#phptestfest2017
--FILE--
<?php
$os = '';

if (in_array('Mac', $os)) {
    echo 'Mac Found';
}

?>
--EXPECTF--
Causes failure
Warning: in_array() expects parameter 2 to be array, %s given in %s on line %d
