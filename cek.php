<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h1>Check</h1>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">kode barang</th>
            <th scope="col">nama barang</th>
            <th scope="col">kategori</th>
            <th scope="col">quantity</th>
            <th scope="col">expired</th>
          </tr>
        </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM add_barang";
            $query = mysqli_query($koneksi, $sql);
                                          while($data = mysqli_fetch_array($query)){
                                          ?>
                                         <tr>
                                         <td><?php echo $data['id'];?></td>
                                         <td><?php echo $data['kd_barang'];?></td>
                                         <td><?php echo $data['nm_barang'];?></td>
                                         <td><?php echo $data['kategori'];?></td>
                                         <td><?php echo $data['qty'];?></td>
										 <td><?php echo $data['exp'];?></td>

                                         <td>
                                              <!-- <a href='hapuscust.php?kdcust=<?php echo $data['kdcust']?>'>Hapus</a> -->
                                         </td>
                                             </tr>
                                             <?php
                                             }
                                             ?>
      </table>
</body>

</html>
