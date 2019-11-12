<?php
declare(strict_types=1);
function multiply(float $a, float $b): float {
 return (double)$a * (double)$b;
}
$six = multiply(2, 3);
echo gettype($six);


?>
