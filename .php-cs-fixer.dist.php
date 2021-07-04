<?php

declare(strict_types=1);

use Kraska\CodingStandard\PhpCsFixerRuleSetFactory;

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__);

return (new PhpCsFixer\Config())
    ->setRules(PhpCsFixerRuleSetFactory::create())
    ->setRiskyAllowed(true)
    ->setFinder($finder);
