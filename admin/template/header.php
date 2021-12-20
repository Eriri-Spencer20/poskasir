<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dashboard">

    <title>Aplikasi Kasir</title>

    <!-- Boostsrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- External  CSS -->
    <link href="assets/font-awaesome/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/assets/lineicons/style.css">

    <!-- Custom CSS for this Template -->

    <link href="assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/to-do.css" rel="stylesheet" href="">

    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/datatables/jquery.dataTables.js"></script>
    <script type="text/javascript" src="assets/datatables/dataTables.bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/jquery-2.2.3.min.js"></script>
    <style>
    .header {
        background: #328f6b;
        color: #fff;
    }

    #main-content {
        background: #fff;
    }

    #hidden {
        display: none;
    }
    </style>
</head>

<body>
    <section id="container">
        <!-- TOP BAR CONTENT & NOTIFICATIONS -->
        <!-- header start -->
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltip" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!-- logo start -->
            <a href="index.php" class="logo"><b><?php echo $toko['nama_toko'];?></b> <small
                    style="padding-left: 5px;font-size:13px;"><?php echo $toko['alamat_toko'];?></small> </a>
            <!-- logo end -->
            <div class="nav notify-row" id="top_menu"></div>
            <!--  notification start -->
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" onclick="javascript: return confirm('Ingin Logout ?');"
                            href="logout.php">Logout</a></li>
                </ul>
            </div>
            <!--  notification end -->
        </header>
        <!-- header end -->