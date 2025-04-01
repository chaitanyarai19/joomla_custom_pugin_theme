<?php
defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;

require_once __DIR__ . '/helper.php';

$apiData = ModApiDataHelper::getApiData($params); // Pass module parameters
require ModuleHelper::getLayoutPath('mod_apidata', 'default');
