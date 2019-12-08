<?php
class CasesViewDetail
{
private $cases_arrey;

function __construct($cases_arrey){
	$this->cases_arrey=$cases_arrey;

}
public function get_views(){
	
        
        echo '<div id="grid-container">';
	for ($i=1;$i<=count($this->cases_arrey);$i++){
	
	echo "<a><div class='view_detail' style='"; 
        echo  $this->cases_arrey[$i-1][3];
        echo ";'>";
	echo "<div class='h2_view_detail' >";
	echo $this->cases_arrey[$i-1][1];
	echo "</div>";
	echo "<div class='img_view_div_detail'><img src='images/";
	echo $this->cases_arrey[$i-1][1];
	echo ".png' class='img_view_detail'/ ></div>";
        echo "<div class='h6_view_detail'>";
	echo $this->cases_arrey[$i-1][5];
        echo " - ";
	echo $this->cases_arrey[$i-1][6];;
        echo " $</div>";
	echo"</div></a>";
	}
        echo '</div>';
	
      
}

public function get_weap_view(){
	
        $count =count($this->cases_arrey);
        $rand = array();
        for ($i=0;$i< $count;$i++)
        {
            $rand[]=$i;
        }
        shuffle($rand);
        
	 echo '<div id="grid-container_open">';
	for ($i=0;$i< $count;$i++){
	
	echo "<a><div class='view_detail' style='"; 
        echo  $this->cases_arrey[$rand[$i]][3];
        echo ";'>";
	echo "<div class='h2_view_detail' >";
	echo $this->cases_arrey[$rand[$i]][1];
	echo "</div>";
	echo "<div class='img_view_div_detail'><img src='images/";
	echo $this->cases_arrey[$rand[$i]][1];
	echo ".png' class='img_view_detail'/ ></div>";
	echo "<div class='h6_view_detail'>";
	echo  rand($this->cases_arrey[$rand[$i]][5],$this->cases_arrey[$rand[$i]][6]);
	echo " $</div>";
         echo " <div class='view_zagl'> <div class='view_zagl_text'>Открыть</div> </div>";
	echo"</div>";

	}  echo '</div>';
	
      
}



}
?>