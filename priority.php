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
          '/encyclopedie/recherche' => 
          array (
            43 => 
            array (
              'host' => NULL,
              'method' => 
              array (
              ),
              'priority' => 43,
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
            45 => 
            array (
              'host' => NULL,
              'method' => 
              array (
              ),
              'priority' => 45,
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
            46 => 
            array (
              'host' => NULL,
              'method' => 
              array (
              ),
              'priority' => 46,
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
        $staticMatch = $this->staticMatch($pathinfo, $allow);
        $dynamicMatch = $this->dynamicMatch($pathinfo, $allow, $staticMatch ? $staticMatch['priority'] : null);

        /*var_dump($pathinfo);
        var_dump($staticMatch);
        var_dump($dynamicMatch);
*/
        // We don't need to compare the priorities
        // Because dynamicMatch returns a route only if
        // no static route have been found
        if (null !== $dynamicMatch) {
            return $dynamicMatch['options'];
        }
        if (null !== $staticMatch) {
            return $staticMatch['options'];
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
    private function staticMatch($pathinfo, &$allow = array())
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
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
                       if (1) {
                           return array('priority' => $route['priority'], 'options' => $this->redirect($pathinfo . '/', $route['options']['_route']));
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
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/dictionnaire/fr')) {
            if (0 === strpos($pathinfo, '/dictionnaire/fr/_')) {
                // _wdt
                if ($maxPriority && 0 > $maxPriority) {
                    return null;
                }


                if (0 === strpos($pathinfo, '/dictionnaire/fr/_wdt') && preg_match('#^/dictionnaire/fr/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return array('priority' => 0, 'options' => $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',)));
                }

                if (0 === strpos($pathinfo, '/dictionnaire/fr/_profiler')) {
                    // _profiler_info
                    if ($maxPriority && 5 > $maxPriority) {
                        return null;
                    }


                    if (0 === strpos($pathinfo, '/dictionnaire/fr/_profiler/info') && preg_match('#^/dictionnaire/fr/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return array('priority' => 5, 'options' => $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',)));
                    }

                    // _profiler_search_results
                    if ($maxPriority && 7 > $maxPriority) {
                        return null;
                    }


                    if (preg_match('#^/dictionnaire/fr/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                        return array('priority' => 7, 'options' => $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',)));
                    }

                    // _profiler
                    if ($maxPriority && 8 > $maxPriority) {
                        return null;
                    }


                    if (preg_match('#^/dictionnaire/fr/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        return array('priority' => 8, 'options' => $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',)));
                    }

                    // _profiler_router
                    if ($maxPriority && 9 > $maxPriority) {
                        return null;
                    }


                    if (preg_match('#^/dictionnaire/fr/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                        return array('priority' => 9, 'options' => $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',)));
                    }

                    // _profiler_exception
                    if ($maxPriority && 10 > $maxPriority) {
                        return null;
                    }


                    if (preg_match('#^/dictionnaire/fr/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                        return array('priority' => 10, 'options' => $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',)));
                    }

                    // _profiler_exception_css
                    if ($maxPriority && 11 > $maxPriority) {
                        return null;
                    }


                    if (preg_match('#^/dictionnaire/fr/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                        return array('priority' => 11, 'options' => $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',)));
                    }

                }

                // _configurator_step
                if ($maxPriority && 13 > $maxPriority) {
                    return null;
                }


                if (0 === strpos($pathinfo, '/dictionnaire/fr/_configurator/step') && preg_match('#^/dictionnaire/fr/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return array('priority' => 13, 'options' => $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)));
                }

                // _twig_error_test
                if ($maxPriority && 15 > $maxPriority) {
                    return null;
                }


                if (0 === strpos($pathinfo, '/dictionnaire/fr/_error') && preg_match('#^/dictionnaire/fr/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    return array('priority' => 15, 'options' => $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',)));
                }

            }

            // dictionary_definition
            if ($maxPriority && 16 > $maxPriority) {
                return null;
            }


            if (0 === strpos($pathinfo, '/dictionnaire/fr/definition') && preg_match('#^/dictionnaire/fr/definition/(?P<slug>[^\\x00-\\x1f/]+)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return array('priority' => 16, 'options' => $this->redirect($pathinfo.'/', 'dictionary_definition'));
                }

                return array('priority' => 16, 'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_definition')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\DefinitionController::indexAction',)));
            }

            // dictionary_citation
            if ($maxPriority && 17 > $maxPriority) {
                return null;
            }


            if (0 === strpos($pathinfo, '/dictionnaire/fr/citation') && preg_match('#^/dictionnaire/fr/citation/(?P<slug>[a-z0-9-]+)/(?P<page>\\d+)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return array('priority' => 17, 'options' => $this->redirect($pathinfo.'/', 'dictionary_citation'));
                }

                return array('priority' => 17, 'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_citation')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\DefinitionController::citationAction',  'page' => '2',)));
            }

            if (0 === strpos($pathinfo, '/dictionnaire/fr/e')) {
                // dictionary_expression
                if ($maxPriority && 18 > $maxPriority) {
                    return null;
                }


                if (0 === strpos($pathinfo, '/dictionnaire/fr/expression') && preg_match('#^/dictionnaire/fr/expression/(?P<slug>[a-z0-9-]+)/(?P<page>\\d+)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return array('priority' => 18, 'options' => $this->redirect($pathinfo.'/', 'dictionary_expression'));
                    }

                    return array('priority' => 18, 'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_expression')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\DefinitionController::expressionAction',  'page' => '2',)));
                }

                // dictionary_event
                if ($maxPriority && 19 > $maxPriority) {
                    return null;
                }


                if (0 === strpos($pathinfo, '/dictionnaire/fr/evenement') && preg_match('#^/dictionnaire/fr/evenement/(?P<slug>[a-z0-9-]+)/(?P<page>\\d+)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return array('priority' => 19, 'options' => $this->redirect($pathinfo.'/', 'dictionary_event'));
                    }

                    return array('priority' => 19, 'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_event')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\DefinitionController::eventAction',  'page' => '2',)));
                }

            }

            // dictionary_synonym
            if ($maxPriority && 20 > $maxPriority) {
                return null;
            }


            if (0 === strpos($pathinfo, '/dictionnaire/fr/synonyme') && preg_match('#^/dictionnaire/fr/synonyme/(?P<slug>[a-z0-9-]+)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return array('priority' => 20, 'options' => $this->redirect($pathinfo.'/', 'dictionary_synonym'));
                }

                return array('priority' => 20, 'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_synonym')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\DefinitionController::synonymAction',)));
            }

            // dictionary_tagsList
            if ($maxPriority && 21 > $maxPriority) {
                return null;
            }


            if (0 === strpos($pathinfo, '/dictionnaire/fr/liste') && preg_match('#^/dictionnaire/fr/liste\\-(?P<slug>theme|usage|type)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return array('priority' => 21, 'options' => $this->redirect($pathinfo.'/', 'dictionary_tagsList'));
                }

                return array('priority' => 21, 'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_tagsList')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\TagController::listAction',)));
            }

            // dictionary_wordsList
            if ($maxPriority && 22 > $maxPriority) {
                return null;
            }


            if (preg_match('#^/dictionnaire/fr/(?P<type>theme|usage|type)/(?P<slug>[a-z0-9-]+)/(?P<page>\\d+)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return array('priority' => 22, 'options' => $this->redirect($pathinfo.'/', 'dictionary_wordsList'));
                }

                return array('priority' => 22, 'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_wordsList')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\TagController::listWordsAction',  'page' => '1',)));
            }

            // dictionary_letters
            if ($maxPriority && 24 > $maxPriority) {
                return null;
            }


            if (0 === strpos($pathinfo, '/dictionnaire/fr/abecedaire') && preg_match('#^/dictionnaire/fr/abecedaire/(?P<letter>[a-z0-9]{1,2})/(?P<page>\\d+)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return array('priority' => 24, 'options' => $this->redirect($pathinfo.'/', 'dictionary_letters'));
                }

                return array('priority' => 24, 'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_letters')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\AbcBookController::letterAction',)));
            }

            // dictionary_topSearchPages
            if ($maxPriority && 27 > $maxPriority) {
                return null;
            }


            if (0 === strpos($pathinfo, '/dictionnaire/fr/recherche-top') && preg_match('#^/dictionnaire/fr/recherche\\-top/(?P<page>\\d+)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return array('priority' => 27, 'options' => $this->redirect($pathinfo.'/', 'dictionary_topSearchPages'));
                }

                return array('priority' => 27, 'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_topSearchPages')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\SearchController::topSearchAction',  'page' => '1',)));
            }

            if (0 === strpos($pathinfo, '/dictionnaire/fr/edit')) {
                // dictionary_edit
                if ($maxPriority && 31 > $maxPriority) {
                    return null;
                }


                if (preg_match('#^/dictionnaire/fr/edit/(?P<slug>[a-z0-9-]+)/?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_dictionary_edit;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return array('priority' => 31, 'options' => $this->redirect($pathinfo.'/', 'dictionary_edit'));
                    }

                    return array('priority' => 31, 'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_edit')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\EditController::indexAction',)));
                }
                not_dictionary_edit:

                // dictionary_edit_update
                if ($maxPriority && 32 > $maxPriority) {
                    return null;
                }


                if (preg_match('#^/dictionnaire/fr/edit/(?P<slug>[a-z0-9-]+)/$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_dictionary_edit_update;
                    }

                    return array('priority' => 32, 'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_edit_update')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\EditController::updateAction',)));
                }
                not_dictionary_edit_update:

            }

            // dictionary_conjugation
            if ($maxPriority && 33 > $maxPriority) {
                return null;
            }


            if (0 === strpos($pathinfo, '/dictionnaire/fr/conjugaison') && preg_match('#^/dictionnaire/fr/conjugaison/(?P<slug>[a-z0-9-]+)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return array('priority' => 33, 'options' => $this->redirect($pathinfo.'/', 'dictionary_conjugation'));
                }

                return array('priority' => 33, 'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_conjugation')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\DefinitionController::conjugationAction',)));
            }

            // dictionary_meaning
            if ($maxPriority && 34 > $maxPriority) {
                return null;
            }


            if (0 === strpos($pathinfo, '/dictionnaire/fr/sens') && preg_match('#^/dictionnaire/fr/sens/(?P<slug>[a-z0-9-]+)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return array('priority' => 34, 'options' => $this->redirect($pathinfo.'/', 'dictionary_meaning'));
                }

                return array('priority' => 34, 'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_meaning')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\DefinitionController::meaningAction',)));
            }

        }

        if (0 === strpos($pathinfo, '/histoire')) {
            // history_day
            if ($maxPriority && 35 > $maxPriority) {
                return null;
            }


            if (0 === strpos($pathinfo, '/histoire/jour') && preg_match('#^/histoire/jour/(?P<day>\\d+)/(?P<month>\\d+)/a/1/0/1/index\\.shtml$#s', $pathinfo, $matches)) {
                return array('priority' => 35, 'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'history_day')), array (  '_controller' => 'CCMBenchmarkHistoryBundle:Default:index',)));
            }

            // history_year
            if ($maxPriority && 36 > $maxPriority) {
                return null;
            }


            if (0 === strpos($pathinfo, '/histoire/annee') && preg_match('#^/histoire/annee/(?P<year>-?\\d+)/a/1/1/index\\.shtml$#s', $pathinfo, $matches)) {
                return array('priority' => 36, 'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'history_year')), array (  '_controller' => 'CCMBenchmarkHistoryBundle:Default:index',)));
            }

            // history_event
            if ($maxPriority && 37 > $maxPriority) {
                return null;
            }


            if (0 === strpos($pathinfo, '/histoire/categorie/evenement') && preg_match('#^/histoire/categorie/evenement/(?P<categoryId>\\d+)/1/a/(?P<id>\\d+)/(?P<slug>[\\w-]+)\\.shtml$#s', $pathinfo, $matches)) {
                return array('priority' => 37, 'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'history_event')), array (  '_controller' => 'CCMBenchmarkHistoryBundle:Default:index',)));
            }

        }

        if (0 === strpos($pathinfo, '/citation')) {
            // citation_citation
            if ($maxPriority && 39 > $maxPriority) {
                return null;
            }


            if (preg_match('#^/citation/(?P<id>\\d+)/(?P<slug>[\\w-]+)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return array('priority' => 39, 'options' => $this->redirect($pathinfo.'/', 'citation_citation'));
                }

                return array('priority' => 39, 'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'citation_citation')), array (  '_controller' => 'CCMBenchmarkCitationBundle:Default:index',)));
            }

            // citation_author
            if ($maxPriority && 40 > $maxPriority) {
                return null;
            }


            if (0 === strpos($pathinfo, '/citation/auteur') && preg_match('#^/citation/auteur/(?P<slug>[\\w-]+)/(?P<id>\\d+)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return array('priority' => 40, 'options' => $this->redirect($pathinfo.'/', 'citation_author'));
                }

                return array('priority' => 40, 'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'citation_author')), array (  '_controller' => 'CCMBenchmarkCitationBundle:Default:index',)));
            }

        }

        if (0 === strpos($pathinfo, '/e')) {
            // expression_expression
            if ($maxPriority && 42 > $maxPriority) {
                return null;
            }


            if (0 === strpos($pathinfo, '/expression/langue-francaise') && preg_match('#^/expression/langue\\-francaise/(?P<id>\\d+)/(?P<slug>[\\w-]+)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return array('priority' => 42, 'options' => $this->redirect($pathinfo.'/', 'expression_expression'));
                }

                return array('priority' => 42, 'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'expression_expression')), array (  '_controller' => 'CCMBenchmarkExpressionBundle:Default:index',)));
            }

            // encyclopedia_application_search
            if ($maxPriority && 44 > $maxPriority) {
                return null;
            }


            if (0 === strpos($pathinfo, '/encyclopedie/recherche/id') && preg_match('#^/encyclopedie/recherche/id\\-(?P<applicationId>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return array('priority' => 44, 'options' => $this->redirect($pathinfo.'/', 'encyclopedia_application_search'));
                }

                return array('priority' => 44, 'options' => $this->mergeDefaults(array_replace($matches, array('_route' => 'encyclopedia_application_search')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',)));
            }

        }
        return null;
        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
