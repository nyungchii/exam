<!DOCTYPE html>
<html>
<head>
    <title>นับจำนวนนักเรียน</title>
</head>
<body>

<?php
// ข้อมูลนักเรียน
$students = array_fill(0, 40, 'รายชื่อนักเรียน ม.6/10');

// นับจำนวนนักเรียน
$total_students = count($students);

echo "จำนวนนักเรียนทั้งหมดคือ: $total_students คน";
?>

</body>
</html>
