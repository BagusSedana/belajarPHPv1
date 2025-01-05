<!-- Looping -->

<!-- While Loop -->
<!-- Looping while digunakan untuk mengulang kode selama kondisi bernilai true. -->
<?php
// Inisialisasi variabel
$i = 1;
while ($i <= 5) {
  echo "Angka : $i\n";
  $i++;
}
?>

<!-- Do-While Loop -->
<!-- Looping do-while digunakan untuk mengulang kode selama kondisi bernilai true. -->
<?php
// Inisialisasi variabel
$i = 1;
do {
  echo "Angka : $i\n";
  $i++;
} while ($i <= 5);
?>

<!-- For Loop -->
<!-- Looping for digunakan untuk mengulang kode dengan jumlah iterasi yang diketahui -->
<?php
for ($i = 0; $i <= 10; $i++) {
  echo "Angka : $i\n";
}
?>

<!-- Foreach Loop -->
<!-- Looping foreach digunakan untuk mengulang kode dengan array. -->
<?php
$perulangan = array("Asus", "Lenovo", "Rog", "Acer");
foreach ($perulangan as $value) {
  echo "$value\n";
}
?>

<!-- Function -->
<!-- Function digunakan untuk mengelompokkan kode yang dapat digunakan kembali. -->
<?php
function sayHello($name)
{
  return "Hello, $name!";
}

echo sayHello("Jhoni");
?>

<!-- Array -->
<!-- Array digunakan untuk menyimpan beberapa nilai dalam satu variabel. -->
<?php
$array = array("Jhoni", "Joko", "Budi");
echo $array[0];
?>