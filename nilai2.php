<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            AdminLTE Design Team
                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            Developers
                            <small><i class="fa fa-clock-o"></i> Today</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            Sales Department
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            Reviewers
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                      </li>

                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Create a nice theme
                            <small class="pull-right">40%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">40% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Some task I need to do
                            <small class="pull-right">60%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">60% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Make beautiful transitions
                            <small class="pull-right">80%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">80% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
             <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                      Alexander Pierce - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="index.php" data-toggle="control-sidebar">logout</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>MATA KULIAH</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="index2.php"><i class="fa fa-circle-o"></i> PRAKTEK PEMPROGRAMAN III</a></li>
                <li><a href="index3.php"><i class="fa fa-circle-o"></i> ALGORITMA PEMPROGRAMAN III</a></li>
              </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          
        </section>

        <!-- Main content -->
     <body>
<h2 align="center"><strong>HASIL NILAI AKHIR MAHASISWA</strong></h2>
<table width="794" border="1" align="center" cellspacing="2" cellpadding="1" bgcolor="#FFCC33">
<tr>
<th width="48"><div align="center">No</div></th>
<th width="91"><div align="center">Nama</div></th>
<th width="114"><div align="center">Nim</div></th>
<th width="88"><div align="center">Mata Kuliah</div></th>
<th width="40"><div align="center">Absensi</div></th>
<th width="40"><div align="center">UTS</div></th>
<th width="45"><div align="center">UAS</div></th>
<th width="53"><div align="center">Tugas</div></th>
<th width="124"><div align="center">Nilai akhir</div></th>
<th width="66"><div align="center">Grade</div></th>
</tr>
<tr>
<td><div align="center">1</div></td>
<td><div align="center">SEPRI PANJAITAN</div></td>
<td><div align="center">151351212</div></td>
<td><div align="center">ALGORITMA PEMROGRAMAN III</div></td>
<td><div align="center"><?php $absensi11=$_POST['absensi11']; echo $absensi11;?></div></td>
<td><div align="center"><?php $uts11=$_POST['uts11']; echo $uts11;?></div></td>
<td><div align="center"><?php $uas11=$_POST['uas11']; echo $uas11;?></div></td>
<td><div align="center"><?php $tugas11=$_POST['tugas11']; echo $tugas11;?></div></td>
<td><div align="center"><strong>
<?php
$nilaiakhir=(10*$absensi11+35*$uts11+35*$uas11+20*$tugas11)/100;
echo $nilaiakhir;
?> </strong></div></td>

<td><div align="center"><strong>
<?php

if ( $nilaiakhir <= 100 && $nilaiakhir >= 86)
{$grade = "A";}
elseif ( $nilaiakhir <= 85 && $nilaiakhir >= 81)
{$grade = "A-";}
elseif($nilaiakhir <=80 && $nilaiakhir >=76)
{$grade = "B+";}
elseif($nilaiakhir <=75 && $nilaiakhir >=71)
{$grade = "B";}
elseif($nilaiakhir <=70 && $nilaiakhir >=66)
{$grade = "B-";}
elseif($nilaiakhir <=65 && $nilaiakhir >=61)
{$grade = "C+";}
elseif($nilaiakhir <=60 && $nilaiakhir >=56)
{$grade = "C";}
elseif($nilaiakhir <=55 && $nilaiakhir >=51)
{$grade = "C-";}
elseif($nilaiakhir <=50 && $nilaiakhir >=46)
{$grade = "D";}
elseif($nilaiakhir <=45 && $nilaiakhir >=0)
{$grade = "E";}
echo$grade;
?>

</strong></div>
<br /></td></tr>
<tr>
<td><div align="center">2</div></td>
<td><div align="center">DARA PERONIKA</div></td>
<td><div align="center">161351055</div></td>
<td><div align="center">ALGORITMA PEMROGRAMAN III</div></td>
<td><div align="center"><?php $absensi21=$_POST['absensi21']; echo $absensi21;?></div></td>
<td><div align="center"><?php $uts21=$_POST['uts21']; echo $uts21;?></div></td>
<td><div align="center"><?php $uas21=$_POST['uas21']; echo $uas21;?></div></td>
<td><div align="center"><?php $tugas21=$_POST['tugas21']; echo $tugas21;?></div></td>
<td><div align="center"><strong>
<?php
$nilaiakhir=(10*$absensi21+35*$uts21+35*$uas21+20*$tugas21)/100;
echo $nilaiakhir;
?> </strong></div></td>

<td><div align="center"><strong>
<?php

if ( $nilaiakhir <= 100 && $nilaiakhir >= 86)
{$grade = "A";}
elseif ( $nilaiakhir <= 85 && $nilaiakhir >= 81)
{$grade = "A-";}
elseif($nilaiakhir <=80 && $nilaiakhir >=76)
{$grade = "B+";}
elseif($nilaiakhir <=75 && $nilaiakhir >=71)
{$grade = "B";}
elseif($nilaiakhir <=70 && $nilaiakhir >=66)
{$grade = "B-";}
elseif($nilaiakhir <=65 && $nilaiakhir >=61)
{$grade = "C+";}
elseif($nilaiakhir <=60 && $nilaiakhir >=56)
{$grade = "C";}
elseif($nilaiakhir <=55 && $nilaiakhir >=51)
{$grade = "C-";}
elseif($nilaiakhir <=50 && $nilaiakhir >=46)
{$grade = "D";}
elseif($nilaiakhir <=45 && $nilaiakhir >=0)
{$grade = "E";}
echo$grade;
?>

</strong></div>
<br /></td></tr>
<tr>
<td><div align="center">3</div></td>
<td><div align="center">FAIZ KHADAFI</div></td>
<td><div align="center">161351077</div></td>
<td><div align="center">ALGORITMA PEMROGRAMAN III</div></td>
<td><div align="center"><?php $absensi31=$_POST['absensi31']; echo $absensi31;?></div></td>
<td><div align="center"><?php $uts31=$_POST['uts31']; echo $uts31;?></div></td>
<td><div align="center"><?php $uas31=$_POST['uas31']; echo $uas31;?></div></td>
<td><div align="center"><?php $tugas31=$_POST['tugas31']; echo $tugas31;?></div></td>
<td><div align="center"><strong>
<?php
$nilaiakhir=(10*$absensi31+35*$uts31+35*$uas31+20*$tugas31)/100;
echo $nilaiakhir;
?> </strong></div></td>

<td><div align="center"><strong>
<?php

if ( $nilaiakhir <= 100 && $nilaiakhir >= 86)
{$grade = "A";}
elseif ( $nilaiakhir <= 85 && $nilaiakhir >= 81)
{$grade = "A-";}
elseif($nilaiakhir <=80 && $nilaiakhir >=76)
{$grade = "B+";}
elseif($nilaiakhir <=75 && $nilaiakhir >=71)
{$grade = "B";}
elseif($nilaiakhir <=70 && $nilaiakhir >=66)
{$grade = "B-";}
elseif($nilaiakhir <=65 && $nilaiakhir >=61)
{$grade = "C+";}
elseif($nilaiakhir <=60 && $nilaiakhir >=56)
{$grade = "C";}
elseif($nilaiakhir <=55 && $nilaiakhir >=51)
{$grade = "C-";}
elseif($nilaiakhir <=50 && $nilaiakhir >=46)
{$grade = "D";}
elseif($nilaiakhir <=45 && $nilaiakhir >=0)
{$grade = "E";}
echo$grade;
?>

</strong></div>
<br /></td></tr>

<tr>
<td><div align="center">4</div></td>
<td><div align="center">CAHYANI</div></td>
<td><div align="center">16135050</div></td>
<td><div align="center">ALGORITMA PEMROGRAMAN III</div></td>
<td><div align="center"><?php $absensi41=$_POST['absensi41']; echo $absensi41;?></div></td>
<td><div align="center"><?php $uts41=$_POST['uts41']; echo $uts41;?></div></td>
<td><div align="center"><?php $uas41=$_POST['uas41']; echo $uas41;?></div></td>
<td><div align="center"><?php $tugas41=$_POST['tugas41']; echo $tugas41;?></div></td>
<td><div align="center"><strong>
<?php
$nilaiakhir=(10*$absensi41+35*$uts41+35*$uas41+20*$tugas41)/100;
echo $nilaiakhir;
?> </strong></div></td>

<td><div align="center"><strong>
<?php

if ( $nilaiakhir <= 100 && $nilaiakhir >= 86)
{$grade = "A";}
elseif ( $nilaiakhir <= 85 && $nilaiakhir >= 81)
{$grade = "A-";}
elseif($nilaiakhir <=80 && $nilaiakhir >=76)
{$grade = "B+";}
elseif($nilaiakhir <=75 && $nilaiakhir >=71)
{$grade = "B";}
elseif($nilaiakhir <=70 && $nilaiakhir >=66)
{$grade = "B-";}
elseif($nilaiakhir <=65 && $nilaiakhir >=61)
{$grade = "C+";}
elseif($nilaiakhir <=60 && $nilaiakhir >=56)
{$grade = "C";}
elseif($nilaiakhir <=55 && $nilaiakhir >=51)
{$grade = "C-";}
elseif($nilaiakhir <=50 && $nilaiakhir >=46)
{$grade = "D";}
elseif($nilaiakhir <=45 && $nilaiakhir >=0)
{$grade = "E";}
echo$grade;
?>

</strong></div>
<br /></td></tr>
<tr>
<td><div align="center">5</div></td>
<td><div align="center">ARIEF SETIADI</div></td>
<td><div align="center">161361351</div></td>
<td><div align="center">ALGORITMA PEMROGRAMAN III</div></td>
<td><div align="center"><?php $absensi51=$_POST['absensi51']; echo $absensi51;?></div></td>
<td><div align="center"><?php $uts51=$_POST['uts51']; echo $uts51;?></div></td>
<td><div align="center"><?php $uas51=$_POST['uas51']; echo $uas51;?></div></td>
<td><div align="center"><?php $tugas51=$_POST['tugas51']; echo $tugas51;?></div></td>
<td><div align="center"><strong>
<?php
$nilaiakhir=(10*$absensi51+35*$uts51+35*$uas51+20*$tugas51)/100;
echo $nilaiakhir;
?> </strong></div></td>

<td><div align="center"><strong>
<?php

if ( $nilaiakhir <= 100 && $nilaiakhir >= 86)
{$grade = "A";}
elseif ( $nilaiakhir <= 85 && $nilaiakhir >= 81)
{$grade = "A-";}
elseif($nilaiakhir <=80 && $nilaiakhir >=76)
{$grade = "B+";}
elseif($nilaiakhir <=75 && $nilaiakhir >=71)
{$grade = "B";}
elseif($nilaiakhir <=70 && $nilaiakhir >=66)
{$grade = "B-";}
elseif($nilaiakhir <=65 && $nilaiakhir >=61)
{$grade = "C+";}
elseif($nilaiakhir <=60 && $nilaiakhir >=56)
{$grade = "C";}
elseif($nilaiakhir <=55 && $nilaiakhir >=51)
{$grade = "C-";}
elseif($nilaiakhir <=50 && $nilaiakhir >=46)
{$grade = "D";}
elseif($nilaiakhir <=45 && $nilaiakhir >=0)
{$grade = "E";}
echo$grade;
?>

</strong></div>
<br /></td></tr>
</table>
<p align="center"><a href="index3.php">Back</a></p>
<p align="center"><blink><b>s.64bits – Sepri Panjait
  </body>
</html>
