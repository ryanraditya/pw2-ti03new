<?php
$nilai = 90;
$keterangan="";

if($nilai > 90){
    $keterangan ="sangat baik";
} elseif($nilai > 70 || $nilai<=90){
    $keterangan = "lumayan baik";
}else{
    $keterangan = "oke dah";
}

echo $keterangan;
?>
