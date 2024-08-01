<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Grades</title>
</head>
<body>
    <h2>Nhập điểm của 5 học sinh</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <label for="name<?php echo $i; ?>">Tên học sinh <?php echo $i; ?>:</label>
            <input type="text" id="name<?php echo $i; ?>" name="name<?php echo $i; ?>" required>
            <label for="grade<?php echo $i; ?>">Điểm:</label>
            <input type="number" id="grade<?php echo $i; ?>" name="grade<?php echo $i; ?>" step="0.01" min="0" max="10" required><br><br>
        <?php endfor; ?>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $students = [];
        for ($i = 1; $i <= 5; $i++) {
            $name = $_POST["name$i"];
            $grade = (float) $_POST["grade$i"];
            $students[] = ["name" => $name, "grade" => $grade];
        }

        usort($students, function($a, $b) {
            return $b['grade'] <=> $a['grade'];
        });

        echo "<h2>Kết quả xếp loại</h2>";
        echo "<table border='1'>
                <tr>
                    <th>Tên</th>
                    <th>Điểm</th>
                    <th>Xếp loại</th>
                </tr>";
        
        $totalGrades = 0;
        foreach ($students as $student) {
            if ($student['grade'] >= 8) {
                $classification = 'Xuất sắc';
            } elseif ($student['grade'] >= 6.5) {
                $classification = 'Khá';
            } elseif ($student['grade'] >= 5) {
                $classification = 'Trung bình';
            } else {
                $classification = 'Yếu';
            }
            $totalGrades += $student['grade'];
            echo "<tr>
                    <td>{$student['name']}</td>
                    <td>{$student['grade']}</td>
                    <td>$classification</td>
                  </tr>";
        }
        echo "</table>";

        $averageGrade = $totalGrades / count($students);
        echo "<h2>Điểm trung bình của cả lớp: $averageGrade</h2>";
    }
    ?>
</body>
</html>