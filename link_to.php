<?php

function link_to(array $params): string
{
    return match ($params['type']) {
        'default' => "Output: <a href=\"{$params['href']}\">{$params['content']}</a>" . "\n",
        'email' => "Output: <a href=\"mailto:{$params['content']}\">{$params['content']}</a>" . "\n",
        'tel' => "Output: <a href=\"tel:" . preg_replace('/[+\s]/', '', $params['content']) . "\">{$params['content']}</a>" . "\n",
    };
}
