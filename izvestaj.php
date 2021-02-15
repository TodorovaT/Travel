<?php
    $imeiprezime=$_POST['imeiprezime'];
    $vremeod=$_POST['vremeod'];
    $vremedo=$_POST['vremedo'];
    $klienti=$_POST['klienti'];
    $uplateno=$_POST['uplateno'];
    $zabeleski=$_POST['zabeleski'];

    $title="Травел - Дневен извештај";
    $content="<h2>$imeiprezime</h2><br>
         <h3>$vremeod - $vremedo часот.</h3><br>
         <h3>Клиенти: $klienti, успешни: $uplateno.</h3><br>
         <h3>Забелешки: $zabeleski.</h3><br>"; 
    include 'template.php';
?>