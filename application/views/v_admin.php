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


    <div class="container">
      <nav class="navbar navbar-collapse btn-danger" role="navigation">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target="#bs-example-navbar-collapse-1">
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
              <li class="panel-default"><a href="<?php echo base_url();?>index.php/labtigramoler/showdata" id="dboard">Dashboard</a></li>
              <li class=""><a href="#" id="admin">Admin</a></li>
              <li class=""><a href="<?php echo base_url();?>index.php/labtigramoler/logout" id="admin">Logout</a></li>


            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
      </nav>



        <div class="row ">

          <div class="col-lg-12">
            <h1 class="page-header">UPLOAD PHOTOS</h1>
          </div>

          <form class="form-group " role=”form“ action="<?php echo base_url();?>index.php/labtigramoler/uploadphotocontroller" method="post" enctype="multipart/form-data">

            <div class="form-group row ">
              <label for="example-text-input" class="col-xs-2 col-form-label">Nama Photo</label>
              <div class="col-xs-10">
                <input class="form-control" type="text"   id="example-text-input" name="namaphoto">
              </div>
            </div>

            <div class="form-group row">
              <label  class="col-xs-2 col-form-label">TTL</label>
              <div class="col-xs-10">
                <input class="form-control" type="date" name="ttlphoto"  >
              </div>
            </div>

            <!-- <div class="form-group row">
              <label for="example-email-input" class="col-xs-2 col-form-label">Email</label>
              <div class="col-xs-10">
                <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input" name="emailphoto">
              </div>
            </div> -->

            <div class="form-group row">

              <label for="example-url-input" class="col-xs-2 col-form-label">Social Media</label>
              <div class="col-xs-10">
                <input class="form-control" type="url"  id="example-url-input" name="socmedphoto" >
              </div>
            </div>

            <div class="form-group row">
              <label for="example-tel-input" class="col-xs-2 col-form-label">Telephone</label>
              <div class="col-xs-10">
                <input class="form-control" type="tel"   id="example-tel-input" name="telponphoto">
              </div>
            </div>

            <div class="form-group row">
              <label for="example-password-input" class="col-xs-2 col-form-label">Angkatan</label>
              <div class="col-xs-10">
                <input class="form-control" type="text"   id="example-password-input" name="angkatanphoto">
              </div>
            </div>

            <div class="form-group row">
              <label for="example-password-input" class="col-xs-2 col-form-label">Photo Unggahan</label>
              <div class="col-xs-10">
                <input class="form-control" type="file"   name="fileupload">
              </div>
            </div>

            <input type="submit" class="btn-lg btn-primary" value="UPLOAD" name="uploadklik">



          </form>



        </div>





    </div>




</body>



<script type="text/javascript" src="<?php echo base_url();?>js/jquery.js">
</script>
<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.js">
</script>

</html>
