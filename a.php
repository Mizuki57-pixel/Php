<?php

$students = ["Mg Mg","Aung Aung","Su Su"];

foreach ($students as $student) {
    echo  $student."\n";
}

for($i=1;$i<=10;$i++) {
    if($i== 5) {
        continue;
    }
    if($i== 8) {
        break;
    }
    echo $i."\n";
} 