<?php

/**
 * This file generated by Mezzio\Tooling\Factory\ConfigInjector.
 *
 * Modifications should be kept at a minimum, and restricted to adding or
 * removing factory definitions; other dependency types may be overwritten
 * when regenerating this file via mezzio-tooling commands.
 */
 
declare(strict_types=1);

return [
    'dependencies' => [
        'factories' => [
            App\Handler\BalanceHandler::class => App\Handler\BalanceHandlerFactory::class,
            App\Handler\EventHandler::class => App\Handler\EventHandlerFactory::class,
            App\Handler\ResetHandler::class => App\Handler\ResetHandlerFactory::class,
        ],
    ],
];
