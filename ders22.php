
<?php
$db ="veri baglantisi";
define('salam','necesen');

function uye_getir(){
    global $db;
    return $db.salam;
}
echo uye_getir();






//<?php
//$db ="veri baglantisi";
//
//function uye_getir(){
//    return $db;
//}
//echo uye_getir();



//<?php
//$db ="veri baglantisi";
//
//function uye_getir(){
//    global $db;
//    return $db;
//}
//echo uye_getir();
