<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $tinggi=$_POST['baris'];
echo "<pre>";
for($baris=1;$baris<=$tinggi;$baris++){
    for($i=1;$i<=$tinggi-$baris;$i++){
       echo " "; 
    }
    for($j=1;$j<2*$baris;$j++){
        echo "*";
    }
    echo "\n";
}
echo "</pre>";
}
?>