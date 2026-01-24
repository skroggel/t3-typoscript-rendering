<?php

use Helhum\TyposcriptRendering\Middleware\TypoScriptRenderingMiddleware;

return [
    'frontend' => [
        'helhum/typoscript-rendering-handler' => [
            'target' => TypoScriptRenderingMiddleware::class,
            'description' => '',
            'after' => [
                'typo3/cms-frontend/prepare-tsfe-rendering',
            ],
        ],
    ],
];
