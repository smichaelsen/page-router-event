<?php

declare(strict_types=1);

namespace Smic\PageRouterEvent\Event;

use Psr\Http\Message\UriInterface;
use TYPO3\CMS\Core\Domain\Page;
use TYPO3\CMS\Core\Routing\PageRouter;
use TYPO3\CMS\Core\Site\Entity\Site;

class PageUriGenerated
{
    protected string $fragment;

    protected array $parameters;

    protected PageRouter $pageRouter;

    protected array|string|int|Page $route;

    protected Site $site;

    protected string $type;

    protected UriInterface $uri;

    public function __construct(
        string $fragment,
        PageRouter $pageRouter,
        array $parameters,
        array|string|int|Page $route,
        Site $site,
        string $type,
        UriInterface $uri,
    )
    {
        $this->fragment = $fragment;
        $this->pageRouter = $pageRouter;
        $this->parameters = $parameters;
        $this->route = $route;
        $this->site = $site;
        $this->type = $type;
        $this->uri = $uri;
    }

    public function getFragment(): string
    {
        return $this->fragment;
    }

    public function getParameters(): array
    {
        return $this->parameters;
    }

    public function getPageRouter(): PageRouter
    {
        return $this->pageRouter;
    }

    public function getRoute(): array|string|int|Page
    {
        return $this->route;
    }

    public function getSite(): Site
    {
        return $this->site;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getUri(): UriInterface
    {
        return $this->uri;
    }

    public function setUri(UriInterface $uri): void
    {
        $this->uri = $uri;
    }
}
