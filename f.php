<?php

$marks=[80,90,40,37,70];

echo"Count:".count( $marks )."\n";

echo"Total".array_sum( $marks )."\n";

echo "Highest".max( $marks )."\n";

echo "Lowest".min( $marks )."\n";

echo "Average".array_sum( $marks )/ count($marks)."\n";

sort( $marks );
echo "Sorted marks:" ;
print_r($marks);
?>