<?php
$data = file_get_contents('http://traningvinsofts.com/01_thangnv/quanlynhanvien/api/api.php/demo_danh_sach_nhan_vien');

$list = json_decode($data, true);

foreach ($list as $item) {

    echo $item['id'];
    
}

?>