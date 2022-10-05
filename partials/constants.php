<?php 
global $path, $title, $description, $cta_title;
$path = !in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1']) ? '/beta/' : '/';
$cta_title = 'Let’s Talk About Your Project';
?>