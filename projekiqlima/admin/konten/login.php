<?php
if (isset($_POST['login'])) {
  header('location: index.php');
  exit;
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = mysqli_query($con, "select * FROM login where
  username = '$username' and password =sha1($'password') ");
  $jumlah = mysqli_num_rows($query);

  if ($jumlah > 0) {
    $sesi = mysqli_fetch_assoc($query);

    $_SESSION['id'] = $sesi['id_pengguna'];
    $_SESSION['username'] = $sesi['username'];
    $_SESSION['password'] = $sesi['password'];
    $_SESSION['level'] = $sesi['level'];

    print "<meta http-equiv='refresh' content='0; url=?menu=index'>";
  } else {
    $pesan = "<div class='alert alert-danger'>Username & Password tidak cocok </div>";
  }
}
?>
<div class="row">
  <div class="col-lg-4">
    <h1>Login ke web BPBD </h1>
    <form action="">
      <div class="mb-3 form-group">
        <input type="text" class="form-control" placeholder="username" required>
      </div>
      <div class="mb-3 form-group">
        <input type="password" class="form-control" placeholder="password" required>
      </div>

      <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
  </div>
</div>