<?php
/**
 * Created by PhpStorm.
 * User: louyo
 * Date: 05/04/2016
 * Time: 15:09
 */

require 'ressource/smarty-3.1.29/libs/Smarty.class.php';
$smarty = new Smarty();


$fichier = "ressource/config.xml";
$xml = simplexml_load_file($fichier);

foreach ($xml as $key => $type){
    if ($key =="liens"){
        foreach ($type as $k => $value) {
            $liens[]=$value;
        }
    }
    if ($key =="images"){
        foreach ($type as $k => $value) {
            $images[]=$value;
        }
    }
    if ($key =="noms"){
        foreach ($type as $k => $value) {
            $noms[]=$value;
        }
    }
}

// titre de la page internet
$smarty->assign("title", "Admin panel");

//variables smarty pour les liens des raccourcis
$smarty->assign('liens', $liens); // TODO Mettre le lien  page web ampli (enlever le dhcp de l'ampli)

//variable smarty pours les images des raccourcis
$smarty->assign('images', $images);

//variable smarty pours les images des raccourcis
$smarty->assign('noms', $noms);

$smarty->display('templates/admin.tpl');