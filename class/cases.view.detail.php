<?php
class CasesViewDetail
{
private $cases_arrey;

function __construct($cases_arrey){
	$this->cases_arrey=$cases_arrey;

}
public function get_views(){
	
        
	echo "<table><tr>";
	for ($i=1;$i<=count($this->cases_arrey);$i++){
	
	echo "<td><a><div class='view_detail' style='"; 
        echo  $this->cases_arrey[$i-1][3];
        echo ";'>";
	echo "<div class='h2_view_detail' >";
	echo $this->cases_arrey[$i-1][1];
	echo "</div>";
	echo "<div class='img_view_div_detail'><img src='images/";
	echo $this->cases_arrey[$i-1][1];
	echo ".png' class='img_view_detail'/ ></div>";
        echo "<div class='h6_view_detail'>";
	echo "12 - 65";
	echo " $</div>";
	echo"</div></a></td>";
	
	if(($i%7)==0&&($i>7)||($i==7))
	{
		echo"</tr><tr>";
	}
	}
	echo"</tr></table>";
      
}
}
?>