<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>LOGIN</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-theme.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>css/custom.css" />

</head>

<body>
  <div class="navbar-default" id="navbardefault">

    <div class="container">
      <nav class="navbar navbar-collapse" role="navigation">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" id="jdllabtigram">LABTIGRAM</a>
          </div>


          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="panel-default"><a href="<?php echo base_url();?>index.php/labtigramoler/index" id="dboard">Dashboard</a></li>
              <li class=""><a href="<?php echo base_url();?>index.php/labtigramoler/login" id="admin">Admin</a></li>


            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
      </nav>

      <div class="container">

        <div class="row">

          <div class="col-lg-12">
            <h1 class="page-header">Asistant Photos</h1>
          </div>
          <?php foreach ($photoslab as $photohome ) {
            # code...
           ?>
          <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="#" class="btn-sm btn-success">Like</a>
            <a class="thumbnail" href="#">
              <img class="img-responsive" src="<?php echo base_url();?>photosfolder/<?php echo $photohome->urlphoto;?>" alt="">
            </a>
            <span><b>NAMA : <?php echo $photohome->nama_photo; ?></b></span>
          </div>
          <?php } ?>
          <!-- <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="#" class="btn-sm btn-success">Like</a>
            <a class="thumbnail" href="#">
              <img class="img-responsive" src="http://placehold.it/400x300" alt="">
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="#" class="btn-sm btn-success">Like</a>
            <a class="thumbnail" href="#">
              <img class="img-responsive" src="http://placehold.it/400x300" alt="">
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="#" class="btn-sm btn-success">Like</a>
            <a class="thumbnail" href="#">
              <img class="img-responsive" src="http://placehold.it/400x300" alt="">
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="#" class="btn-sm btn-success">Like</a>
            <a class="thumbnail" href="#">
              <img class="img-responsive" src="http://placehold.it/400x300" alt="">
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="#" class="btn-sm btn-success">Like</a>
            <a class="thumbnail" href="#">
              <img class="img-responsive" src="http://placehold.it/400x300" alt="">
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="#" class="btn-sm btn-success">Like</a>
            <a class="thumbnail" href="#">
              <img class="img-responsive" src="http://placehold.it/400x300" alt="">
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="#" class="btn-sm btn-success">Like</a>
            <a class="thumbnail" href="#">
              <img class="img-responsive" src="http://placehold.it/400x300" alt="">
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="#" class="btn-sm btn-success">Like</a>
            <a class="thumbnail" href="#">
              <img class="img-responsive" src="http://placehold.it/400x300" alt="">
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="#" class="btn-sm btn-success">Like</a>
            <a class="thumbnail" href="#">
              <img class="img-responsive" src="http://placehold.it/400x300" alt="">
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="#" class="btn-sm btn-success">Like</a>
            <a class="thumbnail" href="#">
              <img class="img-responsive" src="http://placehold.it/400x300" alt="">
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="#" class="btn-sm btn-success">Like</a>
            <a class="thumbnail" href="#">
              <img class="img-responsive" src="http://placehold.it/400x300" alt="">
            </a>
          </div> -->

        </div>




      <div class="navbar-fixed-bottom">

        <div class="container">
          <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-brand">
                <a class="navbar-link" href="#">labtigram.id</a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="navbar-inverse">
                <ul class="nav navbar-nav">
                  <li class="social pull-right"><a href="#">Social Links</a></li>
                  <!-- <li class="pull-left"><a href="#">Dashboard</a></li>
                <li class="active"><a href="#">Stories</a></li>
                <li><a href="#">Videos</a></li>
                <li><a href="#">Photos</a></li>
                <li class="social pull-right"><a href="#">Social Links</a></li> -->
                </ul>
              </div>
              <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
          </nav>
        </div>

      </div>
    </div>




</body>



<script type="text/javascript" src="<?php echo base_url();?>js/jquery.js">
</script>
<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.js">
</script>

</html>
