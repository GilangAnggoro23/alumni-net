<?php

function getUriSegmentFile()
{
    $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri_segments = explode('/', $uri_path);
    return $uri_segments[2];
}
