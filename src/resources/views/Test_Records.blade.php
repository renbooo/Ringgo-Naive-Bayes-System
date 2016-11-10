<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tables | Tables</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="css/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/animate.css">
    <link type="text/css" rel="stylesheet" href="css/all.css">
    <link type="text/css" rel="stylesheet" href="css/main.css">
    <link type="text/css" rel="stylesheet" href="css/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="css/zabuto_calendar.min.css">
    <link type="text/css" rel="stylesheet" href="css/pace.css">
    <link type="text/css" rel="stylesheet" href="css/jquery.news-ticker.css">
    <style media="screen">
      th{
        text-align:center;
        border-left: 1px solid #EEEEEE;

      }
      body{
        height: 200%;
      }
      td{
        text-align:center;
        border: 1px solid #EEEEEE;
      }
      tr{
        background-color: white;

      }
    </style>
</head>
<body>
    <div>
        <!--BEGIN THEME SETTING-->
        <div id="theme-setting">
            {{-- <a href="#" data-toggle="dropdown" data-step="1" data-intro="&lt;b&gt;Many styles&lt;/b&gt; and &lt;b&gt;colors&lt;/b&gt; be created for you. Let choose one and enjoy it!"
                data-position="left" class="btn-theme-setting"><i class="fa fa-cog"></i></a> --}}
            <div class="content-theme-setting">
                <select id="list-style" class="form-control">
                    <option value="style1">Flat Squared style</option>
                    <option value="style2">Flat Rounded style</option>
                    <option value="style3" selected="selected">Flat Border style</option>
                </select>
            </div>
        </div>
        <!--END THEME SETTING-->
        <!--BEGIN BACK TO TOP-->
        <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
        <div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a id="logo" href="index.html" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">UTS DATMIN</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
            <div class="topbar-main">



            </div>
        </nav>
            <!--BEGIN MODAL CONFIG PORTLET-->
            <div id="modal-config" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">
                                &times;</button>
                            <h4 class="modal-title">
                                Modal title</h4>
                        </div>

                        <div class="modal-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend et nisl eget
                                porta. Curabitur elementum sem molestie nisl varius, eget tempus odio molestie.
                                Nunc vehicula sem arcu, eu pulvinar neque cursus ac. Aliquam ultricies lobortis
                                magna et aliquam. Vestibulum egestas eu urna sed ultricies. Nullam pulvinar dolor
                                vitae quam dictum condimentum. Integer a sodales elit, eu pulvinar leo. Nunc nec
                                aliquam nisi, a mollis neque. Ut vel felis quis tellus hendrerit placerat. Vivamus
                                vel nisl non magna feugiat dignissim sed ut nibh. Nulla elementum, est a pretium
                                hendrerit, arcu risus luctus augue, mattis aliquet orci ligula eget massa. Sed ut
                                ultricies felis.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-default">
                                Close</button>
                            <button type="button" class="btn btn-primary">
                                Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--END MODAL CONFIG PORTLET-->
        </div>
        <!--END TOPBAR-->
        <div id="wrapper">
            <!--BEGIN SIDEBAR MENU-->
            <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
                data-position="right" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                     <div class="clearfix"></div>

                     <ul id="side-menu" class="nav">
                          <div class="clearfix"></div>
                         <li><a href="home">{{--<i class="fa fa-tachometer fa-fw">
                             <div class="icon-bg bg-orange"></div>
                         </i>--}}<span class="menu-title"><strong>Beranda</strong></span></a></li>
                         <li><a href="category">{{--<i class="fa fa-desktop fa-fw">
                             <div class="icon-bg bg-pink"></div>
                         </i>--}}<span class="menu-title"><strong>Kategori</strong></span></a>

                         </li>
                          <li class="active"><a href="forms">{{--<i class="fa fa-edit fa-fw">
                             <div class="icon-bg bg-violet"></div>
                         </i>--}}<span class="menu-title"><strong>Test Record</strong></span></a>

                         </li>
                         <li><a href="help">{{--<i class="fa fa-th-list fa-fw">
                           <div class="icon-bg bg-blue"></div>
                         </i>--}}<span class="menu-title"><strong>Bantuan</strong></span></a>
                         </li>
                         <li><a href="about">{{--<i class="fa fa-send-o fa-fw">
                           <div class="icon-bg bg-green"></div>
                         </i>--}}<span class="menu-title"><strong>Tentang</strong></span></a>
                         </li>
                     </ul>
            </div>
        </nav>


            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Tables</div>

                    </div>

                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div id="tab-general">
                      <div class="col-lg-6">
                          <div class="panel panel-yellow">
                              <div class="panel-heading">Keadaan Lokasi</div>

                              <div class="panel-body">
                                  <table class="table table-hover">
                                      <tr>
                                          <th  rowspan="2">ID</th>
                                          <th  rowspan="2">Keadaan Lokasi</th>
                                          <th  colspan="2">Patroli Rutin</th>
                                          <th  colspan="2">Probabilitas</th>
                                      </tr>
                                      <tr>
                                        <th>Ya</td>
                                        <th>Tidak</td>
                                        <th>Ya</td>
                                        <th>Tidak</td>
                                      </tr>
                                      <tr>
                                          <td>1</td>
                                          <td>{{$Lokasi}}</td>
                                          <td>{{$Keadaan_Lokasi->ya}}</td>
                                          <td>{{$Keadaan_Lokasi->tidak}}</td>
                                          <td>{{$pro_Lokasi->ya}}</td>
                                          <td>{{$pro_Lokasi->tidak}}</td>
                                          {{-- <td><span class="label label-sm label-success">Approved</span></td> --}}
                                      </tr>
                                    </table>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="panel panel-yellow">
                                  <div class="panel-heading">Waktu Kejadian</div>
                                   <div class="panel-body">
                                      <table class="table table-hover">
                                          <tr>
                                              <th  rowspan="2">ID</th>
                                              <th  rowspan="2">Waktu Kejadian</th>
                                              <th  colspan="2">Patroli Rutin</th>
                                              <th  colspan="2">Probabilitas</th>
                                          </tr>
                                          <tr>
                                            <th>Ya</td>
                                            <th>Tidak</td>
                                            <th>Ya</td>
                                            <th>Tidak</td>
                                          </tr>
                                          <tr>
                                              <td>1</td>
                                              <td>{{$Waktu}}</td>
                                              <td>{{$Waktu_Kejadian->ya}}</td>
                                              <td>{{$Waktu_Kejadian->tidak}}</td>
                                              <td>{{$pro_Waktu->ya}}</td>
                                              <td>{{$pro_Waktu->tidak}}</td>
                                              {{-- <td><span class="label label-sm label-success">Approved</span></td> --}}
                                          </tr>
                                    </table>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="panel panel-yellow">
                                  <div class="panel-heading">Kendaraan Korban</div>
                                   <div class="panel-body">
                                      <table class="table table-hover">
                                          <tr>
                                              <th  rowspan="2">ID</th>
                                              <th  rowspan="2">Kendaraan Korban</th>
                                              <th  colspan="2">Patroli Rutin</th>
                                              <th  colspan="2">Probabilitas</th>
                                          </tr>
                                          <tr>
                                            <th>Ya</td>
                                            <th>Tidak</td>
                                            <th>Ya</td>
                                            <th>Tidak</td>
                                          </tr>
                                          <tr>
                                              <td>1</td>
                                              <td>{{$Kendaraan}}</td>
                                              <td>{{$Kendaraan_Korban->ya}}</td>
                                              <td>{{$Kendaraan_Korban->tidak}}</td>
                                              <td>{{$pro_Kendaraan->ya}}</td>
                                              <td>{{$pro_Kendaraan->tidak}}</td>
                                              {{-- <td><span class="label label-sm label-success">Approved</span></td> --}}
                                          </tr>
                                        </table>
                                      </div>
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="panel panel-yellow">
                                    <div class="panel-heading">Keadaan Korban</div>
                                     <div class="panel-body">
                                        <table class="table table-hover">
                                            <tr>
                                                <th  rowspan="2">ID</th>
                                                <th  rowspan="2">Keadaan Korban</th>
                                                <th  colspan="2">Patroli Rutin</th>
                                                <th  colspan="2">Probabilitas</th>
                                            </tr>
                                            <tr>
                                              <th>Ya</td>
                                              <th>Tidak</td>
                                              <th>Ya</td>
                                              <th>Tidak</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>{{$Keadaan}}</td>
                                                <td>{{$Keadaan_Korban->ya}}</td>
                                                <td>{{$Keadaan_Korban->tidak}}</td>
                                                <td>{{$pro_Keadaan->ya}}</td>
                                                <td>{{$pro_Keadaan->tidak}}</td>
                                                {{-- <td><span class="label label-sm label-success">Approved</span></td> --}}
                                            </tr>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="panel panel-yellow">
                                    <div class="panel-heading">Kendaraan Korban</div>
                                     <div class="panel-body">
                                        <table class="table table-hover">
                                            <tr>
                                                <th  rowspan="2">ID</th>
                                                <th  rowspan="2">Status Tersangka</th>
                                                <th  colspan="2">Patroli Rutin</th>
                                                <th  colspan="2">Probabilitas</th>
                                            </tr>
                                            <tr>
                                              <th>Ya</td>
                                              <th>Tidak</td>
                                              <th>Ya</td>
                                              <th>Tidak</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>{{$Status}}</td>
                                                <td>{{$Status_Tersangka->ya}}</td>
                                                <td>{{$Status_Tersangka->tidak}}</td>
                                                <td>{{$pro_Status->ya}}</td>
                                                <td>{{$pro_Status->tidak}}</td>
                                                {{-- <td><span class="label label-sm label-success">Approved</span></td> --}}
                                            </tr>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="panel panel-yellow">
                                    <div class="panel-heading">Kasus Serupa</div>
                                     <div class="panel-body">
                                        <table class="table table-hover">
                                            <tr>
                                                <th  rowspan="2">ID</th>
                                                <th  rowspan="2">Kasus Serupa</th>
                                                <th  colspan="2">Mean</th>
                                                <th  colspan="2">Varian</th>
                                                <th  colspan="2">Standart Deviasi</th>
                                                {{-- <th  colspan="2">Probabilitas Kasus</th> --}}
                                            </tr>
                                            <tr>
                                              <th>Ya</td>
                                              <th>Tidak</td>
                                              <th>Ya</td>
                                              <th>Tidak</td>
                                              {{-- <th>Ya</td>
                                              <th>Tidak</td> --}}
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>{{$Kasus}}</td>
                                                <td>{{$mean_Kasus->ya}}</td>
                                                <td>{{$mean_Kasus->tidak}}</td>
                                                <td>{{$varian_kasus->ya}}</td>
                                                <td>{{$varian_kasus->tidak}}</td>
                                                <td>{{$stddev_kasus->ya}}</td>
                                                <td>{{$stddev_kasus->tidak}}</td>
                                                {{-- <td>{{$sqrt_kasus->ya}}</td>
                                                <td>{{$sqrt_kasus->tidak}}</td> --}}
                                                {{-- <td>{{$pro_kasus->ya}}</td>
                                                <td>{{$pro_kasus->tidak}}</td>
                                                {{-- <td><span class="label label-sm label-success">Approved</span></td> --}} --}}
                                            </tr>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="panel panel-yellow">
                                    <div class="panel-heading">Kerugian Material</div>
                                     <div class="panel-body">
                                        <table class="table table-hover">
                                            <tr>
                                                <th  rowspan="2">ID</th>
                                                <th  rowspan="2">Kerugian Material</th>
                                                <th  colspan="2">Mean</th>
                                                <th  colspan="2">Varian</th>
                                                <th  colspan="2">Standart Deviasi</th>
                                                {{-- <th  colspan="2">Probabilitas Kerugian</th> --}}
                                            </tr>
                                            <tr>
                                              <th>Ya</td>
                                              <th>Tidak</td>
                                              <th>Ya</td>
                                              <th>Tidak</td>
                                              {{-- <th>Ya</td>
                                              <th>Tidak</td> --}}
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>{{$Kerugian}}</td>
                                                <td>{{$mean_Rugi->ya}}</td>
                                                <td>{{$mean_Rugi->tidak}}</td>
                                                <td>{{$varian_rugi->ya}}</td>
                                                <td>{{$varian_rugi->tidak}}</td>
                                                <td>{{$stddev_rugi->ya}}</td>
                                                <td>{{$stddev_rugi->tidak}}</td>
                                                {{-- <td>{{$sqrt_rugi->ya}}</td>
                                                <td>{{$sqrt_rugi->tidak}}</td> --}}
                                                {{-- <td>{{$pro_rugi->ya}}</td>
                                                <td>{{$pro_rugi->tidak}}</td>
                                                {{-- <td><span class="label label-sm label-success">Approved</span></td> --}} --}}
                                            </tr>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="panel panel-yellow">
                                    <div class="panel-heading">Jarak Kantor Polisi - TKP</div>
                                     <div class="panel-body">
                                        <table class="table table-hover">
                                            <tr>
                                                <th  rowspan="2">ID</th>
                                                <th  rowspan="2">Jarak Kantor Polisi - TKP</th>
                                                <th  colspan="2">Mean</th>
                                                <th  colspan="2">Varian</th>
                                                <th  colspan="2">Standart Deviasi</th>
                                                {{-- <th  colspan="2">Probabilitas Jarak</th> --}}
                                            </tr>
                                            <tr>
                                              <th>Ya</td>
                                              <th>Tidak</td>
                                              <th>Ya</td>
                                              <th>Tidak</td>
                                              {{-- <th>Ya</td>
                                              <th>Tidak</td> --}}
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>{{$Jarak}}</td>
                                                <td>{{$mean_Jarak->ya}}</td>
                                                <td>{{$mean_Jarak->tidak}}</td>
                                                <td>{{$varian_jarak->ya}}</td>
                                                <td>{{$varian_jarak->tidak}}</td>
                                                <td>{{$stddev_jarak->ya}}</td>
                                                <td>{{$stddev_jarak->tidak}}</td>
                                                {{-- <td>{{$sqrt_jarak->ya}}</td>
                                                <td>{{$sqrt_jarak->tidak}}</td> --}}
                                                {{-- <td>{{$pro_jarak->ya}}</td>
                                                <td>{{$pro_jarak->tidak}}</td>
                                                {{-- <td><span class="label label-sm label-success">Approved</span></td> --}} --}}
                                            </tr>
                                      </table>
                                    </div>
                                  </div>
                                </div>


                </div>
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <div id="footer">
                    <div class="copyright">
                        <a href="http://themifycloud.com">2014 © KAdmin Responsive Multi-Purpose Template</a></div>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/jquery.metisMenu.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/icheck.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/jquery.news-ticker.js"></script>
    <script src="js/jquery.menu.js"></script>
    <script src="js/pace.min.js"></script>
    <script src="js/holder.js"></script>
    <script src="js/responsive-tabs.js"></script>
    <script src="js/jquery.flot.js"></script>
    <script src="js/jquery.flot.categories.js"></script>
    <script src="js/jquery.flot.pie.js"></script>
    <script src="js/jquery.flot.tooltip.js"></script>
    <script src="js/jquery.flot.resize.js"></script>
    <script src="js/jquery.flot.fillbetween.js"></script>
    <script src="js/jquery.flot.stack.js"></script>
    <script src="js/jquery.flot.spline.js"></script>
    <script src="js/zabuto_calendar.min.js"></script>
    <script src="js/index.js"></script>
    <!--LOADING SCRIPTS FOR CHARTS-->
    <script src="js/highcharts.js"></script>
    <script src="js/data.js"></script>
    <script src="js/drilldown.js"></script>
    <script src="js/exporting.js"></script>
    <script src="js/highcharts-more.js"></script>
    <script src="js/charts-highchart-pie.js"></script>
    <script src="js/charts-highchart-more.js"></script>
    <!--CORE JAVASCRIPT-->
    <script src="js/main.js"></script>
    <script>        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-145464-12', 'auto');
        ga('send', 'pageview');


</script>
</body>
</html>

{{-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Probabilitas Waktu Kejadian</title>
  </head>
  <body>
    <h1>{{$pro_Lokasi->ya}}</h1>
    <h1>{{$pro_Lokasi->tidak}}</h1>
    <h1>{{$pro_Waktu->ya}}</h1>
    <h1>{{$pro_Waktu->tidak}}</h1>
    <h1>{{$pro_Kendaraan->ya}}</h1>
    <h1>{{$pro_Kendaraan->tidak}}</h1>
    <h1>{{$pro_Keadaan->ya}}</h1>
    <h1>{{$pro_Keadaan->tidak}}</h1>
    <h1>{{$pro_Status->ya}}</h1>
    <h1>{{$pro_Status->tidak}}</h1>
  </body>
</html> --}}
