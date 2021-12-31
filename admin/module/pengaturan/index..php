<!-- side end -->

<!-- main content -->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12 main-chart">
                <h3>Pengaturan Toko</h3>
                <br>
                <?php if (isset($_GET['success'])) { ?>
                <div class="alert alert-success">
                    <p>Ubah Data Berhasil</p>
                </div>
                <?php } ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>Nama Toko</td>
                            <td>Alamat Toko</td>
                            <td>Kontak (Hp)</td>
                            <td>Nama Pemilik Toko</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <form method="post" action="function/edit/edit.php?pengaturan=ubah">
                            <tr>
                                <td><input class="form-control" name="namatoko" value="<?php echo $toko['nama_toko'];?>"
                                        placeholder="Nama Toko"></td>
                                <td><input class="form-control" name="Alamat_toko"
                                        value="<?php echo $toko['alamat_toko'];?>" placeholder="Alamat Toko"></td>
                                <td><input class="form-control" name="kontak" value="<?php echo $toko['tlp'];?>"
                                        placeholder="Kontak (Hp)"></td>
                                <td><input class="form-control" name="pemilik"
                                        value="<?php echo $toko['nama_pemilik'];?>" placeholder="Nama Pemilik Toko">
                                </td>
                            </tr>
                        </form>
                    </tbody>
                </table>
                <div class="clearfix" style="padding-top: 41%;"></div>
            </div>
        </div>
    </section>
</section>