<html>
<head>
    <title>Login - El-Haqq Tour</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta charset="utf-12">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/style.css" type="text/css">
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script> 
    
</head>
<body>
<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Masuk Administrator El-Haqq Tour</h1>
            <?php if(isset($error)) { echo $error; }; ?>
            <div class="account-wall">
                <img class="profile-img" src="<?php echo base_url();?>assets/img/logo.jpg" class="custom-logo" alt="El-Haqq Tour &amp; Travel"
                    alt="">    
                <form class="form-signin" method="POST" action="<?php echo base_url() ?>index.php/login">
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Masukkan Username Anda" autofocus>
                    <?php echo form_error('username'); ?>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda">
                    <?php echo form_error('password'); ?>
                </div>

                <button class="btn btn-lg btn-primary btn-block" name="btn-login" id="btn-login" type="submit">
                    Masuk</button>

                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Ingatkan Saya
                </label>
                <a href="#" class="pull-right need-help">Butuh bantuan? </a><span class="clearfix"></span>
                </form>
            </div>
            <a href="#" class="text-center new-account">Buat Akun </a>
            <div id="error" style="margin-top: 10px"></div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
</body>
</html>