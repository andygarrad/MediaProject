<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 07-May-16
 * Time: 9:57 PM
 */

$str = file_get_contents('images.json');
$json = json_decode($str, true);

//echo count($json['images']);
$num=rand(0,count($json['images'])-1);

$aReturn['count'] = $num;
$aReturn['title'] = $json['images'][$num]['title'];
$aReturn['source'] = $json['images'][$num]['source'];

echo json_encode($aReturn);
?>