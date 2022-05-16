<?php

    $baglan =  mysqli_connect("localhost","root","","form");

    if($baglan-> connect_error){
        die("Bağlantı hatası : ".mysqli_connect_error());
    }

    $ad  = $_POST["ad"];
    $soyad  = $_POST["soyad"];
    $eposta  = $_POST["eposta"];
    $sifre  = $_POST["pass"];
    $submit  = $_POST["submit"];

    $ekle = "insert into kullanici(ad, soyad, eposta, password) values ('$ad','$soyad','$eposta','$sifre')";

    if($baglan->query($ekle))
    {   
        
        echo "Hoşgeldin ".$ad.", kaydınız yapıldı.";

    }else{
        echo "Kayıt yapılamadı.";
    }
?>