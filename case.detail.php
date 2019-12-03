<?php
require 'core\rb_db.php';
include_once 'header.php';
include_once 'class\cases.view.detail.php';
include_once 'core\class.db.core.php';

$db = new db();
$arr=$db->get_weapons("eSports 2013 Case");
$view = new CasesViewDetail($arr);
$view->get_views();
$case= $_GET['case']
?>
<h2><?php echo $_GET['case']; ?></h2>
<a href="open_case.php?case=<?php echo $_GET['case']; ?>" ><button>Открыть </button></a>
<?php
include_once 'footer.php';
?>

