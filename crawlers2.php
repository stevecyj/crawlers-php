<?php
$cookie_jar = 'c:/cookie.txt' ;
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

curl_setopt($ch, CURLOPT_URL, 'https://www.dinbendon.net/do/login
');
curl_setopt($ch, CURLOPT_POST, 1);
$request = 'username=BBinMobile&amp;password=BBinMobile&amp;
result=11';
curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
//把返回來的cookie保存在$cookie_jar文件中
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_jar);
//設定返回的資料是否自動顯示
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//設定是否顯示頭訊息
curl_setopt($ch, CURLOPT_HEADER, false);
//設定是否輸出頁面內容
curl_setopt($ch, CURLOPT_NOBODY, false);
curl_exec($ch);
// curl_close($ch);

$orders = curl_exec($ch);
echo '&lt;pre&gt;';
echo strip_tags($orders);
echo '&lt;/pre&gt;';
curl_close($ch);

//get data after login
// $ch2 = curl_init();
// curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
// curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, false);

// curl_setopt($ch2, CURLOPT_URL, 'https://www.dinbendon.net/do/
// ');
// curl_setopt($ch2, CURLOPT_HEADER, false);
// curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch2, CURLOPT_COOKIEFILE, $cookie_jar);
// $orders = curl_exec($ch2);
// echo '&lt;pre&gt;';
// echo strip_tags($orders);
// echo '&lt;/pre&gt;';
// curl_close($ch2);
