<?php
/*
 * Proses Tampil
 */
class view
{

    protected $db;
    function __construct($db)
    {
        $this->db = $db;
    }

    function member()
    {
        $sql = "select member.*, login.* from member inner join login on member.id_member = login.id_member";
        $row = $this->db->prepare($sql);
        $row->execute();
        $hasil = $row->fetchAll();
        return $hasil;
    }
    function member_edit($id)
    {
        $sql = "select member.*, login.* from member inner join login on member,id_member = login.id_member where member.id_member= ?";
        $row = $this->db->prepare($sql);
        $row->execute(array($id));
        $hasil = $row->fetch();
        return $hasil;
    }
    function toko()
    {
        $sql = "select*from toko where id_toko='1'";
        $row = $this->db->prepare($sql);
        $row->execute();
        $hasil = $row->fetch();
        return $hasil;
    }
    function kategori()
    {
        $sql = "select*from kategori";
        $row = $this->db->prepare($sql);
        $row->execute();
        $hasil = $row->fetchAll();
        return $hasil;
    }
    function barang(){
        $sql = "select barang.*, kategori.id_kategori, kategori.nama_kategori from barang inner join kategori on barang.id_kategori = kategori.id_kategori ORDER BY id DESC";
        $row = $this-> db -> prepare($sql);
    $row -> execute();
    $hasil = $row -> fetchAll();
    return $hasil;
    }
    function barang_stok(){
        $sql = "select barang.* kategori.id_kategori, kategori.nama_kategori from barang inner join kategori on barang.id_kategori =kategori.id_kategori where stok <= 3 OREDER BY id DESC";
        $row = $this-> db -> prepare($sql);
        $row -> execute();
        $hasil = $row -> fetchAll();
        return $hasil;
    }
    function barang_edit($id){
        $sql = "select barang.*, kategori.id_kategori, kategori.nama_kategori from barang inner join kategori on barang.id_kategori = kategori. id_kategori where id_barang=?";
        $row = $this-> db -> prepare($sql);
        $row -> execute(array($id));
        $hasil = $row -> fetch();
        return $hasil;
    }
    function barang_cari($cari){
        $sql = "select barang.*, kategori.id_kategori, kategori.nama_kategori from barang inner join kategori on barang.id_kategori = kategori. id_kategori where id_barang like '%$cari%'
        or nama_barang like '%$cari%' or merk like '%$cari%'";
        $row = $this-> db -> prepare($sql);
        $row -> execute();
        $hasil = $row -> fetchAll();
        return $hasil;
    }
    // function barang_id(){

    // }
    function kategori_edit($id){
        $sql = "select*from kategori where id_kategori=?";
        $row = $this -> db -> prepare($sql);
        $row -> execute(array($id));
        $hasil = $row -> fetch();
        return $hasil;
    }
    function kategori_row(){
        $sql = "select*from kategori ";
        $row = $this -> db -> prepare($sql);
        $row -> execute();
        $hasil = $row -> rowCount();
        return $hasil;
    }
    function barang_stok_row(){
        $sql = "SELECT SUM(stok) as jml FROM barang";
        $row = $this -> db -> prepare($sql);
        $row -> execute();
        $hasil = $row -> fetch();
        return $hasil;
    }
    function barang_beli_row(){
        $sql = "SELECT SUM(hargaz_beli) as bwli FROM barang";
        $row = $this -> db -> prepare($sql);
        $row -> execute();
        $hasil = $row -> fetch();
        return $hasil;
    }
    function jual_row(){
        $sql = "SELECT SUM(jumlah) as stok FROM nota";
        $row = $this -> db -> prepare($sql);
        $row -> execute();
        $hasil = $row -> fetch();
        return $hasil;
    }
}