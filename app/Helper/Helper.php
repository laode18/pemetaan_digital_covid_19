<?php

function set_active($route){
	$active = 'active';
	if(is_array($route))
	{
		foreach ($route as $r) {
			if(Route::is($r)){
				return $active;
			}
		}
	}else {
		if(Route::is($route)){
			return $active;
		}
	}
}

function set_show($route){
	$show = 'show';
	if(is_array($route))
	{
		foreach ($route as $t) {
			if(Route::is($t)){
				return $show;
			}
		}
	}else {
		if(Route::is($route)){
			return $show;
		}
	}
}

function tanggal_indonesia1($tanggal){
        $bulan = array (
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
        );
        
        $pecahkan = explode('-', $tanggal);
        
        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun
         
        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }