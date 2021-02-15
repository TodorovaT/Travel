<?php

    $sifra=$_POST['sifra'];
    $nokevanja=$_POST['nokevanja'];
    $vozrasni=$_POST['vozrasni'];
    $deca=$_POST['deca'];
    $bebe=$_POST['bebe'];
    $nok_italija=45;
    $nok_grcija=40;
    $nok_egipet=50;

    if($sifra==01)
    {
        $cena_vozrasni=$vozrasni*$nok_italija*$nokevanja;

        $deca_popust=($nok_italija/100)*50*$nokevanja;
        $cena_deca=$deca*$deca_popust;

        $bebe_popust=($nok_italija/100)*10*$nokevanja;
        $cena_bebe=$bebe*$bebe_popust;

        $cena=$cena_vozrasni+$cena_deca+$cena_bebe;

        $vk_cena='$'.number_format($cena,2);
    }

    if($sifra==02)
    {
        $cena_vozrasni=$vozrasni*$nok_grcija*$nokevanja;

        $deca_popust=($nok_grcija/100)*50*$nokevanja;
        $cena_deca=$deca*$deca_popust;

        $bebe_popust=($nok_grcija/100)*10*$nokevanja;
        $cena_bebe=$bebe*$bebe_popust;

        $cena=$cena_vozrasni+$cena_deca+$cena_bebe;

        $vk_cena='$'.number_format($cena,2);
    }


    if($sifra==03)
    {
        $cena_vozrasni=$vozrasni*$nok_egipet*$nokevanja;

        $deca_popust=($nok_egipet/100)*50*$nokevanja;
        $cena_deca=$deca*$deca_popust;

        $bebe_popust=($nok_egipet/100)*10*$nokevanja;
        $cena_bebe=$bebe*$bebe_popust;

        $cena=$cena_vozrasni+$cena_deca+$cena_bebe;

        $vk_cena='$'.number_format($cena,2);
    }

    $title="Травел - Цена на пакет";
    $content='<h2>Цената на вашата понуда гласи: '.$vk_cena.'.</h2>'; 
    include 'template.php';
?>