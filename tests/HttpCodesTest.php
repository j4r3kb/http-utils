<?php

declare(strict_types = 1);

namespace Skrypnet\HttpUtils\Tests;

use PHPUnit\Framework\TestCase;
use Skrypnet\HttpUtils\HttpCodes;

/**
 * @author Jarosław Brzychcy <info@skrypnet.pl>
 */
class HttpCodesTest extends TestCase
{
    public function testGetAllReturnsArray(): void
    {
        $this->assertIsArray(HttpCodes::getAll());
    }

    /**
     * @dataProvider isInformativeProvider
     * @param int  $code
     * @param bool $expected
     */
    public function testIsInformative(int $code, bool $expected): void
    {
        $this->assertEquals($expected, HttpCodes::isInformative($code));
    }

    /**
     * @dataProvider isSuccessProvider
     * @param int  $code
     * @param bool $expected
     */
    public function testIsSuccess(int $code, bool $expected): void
    {
        $this->assertEquals($expected, HttpCodes::isSuccess($code));
    }

    /**
     * @dataProvider isRedirectProvider
     * @param int  $code
     * @param bool $expected
     */
    public function testIsRedirect(int $code, bool $expected): void
    {
        $this->assertEquals($expected, HttpCodes::isRedirect($code));
    }

    /**
     * @dataProvider isClientErrorProvider
     * @param int  $code
     * @param bool $expected
     */
    public function testIsClientError(int $code, bool $expected): void
    {
        $this->assertEquals($expected, HttpCodes::isClientError($code));
    }

    /**
     * @dataProvider isServerErrorProvider
     * @param int  $code
     * @param bool $expected
     */
    public function testIsServerError(int $code, bool $expected): void
    {
        $this->assertEquals($expected, HttpCodes::isServerError($code));
    }



    /**
     * @return array
     */
    public function isInformativeProvider(): array
    {
        return [
            [-100, false],
            [0, false],
            [99, false],
            [100, true],
            [199, true],
            [202, false],
            [303, false],
            [404, false],
            [505, false],
        ];
    }

    /**
     * @return array
     */
    public function isSuccessProvider(): array
    {
        return [
            [-100, false],
            [0, false],
            [99, false],
            [100, false],
            [199, false],
            [200, true],
            [299, true],
            [303, false],
            [404, false],
            [505, false],
        ];
    }

    /**
     * @return array
     */
    public function isRedirectProvider(): array
    {
        return [
            [-100, false],
            [0, false],
            [99, false],
            [100, false],
            [200, false],
            [299, false],
            [300, true],
            [399, true],
            [404, false],
            [505, false],
        ];
    }

    /**
     * @return array
     */
    public function isClientErrorProvider(): array
    {
        return [
            [-100, false],
            [0, false],
            [99, false],
            [100, false],
            [200, false],
            [300, false],
            [399, false],
            [400, true],
            [499, true],
            [505, false],
        ];
    }

    /**
     * @return array
     */
    public function isServerErrorProvider(): array
    {
        return [
            [-100, false],
            [0, false],
            [99, false],
            [100, false],
            [200, false],
            [300, false],
            [400, false],
            [499, false],
            [500, true],
            [599, true],
            [600, false],
        ];
    }
}
