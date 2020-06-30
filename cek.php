<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!--===============================================================================================-->

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>
    <h1 align="center">List Barang</h1>
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
            include("koneksi.php");	
                $sql = "SELECT * FROM add_barang";
                $query = mysqli_query($db, $sql);
                                              while($data = mysqli_fetch_array($query)){
                                              ?>
                <tr>
                    <td>
                        <?php echo $data['id'];?>
                    </td>
                    <td>
                        <?php echo $data['kd_barang'];?>
                    </td>
                    <td>
                        <?php echo $data['nm_barang'];?>
                    </td>
                    <td>
                        <?php echo $data['kategori'];?>
                    </td>
                    <td>
                        <?php echo $data['qty'];?>
                    </td>
                    <td>
                        <?php echo $data['exp'];?>
                    </td>

                    <td>
                        <?php
                    echo "<a href='hapus.php?id=".$data['id']."'>Hapus</a>";
                    ?>
                    </td>
                </tr>
                <?php
                                                 }
                                                 ?>
    </table>
            <form action="homeadm.html" method="POST">
            <div class="container-login100-form-btn m-t-17">
                <input type="submit" class="login100-form-btn" name="sbm" value="Kembali">
            </div>
            </div>
        </form>
            <!-- <form action="sort.php" method="POST">
                <div align="center">
                    <button type="submit" class="btn btn-primary"><span>Sort by Date </span></button>
                </div>
            </form> -->
</body>