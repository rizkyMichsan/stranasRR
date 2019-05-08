<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 date_default_timezone_set("Asia/Jakarta");

//untuk mengetahui bulan bulan

if ( ! function_exists('bulan'))

{

    function Hari($tgl,$bln,$thn){

$hari = date("N",mktime(0,0,0,$bln,$tgl,$thn));

return($hari);

}

function NamaHari($id){

switch($id){

case 1: $hari = "Senin";break;

case 2: $hari = "Selasa";break;

case 3: $hari = "Rabu";break;

case 4: $hari = "Kamis";break;

case 5: $hari = "Jumat";break;

case 6: $hari = "Sabtu";break;

case 7: $hari = "Minggu";break;

}

return($hari);

}

    function bulan($bln)

    {

        switch ($bln)

        {

            case 1:

                return "Januari";

                break;

            case 2:

                return "Februari";

                break;

            case 3:

                return "Maret";

                break;

            case 4:

                return "April";

                break;

            case 5:

                return "Mei";

                break;

            case 6:

                return "Juni";

                break;

            case 7:

                return "Juli";

                break;

            case 8:

                return "Agustus";

                break;

            case 9:

                return "September";

                break;

            case 10:

                return "Oktober";

                break;

            case 11:

                return "November";

                break;

            case 12:

                return "Desember";

                break;

        }

    }

}

 

//format tanggal yyyy-mm-dd

if ( ! function_exists('tgl_indo'))

{

    function tgl_in($tgl)

    {

        $ubah = gmdate($tgl, time()+60*60*7);

        $pecah = explode("-",$ubah);  //memecah variabel berdasarkan -

        $tanggal = $pecah[2];

        $bulan = bulan($pecah[1]);

        $tahun = $pecah[0];

        return $tanggal.' '.$bulan.' '.$tahun; //hasil akhir

    }
    function hari_ini($hari){
  
    switch($hari){
        case 'Sun':
            $hari_ini = "Minggu";
        break;
 
        case 'Mon':         
            $hari_ini = "Senin";
        break;
 
        case 'Tue':
            $hari_ini = "Selasa";
        break;
 
        case 'Wed':
            $hari_ini = "Rabu";
        break;
 
        case 'Thu':
            $hari_ini = "Kamis";
        break;
 
        case 'Fri':
            $hari_ini = "Jumat";
        break;
 
        case 'Sat':
            $hari_ini = "Sabtu";
        break;
        
        default:
            $hari_ini = "Tidak di ketahui";     
        break;
    }
 
    return  $hari_ini ;
 
}
    function tgl_modif($tgl)

    {

        $tanggal = substr($tgl,0,2);

        $bulan = bulan(substr($tgl,2,2));

        $tahun = substr($tgl,4,4);

        return $tanggal.' '.$bulan.' '.$tahun; //hasil akhir

    }
    function tgl_modif2($tgl)

    {

        $tanggal = substr($tgl,8,2);
        
        $bulan = bulan(substr($tgl,5,2));

        $tahun = substr($tgl,0,4);
        $hari  = date("D", strtotime($tgl)) ;
        return hari_ini($hari).', '.$tanggal.' '.$bulan.' '.$tahun; //hasil akhir

    }

}

 

//format tanggal timestamp

if( ! function_exists('tgl_indo_timestamp')){

 

function tgl_indo_timestamp($tgl)

{

    $inttime=date('Y-m-d H:i:s',$tgl); //mengubah format menjadi tanggal biasa

    $tglBaru=explode(" ",$inttime); //memecah berdasarkan spaasi

     

    $tglBaru1=$tglBaru[0]; //mendapatkan variabel format yyyy-mm-dd

    $tglBaru2=$tglBaru[1]; //mendapatkan fotmat hh:ii:ss

    $tglBarua=explode("-",$tglBaru1); //lalu memecah variabel berdasarkan -

 

    $tgl=$tglBarua[2];

    $bln=$tglBarua[1];

    $thn=$tglBarua[0];

 

    $bln=bulan($bln); //mengganti bulan angka menjadi text dari fungsi bulan

    $ubahTanggal="$tgl $bln $thn | $tglBaru2 "; //hasil akhir tanggal

 

    return $ubahTanggal;

}

 

}

if( ! function_exists('relativeTime')){

    function getBulan($bln){

                switch ($bln){

                    case 1: 

                        return "Januari";

                        break;

                    case 2:

                        return "Februari";

                        break;

                    case 3:

                        return "Maret";

                        break;

                    case 4:

                        return "April";

                        break;

                    case 5:

                        return "Mei";

                        break;

                    case 6:

                        return "Juni";

                        break;

                    case 7:

                        return "Juli";

                        break;

                    case 8:

                        return "Agustus";

                        break;

                    case 9:

                        return "September";

                        break;

                    case 10:

                        return "Oktober";

                        break;

                    case 11:

                        return "November";

                        break;

                    case 12:

                        return "Desember";

                        break;

                }

            } 

function relativeTime($dt,$precision=2)

{

    

    $times=array(   365*24*60*60    => "Tahun",

                    30*24*60*60     => "Bulan",

                    7*24*60*60      => "Minggu",

                    24*60*60        => "Hari",

                    60*60           => "Jam",

                    60              => "Menit",

                    1               => "Detik");

    $st=strtotime($dt);

    $passed=(time()+60*60*7)-$st;

    $date= date('Y-m-d');

    $year=date('Y');

    $month=date('m');

    $day=date('d'); 

        $tahun=substr($dt,0,4);

        $bulan=substr($dt,5,2);

        $bln=getBulan($bulan);

        $hari=substr($dt,8,2);

        

                    if($passed<86400){

                        $output=" Hari ini"; 

                        }

                    

                    else{

                    $output= $hari." ".$bln." ".$tahun;    

                    }               

                    

        

    

    return $output;

}

}