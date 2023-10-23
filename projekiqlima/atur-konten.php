<?php
if ($_GET['menu'] == "" || $_GET['menu'] == "beranda") {
  include("./komponen/gambar-header.html");
  include("./konten/beranda.html");
} elseif ($_GET['menu'] == 'sejarah') {
  include("./komponen/gambar-header.html");
  include("./konten/sejarah.php");
} elseif ($_GET['menu'] == 'visimisi') {
  include("./komponen/gambar-header.html");
  include("./konten/visimisi.php");
} elseif ($_GET['menu'] == 'struktur') {
  include("./konten/struktur.php");
} elseif ($_GET['menu'] == 'peraturan') {
  include("./konten/peraturan.php");
} elseif ($_GET['menu'] == 'info') {
  include("./konten/info.php");
} elseif ($_GET['menu'] == 'info') {
  include("./konten/info.php");
}
