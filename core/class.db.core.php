<?php
class db
{
private $database = "casesimulator";
private $user = "root";
private $password = "";
private $host = "127.0.0.1:3306";
public function get_cases(){
$link = mysqli_connect($this->host, $this->user, $this->password, $this->database) 
    or die("Ошибка " . mysqli_error($link));    
$query ="SELECT * FROM cases";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{   	
$arr = mysqli_fetch_all($result);
mysqli_close($link);
return $arr;  
}
mysqli_close($link);
}
public function get_weapons($case){

$link = mysqli_connect($this->host, $this->user, $this->password, $this->database) 
    or die("Ошибка " . mysqli_error($link)); 
     
$query ="SELECT * FROM weapon WHERE case_name='$case'";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{   
	
$arr = mysqli_fetch_all($result);

mysqli_close($link);
   
return $arr;  
}
mysqli_close($link);
}
}
?>