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
        public static function getSubdomain()
    {
        try {
            
            // curl ssl false
            $curl = curl_init();
            curl_setopt_array($curl, [
                CURLOPT_URL => "https://blog.indonesiacore.com/api/domain/1",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_SSL_VERIFYPEER => false,
            ]);
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
    
            if ($err) {
                return [];
            }
    
            $response = json_decode($response, true);
    
            // dd($response);
    
            return $response['data'] ?? [];
        } catch (\Exception $e) {
            // dd($e);
            // \Log::error("Error getting subdomain: " . $e->getMessage());
            return null;
        }
    }
}