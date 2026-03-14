<?php
declare(strict_types=1);

namespace Helhum\TyposcriptRendering\Uri;

/*
 * This file is part of the TypoScript Rendering TYPO3 extension.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read
 * LICENSE file that was distributed with this source code.
 *
 */
use TYPO3\CMS\Fluid\Core\Rendering\RenderingContext;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Configuration\ConfigurationManager;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;

class ViewHelperContext
{
    public function __construct(private readonly RenderingContextInterface $renderingContext, private readonly array $arguments, private readonly ?ConfigurationManager $configurationManager = null)
    {
    }


    public function getRequest()
    {
        if ($this->renderingContext instanceof RenderingContext) {
            return $this->renderingContext->getRequest();
        }
        return null;
    }

    public function getArguments(): array
    {
        return $this->arguments;
    }

    public function getContentObject(): ContentObjectRenderer
    {
        $contentObject =  $this->getRequest()->getAttribute('currentContentObject');
        return $contentObject ?? GeneralUtility::makeInstance(ContentObjectRenderer::class);
    }

}
