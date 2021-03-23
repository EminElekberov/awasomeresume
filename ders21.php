<?php 
    function uye_getir($id){
    $array = [
        'ad' => 'emin',
        'saoyad' =>'elekberov',
        'yas' =>'19',
        'cinsiyyet' => 'kisi',
    ];
    if ($id==1){
        return $array;
    }else{
        return false;
    }
}

$isdifadeci_id =5;

if(uye_getir($isdifadeci_id)){
    
foreach(uye_getir($isdifadeci_id) as $key =>$value){
    echo $key." ".$value;
}
}else{
    echo "Isdifadeci id'si $isdifadeci_id olan oge bulunamaadi";
}


//<?php
//function isim(){
//    echo "emin elekberov";
//}
//isim();





//
//<?php
//function isim(){
//    return "emin elekberov";
//}
//echo isim();




//<?php
//function isim($ad,$soyad){
  //  return $ad."/ <b>".$soyad."<?b>";
//}
//echo isim('emin','elekberov');
//?>








<?php 
    function uye_getir($id){
    $array = [
        'ad' => 'emin',
        'saoyad' =>'elekberov',
        'yas' =>'19',
        'cinsiyyet' => 'kisi',
    ];
    if ($id==1){
        return $array;
    }else{
        return false;
    }
}

$donen_array= uye_getir(1);
print_r($donen_array);







//<?php 
//    function uye_getir($id){
//    $array = [
//        'ad' => 'emin',
//        'saoyad' =>'elekberov',
//        'yas' =>'19',
//        'cinsiyyet' => 'kisi',
//    ];
//    if ($id==1){
//        return $array;
//    }else{
//        return false;
//    }
//}
//
//foreach(uye_getir(1) as $key =>$value){
//    echo $key." ".$value;
//}
