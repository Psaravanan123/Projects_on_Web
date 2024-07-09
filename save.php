<?php
$con=new mysqli("localhost","root","123456","Ajaxdetails");
$name=$_POST["name"];
$city=$_POST["city"];
$sql=" insert into studentdetails (NAME,CITY) values('{$name}','{$city}')";
if($con->query($sql)){
 echo "Data saved";
}
else{
    echo "error";
}
?>