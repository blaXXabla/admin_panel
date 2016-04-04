<?php
/**
 * Created by PhpStorm.
 * User: louyot
 * Date: 04/04/2016
 * Time: 14:09
 */

require 'ressources/smarty-3.1.29/libs/Smarty.class.php';

$smarty = new Smarty;

$smarty->assign("Name", "Fred Irving Johnathan Bradley Peppergill", true);
$smarty->assign("FirstName", array("John", "Mary", "James", "Henry"));

$smarty->display('index.tpl');