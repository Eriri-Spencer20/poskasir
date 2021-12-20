<?php 
@ob_start();
session_start();

if(!empty($_SESSION['admin'])){
    require 'config.php';
    // admin
    include 'admin/template/header.php';
}