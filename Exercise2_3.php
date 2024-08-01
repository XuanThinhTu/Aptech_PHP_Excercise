<?php
function drawTriangle($n) {
    // Nửa trên
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "# ";
        }
        echo "<br>";
    }
    // Nửa dưới
    for ($i = $n; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "# ";
        }
        echo "<br>";
    }
}

$n = 5;
drawTriangle($n);
?>
