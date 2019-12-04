<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title><?php echo $page_title;?></title>
  <link rel="stylesheet" href="style.css" type="text/css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
$(document).ready(function(){	
   $(".view")
        .mouseover(function() {
                 $(this).find(".img_view").stop(true, true)
						.animate({height: '230px',width:'230px'},'slow');
					;    
        })
        .mouseout(function(){ 
					
                  $(this).find(".img_view").stop(true, true)
					.css({
						"height":"195px",
						"width":"195px"
						});
					; 
        });
   

$( ".view_zagl" ).on( "click", function() {
  $(this).animate({ opacity: '0'},'fast');
  
});
});
</script>
 </head>
  <header>
      <a href="index.php"><h1 id="logo">CASE SIMULATOR</h1></a>
      <a href="login.php"><div id="button_profile"></div></a><p><?php if(isset($_SESSION['logged_user'])){
echo $_SESSION['logged_user']->login;} ?></p>
  </header>
  <body>
  <div id="content">
	
	
	

