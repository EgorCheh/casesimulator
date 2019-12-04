<?php
require 'core\rb_db.php';
include_once 'header.php';
include_once 'core\class.db.core.php';
include_once 'class\cases.view.detail.php';
?>
<script>

</script>
<?php
$case=$_GET['case'];
$db = new db();
$arr=$db->get_weapons($case);
$view = new CasesViewDetail($arr);
$view->get_weap_view();

include_once 'footer.php';