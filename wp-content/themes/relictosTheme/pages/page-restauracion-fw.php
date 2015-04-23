<?php
/*
Template Name: Restauracion home
*/
?>
<?php
$wphome = get_bloginfo('url');
$url = $wphome . '/clima-y-vegetacion-del-valle-de-ica/restauracion-2/';
//echo $url;
header('Location: '.$url);
exit;
?>