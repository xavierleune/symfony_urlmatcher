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
require('original.php');

use Symfony\Component\Routing\RequestContext;

$context = new RequestContext();
$matcher = new appDevUrlMatcher($context);

$blackfire = new \Blackfire\Client();
$probe = $blackfire->createProbe();

print_r($matcher->match('/dictionnaire/fr'));
print_r($matcher->match('/dictionnaire/fr'));

$blackfire->endProbe($probe);
