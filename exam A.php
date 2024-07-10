<!DOCTYPE html>
<html>
<head>
    <title>Table Example</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>ห้อง</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $name = "นายทดสอบ";
        $surname = "ระบบ";
        $room = "6/10";

        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$name</td>";
            echo "<td>$surname</td>";
            echo "<td>$room</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>
