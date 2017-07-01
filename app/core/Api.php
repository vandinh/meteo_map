<?php

namespace Core;

class Api {

    private static $curl;

    /*
     * curl init and options
     */

    private static function init() {
        self::$curl = curl_init();
        curl_setopt(self::$curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt(self::$curl, CURLOPT_HEADER, false);
        curl_setopt(self::$curl, CURLOPT_HTTPHEADER, array(
            'Authorization: ' . API_TYPE . ' ' . API_TOKEN,
            'Content-Type: application/json',
            'Accept: application/json'));
    }

    /*
     * Get request, send endpoint and get response
     */

    public static function get($endpoint) {
        self::init();
        curl_setopt(self::$curl, CURLOPT_URL, API_URL . $endpoint);
        $content = curl_exec(self::$curl);
        curl_close(self::$curl);

        return $content;
    }

}
