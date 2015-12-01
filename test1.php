<?php

require(__DIR__ . '/../../vendor/autoload.php');
require('original.php');

use Symfony\Component\Routing\RequestContext;

$context = new RequestContext();
$matcher = new appDevUrlMatcher($context);

print_r($matcher->match('/dictionnaire/fr'));
print_r($matcher->match('/dictionnaire/fr'));
