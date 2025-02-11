


$config = new PhpCsFixer\Config();
$config->setParallelConfig(ParallelConfigFactory::detect());
return $config->setRules(
    [
        // rule sets
        '@PHP83Migration'               => true,
        '@PhpCsFixer'                   => true,
        '@PhpCsFixer:risky'             => true,
        '@PSR12'                        => true,
        '@PSR12:risky'                  => true,
        'declare_strict_types'          => true,
        'strict_param'                  => true,
        'no_unused_imports'             => true,
        'single_space_around_construct' => true,
        'statement_indentation'         => true,
        'void_return'                   => true,

        // disabled rules
        'native_function_invocation'    => false, // annoying
        'php_unit_data_provider_name'   => false, // bloody annoying long test names
        'static_lambda'                 => false, // breaks the Response macro for API's.
        'phpdoc_summary'                => false, // annoying.
        'comment_to_phpdoc'             => false, // breaks phpstan lines in combination with PHPStorm.
        'type_declaration_spaces'       => false,
        'cast_spaces'                   => false,
        'phpdoc_to_comment' => false, // do not overrule single line comment style, breaks phpstan.

        // complex rules
        'array_syntax'                  => ['syntax' => 'short'],
        'binary_operator_spaces'        => [
            'default'   => 'at_least_single_space',
            'operators' => [
                '=>'  => 'align_single_space_by_scope',
                '='   => 'align_single_space_minimal_by_scope',
                '??=' => 'align_single_space_minimal_by_scope',
            ],
        ],
    ])
              ->setFinder($finder);
