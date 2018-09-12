<?php
$url = 'http://traningvinsofts.com/01_thangnv/quanlynhanvien/api/api.php/demo_dang_nhap';
$data = array('email' => 'contact@vinsofts.com', 'password' => '123456');

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
echo $result;
?>