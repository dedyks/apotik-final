<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Data Tables</title>

    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Data Tables -->
    <link href="<?php echo base_url()?>css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">

    <link href="<?php echo base_url()?>css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet">
    <!-- Mainly scripts -->
    <script src="<?php echo base_url()?>js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url()?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url()?>js/plugins/jeditable/jquery.jeditable.js"></script>

    <!-- Data Tables -->
    <script src="<?php echo base_url()?>js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url()?>js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url()?>js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="<?php echo base_url()?>js/plugins/dataTables/dataTables.tableTools.min.js"></script>
    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url()?>js/inspinia.js"></script>
    <script src="<?php echo base_url()?>js/plugins/pace/pace.min.js"></script>
</head>

<body>

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Mbak Yuni</strong>
                            </span> <span class="text-muted text-xs block">Pharmacist <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href="login.html">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li>
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="index.html">Dashboard v.1</a></li>
                        <li><a href="dashboard_2.html">Dashboard v.2</a></li>
                        <li><a href="dashboard_3.html">Dashboard v.3</a></li>
                        <li><a href="dashboard_4_1.html">Dashboard v.4</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>barang/listbarang"><i class="fa fa-diamond"></i> <span class="nav-label">MASTER</span> <span class="label label-primary pull-right">NEW</span></a>
                </li>

                <li>
                    <a href="<?php echo base_url() ?>barang/apotik"><i class="fa fa-eyedropper"></i> <span class="nav-label">Apotik</span> <span class="label label-success pull-right">READY</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Mutasi</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?php echo base_url(); ?>mutasi/apotik">Apotik</a></li>
                        <li><a href="<?php echo base_url(); ?>mutasi/ugd">UGD</a></li>
                        <li><a href="<?php echo base_url(); ?>mutasi/rawat_inap">Rawat Inap</a></li>
                        <li><a href="<?php echo base_url(); ?>mutasi/ruang_bersalin">Ruang Bersalin</a></li>
                        <li><a href="<?php echo base_url(); ?>mutasi/posyandu">Posyandu</a></li>
                        <li>
                                <a href="#">Posyandu Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">

                                    <li>
                                        <a href="<?php echo base_url(); ?>mutasi/posyandu_permata">Bukit Permata</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>mutasi/posyandu_etam">Bumi Etam</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>mutasi/posyandu_jaya">Bumi Jaya</a>
                                    </li>
                                    <li>
                                      <a href="<?php echo base_url(); ?>mutasi/posyandu_rapak">Bumi Rapak</a>
                                    </li>
                                    <li>
                                      <a href="<?php echo base_url(); ?>mutasi/posyandu_graha">Cipta Graha</a>
                                    </li>
                                    <li>
                                      <a href="<?php echo base_url(); ?>mutasi/posyandu_kadungan">Kadungan Jaya</a>
                                    </li>
                                    <li>
                                      <a href="<?php echo base_url(); ?>mutasi/posyandu_pangadan">Pangadan Baru</a>
                                    </li>


                                </ul>
                            </li>

                    </ul>
                </li>


                <li>
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Laporan</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?php echo base_url() ?>laporan/rekap_resep">Rekap Resep</a></li>
                        <li><a href="<?php echo base_url() ?>laporan/kartu_stock">Kartu Stock</a></li>
                        <li><a href="<?php echo base_url() ?>laporan/expire_date">Data barang ED</a></li>
                        <li><a href="<?php echo base_url() ?>laporan/pemesanan">Daftar pemesanan barang</a></li>
                        <li><a href="<?php echo base_url() ?>laporan/penerimaan">Daftar penerimaan barang</a></li>
                        <li><a href="<?php echo base_url() ?>laporan/pengembalian">Daftar pengembalian barang</a></li>
                        <li><a href="<?php echo base_url() ?>laporan/dimusnahkan">Daftar obat yang dimusnahkan</a></li>

                    </ul>
                </li>

                <li class="landing_link">
                    <a href="<?php echo base_url() ?>kategori/listKategori"><i class="fa fa-star"></i> <span class="nav-label">Kategori</span> <span class="label label-warning pull-right">NEW</span></a>
                </li>
                <li class="special_link">
                    <a href="<?php echo base_url() ?>satuan/listSatuan"><i class="fa fa-database"></i> <span class="nav-label">Sediaan</span></a>
                </li>
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" method="post" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to INSPINIA+ Admin Theme.</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a7.jpg">
                                </a>
                                <div class="media-body">
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a4.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/profile.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.html">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="login.html">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>



        </nav>
