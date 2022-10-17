<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\FunctionNotation\FunctionTypehintSpaceFixer;
use PhpCsFixer\Fixer\Operator\NotOperatorWithSuccessorSpaceFixer;
use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\CodingStandard\Fixer\ArrayNotation\ArrayListItemNewlineFixer;
use Symplify\CodingStandard\Fixer\ArrayNotation\ArrayOpenerAndCloserNewlineFixer;
use Symplify\CodingStandard\Fixer\LineLength\DocBlockLineLengthFixer;
use Symplify\CodingStandard\Fixer\LineLength\LineLengthFixer;
use Symplify\EasyCodingStandard\ValueObject\Option;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ContainerConfigurator $containerConfigurator): void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(
        Option::PATHS,
        [
            __DIR__ . '/../Classes',
            __DIR__ . '/../Tests',
            __DIR__ . '/ecs.php',
        ]
    );

    $containerConfigurator->services()
        ->set(LineLengthFixer::class)
        ->call('configure', [[
            LineLengthFixer::LINE_LENGTH => 140,
            LineLengthFixer::INLINE_SHORT_LINES => false,
        ]]);

    // Skip Rules and Sniffer
    $parameters->set(
        Option::SKIP,
        [
            // Default Skips
            NotOperatorWithSuccessorSpaceFixer::class => null,
            DocBlockLineLengthFixer::class => null,
            ArrayListItemNewlineFixer::class => null,
            ArrayOpenerAndCloserNewlineFixer::class => null,
            FunctionTypehintSpaceFixer::class => null,
            // @todo strict php
            DeclareStrictTypesFixer::class => null,
        ]
    );
};
