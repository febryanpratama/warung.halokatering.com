<?php

namespace App\Helpers;

class Format
{
    public static function meta($text)
    {
        $metaTags = [];

        // Parse <meta> tags
        $pattern = '/<meta\s+(?:name|property)="([^"]+)"\s+content="([^"]+)">/';
        preg_match_all($pattern, $text, $matches, PREG_SET_ORDER);

        foreach ($matches as $match) {
            $metaTags[] = '<meta name="' . htmlspecialchars($match[1]) . '" content="' . htmlspecialchars($match[2]) . '">';
        }

        // Parse <title> tag
        if (preg_match('/<title>(.*?)<\/title>/', $text, $titleMatch)) {
            array_unshift($metaTags, '<title>' . htmlspecialchars($titleMatch[1]) . '</title>');
        }

        // Return meta tags as a single string
        return implode("\n", $metaTags);
    }
}