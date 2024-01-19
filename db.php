<?php
$servername ="localhost:4306"; 
$username ="root";
$password ="";
$database ="alphatech";

if(!$connection){
die("Error".mysql_connect_error());

}
$query ="select * from customer";
$stmt =mysqli_query($connection,$query);
while($row =mysql_fetch_array($stmt,MYSQL_ASSOC)){
 
    
echo $row['NAME'].''.$row['EMAIL'].''.$row['PHONE NO'].''.$row['DESTINATION'].'';
}

?>