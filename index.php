<?php

Kirby::plugin('kevingimbel/redirect', [
    'blueprints' => [
        'pages/redirect' => __DIR__ . '/src/blueprints/pages/redirect.yml',
    ],
    'templates' => [
        'redirect' => __DIR__ . '/src/templates/redirect.php'
    ],
]);
