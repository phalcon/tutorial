<?php

/**
 * This file is part of the Phalcon Talon.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

use Phalcon\CodeQuality\PhpCsFixer\ConfigFactory;

$root = dirname(__DIR__);

return ConfigFactory::create(
    [
        $root . '/src',
        $root . '/public',
        $root . '/tests',
    ],
    $root . '/tests/_output/.php-cs-fixer.cache'
);
