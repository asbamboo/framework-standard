<?php
use asbamboo\frameworkStandard\AppKernel;
use asbamboo\framework\kernel\Http;

$autoload   = require_once dirname(__DIR__) . '/vendor/asbamboo/autoload/bootstrap.php';
$autoload->addMappingDir('asbamboo\\frameworkStandard\\', dirname(__DIR__));

/**
 * http请求入口文件
 */
(new Http())->run(new AppKernel($debug = true));