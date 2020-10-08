<?php 
if (!function_exists('tgl_indo')) {
	function tgl_indo($tanggal){
        $bulan = array (
          1=>'Januari',
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
        $tgl = explode(' ',$tanggal);
        $pecahkan = explode('-', $tgl[0]);
        
        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun
       
        return @$pecahkan[2] . ' ' . @$bulan[ (int)$pecahkan[1] ] . ' ' . @$pecahkan[0];
      }
} 

if (!function_exists('jam')) {
	function jam($jam){
        $j = explode(':',$jam);
        return $j[0].':'.$j[1];    
    }
}

if (!function_exists('rp')) {
  function rp($angka){
    $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
    return $hasil_rupiah;
  }
}

if (!function_exists('gen')) {
  function gen($batas=6){
      $characters = '0123456789';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < $batas; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
  }
}

if (!function_exists('hari')) {
  function hari($tanggal){
        $hari = array (
          1=>'Senin',
          'Selasa',
          'Rabu',
          'Kamis',
          "Jum'at",
          'Sabtu',
          'Minggu',
        );
       
        return @$hari[$tanggal];
      }
}

if (!function_exists('umur')) {
  // Tanggal Lahir
  function umur($tgl_lahir){
    
    // ubah ke format Ke Date Time
    $lahir = new DateTime($tgl_lahir);
    $hari_ini = new DateTime();
      
    $diff = $hari_ini->diff($lahir);
      
    // Display
    return $diff->y;
  }
}

if (!function_exists('at')) {
  // Ambil Krakter Tertentu yang diapit
  function at($str='',$awal='%',$akhir='%'){
    
    preg_match_all('#'.$awal.'([^\s]+)'.$akhir.'#', $str, $matches);
    return $matches[1];
  }
}

if (!function_exists('srlen')) {
	function srlen($n='')
	{
		$x = str_replace([0,1,2,3,4,5,6,7,8,9],['z%','x$','j#','k!','i`','u&','b*','a(','c)','f_'],$n);
		$okz= base64_encode($x);
		return $okz;
	}
}

if (!function_exists('srlde')) {
	function srlde($okj='')
	{
		$nama = base64_decode($okj);
		$x = str_replace(['z%','x$','j#','k!','i`','u&','b*','a(','c)','f_'],[0,1,2,3,4,5,6,7,8,9],$nama);
		return $x;
	}
}

if (!function_exists('srlktpen')) {
	function srlktpen($ktp='',$id='')
	{
		$v = base64_encode(srlen($ktp).'&&&5555554433321&&&'.srlen($id));
		return $v;
	}
}

if (!function_exists('srlktpde')) {
	function srlktpde($kode='')
	{
    $v1 = base64_decode($kode);
    $n = explode('&&&5555554433321&&&',$v1);
    if (@$n[1] != '') {
      return srlde(@$n[1]); //menampilkan id
    }
	}
}
