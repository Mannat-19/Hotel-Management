<?php
$file_name=$_FILES['image']['name'];
$file_tmp=$_FILES['image']['tmp_name'];
$file_type=$_FILES['image']['type'];
$img=explode('.',$_FILES['image']['name']);
$file_ext=strtolower(end($img));
$val1=rand(0,100000);
$val2=rand(0,100000);
$val3=rand(0,100000);
$newfilename=$val1.$val2.$val3.".".$img[1];
move_uploaded_file($file_tmp,"image/".$newfilename);
?>