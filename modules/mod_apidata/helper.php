<?php
defined('_JEXEC') or die;

use Joomla\CMS\Http\HttpFactory;

class ModApiDataHelper
{
    public static function getApiData()
    {
        $http = HttpFactory::getHttp();
        $response = $http->get('https://jsonplaceholder.typicode.com/posts');
        return json_decode($response->body, true);
    }
}
