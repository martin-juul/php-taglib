<?php

require __DIR__ . '/vendor/autoload.php';

use FFIMe\FFIMe;

$ffime = new FFIMe(FFIMe::LIBC);
$ffime->showWarnings(true);
$ffime->include('/home/www-data/pkg/include/taglib/taglib_export.h');
$ffime->include('/home/www-data/pkg/include/taglib/taglib.h');
$ffime->codeGen('test\\test', __DIR__ . '/src/TagLib.php');
