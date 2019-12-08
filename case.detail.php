<?php
require 'core\rb_db.php';
include_once 'header.php';
include_once 'class\cases.view.detail.php';
include_once 'core\class.db.core.php';

?>
<div id="prev_open"><h2 id="name_case_open"><?php echo $_GET['case']; ?></h2>
<image id="image_case_open" src="images/<?php echo $_GET['case']?>.png">
<a href="<?php 
        if(isset($_SESSION['logged_user'])){
        echo 'open_case.php?case=';
        echo $_GET['case']; }
 else {
     echo 'login.php';
 }
    
    ?>" ><button id="button_open_case">Открыть </button></a></div>
<?php
$db = new db();
$arr=$db->get_weapons($_GET['case']);
$view = new CasesViewDetail($arr);
$view->get_views();
include_once 'footer.php';
?>

