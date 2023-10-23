<?php
if (@$_GET['menu'] == "" || $_GET['menu'] == "home") {
    include("./komponen/head.html");
    include("./komponen/judul-admin.php");
    include("./komponen/menu.php");
} elseif ($_GET['menu'] == 'berita') {
    include("../konten/form-berita.php");
}
