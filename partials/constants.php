<?php 
global $path, $title, $description, $links, $cta_title;
$path = !in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1']) ? '/beta/' : '/';
$links = [
  'Home' => $path,
  'Services' => $path . 'services/',
  'Join the Team' => $path . 'employment/',
  'Contact' => $path . 'contact/'
];
$cta_title = 'Let’s Talk About Your Project';
?>