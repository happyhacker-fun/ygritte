<?php
/**
 * Created by PhpStorm.
 * User: Frost Wong <frostwong@gmail.com>
 * Date: 15/07/2017
 * Time: 00:11
 */

namespace Ygritte;


class ContentType
{
    private static $readable = [
        'application/json',
        'application/xml',
        'text/plain',
        'text/xml',
        'text/html',
    ];

    public static function isReadable($contentType)
    {
        return in_array($contentType, self::$readable);
    }
}