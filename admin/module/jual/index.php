<!--sidebar end-->

<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
<!--main content start-->
<?php
      $id = $_SESSION['admin']['id_member'];
      $hasil = $lihat -> member_edit($id);
      ?>
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12 main-chart">
                <h3>Keranjang Penjualan</h3>
                <br>
                <?php if(isset($_GET['success'])){?>
                <div class="alert alert-success">
                    <p>Edit Data Berhasil !</p>
                </div>
                <?php } ?>
                <?php if(isset($_GET['remove'])){?>
                <div class="alert alert-danger">
                    <p>Hapud Data Berhasil !</p>
                </div>
                <?php } ?>
                <div class="col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4><i class="fa fa-search">Cari Barang</i></h4>
                        </div>
                        <div class="panel-body">
                            <input type="text" id="cari" class="form-control" name="cari"
                                placeholder="Masukkan : Kode / Nama Barang [ENTER]">
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4><i class="fa fa-list"></i>Hasil Pencarian</h4>
                        </div>
                        <div class="panel-body">
                            <div id="hasil_cari"></div>
                            <div id="tunggu"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="panel panel-primary">
                        <h4><i class="fa fa-shopping-cart"></i> KASIR <a class="btn btn-danger pull-right"
                                style="margin-top: -0.5pc;" href="function/hapus/hapus.php?penjualan=jual"><b>RESET
                                    KERNJANG</b></a> </h4>
                    </div>
                    <div class="panel-body">
                        <div id="keranjang">
                            <table class="table table-bordered">
                                <tr>
                                    <td><b>Tanggal</b></td>
                                    <td><input type="text" readonly="readonly" class="form-control"
                                            value="<?php echo date("j F Y, G:i");?>" name="tgl"></td>
                                </tr>
                            </table>
                            <table class="table table-bordered" id="example1">

                        </div>
                        <thead>
                            <tr>
                                <td> No</td>
                                <td> Nama Barang</td>
                                <td style="width: 10%;"> Jumlah</td>
                                <td style="width: 20%;"> Total</td>
                                <td> Kasir</td>
                                <td> Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $total_bayar=0; $no=1;
$hasil_penjualan = $lihat -> penjualan();?>
                            <?php foreach($hasil_penjualan as $isi){;?>
                            <tr>
                                <td><?php echo $no;?></td>
                                <td><?php echo $isi ['nama_barang'];?> </td>
                                <td>
                                    <!-- alsi ke table penjualan -->
                                    <form method="POST" action="function/edit.php?jual=jual">
                                        <input type="number" name="jumlah" value="<?php echo $isi['jumlah'];?>"
                                            class="form-control">
                                        <input type="hidden" name="id" value="<?php echo $isi['id_penjualan'];?>"
                                            class="form-control">
                                        <input type="hidden" name="id_barang" value="<?php echo $isi['is_barang'];?>"
                                            class="form-control">
                                </td>
                                <td>Rp.<?php echo number_format($isi['total']);?>,-</td>
                                <td><?php echo $isi['nm_member'];?></td>
                                <td>
                                    <button type="submit" class="btn btn-warning">
                                    </button>
                                    </form>
                                    <!-- aksi ke table penjualan -->
                                    <a href="function/hapus/hapus.php?jual=jual&id<?php echo $isi['id_penjualan'];?>&brg=<?php echo $isi['id_barang'];?>&jml=<?php echo $isi['jumlah'];?>"
                                        class="btn btn-danger"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <?php $no++; $total_bayar += $isi['total'];}?>
                        </tbody>
                        </table>
                        <br />
                    </div>
                </div>
            </div>
        </div>

    </section>