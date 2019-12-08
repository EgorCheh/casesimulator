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
					 
        });
$("#button_open_case").on("click",function(){
    var name = $("#name_case_open").text();
        
});

$( ".view_zagl" ).on( "click", function() {
  var priceget = $(this).closest(".view_detail").find(".h6_view_detail").text();
  $(this).closest(".view_detail").css({ "z-index": "1","position":"absolute"});
  $(this).closest(".view_detail").animate({height:'350px',width:'450px',left:'35%',top:'25%'},"slow",(function(){ 
      $(this).find(".view_zagl").animate({ opacity: '0'},'fast',(function (){
          $(this).closest(".view_detail").css({"box-shadow":"0 0 600px rgba(255,251,144,0.8)"});  
           $.ajax({
	  type: "POST",
	  url: "core/save.info.php",
	  data: { price: priceget }
	});
        $
      }));}));
});
});
</script>
 </head>
  <header>
      <a href="index.php"><h1 id="logo">CASE SIMULATOR</h1></a>
     <div id="div_login_name"><?php if(isset($_SESSION['logged_user']))
     {echo $_SESSION['logged_user']->login;
     $user=R::findOne('users','login=?',array($_SESSION['logged_user']['login']));
     echo " : ";  
     echo $user->balance;
     echo '$';
     } ?></div> 

      <a href="login.php"><div id="button_profile"></div></a> 
  </header>
  <body>
  <div id="content">
	
	
	

