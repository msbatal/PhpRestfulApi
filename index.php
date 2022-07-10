<?php
    //PHP İle RESTful API Kullanımı
    $token = sha1(md5("mehmet"));
    //$veriler = array("token" => $token, "id" => "1");
    //$veriler = array("token" => $token, "adsoyad" => "Ali Veli", "tckimlik" => "999999", "adres" => "Alanya - Antalya");
    //$veriler = array("token" => $token, "adsoyad" => "Zehra Selim", "tckimlik" => "000000", "adres" => "Buca - İzmir", "id" => "2");
    $veriler = array("token" => $token, "id" => "2");

    $curl = curl_init("http://localhost:8888/msbatal/api.php");
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE"); //GET, POST, PUT, DELETE
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($veriler));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $cevap = curl_exec($curl);
    curl_close($curl);

    $sonuc = json_decode($cevap, true);

    echo "<b>Sonuç: $sonuc[kod] / $sonuc[mesaj]</b><br><br>";

    if ($sonuc["kod"] == "900") {
        foreach($sonuc["icerik"] as $icerik) {
            foreach($icerik as $anahtar => $deger) {
                echo "$anahtar: $deger<br>";
            }
            echo "<br><br>";
        }
    }
    
?>