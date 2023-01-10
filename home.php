<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <nav>

    </nav>
<div id= "container">
 <div class= "card border border-primary " id="kartu">
 <form action="" method="post">
  <h1> Input data siswa </h1> <br>
   <div class="input-group">
        <span class="input-group-text">NIS</span>
        <input type="text" aria-label="First name" class="form-control"  name="NIS">
    </div> <br>
            <div class="input-group" >
            <span class="input-group-text">nama</span>
            <input type="text" aria-label="First name" class="form-control" name="NAMA">
        </div> <br>
                <div class="input-group">
                <span class="input-group-text">kelas</span>
                <input type="text" aria-label="First name" class="form-control"  name="KELAS">
            </div> <br>
            <input type="submit" class="btn btn-outline-primary" value="simpan" name="proses"></input> <br> <br>
            <button type="submit" class="btn btn-outline-warning" value="update" name="update">update</button> <br> <br>
            <button type="submit" class="btn btn-outline-danger" value="hapus" name="delete">delete</button> <br> <br>

            <?php
include "connection.php";
if (isset($_POST['proses'])) {
    mysqli_query($koneksi, "insert into datasiswa set
    nis = '$_POST[NIS]',
    nama = '$_POST[NAMA]',
    kelas ='$_POST[KELAS]'");
    
}
  ?>
</form>

</div>


<div class= "card " id="kartu2">
  <h1>list data siswa</h1> <br>
  
  <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NIS</th>
      <th scope="col">NAMA</th>
      <th scope="col">KELAS</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>2021.5.006</td>
      <td>azriel</td>
      <td>12 rpl</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>2021.5.006</td>
      <td>azriel</td>
      <td>12 rpl</td>
    </tr>
  </tbody>
</table>
           
</div>
</div>
</body>
</html>