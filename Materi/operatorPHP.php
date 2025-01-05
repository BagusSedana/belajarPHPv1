<!-- Operator pada PHP -->

<!-- Operator digunakan untuk melakukan operasi pada variabel dan nilai.
1.Operator Aritmatika : +, -, *, /, %
2.Operator Perbandingan : ==, !=, >, <, >=, <=
3.Operator Logika : &&, ||, ! 
-->

<!-- Operator Aritmatika: Digunakan untuk melakukan operasi matematika dasar -->
<?php

// Penjumlahan ()
$a = 10;
$b = 5;
echo $a + $b . "<br>"; // Output: 15

// Pengurangan (-)
$a = 10;
$b = 2;
echo $a - $b . "<br>"; // Output: 8

// Perkalian (*)
$a = 10;
$b = 2;
echo $a * $b . "<br>"; // Output: 20

// Pembagian (/)
$a = 10;
$b = 2;
echo $a / $b . "<br>"; // Output: 5

// Modulus (%)
$a = 10;
$b = 3;
echo $a % $b . "<br>"; // Output: 1

// ====== Operator Perbandingan: Digunakan untuk membandingkan dua nilai ====== //

// Operator Perbandingan (==): Digunakan untuk membandingkan dua nilai
$a = 10;
$b = 2;
echo $a == $b . "<br>"; // Output: false

// Operator Perbandingan (!=): Digunakan untuk membandingkan dua nilai
$a = 10;
$b = 2;
echo $a != $b . "<br>"; // Output: true

// Operator Perbandingan (>): Digunakan untuk membandingkan dua nilai
$a = 10;
$b = 2;
echo $a > $b . "<br>"; // Output: true

// Operator Perbandingan (<): Digunakan untuk membandingkan dua nilai
$a = 10;
$b = 2;
echo $a < $b . "<br>"; // Output: false

// Operator Perbandingan (>=): Digunakan untuk membandingkan dua nilai
$a = 10;
$b = 2;
echo $a >= $b . "<br>"; // Output: true

// Operator Perbandingan (<=): Digunakan untuk membandingkan dua nilai
$a = 10;
$b = 2;
echo $a <= $b . "<br>"; // Output: false

// ====== Operator Logika: Digunakan untuk melakukan operasi logika ====== //

// Operator Logika (&&): Digunakan untuk melakukan operasi logika AND
// Jika kedua nilai benar, maka hasilnya benar
$a = true;
$b = false;
echo $a && $b . "<br>"; // Output: false

// Operator Logika (||): Digunakan untuk melakukan operasi logika OR
// Jika salah satu nilai benar, maka hasilnya benar
$a = true;
$b = false;
echo $a || $b . "<br>"; // Output: true

// Operator Logika (!): Digunakan untuk melakukan operasi logika NOT
// Jika nilai benar, maka hasilnya salah
$a = true;
$b = false;
echo !$a . "<br>"; // Output: false