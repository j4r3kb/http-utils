<?php

declare(strict_types = 1);

namespace Skrypnet\HttpUtils;

use ReflectionException;

/**
 * @author Jarosław Brzychcy <info@skrypnet.pl>
 */
class HttpResponseHeaders extends AbstractConstantList
{
    public const ACCEPT_PATCH = 'Accept-Patch';
    public const ACCEPT_RANGES = 'Accept-Ranges';
    public const ACCESS_CONTROL_ALLOW_CREDENTIALS = 'Access-Control-Allow-Credentials';
    public const ACCESS_CONTROL_ALLOW_HEADERS = 'Access-Control-Allow-Headers';
    public const ACCESS_CONTROL_ALLOW_METHODS = 'Access-Control-Allow-Methods';
    public const ACCESS_CONTROL_ALLOW_ORIGIN = 'Access-Control-Allow-Origin';
    public const ACCESS_CONTROL_EXPOSE_HEADERS = 'Access-Control-Expose-Headers';
    public const ACCESS_CONTROL_MAX_AGE = 'Access-Control-Max-Age';
    public const AGE = 'Age';
    public const ALLOW = 'Allow';
    public const ALT_SVC = 'Alt-Svc';
    public const CACHE_CONTROL = 'Cache-Control';
    public const CONNECTION = 'Connection';
    public const CONTENT_DISPOSITION = 'Content-Disposition';
    public const CONTENT_ENCODING = 'Content-Encoding';
    public const CONTENT_LANGUAGE = 'Content-Language';
    public const CONTENT_LENGTH = 'Content-Length';
    public const CONTENT_LOCATION = 'Content-Location';
    public const CONTENT_MD5 = 'Content-MD5';
    public const CONTENT_RANGE = 'Content-Range';
    public const CONTENT_SECURITY_POLICY = 'Content-Security-Policy';
    public const CONTENT_TYPE = 'Content-Type';
    public const DATE = 'Date';
    public const DELTA_BASE = 'Delta-Base';
    public const ETAG = 'ETag';
    public const EXPIRES = 'Expires';
    public const IM = 'IM';
    public const LAST_MODIFIED = 'Last-Modified';
    public const LINK = 'Link';
    public const LOCATION = 'Location';
    public const P3P = 'P3P';
    public const PRAGMA = 'Pragma';
    public const PROXY_AUTHENTICATE = 'Proxy-Authenticate';
    public const PUBLIC_KEY_PINS = 'Public-Key-Pins';
    public const REFRESH = 'Refresh';
    public const RETRY_AFTER = 'Retry-After';
    public const SERVER = 'Server';
    public const SET_COOKIE = 'Set-Cookie';
    public const STATUS = 'Status';
    public const STRICT_TRANSPORT_SECURITY = 'Strict-Transport-Security';
    public const TIMING_ALLOW_ORIGIN = 'Timing-Allow-Origin';
    public const TK = 'Tk';
    public const TRAILER = 'Trailer';
    public const TRANSFER_ENCODING = 'Transfer-Encoding';
    public const UPGRADE = 'Upgrade';
    public const VARY = 'Vary';
    public const VIA = 'Via';
    public const WARNING = 'Warning';
    public const WWW_AUTHENTICATE = 'WWW-Authenticate';
    public const X_CONTENT_DURATION = 'X-Content-Duration';
    public const X_CONTENT_SECURITY_POLICY = 'X-Content-Security-Policy';
    public const X_CONTENT_TYPE_OPTIONS = 'X-Content-Type-Options';
    public const X_CORRELATION_ID = 'X-Correlation-ID';
    public const X_FRAME_OPTIONS = 'X-Frame-Options';
    public const X_POWERED_BY = 'X-Powered-By';
    public const X_REQUEST_ID = 'X-Request-ID';
    public const X_UA_COMPATIBLE = 'X-UA-Compatible';
    public const X_WEBKIT_CSP = 'X-WebKit-CSP';
    public const X_XSS_PROTECTION = 'X-XSS-Protection';

    /**
     * @param string $header
     *
     * @return bool
     * @throws ReflectionException
     */
    public static function isResponseHeader(string $header): bool
    {
        return isset(array_flip(self::getAll())[$header]);
    }
}
