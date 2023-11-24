<?php

function path(string $alias): string
{
    if (isset(PATHS[$alias])) {
        return PATHS[$alias];
    }
    throw new Exception('Alias does not exist.');
}

function url(string $path = ''): string
{
    return SITE['protocol'] . '://' . SITE['domain'] . SITE['base_url'] . $path;
}