<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prime Number Checker</title>
</head>
<body>
    <h2>Kiểm tra số nguyên tố</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="number">Nhập số:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Kiểm tra">
    </form>

    <?php
    function isPrime($number) {
        if ($number < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = (int) $_POST["number"];
        if (isPrime($number)) {
            echo "<h3>$number là số nguyên tố</h3>";
        } else {
            echo "<h3>$number không phải là số nguyên tố</h3>";
        }
    }
    ?>
</body>
</html>
