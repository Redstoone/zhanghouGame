<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php $ifonserver=config::get('ifonserver');?>
<?php if($ifonserver) { ?>
<?php

if(config::get(server_template)=='1'){
$_template = 'system/servers_metro_color.html';
}elseif(config::get(server_template)=='2'){
$_template = 'system/servers_metro_grey.html';
}elseif(config::get(server_template)=='3'){
$_template = 'system/servers_classic.html';
}elseif(config::get(server_template)=='4'){
$_template = 'system/servers_old.html';
}
?>
<?php echo template($_template);?>
<?php } ?>