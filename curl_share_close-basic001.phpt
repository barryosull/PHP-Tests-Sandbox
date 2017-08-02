--TEST--
curl_share_close basic test
--SKIPIF--
<?php if( !extension_loaded( 'curl' ) ) print 'skip'; ?>
--FILE--
<?php

$sh = curl_share_init();
var_dump($sh);

curl_share_close($sh);
var_dump($sh);

?>
--EXPECTF--
resource(%d) of type (curl_share)
resource(%d) of type (Unknown)