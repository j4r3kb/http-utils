<?php

declare(strict_types = 1);

namespace Skrypnet\HttpUtils;

use ReflectionException;

/**
 * @author Jarosław Brzychcy <info@skrypnet.pl>
 */
class HttpMethods extends AbstractConstantList
{
    public const CONNECT = 'CONNECT';
    public const DELETE = 'DELETE';
    public const GET = 'GET';
    public const HEAD = 'HEAD';
    public const OPTIONS = 'OPTIONS';
    public const PATCH = 'PATCH';
    public const POST = 'POST';
    public const PUT = 'PUT';
    public const TRACE = 'TRACE';

    /**
     * @param string $method
     *
     * @return bool
     * @throws ReflectionException
     */
    public static function isHttpMethod(string $method): bool
    {
        return isset(self::getAll()[$method]);
    }
}
