<!-- main conntent end -->
<!-- footer start -->
<footer class="site-footer">
    <div class="text-center">
        <?php echo date('Y');?> - Aplikasi Kasir
    </div>
</footer>
<!-- footer end -->
</section>

<!-- JS -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/jquery-1.8.3.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="assets/js/jquery.sparkline.js"></script>

<script src="assets/datatables/jquery.dataTables.min.js"></script>
<script src="assets/datatables/dataTables.bootstrap.min.js"></script>

<!-- common script for all page-->
<script src="assets/js/common-scripts.js"></script>

<script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="assets/js/gritter-conf.js"></script>

<!-- script for this page -->
<!-- <script src    = "/assets/js/sparkl"></script> -->
<script src="assets/js/sparkline-chart.js"></script>
<script src="assets/js/zabuto_calendar.js"></script>

<script type="text/javascript">
// datable
$(function() {
    $("#example1").DataTable();
    $('#example2').DataTable();
});
</script>
<?php
$sql = " select * from barang where stok <=3";
$row = $config -> prepare($sql);
$row-> execute();
$q = $row -> fetch();
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
<script type="application/javascript">
$(document).ready(function() {
    $("#date-popover").popover({
        html: true,
        trigger: "manual"
    });
    $("#date-popover").hide();
    $("#date-popover").click(function(e) {
        $(this).hide();
    });

    $("#my-calendar").zabuto_calendar({
        action: function() {
            return myDateFunction(this.id, false);
        },
        action_nav: function() {
            return myNavFunction(this.id);
        },
        ajax: {
            url: "",
            modal: true
        },
        legend: []
    });
});

function myNavFunction(id) {
    $("#date-popover").hide();
    var nav = $("#" + id).data("navigation");
    var to = $("#" + id).data(" to");
    console.log('nav' + nav + 'to: ' + to.month + '/' + to.year);
}

// angka 500 dibawah artinya pesan akan muncul dalam 0.5 detik setelah document ready
$(document).ready(function() {
    setTimeout(function() {
        $(".alert-danger").fadeIn('slow');
    }, 500);
});
setTimeout(function() {
    $("alert-danger").fadeOut('slow');
}, 5000);

$(document).ready(function() {
    setTimeout(function() {
        $(".alert-success").fadeIn('slow');
    }, 500);
});
setTimeout(function() {
    $("alert-success").fadeOut('slow');
}, 5000);

$(document).ready(function() {
    setTimeout(function() {
        $(".alert-warning").fadeIn('slow');
    }, 500);
});
setTimeout(function() {
    $("alert-success").fadeOut('slow');
}, 5000);
</script>
<script>
$(".modal-create").hide();
$(".bg-shadow").hide();
$(".bg-shadow").hide();

function clickModals() {
    $(".bg-shadow").fadeIn();
    $(".modal-create").fadeIn();
}

function cancelModals() {
    $('.modal-view').fadeIn();
    $(".modal-create").hide();
    $(".bg-shadow").hide();
}
</script>

</body>

</html>