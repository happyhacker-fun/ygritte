<?php
/**
 * Created by PhpStorm.
 * User: Frost Wong <frostwong@gmail.com>
 * Date: 15/07/2017
 * Time: 00:11
 */

namespace Ygritte;


use Psr\Http\Message\MessageInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class ContentType
{
    private static $readableRequest = [
        'application/x-www-form-urlencoded',
        'application/json',
        'application/javascript',
        'application/xml',
        'text/plain',
        'text/xml',
        'text/html',
        'text',
    ];

    private static $readableResponse = [
        'text/plain',
        'text/xml',
        'text/html',
        'application/json',
        'application/javascript',
        'application/xml',
        'text/plain',
        'text/xml',
        'text/html',
        'text',
    ];

    public static function isRequestReadable(RequestInterface $request)
    {
        $contentType = self::getContentType($request);

        return in_array($contentType, self::$readableRequest);
    }

    private static function getContentType(MessageInterface $message)
    {
        $contentTypeHeader = $message->getHeader('Content-Type');
        if ($contentTypeHeader) {
            return $contentTypeHeader[0];
        }

        return 'text';
    }

    public static function isResponseReadable(ResponseInterface $response)
    {
        $contentType = self::getContentType($response);

        return in_array($contentType, self::$readableResponse);
    }

    public static function getReadableRequest()
    {
        return self::$readableRequest;
    }

    public static function getReadableResponse()
    {
        return self::$readableResponse;
    }
}