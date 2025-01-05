<!-- Tipe Data pada PHP -->

<!-- PHP mendukung beberapa tipe data:
String: "Hello"
Integer: 123
Float: 12.3
Boolean: true/false
Array: array("Jhoni", "Joko", "Budi")
Object: $obj = new stdClass();
NULL: null -->

<!-- Contoh syntax penggunaan tipe data: -->

<?php
// String adalah tipe data yang digunakan untuk menyimpan teks.
$string = "Jhoni";
echo $string . "<br>"; // Output: Jhoni

// Integer adalah tipe data yang digunakan untuk menyimpan angka.
$integer = 123;
echo $integer . "<br>"; // Output: 123

// Float adalah tipe data yang digunakan untuk menyimpan angka dengan koma.
$float = 12.3;
echo $float . "<br>"; // Output: 12.3

// Boolean adalah tipe data yang digunakan untuk menyimpan nilai true atau false.
$boolean = true;
echo $boolean . "<br>"; // Output: 1 atau true

// Array adalah tipe data yang digunakan untuk menyimpan beberapa nilai.
// untuk mengakses nilai array, gunakan index atau [index urutuan nilanya (misal 1 yang berisi Joko)].
$array = array("Jhoni", "Joko", "Budi");
echo $array[1] . "<br>"; // Output: Joko

// Object adalah tipe data yang digunakan untuk menyimpan objek.
// untuk mengakses objek, gunakan nama objek.
// stdClass adalah kelas dasar dalam PHP yang digunakan untuk membuat objek.
// property adalah properti dari objek.
// untuk mengakses properti atau metode dari objek, gunakan tanda panah (->).
$object = new stdClass();
$object->property = "Jhoni";
echo $object->property . "<br>"; // Output: Jhoni

// Null adalah tipe data yang digunakan untuk menyimpan nilai kosong.
$null = null;
echo $null . "<br>"; // Output: null

?>