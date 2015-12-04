<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{

    private $staticRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes =         array (
          '/dictionnaire/fr/_profiler' => 
          array (
            1 => 
            array (
              'host' => NULL,
              'method' => 
              array (
              ),
              'priority' => 1,
              'forceSlash' => true,
              'options' => 
              array (
                '_controller' => 'web_profiler.controller.profiler:homeAction',
                '_route' => '_profiler_home',
              ),
            ),
          ),
          '/dictionnaire/fr/_profiler/search' => 
          array (
            2 => 
            array (
              'host' => NULL,
              'method' => 
              array (
              ),
              'priority' => 2,
              'forceSlash' => false,
              'options' => 
              array (
                '_controller' => 'web_profiler.controller.profiler:searchAction',
                '_route' => '_profiler_search',
              ),
            ),
          ),
          '/dictionnaire/fr/_profiler/search_bar' => 
          array (
            3 => 
            array (
              'host' => NULL,
              'method' => 
              array (
              ),
              'priority' => 3,
              'forceSlash' => false,
              'options' => 
              array (
                '_controller' => 'web_profiler.controller.profiler:searchBarAction',
                '_route' => '_profiler_search_bar',
              ),
            ),
          ),
          '/dictionnaire/fr/_profiler/purge' => 
          array (
            4 => 
            array (
              'host' => NULL,
              'method' => 
              array (
              ),
              'priority' => 4,
              'forceSlash' => false,
              'options' => 
              array (
                '_controller' => 'web_profiler.controller.profiler:purgeAction',
                '_route' => '_profiler_purge',
              ),
            ),
          ),
          '/dictionnaire/fr/_profiler/phpinfo' => 
          array (
            6 => 
            array (
              'host' => NULL,
              'method' => 
              array (
              ),
              'priority' => 6,
              'forceSlash' => false,
              'options' => 
              array (
                '_controller' => 'web_profiler.controller.profiler:phpinfoAction',
                '_route' => '_profiler_phpinfo',
              ),
            ),
          ),
          '/dictionnaire/fr/_configurator' => 
          array (
            12 => 
            array (
              'host' => NULL,
              'method' => 
              array (
              ),
              'priority' => 12,
              'forceSlash' => true,
              'options' => 
              array (
                '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',
                '_route' => '_configurator_home',
              ),
            ),
          ),
          '/dictionnaire/fr/_configurator/final' => 
          array (
            14 => 
            array (
              'host' => NULL,
              'method' => 
              array (
              ),
              'priority' => 14,
              'forceSlash' => false,
              'options' => 
              array (
                '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',
                '_route' => '_configurator_final',
              ),
            ),
          ),
          '/dictionnaire/fr/abecedaire' => 
          array (
            23 => 
            array (
              'host' => NULL,
              'method' => 
              array (
              ),
              'priority' => 23,
              'forceSlash' => true,
              'options' => 
              array (
                '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\AbcBookController::indexAction',
                '_route' => 'dictionary_ABC_book',
              ),
            ),
          ),
          '/dictionnaire/fr/recherche/synonyme' => 
          array (
            25 => 
            array (
              'host' => NULL,
              'method' => 
              array (
              ),
              'priority' => 25,
              'forceSlash' => true,
              'options' => 
              array (
                '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\SearchController::searchSynonymeAction',
                '_route' => 'dictionary_search_synonym',
              ),
            ),
          ),
          '/dictionnaire/fr/recherche-top' => 
          array (
            26 => 
            array (
              'host' => NULL,
              'method' => 
              array (
              ),
              'priority' => 26,
              'forceSlash' => true,
              'options' => 
              array (
                '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\SearchController::topSearchAction',
                '_route' => 'dictionary_topSearch',
              ),
            ),
          ),
          '/dictionnaire/fr/cgi/recherche/recherche.php' => 
          array (
            28 => 
            array (
              'host' => NULL,
              'method' => 
              array (
              ),
              'priority' => 28,
              'forceSlash' => false,
              'options' => 
              array (
                '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\SearchController::oldSearchAction',
                '_route' => 'dictionary_old_search',
              ),
            ),
          ),
          '/dictionnaire/fr/recherche' => 
          array (
            29 => 
            array (
              'host' => NULL,
              'method' => 
              array (
              ),
              'priority' => 29,
              'forceSlash' => true,
              'options' => 
              array (
                '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\SearchController::searchAction',
                '_route' => 'dictionary_search',
              ),
            ),
          ),
          '/dictionnaire/fr' => 
          array (
            30 => 
            array (
              'host' => NULL,
              'method' => 
              array (
              ),
              'priority' => 30,
              'forceSlash' => true,
              'options' => 
              array (
                '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\HomeController::indexAction',
                '_route' => 'dictionary_home',
              ),
            ),
          ),
          '/citation' => 
          array (
            38 => 
            array (
              'host' => NULL,
              'method' => 
              array (
              ),
              'priority' => 38,
              'forceSlash' => true,
              'options' => 
              array (
                '_controller' => 'CCMBenchmarkCitationBundle:Default:index',
                '_route' => 'citation_home',
              ),
            ),
          ),
          '/expression' => 
          array (
            41 => 
            array (
              'host' => NULL,
              'method' => 
              array (
              ),
              'priority' => 41,
              'forceSlash' => true,
              'options' => 
              array (
                '_controller' => 'CCMBenchmarkExpressionBundle:Default:index',
                '_route' => 'expression_home',
              ),
            ),
          ),
          '/cartes-de-voeux' => 
          array (
            47 => 
            array (
              'host' => '#^www\\.local\\.linternaute\\.com$#si',
              'method' => 
              array (
              ),
              'priority' => 47,
              'forceSlash' => true,
              'options' => 
              array (
                '_controller' => 'CCMBenchmark\\GreetingCardBundle\\Controller\\CardController::indexAction',
                '_route' => 'card_home',
              ),
            ),
          ),
          '/encyclopedie/recherche' => 
          array (
            48 => 
            array (
              'host' => NULL,
              'method' => 
              array (
              ),
              'priority' => 48,
              'forceSlash' => true,
              'options' => 
              array (
                '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',
                '_route' => 'encyclopedia_search',
              ),
            ),
          ),
          '/dictionnaire/noms-propres' => 
          array (
            50 => 
            array (
              'host' => NULL,
              'method' => 
              array (
              ),
              'priority' => 50,
              'forceSlash' => true,
              'options' => 
              array (
                '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',
                '_route' => 'proper_name',
              ),
            ),
          ),
          '/proverbe' => 
          array (
            51 => 
            array (
              'host' => NULL,
              'method' => 
              array (
              ),
              'priority' => 51,
              'forceSlash' => true,
              'options' => 
              array (
                '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',
                '_route' => 'proverb',
              ),
            ),
          ),
);;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $staticMatch = $this->staticMatch($pathinfo, $allow);
        $dynamicMatch = $this->dynamicMatch($pathinfo, $allow, $staticMatch ? $staticMatch['priority'] : null);

        // We don't need to compare the priorities
        // Because dynamicMatch returns a route only if
        // no static route have been found with a lowest priority
        if (null !== $dynamicMatch) {
            return $dynamicMatch['options'];
        }
        if (null !== $staticMatch) {
            return $staticMatch['options'];
        }

        throw ($allow !== array()) ?
            new MethodNotAllowedException(array_unique($allow))
            :
            new ResourceNotFoundException();
    }
    private function staticMatch($pathinfo, &$allow = array())
    {
        $context = $this->context;
        $request = $this->request;
        $staticRoutes = $this->staticRoutes;

        $trimmedPathInfo = rtrim($pathinfo, '/');

        if (isset($staticRoutes[$trimmedPathInfo])) {
            $routes = $staticRoutes[$trimmedPathInfo];
            foreach ($routes as $route) {
                if (
                    ($route['method'] === array() || in_array($request->getMethod(), $route['method']))
                    &&
                    ($route['host'] === null || preg_match($route['host'], $context->getHost()))
                ) {
                    // If both are equals ==> pathinfo doesn't have a trailing slash
                    if ($trimmedPathInfo === $pathinfo && $route['forceSlash']) {
                       // Will be if (false) or if (true) ==> OpCode Optimizer will remove useless code
                       if (1) {
                           return array(
                               'priority' => $route['priority'],
                               'options' => $this->redirect($pathinfo . '/', $route['options']['_route'])
                           );
                       } else {
                           return null;
                       }
                    }
                    return $route;
                }
                if ($route['method'] !== array() && !in_array($request->getMethod(), $route['method'])) {
                    $allow = array_merge($allow, $route['method']);
                }
            }
        }

        return null;
    }
    private function dynamicMatch($pathinfo, &$allow = array(), $maxPriority = null)
    {
        $context = $this->context;
        $request = $this->request;

if (preg_match('~^(?|/dictionnaire/fr/_wdt/([^/]+)(\t{1})\t{9}|/dictionnaire/fr/_profiler/info/([^/]+)(\t{2})\t{8}|/dictionnaire/fr/_profiler/([^/]+)/search/results(\t{3})\t{7}|/dictionnaire/fr/_profiler/([^/]+)(\t{4})\t{6}|/dictionnaire/fr/_profiler/([^/]+)/router(\t{5})\t{5}|/dictionnaire/fr/_profiler/([^/]+)/exception(\t{6})\t{4}|/dictionnaire/fr/_profiler/([^/]+)/exception\.css(\t{7})\t{3}|/dictionnaire/fr/_configurator/step/([^/]+)(\t{8})\t{2}|/dictionnaire/fr/_error/(\d+)(?:\.([^/]+))?(\t{9})\t{1}|/dictionnaire/fr/definition/([^\x00-\x1f/]+)/?(\t{10})\t{0})$~s', $pathinfo . '										', $rawMatch)) {
$end = end($rawMatch);
if ( $end === '	') {    $matches = array();$matches['token'] = $rawMatch[1];
        // _wdt
        if (true) {
            return array(
                            'priority' => 0,
                            'options' => $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',))
                         );
        }
}if ($maxPriority &&  5 > $maxPriority ) {
                    return null;
                }if ( $end === '		') {    $matches = array();$matches['about'] = $rawMatch[1];
        // _profiler_info
        if (true) {
            return array(
                            'priority' => 5,
                            'options' => $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',))
                         );
        }
}if ($maxPriority &&  7 > $maxPriority ) {
                    return null;
                }if ( $end === '			') {    $matches = array();$matches['token'] = $rawMatch[1];
        // _profiler_search_results
        if (true) {
            return array(
                            'priority' => 7,
                            'options' => $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',))
                         );
        }
}if ($maxPriority &&  8 > $maxPriority ) {
                    return null;
                }if ( $end === '				') {    $matches = array();$matches['token'] = $rawMatch[1];
        // _profiler
        if (true) {
            return array(
                            'priority' => 8,
                            'options' => $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',))
                         );
        }
}if ($maxPriority &&  9 > $maxPriority ) {
                    return null;
                }if ( $end === '					') {    $matches = array();$matches['token'] = $rawMatch[1];
        // _profiler_router
        if (true) {
            return array(
                            'priority' => 9,
                            'options' => $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',))
                         );
        }
}if ($maxPriority &&  10 > $maxPriority ) {
                    return null;
                }if ( $end === '						') {    $matches = array();$matches['token'] = $rawMatch[1];
        // _profiler_exception
        if (true) {
            return array(
                            'priority' => 10,
                            'options' => $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',))
                         );
        }
}if ($maxPriority &&  11 > $maxPriority ) {
                    return null;
                }if ( $end === '							') {    $matches = array();$matches['token'] = $rawMatch[1];
        // _profiler_exception_css
        if (true) {
            return array(
                            'priority' => 11,
                            'options' => $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',))
                         );
        }
}if ($maxPriority &&  13 > $maxPriority ) {
                    return null;
                }if ( $end === '								') {    $matches = array();$matches['index'] = $rawMatch[1];
        // _configurator_step
        if (true) {
            return array(
                            'priority' => 13,
                            'options' => $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',))
                         );
        }
}if ($maxPriority &&  15 > $maxPriority ) {
                    return null;
                }if ( $end === '									') {    $matches = array();$matches['code'] = $rawMatch[1];
        // _twig_error_test
        if (true) {
            return array(
                            'priority' => 15,
                            'options' => $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',))
                         );
        }
}if ($maxPriority &&  16 > $maxPriority ) {
                    return null;
                }if ( $end === '										') {    $matches = array();$matches['slug'] = $rawMatch[1];
        // dictionary_definition
        if (true) {
            if (substr($pathinfo, -1) !== '/') {
                return array(
                    'priority' => 16,
                    'options' => $this->redirect($pathinfo.'/', 'dictionary_definition')
                );
            }
            return array(
                            'priority' => 16,
                            'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_definition')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\DefinitionController::indexAction',))
                         );
        }
}}
if (preg_match('~^(?|/dictionnaire/fr/citation/([a-z0-9-]+)/(\d+)/?(\t{1})\t{9}|/dictionnaire/fr/expression/([a-z0-9-]+)/(\d+)/?(\t{2})\t{8}|/dictionnaire/fr/evenement/([a-z0-9-]+)/(\d+)/?(\t{3})\t{7}|/dictionnaire/fr/synonyme/([a-z0-9-]+)/?(\t{4})\t{6}|/dictionnaire/fr/liste\-(theme|usage|type)/?(\t{5})\t{5}|/dictionnaire/fr/(theme|usage|type)/([a-z0-9-]+)/(\d+)/?(\t{6})\t{4}|/dictionnaire/fr/abecedaire/([a-z0-9]{1,2})/(\d+)/?(\t{7})\t{3}|/dictionnaire/fr/recherche\-top/(\d+)/?(\t{8})\t{2}|/dictionnaire/fr/edit/([a-z0-9-]+)/?(\t{9})\t{1}|/dictionnaire/fr/edit/([a-z0-9-]+)/(\t{10})\t{0})$~s', $pathinfo . '										', $rawMatch)) {
$end = end($rawMatch);
if ($maxPriority &&  17 > $maxPriority ) {
                    return null;
                }if ( $end === '	') {    $matches = array();$matches['slug'] = $rawMatch[1];
        // dictionary_citation
        if (true) {
            if (substr($pathinfo, -1) !== '/') {
                return array(
                    'priority' => 17,
                    'options' => $this->redirect($pathinfo.'/', 'dictionary_citation')
                );
            }
            return array(
                            'priority' => 17,
                            'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_citation')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\DefinitionController::citationAction',  'page' => '2',))
                         );
        }
}if ($maxPriority &&  18 > $maxPriority ) {
                    return null;
                }if ( $end === '		') {    $matches = array();$matches['slug'] = $rawMatch[1];
        // dictionary_expression
        if (true) {
            if (substr($pathinfo, -1) !== '/') {
                return array(
                    'priority' => 18,
                    'options' => $this->redirect($pathinfo.'/', 'dictionary_expression')
                );
            }
            return array(
                            'priority' => 18,
                            'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_expression')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\DefinitionController::expressionAction',  'page' => '2',))
                         );
        }
}if ($maxPriority &&  19 > $maxPriority ) {
                    return null;
                }if ( $end === '			') {    $matches = array();$matches['slug'] = $rawMatch[1];
        // dictionary_event
        if (true) {
            if (substr($pathinfo, -1) !== '/') {
                return array(
                    'priority' => 19,
                    'options' => $this->redirect($pathinfo.'/', 'dictionary_event')
                );
            }
            return array(
                            'priority' => 19,
                            'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_event')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\DefinitionController::eventAction',  'page' => '2',))
                         );
        }
}if ($maxPriority &&  20 > $maxPriority ) {
                    return null;
                }if ( $end === '				') {    $matches = array();$matches['slug'] = $rawMatch[1];
        // dictionary_synonym
        if (true) {
            if (substr($pathinfo, -1) !== '/') {
                return array(
                    'priority' => 20,
                    'options' => $this->redirect($pathinfo.'/', 'dictionary_synonym')
                );
            }
            return array(
                            'priority' => 20,
                            'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_synonym')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\DefinitionController::synonymAction',))
                         );
        }
}if ($maxPriority &&  21 > $maxPriority ) {
                    return null;
                }if ( $end === '					') {    $matches = array();$matches['slug'] = $rawMatch[1];
        // dictionary_tagsList
        if (true) {
            if (substr($pathinfo, -1) !== '/') {
                return array(
                    'priority' => 21,
                    'options' => $this->redirect($pathinfo.'/', 'dictionary_tagsList')
                );
            }
            return array(
                            'priority' => 21,
                            'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_tagsList')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\TagController::listAction',))
                         );
        }
}if ($maxPriority &&  22 > $maxPriority ) {
                    return null;
                }if ( $end === '						') {    $matches = array();$matches['type'] = $rawMatch[1];
        // dictionary_wordsList
        if (true) {
            if (substr($pathinfo, -1) !== '/') {
                return array(
                    'priority' => 22,
                    'options' => $this->redirect($pathinfo.'/', 'dictionary_wordsList')
                );
            }
            return array(
                            'priority' => 22,
                            'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_wordsList')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\TagController::listWordsAction',  'page' => '1',))
                         );
        }
}if ($maxPriority &&  24 > $maxPriority ) {
                    return null;
                }if ( $end === '							') {    $matches = array();$matches['letter'] = $rawMatch[1];
        // dictionary_letters
        if (true) {
            if (substr($pathinfo, -1) !== '/') {
                return array(
                    'priority' => 24,
                    'options' => $this->redirect($pathinfo.'/', 'dictionary_letters')
                );
            }
            return array(
                            'priority' => 24,
                            'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_letters')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\AbcBookController::letterAction',))
                         );
        }
}if ($maxPriority &&  27 > $maxPriority ) {
                    return null;
                }if ( $end === '								') {    $matches = array();$matches['page'] = $rawMatch[1];
        // dictionary_topSearchPages
        if (true) {
            if (substr($pathinfo, -1) !== '/') {
                return array(
                    'priority' => 27,
                    'options' => $this->redirect($pathinfo.'/', 'dictionary_topSearchPages')
                );
            }
            return array(
                            'priority' => 27,
                            'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_topSearchPages')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\SearchController::topSearchAction',  'page' => '1',))
                         );
        }
}if ($maxPriority &&  31 > $maxPriority ) {
                    return null;
                }if ( $end === '									') {    $matches = array();$matches['slug'] = $rawMatch[1];
        // dictionary_edit
        if (true) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_dictionary_edit;
            }

            if (substr($pathinfo, -1) !== '/') {
                return array(
                    'priority' => 31,
                    'options' => $this->redirect($pathinfo.'/', 'dictionary_edit')
                );
            }
            return array(
                            'priority' => 31,
                            'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_edit')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\EditController::indexAction',))
                         );
        }
        not_dictionary_edit:
}if ($maxPriority &&  32 > $maxPriority ) {
                    return null;
                }if ( $end === '										') {    $matches = array();$matches['slug'] = $rawMatch[1];
        // dictionary_edit_update
        if (true) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_dictionary_edit_update;
            }

            return array(
                            'priority' => 32,
                            'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_edit_update')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\EditController::updateAction',))
                         );
        }
        not_dictionary_edit_update:
}}
if (preg_match('~^(?|/dictionnaire/fr/conjugaison/([a-z0-9-]+)/?(\t{1})\t{7}|/dictionnaire/fr/sens/([a-z0-9-]+)/?(\t{2})\t{6}|/histoire/jour/(\d+)/(\d+)/a/1/0/1/index\.shtml(\t{3})\t{5}|/histoire/annee/(-?\d+)/a/1/1/index\.shtml(\t{4})\t{4}|/histoire/categorie/evenement/(\d+)/1/a/(\d+)/([\w-]+)\.shtml(\t{5})\t{3}|/citation/(\d+)/([\w-]+)/?(\t{6})\t{2}|/citation/auteur/([\w-]+)/(\d+)/?(\t{7})\t{1}|/expression/langue\-francaise/(\d+)/([\w-]+)/?(\t{8})\t{0})$~s', $pathinfo . '								', $rawMatch)) {
$end = end($rawMatch);
if ($maxPriority &&  33 > $maxPriority ) {
                    return null;
                }if ( $end === '	') {    $matches = array();$matches['slug'] = $rawMatch[1];
        // dictionary_conjugation
        if (true) {
            if (substr($pathinfo, -1) !== '/') {
                return array(
                    'priority' => 33,
                    'options' => $this->redirect($pathinfo.'/', 'dictionary_conjugation')
                );
            }
            return array(
                            'priority' => 33,
                            'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_conjugation')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\DefinitionController::conjugationAction',))
                         );
        }
}if ($maxPriority &&  34 > $maxPriority ) {
                    return null;
                }if ( $end === '		') {    $matches = array();$matches['slug'] = $rawMatch[1];
        // dictionary_meaning
        if (true) {
            if (substr($pathinfo, -1) !== '/') {
                return array(
                    'priority' => 34,
                    'options' => $this->redirect($pathinfo.'/', 'dictionary_meaning')
                );
            }
            return array(
                            'priority' => 34,
                            'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_meaning')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\DefinitionController::meaningAction',))
                         );
        }
}if ($maxPriority &&  35 > $maxPriority ) {
                    return null;
                }if ( $end === '			') {    $matches = array();$matches['day'] = $rawMatch[1];
        // history_day
        if (true) {
            return array(
                            'priority' => 35,
                            'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'history_day')), array (  '_controller' => 'CCMBenchmarkHistoryBundle:Default:index',))
                         );
        }
}if ($maxPriority &&  36 > $maxPriority ) {
                    return null;
                }if ( $end === '				') {    $matches = array();$matches['year'] = $rawMatch[1];
        // history_year
        if (true) {
            return array(
                            'priority' => 36,
                            'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'history_year')), array (  '_controller' => 'CCMBenchmarkHistoryBundle:Default:index',))
                         );
        }
}if ($maxPriority &&  37 > $maxPriority ) {
                    return null;
                }if ( $end === '					') {    $matches = array();$matches['categoryId'] = $rawMatch[1];
        // history_event
        if (true) {
            return array(
                            'priority' => 37,
                            'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'history_event')), array (  '_controller' => 'CCMBenchmarkHistoryBundle:Default:index',))
                         );
        }
}if ($maxPriority &&  39 > $maxPriority ) {
                    return null;
                }if ( $end === '						') {    $matches = array();$matches['id'] = $rawMatch[1];
        // citation_citation
        if (true) {
            if (substr($pathinfo, -1) !== '/') {
                return array(
                    'priority' => 39,
                    'options' => $this->redirect($pathinfo.'/', 'citation_citation')
                );
            }
            return array(
                            'priority' => 39,
                            'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'citation_citation')), array (  '_controller' => 'CCMBenchmarkCitationBundle:Default:index',))
                         );
        }
}if ($maxPriority &&  40 > $maxPriority ) {
                    return null;
                }if ( $end === '							') {    $matches = array();$matches['slug'] = $rawMatch[1];
        // citation_author
        if (true) {
            if (substr($pathinfo, -1) !== '/') {
                return array(
                    'priority' => 40,
                    'options' => $this->redirect($pathinfo.'/', 'citation_author')
                );
            }
            return array(
                            'priority' => 40,
                            'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'citation_author')), array (  '_controller' => 'CCMBenchmarkCitationBundle:Default:index',))
                         );
        }
}if ($maxPriority &&  42 > $maxPriority ) {
                    return null;
                }if ( $end === '								') {    $matches = array();$matches['id'] = $rawMatch[1];
        // expression_expression
        if (true) {
            if (substr($pathinfo, -1) !== '/') {
                return array(
                    'priority' => 42,
                    'options' => $this->redirect($pathinfo.'/', 'expression_expression')
                );
            }
            return array(
                            'priority' => 42,
                            'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'expression_expression')), array (  '_controller' => 'CCMBenchmarkExpressionBundle:Default:index',))
                         );
        }
}}
        $host = $this->context->getHost();

        if (preg_match('#^www\\.local\\.linternaute\\.com$#si', $host, $hostMatches)) {
    if (preg_match('~^(?|/cartes\-de\-voeux/card/([^\x00-\x1f/]+)/([^\x00-\x1f/]+)/?(\t{1})\t{3}|/cartes\-de\-voeux/card/preview/([^\x00-\x1f/]+)/([^\x00-\x1f/]+)/?(\t{2})\t{2}|/cartes\-de\-voeux/create/([0-9]+)\-([a-z0-9-]+)/?(\t{3})\t{1}|/cartes\-de\-voeux/thanks/([^\x00-\x1f/]+)/([^\x00-\x1f/]+)/?(\t{4})\t{0})$~s', $pathinfo . '				', $rawMatch)) {
    $end = end($rawMatch);
    if ($maxPriority &&  43 > $maxPriority ) {
                        return null;
                    }if ( $end === '	') {    $matches = array();$matches['id'] = $rawMatch[1];
            // card_display
            if (true) {
                if (substr($pathinfo, -1) !== '/') {
                    return array(
                        'priority' => 43,
                        'options' => $this->redirect($pathinfo.'/', 'card_display')
                    );
                }
                return array(
                                'priority' => 43,
                                'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'card_display')), array (  '_controller' => 'CCMBenchmark\\GreetingCardBundle\\Controller\\CardController::showAction',))
                             );
            }
    }if ($maxPriority &&  44 > $maxPriority ) {
                        return null;
                    }if ( $end === '		') {    $matches = array();$matches['id'] = $rawMatch[1];
            // card_display_sender
            if (true) {
                if (substr($pathinfo, -1) !== '/') {
                    return array(
                        'priority' => 44,
                        'options' => $this->redirect($pathinfo.'/', 'card_display_sender')
                    );
                }
                return array(
                                'priority' => 44,
                                'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'card_display_sender')), array (  '_controller' => 'CCMBenchmark\\GreetingCardBundle\\Controller\\CardController::showSenderAction',))
                             );
            }
    }if ($maxPriority &&  45 > $maxPriority ) {
                        return null;
                    }if ( $end === '			') {    $matches = array();$matches['id_card'] = $rawMatch[1];
            // card_create
            if (true) {
                if (substr($pathinfo, -1) !== '/') {
                    return array(
                        'priority' => 45,
                        'options' => $this->redirect($pathinfo.'/', 'card_create')
                    );
                }
                return array(
                                'priority' => 45,
                                'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'card_create')), array (  '_controller' => 'CCMBenchmark\\GreetingCardBundle\\Controller\\CardController::createAction',))
                             );
            }
    }if ($maxPriority &&  46 > $maxPriority ) {
                        return null;
                    }if ( $end === '				') {    $matches = array();$matches['id'] = $rawMatch[1];
            // card_create_thanks
            if (true) {
                if (substr($pathinfo, -1) !== '/') {
                    return array(
                        'priority' => 46,
                        'options' => $this->redirect($pathinfo.'/', 'card_create_thanks')
                    );
                }
                return array(
                                'priority' => 46,
                                'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'card_create_thanks')), array (  '_controller' => 'CCMBenchmark\\GreetingCardBundle\\Controller\\CardController::thanksAction',))
                             );
            }
    }}
        }

if (preg_match('~^(?|/encyclopedie/recherche/id\-([^/]+)/?(\t{1})\t{0})$~s', $pathinfo . '	', $rawMatch)) {
$end = end($rawMatch);
if ($maxPriority &&  49 > $maxPriority ) {
                    return null;
                }if ( $end === '	') {    $matches = array();$matches['applicationId'] = $rawMatch[1];
        // encyclopedia_application_search
        if (true) {
            if (substr($pathinfo, -1) !== '/') {
                return array(
                    'priority' => 49,
                    'options' => $this->redirect($pathinfo.'/', 'encyclopedia_application_search')
                );
            }
            return array(
                            'priority' => 49,
                            'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'encyclopedia_application_search')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',))
                         );
        }
}}
        return null;
    }
}
