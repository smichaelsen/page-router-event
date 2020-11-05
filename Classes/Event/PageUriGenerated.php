<?php

declare(strict_types=1);

namespace Smic\PageRouterEvent\Event;

use Psr\Http\Message\UriInterface;
use TYPO3\CMS\Core\Site\Entity\Site;

class PageUriGenerated
{
    /**
     * @var string
     */
    protected $fragment;

    /**
     * @var array
     */
    protected $parameters;

    /**
     * @var array|string
     */
    protected $route;

    /**
     * @var Site
     */
    protected $site;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var UriInterface
     */
    protected $uri;

    public function __construct(string $fragment, array $parameters, $route, Site $site, string $type, UriInterface $uri)
    {
        $this->fragment = $fragment;
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

    /**
     * @return array|string
     */
    public function getRoute()
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
