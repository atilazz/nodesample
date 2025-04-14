<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اعداد اول ضرب در 5</title>
    <style>
        table {
            border-collapse: collapse;
            width: 40%;
            margin: 40px auto;
        }
        table, th, tr {
            border: 3px solid black;
            text-align: center;
            padding: 4px;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">اعداد اول ضرب در 2 (1-1000)</h2>
    <table>
        <tr>
            <th>عدد اول</th>
            <th>عدد اول × 3</th>
        </tr>
        <?php
        function isPrime($number) {
            if ($number < 2) return false;
            for ($i = 2; $i <= sqrt($number); $i++) {
                if ($number % $i == 0) return false;
            }
            return true;
        }

        for ($i = 1; $i <= 1000; $i++) {
            if (isPrime($i)) {
                echo "<tr>";
                echo "<td>{$i}</td>";
                echo "<td>" . ($i * 3) . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>
</html>

