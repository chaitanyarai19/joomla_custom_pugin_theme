<?php
defined('_JEXEC') or die;

foreach ($apiData as $item) {
    echo "<h3>{$item['title']}</h3><p>{$item['body']}</p>";
}
