<?php

$expires = time() + (60 * 60);  
if (!isset($_COOKIE["School"])){
    setcookie("School", "NKNU", $expires);
}
if(!isset($_COOKIE["Department"])){
    setcookie("Department", "Software Engineering and Management", $expires);
}

header("Refresh:0");
echo "<h1> Cookie : </h1>";
echo "School : ".$_COOKIE["School"]."<br>";
echo "Department : ".$_COOKIE["Department"]."<br>";

?>