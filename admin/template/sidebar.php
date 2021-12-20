<!-- *******************
    MAIN SIDEBAR MENU ************************-->

<!-- sidebar start -->
<?php 
$id =$_SESSION['admin']['id_member'];
$profile = $lihat -> member_($id);
?>

<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start -->
        <ul class="sidebar-menu" id="nav-acordion">

            <p class="centered"><a><img src="/assets/img/user/<?php echo $profile['gambar'];?>" class="img-circle"
                        width="100" height="110"></a></p>
            <h5 class="centered"><?php echo $profile['nm_member'];?></h5>

            <li class="mt">
                <a href="index.php">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-dekstop"></i>
                    <span>Master <span style="padding-left: 2px;"><i class="fa fa-angle-down"></i></span></span>
                </a>
                <ul class="sub">
                    <li><a href="index.php?page=barang">Barang</a></li>
                    <li><a href="index.php?=kategori">Kategori</a></li>
                    <li><a href="index.php?=user">User</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-dekstop"></i>
                    <span>Transaksi <span style="padding-left: 2px;"><i class="fa fa-angle-down"></i></span></span>
                </a>
                <ul class="sub">
                    <li><a href="index.php?page=jual">Transaksi Jual</a></li>
                    <li><a href="index.php?page=laporan">Laporan Penjualan</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-dekstop"></i>
                    <span>Setting <span style="padding-left: 2px;"><i class="fa fa-angle-down"></i></span></span>
                </a>
                <ul class="sub">
                    <li><a href="index.php?page=pengaturan">Pengaturan Toko</a></li>
                </ul>
            </li>
        </ul>
        <!-- sidebar menu end -->
    </div>
</aside>
<!-- sidebar end -->