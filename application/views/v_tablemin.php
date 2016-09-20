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



      <nav class="navbar navbar-default" role="navigation" id="navbardefault">
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
              <li class="panel-default"><a href="#" id="dboard">Dashboard</a></li>
              <li class=""><a href="#" id="admin">Admin</a></li>
              <li class=""><a href="#" id="admin">Logout</a></li>


            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
      </nav>

      <div class="container">
        <table class="table">
          <thead>
            <tr>
              <th>ID PHOTO</th>
              <th>NAMA PHOTO</th>
              <th>TTL</th>
              <th>SOCIAL MEDIA</th>
              <th>TELEPON</th>
              <th>ANGKATAN</th>
              <th>GAMBAR</th>
              <th>ACTION</th>

            </tr>
          </thead>
          <tbody>
          <?php foreach ($photoslab as $itemphoto  ) {
            # code...
           ?>
            <tr class="success">
              <td><?php echo $itemphoto->id_photos;?></td>
              <td><?php echo $itemphoto->id_photos;?></td>
              <td><?php echo $itemphoto->id_photos;?></td>
              <td><?php echo $itemphoto->id_photos;?></td>
              <td><?php echo $itemphoto->id_photos;?></td>
              <td><?php echo $itemphoto->id_photos;?></td>
              <td><?php echo $itemphoto->id_photos;?></td>
                 <td>
                <a class="btn-sm btn-primary" href="#">EDIT</a>
                <a class="btn-sm btn-danger" href="#">DELETE</a>
              </td>
            </tr>
          <?php }?>
          </tbody>
        </table>

      </div>




</body>



<script type="text/javascript" src="<?php echo base_url();?>js/jquery.js">
</script>
<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.js">
</script>

</html>
