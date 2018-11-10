<?php

$header = <<<'EOF'
This file is part of PHP CS Fixer.

(c) Fabien Potencier <fabien@symfony.com>
    Dariusz Rumiński <dariusz.ruminski@gmail.com>

This source file is subject to the MIT license that is bundled
with this source code in the file LICENSE.
EOF;

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        'psr0'                                 => false,
        'psr4'                                 => false,
        '@Symfony'                             => true,
        '@PSR2'                                => true,
        'ordered_imports'                      => true,
        'phpdoc_order'                         => true,
        'array_syntax'                         => ['syntax' => 'short'],
        'declare_equal_normalize'              => ['space'  => 'single'],
        'phpdoc_add_missing_param_annotation'  => true,
        'concat_space'                         => ['spacing' => 'one'],
        'return_type_declaration'              => ['space_before' => 'none'],
        'short_scalar_cast'                    => true,
        'doctrine_annotation_spaces'           => true,
        'binary_operator_spaces' => [
            'align_equals'       => true,
            'align_double_arrow' => true,
        ],

    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude('tests/Fixtures')
            ->in(__DIR__)
    )
    ;
