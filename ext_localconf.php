<?php

use Helhum\TyposcriptRendering\ContentObject\TypoScriptRenderingContentObject;
use Helhum\TyposcriptRendering\Renderer\RecordRenderer;

(function () {
    $GLOBALS['TYPO3_CONF_VARS']['FE']['ContentObjects']['TYPOSCRIPT_RENDERING'] = TypoScriptRenderingContentObject::class;
    $GLOBALS['TYPO3_CONF_VARS']['FE']['cacheHash']['requireCacheHashPresenceParameters'][] = 'tx_typoscriptrendering[context]';

    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['typoscript_rendering'] = [];
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['typoscript_rendering']['renderClasses'] = [
        'record' => RecordRenderer::class,
    ];

    // Ignore fake controller argument that gets removed
    $GLOBALS['TYPO3_CONF_VARS']['FE']['cacheHash']['excludedParameters'][] = 'tx__[controller]';
})();
