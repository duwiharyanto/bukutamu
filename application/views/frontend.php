<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= ucwords($global->headline)?> | User</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Select2 -->
  <link rel="stylesheet" href="<?php  echo base_url();?>asset/plugins/select2/select2.min.css">  
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php  echo base_url();?>asset/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php  echo base_url();?>asset/fontawesome/css/font-awesome.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php  echo base_url();?>asset/plugins/datatables/dataTables.bootstrap.css"> 
  <!-- Datepicker -->
  <link rel="stylesheet" href="<?php  echo base_url();?>asset/plugins/datepicker/datepicker3.css">    
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php  echo base_url();?>asset/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php  echo base_url();?>asset/dist/css/sweetalert.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php  echo base_url();?>asset/dist/css/skins/_all-skins.min.css">
</head>
<body class="hold-transition skin-green sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
<!--================================HEADER================================-->
  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo site_url()?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>D</b>SB</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Dashboard</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
          <a href="#" style="pointer-events:none">Tanggal : <?= date('d-m-Y')?></a>
          </li>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php  echo base_url();?>asset/dist/img/user6.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?= ucwords($this->session->userdata('username'))?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php  echo base_url();?>asset/dist/img/user6.png" class="img-circle" alt="User Image">

                <p>
                 <?= ucwords($this->session->userdata('email'))?>
                  <small><?php echo "Terdaftar : " .$this->session->userdata('terdaftar')?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="">
                  <a href="<?php echo site_url("Login/logout")?>" class="btn btn-block btn-default btn-flat">Log Out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header" style="color:white">MENU UTAMA</li>
        <li class="<?php if($global->menu=='dashboard'){echo 'active';}?>"><a href="<?php echo site_url('user/dashboard')?>"><i class="fa fa-dashboard"></i> Dashboard</a></li> 
        <li class="<?php if($global->menu=='kegiatan'){echo 'active';}?>"><a href="<?php echo site_url('user/kegiatan')?>"><i class="fa fa-tasks"></i> Kegiatan</a></li> 
        <li class="<?php if($global->menu=='datadiri'){echo 'active';}?>"><a href="<?php echo site_url('user/datadiri')?>"><i class="fa fa-users"></i> Data diri</a></li>         
        <li class="<?php if($global->menu=='password'){echo 'active';}?>"><a href="<?php echo site_url('user/password')?>"><i class="fa fa-lock"></i> Password</a></li>              
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <span class="<?= $global->ikon?>"></span>
        <?php echo ucwords($global->headline)?>
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="<?= site_url($global->url)?>"><?= ucwords($global->headline)?></a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-sm-12">
          <?php if($this->session->flashdata('success')):?>
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Perhatian!</h4>
                <?= ucwords($this->session->flashdata('success'))?>  
              </div>         
          <?php elseif($this->session->flashdata('error')):?>
              <div class="alert alert-error alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Perhatian!</h4>
                <?= ucwords($this->session->flashdata('error'))?>  
              </div>           
          <?php endif;?>  
        </div>
      </div>
      <!--==================================== KODE TULIS DISINI========================================-->  
      <?php
        switch ($global->menu) {
            case 'dashboard':
                include(APPPATH.$global->view);
                break;            
            case 'kegiatan':
                include(APPPATH.$global->view);
                break;                    
            case 'datadiri':
                include(APPPATH.$global->view);
                break; 
            case 'password':
                include(APPPATH.$global->view);
                break;                                                                                                                                               
            default:
              echo "Tidak ditemukan";
              break;
        }
      ?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
    </div>
     <span class="fa fa-envelope"></span> email : <strong><a href="mailto:haryanto.duwi@gmail.com">haryanto.duwi@gmail.com</a></strong>
  </footer>
</div>
<!-- ./wrapper -->
<!--=============================FOOTER====================================-->
<!-- jQuery 2.2.3 -->
<script src="<?php  echo base_url();?>asset/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php  echo base_url();?>asset/bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php  echo base_url();?>asset/plugins/select2/select2.full.min.js"></script>
<!-- DataTables -->
<script src="<?php  echo base_url();?>asset/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php  echo base_url();?>asset/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- Datepicker -->
<script src="<?php  echo base_url();?>asset/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Datepicker -->
<script src="<?php  echo base_url();?>asset/plugins/ckeditor/ckeditor.js"></script>
<!-- SlimScroll -->
<script src="<?php  echo base_url();?>asset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php  echo base_url();?>asset/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php  echo base_url();?>asset/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php  echo base_url();?>asset/dist/js/demo.js"></script>
<script src="<?php  echo base_url();?>asset/dist/js/sweetalert.min.js"></script>
<script src="<?php  echo base_url();?>asset/dist/js/jquery.priceformat.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){ 
    //Date picker
    $('.datepicker').datepicker({
      autoclose: true,
      todayHighlight: true,
      format: "dd-mm-yyyy",
      todayBtn: true,
    });     
    //Initialize Select2 Elements
    $(".selectdata").select2();
    //Datatabel  
    $('#datatabel').DataTable({
      "paging": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    }); 
    $(".pricetag").priceFormat({
        prefix:'Rp ',
        thousandsSeparator:'.',
        centsLimit:'0'
    })
    //POPUP DETAIL
    $('.detail').click(function(){
      var url=$(this).attr('url');
      var id=$(this).attr('id');
      //alert(url);
      $.ajax({
        type:'POST',
        url:url,
        data:{id:id},
        success:function(data){
          $('#detail').html(data);
          $('#detail').modal('show',{backdrop:'true'});
          //$(".selectdata").select2(); 
        }
      })
      return false;
    })
    //TAMBAH DATA
    $('#add').click(function(){
      var url=$(this).attr('url');
      $("#form").load(url);
      $(".mainview").hide();       
    })   
    $('.edit').click(function(){
      var url=$(this).attr('url');
      var id=$(this).attr('id');
      //alert(url);
      $.ajax({
        type:'POST',
        url:url,
        data:{id:id},
        success:function(data){
          $('#form').html(data);
          $(".mainview").hide();
          CKEDITOR.replace('editor');
          $('.datepicker').datepicker({
            autoclose: true,
            todayHighlight: true,
            format: "dd-mm-yyyy",
            todayBtn: true,
          });           
        }
      })
      return false;
    })            
    $('.hapus').click(function(){
      var url=$(this).attr('url');
      swal({
        title:'Perhatian',
        text:'Hapus Data',
        html:true,
        ConfirmButtonColor:'#d9534F',
        showCancelButton:true,
        type:'warning'
      },function(){
        window.location.href=url
      });
      return false
    })    
    CKEDITOR.replace('editor1');            
  })
</script>
</body>
</html>

