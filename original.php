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
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/dictionnaire/fr')) {
            if (0 === strpos($pathinfo, '/dictionnaire/fr/_')) {
                // _wdt
                if (0 === strpos($pathinfo, '/dictionnaire/fr/_wdt') && preg_match('#^/dictionnaire/fr/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
                }

                if (0 === strpos($pathinfo, '/dictionnaire/fr/_profiler')) {
                    // _profiler_home
                    if (rtrim($pathinfo, '/') === '/dictionnaire/fr/_profiler') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', '_profiler_home');
                        }

                        return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    }

                    if (0 === strpos($pathinfo, '/dictionnaire/fr/_profiler/search')) {
                        // _profiler_search
                        if ($pathinfo === '/dictionnaire/fr/_profiler/search') {
                            return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                        }

                        // _profiler_search_bar
                        if ($pathinfo === '/dictionnaire/fr/_profiler/search_bar') {
                            return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                        }

                    }

                    // _profiler_purge
                    if ($pathinfo === '/dictionnaire/fr/_profiler/purge') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                    }

                    // _profiler_info
                    if (0 === strpos($pathinfo, '/dictionnaire/fr/_profiler/info') && preg_match('#^/dictionnaire/fr/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_phpinfo
                    if ($pathinfo === '/dictionnaire/fr/_profiler/phpinfo') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                    }

                    // _profiler_search_results
                    if (preg_match('#^/dictionnaire/fr/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                    }

                    // _profiler
                    if (preg_match('#^/dictionnaire/fr/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                    }

                    // _profiler_router
                    if (preg_match('#^/dictionnaire/fr/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                    }

                    // _profiler_exception
                    if (preg_match('#^/dictionnaire/fr/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                    }

                    // _profiler_exception_css
                    if (preg_match('#^/dictionnaire/fr/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/dictionnaire/fr/_configurator')) {
                    // _configurator_home
                    if (rtrim($pathinfo, '/') === '/dictionnaire/fr/_configurator') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', '_configurator_home');
                        }

                        return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                    }

                    // _configurator_step
                    if (0 === strpos($pathinfo, '/dictionnaire/fr/_configurator/step') && preg_match('#^/dictionnaire/fr/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                    }

                    // _configurator_final
                    if ($pathinfo === '/dictionnaire/fr/_configurator/final') {
                        return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                    }

                }

                // _twig_error_test
                if (0 === strpos($pathinfo, '/dictionnaire/fr/_error') && preg_match('#^/dictionnaire/fr/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
                }

            }

            // dictionary_definition
            if (0 === strpos($pathinfo, '/dictionnaire/fr/definition') && preg_match('#^/dictionnaire/fr/definition/(?P<slug>[^\\x00-\\x1f/]+)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'dictionary_definition');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_definition')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\DefinitionController::indexAction',));
            }

            // dictionary_citation
            if (0 === strpos($pathinfo, '/dictionnaire/fr/citation') && preg_match('#^/dictionnaire/fr/citation/(?P<slug>[a-z0-9-]+)/(?P<page>\\d+)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'dictionary_citation');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_citation')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\DefinitionController::citationAction',  'page' => '2',));
            }

            if (0 === strpos($pathinfo, '/dictionnaire/fr/e')) {
                // dictionary_expression
                if (0 === strpos($pathinfo, '/dictionnaire/fr/expression') && preg_match('#^/dictionnaire/fr/expression/(?P<slug>[a-z0-9-]+)/(?P<page>\\d+)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'dictionary_expression');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_expression')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\DefinitionController::expressionAction',  'page' => '2',));
                }

                // dictionary_event
                if (0 === strpos($pathinfo, '/dictionnaire/fr/evenement') && preg_match('#^/dictionnaire/fr/evenement/(?P<slug>[a-z0-9-]+)/(?P<page>\\d+)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'dictionary_event');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_event')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\DefinitionController::eventAction',  'page' => '2',));
                }

            }

            // dictionary_synonym
            if (0 === strpos($pathinfo, '/dictionnaire/fr/synonyme') && preg_match('#^/dictionnaire/fr/synonyme/(?P<slug>[a-z0-9-]+)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'dictionary_synonym');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_synonym')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\DefinitionController::synonymAction',));
            }

            // dictionary_tagsList
            if (0 === strpos($pathinfo, '/dictionnaire/fr/liste') && preg_match('#^/dictionnaire/fr/liste\\-(?P<slug>theme|usage|type)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'dictionary_tagsList');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_tagsList')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\TagController::listAction',));
            }

            // dictionary_wordsList
            if (preg_match('#^/dictionnaire/fr/(?P<type>theme|usage|type)/(?P<slug>[a-z0-9-]+)/(?P<page>\\d+)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'dictionary_wordsList');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_wordsList')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\TagController::listWordsAction',  'page' => '1',));
            }

            if (0 === strpos($pathinfo, '/dictionnaire/fr/abecedaire')) {
                // dictionary_ABC_book
                if (rtrim($pathinfo, '/') === '/dictionnaire/fr/abecedaire') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'dictionary_ABC_book');
                    }

                    return array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\AbcBookController::indexAction',  '_route' => 'dictionary_ABC_book',);
                }

                // dictionary_letters
                if (preg_match('#^/dictionnaire/fr/abecedaire/(?P<letter>[a-z0-9]{1,2})/(?P<page>\\d+)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'dictionary_letters');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_letters')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\AbcBookController::letterAction',));
                }

            }

            if (0 === strpos($pathinfo, '/dictionnaire/fr/recherche')) {
                // dictionary_search_synonym
                if (rtrim($pathinfo, '/') === '/dictionnaire/fr/recherche/synonyme') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'dictionary_search_synonym');
                    }

                    return array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\SearchController::searchSynonymeAction',  '_route' => 'dictionary_search_synonym',);
                }

                if (0 === strpos($pathinfo, '/dictionnaire/fr/recherche-top')) {
                    // dictionary_topSearch
                    if (rtrim($pathinfo, '/') === '/dictionnaire/fr/recherche-top') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'dictionary_topSearch');
                        }

                        return array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\SearchController::topSearchAction',  '_route' => 'dictionary_topSearch',);
                    }

                    // dictionary_topSearchPages
                    if (preg_match('#^/dictionnaire/fr/recherche\\-top/(?P<page>\\d+)/?$#s', $pathinfo, $matches)) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'dictionary_topSearchPages');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_topSearchPages')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\SearchController::topSearchAction',  'page' => '1',));
                    }

                }

            }

            // dictionary_old_search
            if ($pathinfo === '/dictionnaire/fr/cgi/recherche/recherche.php') {
                return array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\SearchController::oldSearchAction',  '_route' => 'dictionary_old_search',);
            }

            // dictionary_search
            if (rtrim($pathinfo, '/') === '/dictionnaire/fr/recherche') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'dictionary_search');
                }

                return array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\SearchController::searchAction',  '_route' => 'dictionary_search',);
            }

            // dictionary_home
            if (rtrim($pathinfo, '/') === '/dictionnaire/fr') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'dictionary_home');
                }

                return array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\HomeController::indexAction',  '_route' => 'dictionary_home',);
            }

            if (0 === strpos($pathinfo, '/dictionnaire/fr/edit')) {
                // dictionary_edit
                if (preg_match('#^/dictionnaire/fr/edit/(?P<slug>[a-z0-9-]+)/?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_dictionary_edit;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'dictionary_edit');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_edit')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\EditController::indexAction',));
                }
                not_dictionary_edit:

                // dictionary_edit_update
                if (preg_match('#^/dictionnaire/fr/edit/(?P<slug>[a-z0-9-]+)/$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_dictionary_edit_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_edit_update')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\EditController::updateAction',));
                }
                not_dictionary_edit_update:

            }

            // dictionary_conjugation
            if (0 === strpos($pathinfo, '/dictionnaire/fr/conjugaison') && preg_match('#^/dictionnaire/fr/conjugaison/(?P<slug>[a-z0-9-]+)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'dictionary_conjugation');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_conjugation')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\DefinitionController::conjugationAction',));
            }

            // dictionary_meaning
            if (0 === strpos($pathinfo, '/dictionnaire/fr/sens') && preg_match('#^/dictionnaire/fr/sens/(?P<slug>[a-z0-9-]+)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'dictionary_meaning');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dictionary_meaning')), array (  '_controller' => 'CCMBenchmark\\DicoBundle\\Controller\\DefinitionController::meaningAction',));
            }

        }

        if (0 === strpos($pathinfo, '/histoire')) {
            // history_day
            if (0 === strpos($pathinfo, '/histoire/jour') && preg_match('#^/histoire/jour/(?P<day>\\d+)/(?P<month>\\d+)/a/1/0/1/index\\.shtml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'history_day')), array (  '_controller' => 'CCMBenchmarkHistoryBundle:Default:index',));
            }

            // history_year
            if (0 === strpos($pathinfo, '/histoire/annee') && preg_match('#^/histoire/annee/(?P<year>-?\\d+)/a/1/1/index\\.shtml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'history_year')), array (  '_controller' => 'CCMBenchmarkHistoryBundle:Default:index',));
            }

            // history_event
            if (0 === strpos($pathinfo, '/histoire/categorie/evenement') && preg_match('#^/histoire/categorie/evenement/(?P<categoryId>\\d+)/1/a/(?P<id>\\d+)/(?P<slug>[\\w-]+)\\.shtml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'history_event')), array (  '_controller' => 'CCMBenchmarkHistoryBundle:Default:index',));
            }

        }

        if (0 === strpos($pathinfo, '/citation')) {
            // citation_home
            if (rtrim($pathinfo, '/') === '/citation') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'citation_home');
                }

                return array (  '_controller' => 'CCMBenchmarkCitationBundle:Default:index',  '_route' => 'citation_home',);
            }

            // citation_citation
            if (preg_match('#^/citation/(?P<id>\\d+)/(?P<slug>[\\w-]+)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'citation_citation');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'citation_citation')), array (  '_controller' => 'CCMBenchmarkCitationBundle:Default:index',));
            }

            // citation_author
            if (0 === strpos($pathinfo, '/citation/auteur') && preg_match('#^/citation/auteur/(?P<slug>[\\w-]+)/(?P<id>\\d+)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'citation_author');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'citation_author')), array (  '_controller' => 'CCMBenchmarkCitationBundle:Default:index',));
            }

        }

        if (0 === strpos($pathinfo, '/e')) {
            if (0 === strpos($pathinfo, '/expression')) {
                // expression_home
                if (rtrim($pathinfo, '/') === '/expression') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'expression_home');
                    }

                    return array (  '_controller' => 'CCMBenchmarkExpressionBundle:Default:index',  '_route' => 'expression_home',);
                }

                // expression_expression
                if (0 === strpos($pathinfo, '/expression/langue-francaise') && preg_match('#^/expression/langue\\-francaise/(?P<id>\\d+)/(?P<slug>[\\w-]+)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'expression_expression');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'expression_expression')), array (  '_controller' => 'CCMBenchmarkExpressionBundle:Default:index',));
                }

            }

            if (0 === strpos($pathinfo, '/encyclopedie/recherche')) {
                // encyclopedia_search
                if (rtrim($pathinfo, '/') === '/encyclopedie/recherche') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'encyclopedia_search');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'encyclopedia_search',);
                }

                // encyclopedia_application_search
                if (0 === strpos($pathinfo, '/encyclopedie/recherche/id') && preg_match('#^/encyclopedie/recherche/id\\-(?P<applicationId>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'encyclopedia_application_search');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'encyclopedia_application_search')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',));
                }

            }

        }

        // proper_name
        if (rtrim($pathinfo, '/') === '/dictionnaire/noms-propres') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'proper_name');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'proper_name',);
        }

        // proverb
        if (rtrim($pathinfo, '/') === '/proverbe') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'proverb');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'proverb',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
