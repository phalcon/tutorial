<?php

declare(strict_types=1);

namespace Tutorial\Tests\Functional;

use Phalcon\Mvc\Application;
use Phalcon\Talon\PHPUnit\AbstractFunctionalTestCase;

final class SmokeTest extends AbstractFunctionalTestCase
{
    public function testHomePageRenders(): void
    {
        $this->dispatch('/');

        $content = $this->getContent();

        $this->assertStringContainsString('Hello', $content);
        $this->assertStringContainsString('Sarah Connor', $content);
    }

    public function testSignupPageRenders(): void
    {
        $this->dispatch('/signup');

        $content = $this->getContent();

        $this->assertStringContainsString('<form', $content);
        $this->assertStringContainsString('Register', $content);
    }

    protected function appFactory(): callable
    {
        /** @var callable(): Application $factory */
        $factory = require dirname(__DIR__, 2) . '/src/bootstrap.php';

        return $factory;
    }
}
