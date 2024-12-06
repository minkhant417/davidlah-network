<?php

if (!function_exists('getYouTubeVideoId')) {
    function getYouTubeVideoId($url)
    {
        $pattern = '/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:watch\?v=|embed\/|v\/|shorts\/|.+\?v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})(?:[&?]|$)/';
        preg_match($pattern, $url, $matches);
        return isset($matches[1]) && strlen($matches[1]) === 11 ? $matches[1] : null;
    }
}
