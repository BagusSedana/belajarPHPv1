<!-- Kondisional IF-ELSE IF-ELSEIF-ELSE -->

<!-- IF ELSE -->
<?php
$umur = 20;
if ($umur >= 18) {
  echo "Anda dewasa.";
} else {
  echo "Anda belum dewasa.";
}
?>

<!-- IF-ELSEIF-ELSE -->
<?php
$nilai = 75;
if ($nilai >= 90) {
  echo "Grade A";
} elseif ($nilai >= 80) {
  echo "Grade B";
} elseif ($nilai >= 70) {
  echo "Grade C";
} else {
  echo "Grade D";
}
?>

<!-- Switch -->
<!-- Switch digunakan untuk mengevaluasi ekspresi terhadap beberapa kasus. -->
<?php
$warna = "merah";
switch ($warna) {
  case "merah":
    echo "Warna favoritmu merah!";
    break;
  case "biru":
    echo "Warna favoritmu biru!";
    break;
  default:
    echo "Warna favoritmu tidak diketahui!";
}
?>