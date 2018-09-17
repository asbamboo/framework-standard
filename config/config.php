<?php
use asbamboo\framework\config\RouterConfig;
use asbamboo\framework\template\Template;

return [
    RouterConfig::class         => ['init_params' => ['configs' => include __DIR__ . DIRECTORY_SEPARATOR . 'router.php']],
    Template::class             => ['init_params' => ['template_dir' => [dirname(__DIR__) . DIRECTORY_SEPARATOR . 'view']]],
];

