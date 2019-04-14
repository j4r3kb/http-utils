<?php

declare(strict_types = 1);

namespace Skrypnet\HttpUtils\Tests;

use PHPUnit\Framework\TestCase;
use ReflectionException;
use Skrypnet\HttpUtils\HttpMethods;

/**
 * @author Jarosław Brzychcy <jaroslaw.brzychcy@enp.pl>
 */
class HttpMethodsTest extends TestCase
{
    /**
     * @dataProvider isHttpMethodProvider
     *
     * @param string $method
     * @param bool   $expected
     *
     * @throws ReflectionException
     */
    public function testIsHttpMethod(string $method, bool $expected): void
    {
        $this->assertEquals($expected, HttpMethods::isHttpMethod($method));
    }

    /**
     * @return array
     */
    public function isHttpMethodProvider(): array
    {
        return [
            ['CONNECT', true],
            ['DELETE', true],
            ['GET', true],
            ['HEAD', true],
            ['OPTIONS', true],
            ['PATCH', true],
            ['POST', true],
            ['PUT', true],
            ['TRACE', true],
            ['trace', false],
            ['FALSE', false],
            ['', false],
        ];
    }
}
