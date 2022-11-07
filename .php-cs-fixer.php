<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->in(__DIR__);

$config = new PhpCsFixer\Config();
return $config->setRules([
        '@PhpCsFixer' => true,
        'array_syntax' => ['syntax' => 'short'],
        'curly_braces_position' => ['control_structures_opening_brace' => 'same_line'],
        'curly_braces_position' => ['functions_opening_brace' => 'same_line'],
        'no_multiple_statements_per_line' => true
    ])
    ->setFinder($finder);
