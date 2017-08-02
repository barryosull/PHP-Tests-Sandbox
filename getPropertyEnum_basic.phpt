--TEST--
Test IntlChar::getPropertyEnum ( string $alias ) - Test returns expected IntlChar::PROPERTY constant value
--CREDITS--
barry@tercet.io
#phptestfest2017
--SKIPIF--
<?php if( !extension_loaded( 'intl' ) ) print 'skip'; ?>
--FILE--
<?php
var_dump(get_loaded_extensions());
var_dump(IntlChar::getPropertyEnum('Bidi_Class') === IntlChar::PROPERTY_BIDI_CLASS);
var_dump(IntlChar::getPropertyEnum('script') === IntlChar::PROPERTY_SCRIPT);
var_dump(IntlChar::getPropertyEnum('IDEOGRAPHIC') === IntlChar::PROPERTY_IDEOGRAPHIC);
var_dump(IntlChar::getPropertyEnum('Some made-up string') === IntlChar::PROPERTY_INVALID_CODE);

?>
--EXPECT--
bool(true)
bool(true)
bool(true)
bool(true)
