<?php
$servername="localhost";
$username="root";
$password="";
$dbname="form"; 

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn)
{
    echo "connected";

} 
else {
    echo "error";
}
?>