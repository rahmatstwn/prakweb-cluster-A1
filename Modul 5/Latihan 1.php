<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 1 Praktikum 2</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <article>
    <?php
    if (isset($_POST['hitung'])) {
      $bil_1 = $_POST['bil1'];
      $bil_2 = $_POST['bil2'];
      $operator = $_POST['operasi'];
      switch ($operator) {
        case '+':
          $hasil = $bil_1 + $bil_2;
          break;
        case '-':
          $hasil = $bil_1 - $bil_2;
          break;
        case '*':
          $hasil = $bil_1 * $bil_2;
          break;
        case '/':
          $hasil = $bil_1 / $bil_2;
          break;

        case '%':
          $hasil = $bil_1 % $bil_2;
          break;

        default:
          $hasil = "Pilih Operatornya";
          break;
      }
    }
    ?>
    <div class="Ngitung">
      <h1 class="judul">Perhitungan Dasar Aritmatik</h1>

      <form method="post" action="Perhitungan.php">
        <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
        <input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
        <select class="opt" name="operasi">
          <option value="#">Pilih Operator</option>
          <option value="+">+</option>
          <option value="-">-</option>
          <option value="*">x</option>
          <option value="/">/</option>
          <option value="%">Mod(%)</option>
        </select>
        <input type="submit" name="hitung" value="Hitung" class="tombol">
      </form>
      <?php if (isset($_POST['hitung'])) { ?>
        <input type="text" value="<?php echo $hasil; ?>" class="bil">
      <?php } else { ?>
        <input type="text" value="0" class="bil">
      <?php } ?>
    </div>
  </article>
  </div>
</body>

</html>
