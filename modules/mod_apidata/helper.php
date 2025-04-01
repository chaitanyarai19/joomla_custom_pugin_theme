<?php
defined('_JEXEC') or die;

use Joomla\CMS\Http\HttpFactory;
use Joomla\CMS\Log\Log;

class ModApiDataHelper
{
    public static function getApiData($params)
    {
        $apiUrl = $params->get('api_url', 'https://jsonplaceholder.typicode.com/posts');

        if (empty($apiUrl)) {
            return [['title' => 'Error', 'body' => 'API URL is not set in module settings.']];
        }

        try {
            $http = HttpFactory::getHttp();
            $response = $http->get($apiUrl);
            $data = json_decode($response->body, true);

            // Ensure data is an array before returning
            if (!is_array($data)) {
                return [['title' => 'Error', 'body' => 'Invalid API response format.']];
            }

            return $data;
        } catch (Exception $e) {
            Log::add('API Fetch Error: ' . $e->getMessage(), Log::ERROR, 'mod_apidata');
            return [['title' => 'Error', 'body' => 'Failed to fetch API data.']];
        }
    }
}
