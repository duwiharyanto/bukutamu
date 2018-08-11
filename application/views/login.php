<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Kegiatan | Log in</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php  echo base_url();?>asset/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php  echo base_url();?>asset/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php  echo base_url();?>asset/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php  echo base_url();?>asset/plugins/iCheck/square/blue.css">
</head>
<body class="hold-transition " style="background-image: url(<?=base_url('asset/dist/img/background.jpeg')?>); width:100%;height:100%;background-size: cover;">
<div class="container" >
  <section class="content">
    <div class="row" style="margin-top:50px">
      <div class="col-sm-6">
        <div class="login-box pull-right">
          <?php if($this->session->flashdata('error')):?>
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-ban"></i> Perhatian !</h4>
                <?= $this->session->flashdata('error')?>
            </div>  
          <?php elseif($this->session->flashdata('success')):?>
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-ban"></i> Perhatian !</h4>
                <?= $this->session->flashdata('success')?>
            </div>    
          <?php endif;?>
          <div class="login-logo hide">
            
          </div>
          <!-- /.login-logo -->
          <div class="login-box-body">
            <p class="login-box-msg" ><a href="<?php echo site_url()?>" style="font-size:31px;"><img src="<?=base_url('asset/dist/img/user.png')?>" class="img img-responsive img-circle text" style="display: block;margin-right: auto;margin-left: auto;" width="80px" height="80px"></a></p>
            <form action="<?php  echo base_url('Login/aksi_login');?>" method="post">
              <div class="form-group has-feedback">
                <input required type="text" class="form-control" placeholder="Username" name="username">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <input required type="password" class="form-control" placeholder="Password" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <div class="form-group">
                     <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>    
      </div>
      <div style="color:white;" class="col-sm-6 hidden-xs">
        <h1>Selamat Datang</h1>
        <p style="font-size:16px">
            Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. 
            Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, 
            quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. 
        </p>
        <hr>
        <p class="footer"><b>Email : </b><a style="color:white" href="mailto:haryanto.duwi@gmail.com" >haryanto.duwi@gmail.com</a><br>
        <strong>Versi Codeignter:</strong> <?= CI_VERSION?><br>
        <strong>Page rendered in </strong> {elapsed_time} seconds
        </p>
      </div>
    </div>
  </section>
</div>
<!-- /.login-box -->
<!-- jQuery 2.2.3 -->
<script src="<?php  echo base_url();?>asset/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php  echo base_url();?>asset/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
