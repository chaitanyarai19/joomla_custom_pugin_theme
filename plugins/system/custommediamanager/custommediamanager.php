<?php
defined('_JEXEC') or die;

use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Factory;

class PlgSystemCustomMediaManager extends CMSPlugin
{
    protected $app;

    public function onContentBeforeSave($context, $article, $isNew)
    {
        if ($context !== 'com_media.file') {
            return;
        }

        $allowedExtensions = ['jpg', 'png', 'gif', 'pdf'];
        $file = Factory::getApplication()->input->files->get('Filedata', array(), 'array');

        if (!in_array(pathinfo($file['name'], PATHINFO_EXTENSION), $allowedExtensions)) {
            Factory::getApplication()->enqueueMessage('Invalid file type. Allowed types: jpg, png, gif, pdf', 'error');
            return false;
        }

        return true;
    }
}
