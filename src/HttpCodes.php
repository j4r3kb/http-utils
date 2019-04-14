<?php

declare(strict_types = 1);

namespace Skrypnet\HttpUtils;

/**
 * @author Jarosław Brzychcy <jaroslaw.brzychcy@enp.pl>
 */
class HttpCodes extends AbstractConstantList
{
    public const CONTINUE = 100;
    public const SWITCHING_PROTOCOLS = 101;
    public const PROCESSING = 102;
    public const EARLY_HINTS = 103;

    public const OK = 200;
    public const CREATED = 201;
    public const ACCEPTED = 202;
    public const NONAUTHORITATIVE_INFORMATION = 203;
    public const NO_CONTENT = 204;
    public const RESET_CONTENT = 205;
    public const PARTIAL_CONTENT = 206;
    public const MULTI_STATUS = 207;
    public const ALREADY_REPORTED = 208;
    public const IM_USED = 226;

    public const MULTIPLE_CHOICES = 300;
    public const MOVED_PERMANENTLY = 301;
    public const FOUND = 302;
    public const SEE_OTHER = 303;
    public const NOT_MODIFIED = 304;
    public const USE_PROXY = 305;
    public const UNUSED = 306;
    public const TEMPORARY_REDIRECT = 307;
    public const PERMANENT_REDIRECT = 308;

    public const BAD_REQUEST = 400;
    public const UNAUTHORIZED  = 401;
    public const PAYMENT_REQUIRED = 402;
    public const FORBIDDEN = 403;
    public const NOT_FOUND = 404;
    public const METHOD_NOT_ALLOWED = 405;
    public const NOT_ACCEPTABLE = 406;
    public const PROXY_AUTHENTICATION_REQUIRED = 407;
    public const REQUEST_TIMEOUT = 408;
    public const CONFLICT = 409;
    public const GONE = 410;
    public const LENGTH_REQUIRED = 411;
    public const PRECONDITION_FAILED = 412;
    public const REQUEST_ENTITY_TOO_LARGE = 413;
    public const REQUEST_URI_TOO_LONG = 414;
    public const UNSUPPORTED_MEDIA_TYPE = 415;
    public const REQUESTED_RANGE_NOT_SATISFIABLE = 416;
    public const EXPECTATION_FAILED = 417;
    public const UNPROCESSABLE_ENTITY = 422;
    public const LOCKED = 423;
    public const FAILED_DEPENDENCY = 424;
    public const UPGRADE_REQUIRED = 426;
    public const PRECONDITION_REQUIRED = 428;
    public const TOO_MANY_REQUESTS = 429;
    public const REQUEST_HEADER_FIELDS_TOO_LARGE = 431;
    public const NO_RESPONSE = 444;
    public const RETRY_WITH = 449;
    public const BLOCKED_BY_WINDOWS_PARENTAL_CONTROLS = 450;
    public const UNAVAILABLE_FOR_LEGAL_REASONS = 451;
    public const REQUEST_HEADER_TOO_LARGE = 494;
    public const SSL_CERTIFICATE_ERROR = 495;
    public const SSL_CERTIFICATE_REQUIRED = 496;
    public const HTTP_REQUEST_SENT_TO_HTTPS_PORT = 497;
    public const CLIENT_CLOSED_REQUEST = 499;

    public const INTERNAL_SERVER_ERROR = 500;
    public const NOT_IMPLEMENTED = 501;
    public const BAD_GATEWAY = 502;
    public const SERVICE_UNAVAILABLE = 503;
    public const GATEWAY_TIMEOUT = 504;
    public const HTTP_VERSION_NOT_SUPPORTED = 505;
    public const VARIANT_ALSO_NEGOTIATES = 506;
    public const INSUFFICIENT_STORAGE = 507;
    public const LOOP_DETECTED = 508;
    public const BANDWIDTH_LIMIT_EXCEEDED = 509;
    public const NOT_EXTENDED = 510;
    public const NETWORK_AUTHENTICATION_REQUIRED = 511;
    public const NETWORK_READ_TIMEOUT_ERROR = 598;
    public const NETWORK_CONNECT_TIMEOUT_ERROR = 599;

    /**
     * @param int $code
     *
     * @return bool
     */
    public static function isInformative(int $code): bool
    {
        return self::isFromGroup($code, 100);
    }

    /**
     * @param int $code
     *
     * @return bool
     */
    public static function isSuccess(int $code): bool
    {
        return self::isFromGroup($code, 200);
    }

    /**
     * @param int $code
     *
     * @return bool
     */
    public static function isRedirect(int $code): bool
    {
        return self::isFromGroup($code, 300);
    }

    /**
     * @param int $code
     *
     * @return bool
     */
    public static function isClientError(int $code): bool
    {
        return self::isFromGroup($code, 400);
    }

    /**
     * @param int $code
     *
     * @return bool
     */
    public static function isServerError(int $code): bool
    {
        return self::isFromGroup($code, 500);
    }

    /**
     * @param int $code
     * @param int $groupCode
     *
     * @return bool
     */
    private static function isFromGroup(int $code, int $groupCode): bool
    {
        return (int) floor($code / 100) === $groupCode / 100;
    }
}
