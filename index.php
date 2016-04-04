<?php
/**
 * Created by PhpStorm.
 * User: louyot
 * Date: 04/04/2016
 * Time: 14:09
 */

require 'ressource/smarty-3.1.29/libs/Smarty.class.php';

$smarty = new Smarty;

// titre de la page internet
$smarty->assign("title", "bonjour");

//variables smarty pour les liens des raccourcis
$smarty->assign('liens', array("http://www.edouard-louyot.fr",
    "http://www.edouard-louyot.fr/net2ftp/ftp/index.php", // TODO changer de client FTP
    "https://cpanel.hostinger.fr/",
    "http://edouard88100.quickconnect.to/",
    "https://app.plex.tv/web/app",
    "")); // TODO Mettre le lien  page web ampli (enlever le dhcp de l'ampli)

// variables smarty pour les noms des raccourcis
$smarty->assign("nom1","");
$smarty->assign("nom2","");
$smarty->assign("nom3","");
$smarty->assign("nom4","");
$smarty->assign("nom5","");
$smarty->assign("nom6","");

//variable smarty pours les images des raccourcis

$smarty->assign('images', array("ressource/images/mon_site.png",
    "ressource/images/filezilla.png",
    "ressource/images/hostinger.png",
    "ressource/images/nas_2.png",
    "ressource/images/plex.png",
    "ressource/images/yamaha.png",));

$test = array("http://www.edouard-louyot.fr",
    "http://www.edouard-louyot.fr/net2ftp/ftp/index.php", // TODO changer de client FTP
    "https://cpanel.hostinger.fr/",
    "http://edouard88100.quickconnect.to/",
    "https://app.plex.tv/web/app",
    ""); // TODO Mettre le lien  page web ampli (enlever le dhcp de l'ampli)

foreach ($test as $item) {
    echo ($item.("</br>"));
}


$smarty->display('templates/index.tpl');