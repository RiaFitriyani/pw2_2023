<?php
  /* Task 1
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi
  */
  $m_fruits = [
    ["id"=>"1", "name" => "Rambutan", "color" => "Merah", "stock" => 127, "price" => 7000, "description" => "buah berwarna merah dengan rasa manis asem"],
    ["id"=>"2","name" => "Semangka", "color" => "Merah", "stock" => 19, "price" => 13000, "description" => "Buah berwarna merah yang segar dan manis"],
    ["id"=>"3","name" => "kiwi", "color" => "Hijau", "stock" => 87, "price" => 89000, "description" => "Buah berwarna hijau yang asem,manis,sepet "],
    ["id"=>"4","name" => "Pisang", "color" => "Kuning", "stock" => 19, "price" => 2000, "description" => "Buah berwarna kuning yang enak dan manis rasanya"],
    ["id"=>"5","name" => "Jeruk", "color" => "oren", "stock" => 3, "price" => 10000, "description" => "Buah kecil dengan biji yang bisa dimaka dan manis rasanya"]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
          /* Task 2
            Tampilkan data array tersebut disini dan buatlah menjadi sebuah table
          */
          foreach ($m_fruits as $fruit) {
            echo '<tr><td>'.$fruit["id"].'</td>';
            echo '<td>'.$fruit["name"].'</td>';
            echo '<td>'.$fruit["color"].'</td>';
            echo '<td>'.$fruit["stock"].'</td>';
            echo '<td>'.$fruit["price"].'</td>';
            echo '<td>'.$fruit["description"].'</td></td>';
                echo '<br>';
        } 
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>