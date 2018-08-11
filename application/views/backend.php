<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= ucwords($global->headline)?> | Administrator</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php  echo base_url();?>asset/plugins/select2/select2.min.css">  
  <link rel="stylesheet" href="<?php  echo base_url();?>asset/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php  echo base_url();?>asset/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php  echo base_url();?>asset/plugins/datatables/skin/bootstrap/css/dataTables.bootstrap.css"> 
  <link rel="stylesheet" href="<?php  echo base_url();?>asset/plugins/datepicker/datepicker3.css"> 
  <link rel="stylesheet" href="<?php  echo base_url();?>asset/plugins/animate-css/animate.css">   
  <link rel="stylesheet" href="<?php  echo base_url();?>asset/dist/css/sweetalert.css">    
  <link rel="stylesheet" href="<?php  echo base_url();?>asset/dist/css/AdminLTE.min.css">

  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php  echo base_url();?>asset/dist/css/skins/_all-skins.min.css">
  
  <!--JAVASCRIPT CORE-->
  <script src="<?= base_url();?>asset/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script src="<?= base_url();?>asset/bootstrap/js/bootstrap.min.js"></script>  
  <script src="<?= base_url()?>asset/plugins/chartjs/Chart.bundle.js"></script>
  <script src="<?= base_url()?>asset/plugins/chartjs/utils.js"></script>
  <script src="<?= base_url();?>asset/plugins/bootstrap-notify/bootstrap-notify.js"></script>
  <script src="<?= base_url();?>asset/plugins/datatables/jquery.dataTables.js"></script>
  <script src="<?= base_url();?>asset/plugins/datatables/extensions/Export/buttons.html5.min.js"></script>
  <script src="<?= base_url();?>asset/plugins/datatables/extensions/Export/dataTables.buttons.min.js"></script>
  <script src="<?= base_url();?>asset/plugins/datatables/extensions/Export/jszip.min.js"></script>
  <script src="<?= base_url();?>asset/plugins/datatables/extensions/Export/pdfmake.min.js"></script>
  <script src="<?= base_url();?>asset/plugins/datatables/extensions/Export/vfs_fonts.js"></script>
  <script src="<?= base_url();?>asset/plugins/datatables/extensions/Export/buttons.print.min.js"></script>
  <script src="<?= base_url();?>asset/plugins/datatables/extensions/Export/buttons.flash.min.js"></script>

  <script src="<?= base_url();?>asset/plugins/datatables/dataTables.bootstrap.min.js"></script>
  <script src="<?= base_url();?>asset/plugins/select2/select2.full.min.js"></script>
  <script src="<?= base_url();?>asset/plugins/datepicker/bootstrap-datepicker.js"></script>
  <script src="<?= base_url();?>asset/plugins/ckeditor/ckeditor.js"></script> 
  <script src="<?= base_url();?>asset/dist/js/jquery.validate.js"></script>
  <script src="<?= base_url();?>asset/dist/js/jquery.priceformat.min.js"></script> 
  <script src="<?= base_url();?>asset/dist/js/sweetalert.min.js"></script>
</head>

<body class="hold-transition  skin-Purple sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
<!--================================HEADER================================-->
  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo site_url('backend/registrasi')?>" class="logo">
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
              <img src="<?php  echo base_url();?>asset/dist/img/user.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?= ucwords($this->session->userdata('username'))?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php  echo base_url();?>asset/dist/img/user.png" class="img-circle" alt="User Image">

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
        <li class=" <?php if($global->menu=='registrasi'){echo 'active';}?>"><a href="<?php echo site_url($global->base_uri.'registrasi')?>"><i class="fa fa-tasks"></i> <span>Registrasi</span></a></li> 
        <li class=" <?php if($global->menu=='laporan'){echo 'active';}?>"><a href="<?php echo site_url($global->base_uri.'laporan')?>"><i class="fa fa-file"></i> <span>Laporan</span></a></li>         
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
                <h4><i class="icon fa fa-check"></i> Perhatian</h4>
                <?= ucwords($this->session->flashdata('success'))?>  
              </div>         
          <?php elseif($this->session->flashdata('error')):?>
              <div class="alert alert-error alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Perhatian</h4>
                <?= ucwords($this->session->flashdata('error'))?>  
              </div>           
          <?php endif;?>  
        </div>
      </div>
      <!--==================================== KODE TULIS DISINI========================================-->  
      <?php
        if(file_exists(APPPATH.$global->view.'index.php')){
          include(APPPATH.$global->view.'index.php');
        }else{
          echo "Halaman tidak ditemukan";
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
<!-- SlimScroll -->
<script src="<?php  echo base_url();?>asset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php  echo base_url();?>asset/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php  echo base_url();?>asset/dist/js/app.min.js"></script>
<script src="<?php  echo base_url();?>asset/dist/js/demo.js"></script>


<script type="text/javascript">
  $(document).ready(function(){  
    //JAVA SCRIPT AKSI  
    aksi();
    //Data Tabel 
    $('#datatabel').DataTable({
      "paging": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });       
     $('#laporan').DataTable({
      // "paging": true,
      // "ordering": true,
      // "info": true,
      // "autoWidth": false
      dom:'Bfrtip',
      buttons:['copyHtml5','excelHtml5','csvHtml5','pdfHtml5','print']
    });        
    $('#laporan_filter').addClass('pull-left'); 
    $('.dt-buttons').addClass('pull-right');    
    $('.dt-button').addClass('btn btn-flat btn-primary');      
    $('.dt-button').css('margin','5px');       
  })
  //KUMPULAN FUNGSI AKSI
  function aksi(){
    $('.detail').click(function(){
      var url=$(this).attr('url');
      var id=$(this).attr('id');
      //alert(id);
      $.ajax({
        type:'POST',
        url:url,
        data:{id:id},
        success:function(data){
          $('#detail').html(data);
          $('#detail').modal('show',{backdrop:'true'});
        }
      })
      return false;
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
    $('#add').click(function(){
      var url=$(this).attr('url');
      $("#form").load(url);
      $(".mainview").hide();       
    })    
  }
</script>
</body>
</html>

