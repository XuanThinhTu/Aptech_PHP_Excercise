<?php
function drawTriangle($n) {
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}

// Ví dụ với n = 5
$n = 5;
drawTriangle($n);
?>
