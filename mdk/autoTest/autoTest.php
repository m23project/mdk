#!/usr/bin/php
<?php

include('/m23/inc/db.php');
include('/m23/inc/vm.php');
include('/m23/inc/helper.php');
include('/m23/inc/client.php');
include('/m23/inc/checks.php');
include('/m23/inc/autoTest.php');
include('/m23/inc/CAutoTest.php');

$xmlFile = $argv[1];
array_shift($argv);
$AutoTestO = new CAutoTest($xmlFile, $argv);
$AutoTestO->run();
?>