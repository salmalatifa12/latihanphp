<?php

$waktu = 3;
// > 6 && < 11 pagi
// > 11 && < 15 siang
// > 15 && < 18 sore
// > 18 && < 24 malam

if($waktu > 6 && $waktu <= 11){
    echo "Selamat Pagi";
}
elseif($waktu > 11 && $waktu <= 15){
    echo "Selamat Siang";
}
elseif($waktu > 15 && $waktu <= 18){
    echo "Selamat Sore";
}
elseif($waktu > 18 && $waktu <= 24){
    echo "Selamat Malam";
}
else{
    echo "Kita lagi tutup";
}
?>