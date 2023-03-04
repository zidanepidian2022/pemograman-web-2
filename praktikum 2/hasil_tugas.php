<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Hasil Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="container">
    <table class="table text-uppercase table-bordered">
        <tr class="table-primary">
            <th>customer</th>
            <th>produk</th>
            <th>jumlah</th>
            <th>harga</th>
            <th>total harga</th>
            
        </tr>
        <?php require_once "proses_tugas.php";?>
        <tr>
            <td><?=$customer; ?></td>
            <td><?=$produk; ?></td>
            <td><?=$jumlah; ?></td>
            <td><?=$harga; ?></td>
            <td><?=$total_harga; ?></td>
            
        </tr>
    </table>
  </div>
</body>
</html>