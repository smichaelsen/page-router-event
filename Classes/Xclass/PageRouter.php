<?php

declare(strict_types=1);

namespace Smic\PageRouterEvent\Xclass;

use Psr\Http\Message\UriInterface;
use Smic\PageRouterEvent\Event\PageUriGenerated;
use TYPO3\CMS\Core\EventDispatcher\EventDispatcher;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class PageRouter extends \TYPO3\CMS\Core\Routing\PageRouter
{
    public function generateUri($route, array $parameters = [], string $fragment = '', string $type = ''): UriInterface
    {
        $uri = parent::generateUri($route, $parameters, $fragment, $type);

        $eventDispatcher = GeneralUtility::makeInstance(EventDispatcher::class);
        $event = new PageUriGenerated($fragment, $this, $parameters, $route, $this->site, $type, $uri);
        $eventDispatcher->dispatch($event);
        return $event->getUri();
    }
}
