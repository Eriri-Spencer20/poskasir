<?php
@ob_start();
session_start();

if (!empty($_SESSION['admin'])) {
    require 'config.php';

    // admin
    include 'admin/template/header.php';
    include 'admin/template/sidebar.php';
    if (!empty($_GET['page'])) {
        include 'admin/module/'.$_GET['page'].'/index.php';
    } else {
        include 'admin/template/home.php';
    }
    include 'admin/template/footer.php';
}
?>