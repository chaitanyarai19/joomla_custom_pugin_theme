<?php
defined('_JEXEC') or die;

if (empty($apiData) || !is_array($apiData)) {
    echo "<p>No data available from the API.</p>";
} else {
    foreach ($apiData as $user) {
        $name = isset($user['name']) ? $user['name'] : 'No Name';
        $email = isset($user['email']) ? $user['email'] : 'No Email';
        $phone = isset($user['phone']) ? $user['phone'] : 'No Phone';
        $website = isset($user['website']) ? $user['website'] : 'No Website';

        echo "<div style='border:1px solid #ccc; padding:10px; margin-bottom:10px;'>";
        echo "<h3>{$name}</h3>";
        echo "<p>Email: {$email}</p>";
        echo "<p>Phone: {$phone}</p>";
        echo "<p>Website: <a href='http://{$website}' target='_blank'>{$website}</a></p>";
        echo "</div>";
    }
}
