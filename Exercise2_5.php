<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Leap Year Checker</title>
</head>
<body>
    <h2>Kiểm tra năm nhuận</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="year">Nhập năm:</label>
        <input type="number" id="year" name="year" required>
        <input type="submit" value="Kiểm tra">
    </form>

    <?php
    function isLeapYear($year) {
        if ($year % 4 == 0) {
            if ($year % 100 == 0) {
                if ($year % 400 == 0) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return true;
            }
        } else {
            return false;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $year = (int) $_POST["year"];
        if (isLeapYear($year)) {
            echo "<h3>$year là năm nhuận</h3>";
        } else {
            echo "<h3>$year không phải là năm nhuận</h3>";
        }
    }
    ?>
</body>
</html>
