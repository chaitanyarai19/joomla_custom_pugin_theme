<?php
defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;

require_once __DIR__ . '/helper.php';

$apiData = ModApiDataHelper::getApiData();
require ModuleHelper::getLayoutPath('mod_apidata', 'default');
