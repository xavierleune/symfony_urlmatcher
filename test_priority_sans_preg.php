<?php

require(__DIR__ . '/../../vendor/autoload.php');
require(__DIR__ . '/../../src/Symfony/Component/Routing/RequestContext.php');
//require(__DIR__ . '/../../src/');
require(__DIR__ . '/../../src/Symfony/Component/Routing/Matcher/RedirectableUrlMatcherInterface.php');
require(__DIR__ . '/../../src/Symfony/Component/Routing/Matcher/RequestMatcherInterface.php');
require(__DIR__ . '/../../src/Symfony/Component/Routing/RequestContextAwareInterface.php');
require(__DIR__ . '/../../src/Symfony/Component/Routing/Matcher/UrlMatcherInterface.php');
require(__DIR__ . '/../../src/Symfony/Component/Routing/Matcher/UrlMatcher.php');
require(__DIR__ . '/../../src/Symfony/Component/Routing/Matcher/RedirectableUrlMatcher.php');
require(__DIR__ . '/../../src/Symfony/Bundle/FrameworkBundle/Routing/RedirectableUrlMatcher.php');
require('priority.php');

use Symfony\Component\Routing\RequestContext;

$context = new RequestContext();
$matcher = new appDevUrlMatcher($context);

if ($withBlackfire) {
    $blackfire = new \Blackfire\Client();
    $probe = $blackfire->createProbe();
}

$max = 100000;

$start = microtime(true);
// Best case ==> first route
for ($i=0; $i < $max; $i++) {
    $matcher->match('/dictionnaire/fr/');
}
echo 'Best case : ' . (microtime(true) - $start) . "\n";

// Middle case

$start = microtime(true);
for ($i=0; $i < $max; $i++) {
    $matcher->match('/dictionnaire/fr/recherche-top/');
}
echo 'Middle case : ' . (microtime(true) - $start) . "\n";
// Worst case found
for ($i=0; $i < $max; $i++) {
    $matcher->match('/dictionnaire/fr/definition/manger');
}
echo 'Worst case : ' . (microtime(true) - $start) . "\n";


// Worst case not found
$start = microtime(true);
for ($i=0; $i < $max; $i++) {
    try {
        $matcher->match('/dictionnaire/fr/recherches');
    } catch (\Exception $e) {
        // I don't care, it's not the point here
    }
}

echo 'Not found : ' . (microtime(true) - $start) . "\n";

if ($withBlackfire) {
    $blackfire->endProbe($probe);
}
