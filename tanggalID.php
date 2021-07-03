<?php
function tgl_id($tanggal){
    $BulanID = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

    $tahun = substr($tanggal, 0, 4);               
    $bulan = substr($tanggal, 5, 2);
    $tgl   = substr($tanggal, 8, 2);
    $hasil = $tgl . " " . $BulanID[(int)$bulan-1]. " ". $tahun;
    return($hasil);
}
?>