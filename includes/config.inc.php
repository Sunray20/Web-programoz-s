<?php 
    $MAPPA = './images/';
    $TIPUSOK = array('.jpg', '.png');

    $ablakcim = array(
        'cim' => 'Kisléptek'
    );

    $fejlec = array(
        'kepforras' => 'logo.png',
        'kepalt' => 'logo'
    );

    $oldalak = array(
        '/' => array('fajl' => 'cimlap', 'szoveg' => 'Címlap', 'menun' => array(1,1)),
        'bemutatkozas' => array('fajl' => 'bemutatkozas', 'szoveg' => 'Bemutatkozás', 'menun' => array(1,1)),
        'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1,1)),
        'galleria' => array('fajl' => 'galleria', 'szoveg' => 'Galléria', 'menun' => array(1,1)),
        'uzenettablazat' => array('fajl' => 'uzenettablazat', 'szoveg' => 'Táblázat', 'menun' => array(1,1)),
        'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés', 'menun' => array(1,0)),
        'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
        'uzenetmentes' => array('fajl' => 'uzenetmentes', 'szoveg' => '', 'menun' => array(0,0)),
        'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
        'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0))
    );

    $hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');
?>