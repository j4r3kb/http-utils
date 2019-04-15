<?php

declare(strict_types = 1);

namespace Skrypnet\HttpUtils\Tests;

use PHPUnit\Framework\TestCase;
use ReflectionException;
use Skrypnet\HttpUtils\HttpResponseHeaders;

/**
 * @author Jarosław Brzychcy <info@skrypnet.pl>
 */
class HttpResponseHeadersTest extends TestCase
{
    /**
     * @dataProvider isResponseHeaderProvider
     *
     * @param string $header
     * @param bool   $expected
     *
     * @throws ReflectionException
     */
    public function testIsResponseHeader(string $header, bool $expected): void
    {
        $this->assertEquals($expected, HttpResponseHeaders::isResponseHeader($header));
    }

    /**
     * @return array
     */
    public function isResponseHeaderProvider(): array
    {
        return [
            ['Access-Control-Expose-Headers', true],
            ['access-control-expose-headers', false],
            ['ACCESS-CONTROL-EXPOSE-HEADERS', false],
            ['Access_Control_Expose_Headers', false],
            ['Allow', true],
            ['Proxy-Authenticate', true],
            ['Retry-After', true],
            ['X-Content-Security-Policy', true],
            ['FALSE', false],
            ['', false],
        ];
    }
}
