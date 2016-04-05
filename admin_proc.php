<?php
/**
 * Created by PhpStorm.
 * User: louyo
 * Date: 05/04/2016
 * Time: 18:08
 */

if (isset($_POST["indice"])) { //Checks if action value exists
    $indice = $_POST["indice"];
} else {
    $indice = "";
}
$i=0;
$lien ="";
$image ="";
$nom ="";
$fichier = "ressource/config.xml";
$xml = simplexml_load_file($fichier);

foreach ($xml as $key => $type){
    if ($key =="liens"){
        foreach ($type as $k => $value) {
            $liens[]=$value;
            if ($i == $indice) {
                $lien = strval($value);
            } else {
                if (strlen($lien) == 0){
                    $lien = "";
                }
            }
            $i++;
        }
    }
    $i=0;
    if ($key =="images"){
        foreach ($type as $k => $value) {
            $images[]=$value;
            if ($i == $indice) {
                $image = strval($value);
            } else {
                if (strlen($image) == 0){
                    $image = "";
                }
            }
            $i++;
        }
    }
    $i=0;
    if ($key =="noms"){
        foreach ($type as $k => $value) {
            $noms[]=$value;
            if ($i == $indice) {
                $nom = strval($value);
            } else {
                if (strlen($nom) == 0){
                    $nom = "";
                }
            }
            $i++;
        }
    }
}
$result = array("lien" => $lien, "image" => $image, "nom" => $nom);
echo  json_encode($result);