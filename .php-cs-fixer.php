<?php

declare(strict_types=1);

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$config = new Config();
$config->setRiskyAllowed(true);
$config->setRules([
    '@PhpCsFixer' => true,
    '@PhpCsFixer:risky' => true,
    '@PHP80Migration:risky' => true,
    '@PHP81Migration' => true,
    'protected_to_private' => false,
]);

$finder = new Finder();
$finder->in([
    __DIR__.'/src',
    __DIR__.'/config',
    __DIR__.'/tests',
]);
$finder->notPath('#c3.php#');
$finder->append([__FILE__]);

$config->setFinder($finder);

return $config;
