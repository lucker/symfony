<?php

$container->loadFromExtension('framework', [
    'annotations' => false,
    'http_method_override' => false,
    'assets' => [
        'version_strategy' => 'assets.custom_version_strategy',
        'base_urls' => 'http://cdn.example.com',
    ],
]);
