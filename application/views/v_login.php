<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>LOGIN</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css" />
  <!-- <link rel="stylesheet" href="<?php   base_url();?>css/bootstrap-theme.css" /> -->
  <link rel="stylesheet" href="<?php echo base_url();?>css/custom.css" />

</head>

<body class="btn-primary">

  <div class="container ">

    <div class="row">

      <div class="col-sm-6 col-md-4 col-md-offset-4  ">
        <h1 class="text-center login-title" id="labtigramlogin">LABTIGRAM</h1>
        <div class="account-wall ">
          <img class="profile-img" src="<?php echo base_url();?>photosfolder/labtigram.png" alt="Labtigram Logos">
          <form class="form-signin">
            <input type="text" class="form-control" placeholder="Username" required autofocus name="username">
            <input type="password" class="form-control" placeholder="Password" required name="password">
            <button class="btn btn-lg btn-primary btn-block" type="submit">
              Sign in
            </button>

            <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
          </form>
        </div>
        <!-- <a href="#" class="text-center new-account">Create an account </a> -->
      </div>

    </div>

  </div>

</body>

</html>
