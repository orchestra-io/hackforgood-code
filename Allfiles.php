<?php

define ('HACKY_LIBRARIES', __DIR__ . DIRECTORY_SEPARATOR . 'libraries');

array_map(function($value) {
    set_include_path(get_include_path() . PATH_SEPARATOR . $value);
}, array(
    'pear'     => HACKY_LIBRARIES . DIRECTORY_SEPARATOR . 'pear',
    'facebook' => HACKY_LIBRARIES . DIRECTORY_SEPARATOR . 'facebook',
    'tropo'    => HACKY_LIBRARIES . DIRECTORY_SEPARATOR . 'tropo',
));
