<!-- main conntent end -->
<!-- footer start -->
<footer class="site-footer">
    <div class="text-center">
        <?php echo date('y'); ?> - Aplikasi Kasir
    </div>
</footer>
<!-- footer end -->
</section>

<!-- JS -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="assets/js/jquery.sparkline.js"></script>

<script src="assets/datatables/jquery.dataTables.min.js"></script>
<script src="assets/datatables/dataTables.bootstrap.min.js"></script>

<!-- common script for all page-->
<script src="assets/js/common-scripts.js"></script>
<!-- -1 -->
<script type="text/javascript" src="assets/js/gritter-conf.js"></script>

<!-- script for this page -->
<!-- <script src    = "/assets/js/sparkl"></script> -->
<script src="assets/js/zabuto_calendar.js"></script>

<script type="text/javascript">
// datable
$(function() {
    $("#example1").DataTable();
    $("#example2").DataTable();
})
</script>
<?php
$sql = " select *from barang where stok <=3";
$row = $config->prepare($sql);
$row->execute();
$q = $row->fetch();
if ($q['stok'] == 3) {
    if ($q['stok'] == 2) {
        if ($q['stok'] == 1) {
            ?>
<script type="text/javascript">
$(document).ready(function() {
    var unique_id = $.gritter.add({
        title: 'Peringatan !',
        text: 'stok barang ada yang tersisa kurang dari 3 silahkan pesan lagi!',
        image: 'assets/img/seru.png',
        sticky: true,
        time: '',
        class_name: 'my-sticky-class'
    });
    return false;
});
</script>
<?php }}}?>