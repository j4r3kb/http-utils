<?php

declare(strict_types = 1);

namespace Skrypnet\HttpUtils\Tests;

use PHPUnit\Framework\TestCase;
use ReflectionException;
use Skrypnet\HttpUtils\HttpRequestHeaders;

/**
 * @author Jarosław Brzychcy <info@skrypnet.pl>
 */
class HttpRequestHeadersTest extends TestCase
{
    /**
     * @dataProvider isRequestHeaderProvider
     *
     * @param string $header
     * @param bool   $expected
     *
     * @throws ReflectionException
     */
    public function testIsRequestHeader(string $header, bool $expected): void
    {
        $this->assertEquals($expected, HttpRequestHeaders::isRequestHeader($header));
    }

    /**
     * @return array
     */
    public function isRequestHeaderProvider(): array
    {
        return [
            ['Access-Control-Request-Headers', true],
            ['access-control-request-headers', false],
            ['ACCESS-CONTROL-REQUEST-HEADERS', false],
            ['Access_Control_Request_Headers', false],
            ['Content-MD5', true],
            ['HTTP2-Settings', true],
            ['X-ATT-DeviceId', true],
            ['X-Content-Security-Policy', false],
            ['FALSE', false],
            ['', false],
        ];
    }
}
