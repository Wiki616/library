<?php    
$url = "http://http://tieba.baidu.com/p/2328836871?pn=1"; 
$ch = curl_init(); 
$timeout = 5; 
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout); 
//����Ҫ�û�������ҳ����Ҫ������������ 
//curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY); 
//curl_setopt($ch, CURLOPT_USERPWD, US_NAME.":".US_PWD); 
$contents = curl_exec($ch); 
curl_close($ch); 
echo $contents; 
?> 