<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Demo Model</title>
  </head>
  <body>
    <h2>Model Segiempat</h2>

    Nilai Panjang : <?php echo $model->get_panjang(); ?> <br />
    Nilai Lebar : <?php echo $model->get_lebar();  ?> <br />
    Luas Segiempat : <?php echo $model->hitung_luas(); ?> <br />
    Keliling Segiempat : <?php echo $model->hitung_keliling(); ?> <br />
  </body>
</html>
