<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Data Toko Onlen</title>
  </head>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
              <table class="table table-striped">
                <tr>
                  <td>Id Customer</td>
                  <td>Nama</td>
                  <td>e-mail</td>
                  <td>Password</td>
                  <td>Nomer Telepon</td>
                  <td colspan="2">Aksi</td>
                </tr>
                <?php
                  require_once '../config/koneksi.php';
                  $con=mysqli_query($koneksi, "SELECT*FROM customer");
                  while ($data =mysqli_fetch_array($con)) {
                  ?>
                  <tr>
                    <td><?php echo $data['id_customer']?></td>
                    <td><?php echo $data['nama_customer']?></td>
                    <td><?php echo $data['email']?></td>
                    <td><?php echo $data['password']?></td>
                    <td><?php echo $data['no_tlp']?></td>
                    <td><a href="../config/deletecustomer.php?d=<?= $data['id_customer'] ?>">Hapus</a>
                        || <a href="../config/editcustomer.php?d=<?= $data['id_customer'] ?>"
                          data-toggle="modal" data-target="#exampleModal">Edit</a>
                  </tr>
                <?php } ?>
              </table>
             </div>
        </div>
      </div>

      <!-- Modal daftar -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Edit</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?php
          require_once '../config/koneksi.php';
          $d=$_GET['d'];
          $con=mysqli_query($koneksi, "SELECT*FROM customer where id_customer='$d'");
          while ($data =mysqli_fetch_array($con)) {
          ?>
        <form action="../config/editcustomer.php" method="post">
        <div class="modal-body">
          <div class="form-group">
            Masukan Nama : <input type="text" name="nama_customer" value="<?php echo $data['nama_customer']?>" placeholder="nama" required />
          </div>
          <div class="form-group">
            Masukan Password : <input type="text" name="password" value="<?php echo $data['password']?>" placeholder="password" required />
          </div>
          <div class="form-group">
            Masukan No Tlp : <input type="number" name="no_tlp" value="<?php echo $data['no_tlp']?>" placeholder="+62..." required />
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" name="submit" value="simpan" class="btn btn-primary">
        </div>

        <?php } ?>
      </form>
          </div>
        </div>
      </div>

    </div>

       <form action="../config/reset.php" method="post">
         <input type="submit" name="submit" class="btn btn-danger" value="Reset">
       </form>

       <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

       <!-- Include all compiled plugins (below), or include individual files as needed -->
       <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
