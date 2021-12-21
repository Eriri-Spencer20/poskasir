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
}