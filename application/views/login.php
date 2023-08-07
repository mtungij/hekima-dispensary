<!doctype html>
<html class="no-js " lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>Hekima Hospital | Login </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="<?php echo base_url('public/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet" />

    
</head>

<body class="d-flex justify-content-center align-items-center" style="height: 100dvh; background-image: url(<?php echo base_url("public/images/login.jpg") ?>)">

<main class="row justify-content-center align-items-center">
    <section class="col" width="80" height="80">
        <img src="https://thememakker.com/templates/oreo/hospital/html/assets/images/logo.svg" class="img-thumbnail mx-auto d-block" width="80" height="80" alt="">
    </section>
    <h2 class="text-center">Login</h2>
    <section>
        <div>
             <?php if($this->session->flashdata('errorLogin')): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error</strong> <?= $this->session->flashdata('errorLogin')  ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif ?>
        </div>
        <div>
            <?php echo form_open('staff/login') ?>
            <div class="">                                                
                <div class="input-group my-4">
                    <input type="text" class="form-control" placeholder="Enter User Name" name="username">
                </div>
                <div class="input-group">
                    <input type="password" placeholder="Password" class="form-control" name="password" />
                </div>
                <div class="footer text-center my-4">
                    <button type="submit" class="btn btn-primary btn-round btn-block w-100 ">LOGIN</button>
                </div>
            </div>
            <?php echo form_close() ?>
        </div>
    </section>
</main>
<script src="<?php echo base_url('public/bootstrap/dist/js/bootstrap.min.js') ?>"></script>

<script>
</script>
</body>
</html>