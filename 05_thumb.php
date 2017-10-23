<?php
//1.加载原图进行缩放处理
//2.把结果输出到空白画布
//3.展示和保存
$filename='1.jpg';
$image=imagecreatefromjpeg($filename);
list($src_w,$src_h)=getimagesize($filename);
//比例缩放
$scale=0.1;
$width=$src_w*$scale;
$height=$src_h*$scale;
//比例缩放|给固定值
$thumb=imagecreatetruecolor($width, $height);
//执行缩放
$dst_image=$thumb;
$src_image=$image;
$dst_w=$width;
$dst_h=$height;
imagecopyresized($dst_image, $src_image, 0, 0, 
0, 0, $dst_w, $dst_h, $src_w, $src_h);
header('content-type:image/jpeg');
imagejpeg($thumb);
//imagejpeg($image);
imagedestroy($thumb);
imagedestroy($image);
?>