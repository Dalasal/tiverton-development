<?php
function fc_custom_getACF_field($arrayKeys, $postID)
{
$array = [];

foreach ($arrayKeys as $keyName) {
$array[$keyName] = '';
}

if (empty(get_fields($postID))) {
return false;
}
return array_merge($array, get_fields($postID));
}