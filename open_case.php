<?php
require 'core\rb_db.php';


include_once 'core\class.db.core.php';
include_once 'class\cases.view.detail.php';


$case=$_GET['case'];
$caserb = R::findOne("cases","name=?",array($case));
$userb=R::findOne("users","id=?",array($_SESSION['logged_user']['id']));
$userb->balance=$userb->balance-$caserb->price;
R::store($userb);

include_once 'header.php';

$db = new db();
$arr=$db->get_weapons($case);
$view = new CasesViewDetail($arr);
$view->get_weap_view();

include_once 'footer.php';