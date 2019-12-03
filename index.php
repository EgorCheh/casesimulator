<?php
require 'core\rb_db.php';
include_once 'class\class.weapon.php';

$page_title = "Case Simulator";
include_once 'header.php';


include_once 'core\class.db.core.php';
include_once 'class\class.cases.view.php';

$db = new db();
$arr=$db->get_cases();
$view = new CasesView($arr);
echo $view->get_views();


?>

<?php
include_once 'footer.php';
?>
