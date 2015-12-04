<?php

require(__DIR__ . '/vendor/autoload.php');
require(__DIR__ . '/vendor/symfony/symfony/src/Symfony/Component/Routing/RequestContext.php');
//require(__DIR__ . '/vendor/symfony/symfony/src/');
require(__DIR__ . '/vendor/symfony/symfony/src/Symfony/Component/Routing/Matcher/RedirectableUrlMatcherInterface.php');
require(__DIR__ . '/vendor/symfony/symfony/src/Symfony/Component/Routing/Matcher/RequestMatcherInterface.php');
require(__DIR__ . '/vendor/symfony/symfony/src/Symfony/Component/Routing/RequestContextAwareInterface.php');
require(__DIR__ . '/vendor/symfony/symfony/src/Symfony/Component/Routing/Matcher/UrlMatcherInterface.php');
require(__DIR__ . '/vendor/symfony/symfony/src/Symfony/Component/Routing/Matcher/UrlMatcher.php');
require(__DIR__ . '/vendor/symfony/symfony/src/Symfony/Component/Routing/Matcher/RedirectableUrlMatcher.php');
require(__DIR__ . '/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Routing/RedirectableUrlMatcher.php');
require('priority.php');
require('original.php');

use Symfony\Component\Routing\RequestContext;

$context = new RequestContext();
$matcherPriority = new testPriority\appDevUrlMatcher($context);
$matcherOriginal = new appDevUrlMatcher($context);

echo "\n/dictionnaire/fr/_profiler : ";
var_dump($matcherOriginal->match('/dictionnaire/fr/_profiler') === $matcherPriority->match('/dictionnaire/fr/_profiler'));

if ($matcherOriginal->match('/dictionnaire/fr/_profiler') !== $matcherPriority->match('/dictionnaire/fr/_profiler')) {
    var_dump($matcherOriginal->match('/dictionnaire/fr/_profiler'));
    var_dump($matcherPriority->match('/dictionnaire/fr/_profiler'));
}
die;

echo "\n/dictionnaire/fr/_profiler/search : ";
var_dump($matcherOriginal->match('/dictionnaire/fr/_profiler/search') === $matcherPriority->match('/dictionnaire/fr/_profiler/search'));

echo "\n/dictionnaire/fr/_wdt/coucou : ";
var_dump($matcherOriginal->match('/dictionnaire/fr/_wdt/coucou') === $matcherPriority->match('/dictionnaire/fr/_wdt/coucou'));


