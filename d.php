<?php

$schoolName = "Polytechnic University";

function showStudent() {
$studentName = "Mg Mg";
 global $schoolName;

echo"Student: ".$studentName."\n";
echo "School".$schoolName;
}
showStudent();