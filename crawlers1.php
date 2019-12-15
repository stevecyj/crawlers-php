<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.dinbendon.net/do/",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Connection: keep-alive",
    "Host: www.dinbendon.net",
    // "Postman-Token: fa1cdf0c-286c-4404-a3b2-b20482b6ef53,cf7f52e5-516a-4ef1-bd48-5d89644ec9b1",
    "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
    "accept-encoding: gzip, deflate, br",
    "accept-language: zh-TW,zh;q=0.9,en-US;q=0.8,en;q=0.7",
    "authority: www.dinbendon.net",
    "cache-control: max-age=0,no-cache",
    "cookie: _ga=GA1.2.1534738570.1575133089; SL_GWPT_Show_Hide_tmp=1; SL_wptGlobTipTmp=1; _gid=GA1.2.202573547.1576278973; signIn.rememberMe=true; INDIVIDUAL_KEY=eb418488-879a-4733-bd71-95a10d6611ef; JSESSIONID=84003E6614C91378763B27FCEC511A48; _gat=1; signInPanel__signInForm__username=BBinMobile; signInPanel__signInForm__password=nITbJKzP0p2p7sTSaxh79Q^%^3D^%^3D",
    "referer: https://www.dinbendon.net/do/login",
    "sec-fetch-mode: navigate",
    "sec-fetch-site: same-origin",
    "sec-fetch-user: ?1",
    "upgrade-insecure-requests: 1",
    "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}
