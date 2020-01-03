<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Daftar Member</title>

    <!-- Icons font CSS-->
    <link href="<?php echo base_url('assets/') ?>vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/') ?>vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url('assets/') ?>vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/') ?>vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url('assets/') ?>css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <div id="infoMessage"><?php echo $message;?></div>
                    <h2 class="title">Form Pendaftaran</h2>

                    <?php echo form_open("auth/create_user");?>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nama Depan</label>
                                    <input class="input--style-4" type="text" name="first_name" id="first_name" value="<?php echo set_value('first_name');?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nama Belakang</label>
                                    <input class="input--style-4" type="text" name="last_name" id="last_name" value="<?php echo set_value('last_name');?>">
                                </div>
                            </div>
                        </div>
                        <?php
                        if($identity_column!=='email') {
                        echo '<p>';
                        echo lang('create_user_identity_label', 'identity');
                        echo '<br />';
                        echo form_error('identity');
                        echo form_input($identity);
                        echo '</p>';
                        }?>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Instansi</label>
                                    <input class="input--style-4" type="text" name="company" id="company" value="<?php echo set_value('company');?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Sebagai</label>
                                    <div class="p-t-6">
                                        <label class="radio-container m-r-45">Peserta
                                            <input type="radio" name="groups">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Penyelenggara
                                            <input type="radio" name="groups">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email" id="email" value="<?php echo set_value('email');?>" placeholder="ex. example@gmail.com">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nomer Telephone</label>
                                    <input class="input--style-4" type="text" name="phone" id="phone" value="<?php echo set_value('phone');?>" placeholder="ex. 082135117621">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="password" name="password" id="password" value="<?php echo set_value('password');?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Ulangi Password</label>
                                    <input class="input--style-4" type="password" name="password_confirm" id="password_confirm" value="<?php echo set_value('password_confirm');?>">
                                </div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Daftar</button>
                        </div>
                    <?php echo form_close();?>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?php echo base_url('assets/') ?>vendor/select2/select2.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>vendor/datepicker/moment.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?php echo base_url('assets/') ?>js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->