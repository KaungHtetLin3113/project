<?php

namespace Helpers;

class HTTP
{
    static $base = "http://localhost:90/project";

    static function redirect(String $page, $q = "")
    {

        $url = static::$base . $page;
        if ($q) $url .= "?$q";

        header("location: $url");
        exit();
    }
}
