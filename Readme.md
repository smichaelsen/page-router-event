# Page Router Event
## Provides a PSR-14 event to respond to generated page URIs

The core TYPO3 `PageRouter` doesn't offer the possibility to modify generated URLs. This extension replaces the `PageRouter->generateUri` method and
dispatches a [PSR-14](https://www.php-fig.org/psr/psr-14/) event to react to or modify generated URLs.

## TYPO3 core issue

An issue for the TYPO3 core has been created on forge: [#92780](https://forge.typo3.org/issues/92780).
This extension is meant as an intermediate solution and becomes obsolete as soon as the core PageRouter offers such an event.

## Usage

Install:

`composer req smic/page-router-event dev-master`

Register an event listener in the `Services.yaml`:

````
services:

  Vendor\MyExt\EventListener\ReactToGeneratedUri:
    tags:
      - name: event.listener
        identifier: 'GeoIpMarketLanguageSegmentsSwapper'
        event: Smic\PageRouterEvent\Event\PageUriGenerated
````

Your event listener receives a `Smic\PageRouterEvent\Event\PageUriGenerated` that offers:

* getters for input data that were used to generate the URL `->getFragment()`, `->getParameters()`, `->getRoute()`, `->getSite()`, `->getType()`
* a getter for the generated URI `->getUri()`
* a setter to replace the generated URI `->setUri($uri)`

If you're not familiar with PSR-14 event handling in TYPO3 have a look at: https://docs.typo3.org/m/typo3/reference-coreapi/master/en-us/ApiOverview/Hooks/EventDispatcher/Index.html
