<?php

Kirby::plugin('kevingimbel/kirby-redirect', [
    'blueprints' => [
        'pages/redirect' => __DIR__ . '/src/blueprints/pages/redirect.yml',
    ],
    'templates' => [
        'templates/redirect.php' => __DIR__ . '/src/templates/redirect.php'
    ],
]);
