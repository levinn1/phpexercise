<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP in HTML</title>
</head>
<body>

<!-- Task 1: Tampilkan teks "Hello World" -->
<?php
    echo "Hello World";
?>

<br><br>

<!-- Task 2: Tampilkan 10 baris teks "Hello World" -->
<?php
for ($i = 0; $i < 10; $i++) {
    echo "Hello World<br>";
}
?>

<br><br>

<!-- Task 3: Tampilkan 10 baris teks "Hello World", tapi setiap baris genap ditambah teks "Hello World - [no baris]" -->
<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "Hello World - $i<br>";
    } else {
        echo "Hello World<br>";
    }
}
?>

<br><br>

<!-- Task 4: Buat array berisi nama bulan dari Januari hingga Desember, dan tampilkan -->
<?php
$months = [
    "Januari", "Februari", "Maret", "April", "Mei", "Juni",
    "Juli", "Agustus", "September", "Oktober", "November", "Desember"
];
foreach ($months as $month) {
    echo $month . "<br>";
}
?>

<br><br>

<!-- Task 5: Buat array 2 dimensi, dimana indeks pertama menyimpan nama bulan dan indeks kedua menyimpan hari libur nasional di bulan tersebut. Lalu tampilkan -->
<?php
$holidays = [
    "Januari" => "Tahun Baru",
    "Februari" => "Imlek",
    "Maret" => "Hari Raya Nyepi",
    "April" => "Paskah",
    "Mei" => "Hari Buruh",
    "Juni" => "Hari Lahir Pancasila",
    "Juli" => "Idul Adha",
    "Agustus" => "Hari Kemerdekaan",
    "September" => "Muharram",
    "Oktober" => "Maulid Nabi",
    "November" => "Hari Pahlawan",
    "Desember" => "Natal"
];
foreach ($holidays as $month => $holiday) {
    echo "$month - $holiday<br>";
}
?>

<br><br>

<!-- Task 6: Buat 4 fungsi untuk membuat pengurangan, perkalian, pembagian dan penjumlahan -->
<?php
function add($a, $b) {
    return $a + $b;
}

function subtract($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    if ($b == 0) {
        return "Error: Division by zero";
    }
    return $a / $b;
}

// Example usage
$num1 = 23;
$num2 = 2;

echo "Hasil penjumlahan $num1 dan $num2 adalah " . add($num1, $num2) . "<br>";
echo "Hasil pengurangan $num1 dan $num2 adalah " . subtract($num1, $num2) . "<br>";
echo "Hasil perkalian $num1 dan $num2 adalah " . multiply($num1, $num2) . "<br>";
echo "Hasil pembagian $num1 dan $num2 adalah " . divide($num1, $num2) . "<br>";
?>

</body>
</html>

