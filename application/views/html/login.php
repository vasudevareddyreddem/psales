<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Prachatech</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/fav.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
	<link href="<?php echo base_url(); ?>assets/vendor/css/custom.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/vendor/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/css/bootstrapValidator.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/vendor/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?php echo base_url(); ?>assets/vendor/css/style.css" rel="stylesheet">
</head>

<body class="grey lighten-3" style="background-image: url('<?php echo base_url(); ?>assets/vendor/img/underwater.jpg')">
      <?php if($this->session->flashdata('success')): ?>
				<div class="alert_msg1 animated slideInUp bg-succ">
				<?php echo $this->session->flashdata('success');?> &nbsp; <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i>
				</div>
			<?php endif; ?>
			<?php if($this->session->flashdata('error')): ?>
				<div class="alert_msg1 animated slideInUp bg-warn">
				<?php echo $this->session->flashdata('error');?> &nbsp; <i class="fa fa-exclamation-triangle text-warning ico_bac" aria-hidden="true"></i>
				</div>
			<?php endif; ?>
			<?php if($this->session->flashdata('loginerror')): ?>
				<div class="alert_msg1 animated slideInUp bg-warn">
				<?php echo $this->session->flashdata('loginerror');?> &nbsp; <i class="fa fa-exclamation-triangle text-warning ico_bac" aria-hidden="true"></i>
				</div>
			<?php endif; ?>
			

  
	    
    <!--Main layout-->
    <main class="pt-5">
        <div class="container">

            <!--Section: Post-->
            <section class="mt-4">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-5 mx-auto">
                        <div class="text-center">
                        <img src="<?php echo base_url(); ?>assets/vendor/img/logo.png" alt="logo" height="" width="" class="">
                        </div>
                        <div class="card mt-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-10 mx-auto">
									 <form id="defaultForm" name="defaultForm" action="<?php echo base_url('sales/loginpost'); ?>" method="post" enctype="multipart/form-data">
		                        <?php $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash()
						      ); ?>
                                        
                                            <div class="form-group">
                                                <i class="fa fa-user prefix grey-text"></i>
												 <label for="">Email</label>

                                                 <input type="text" class="form-control" name="emp_username" id="emp_username" value="<?php echo $this->input->cookie('emp_username');?>">
                                            </div>
                                            <div class="form-group">
                                                <i class="fa fa-lock prefix grey-text"></i>
												<label for="">Password</label>
                                                <input type="password" class="form-control" id="emp_password" name="emp_password" value="<?php echo $this->input->cookie('emp_password');?>" >
                                                
                                                <!--<p class="font-small blue-text d-flex justify-content-end"><a href="forgot_password.php" class="blue-text ml-1">Forgot Password?</a></p>-->
                                            </div>
                                            <div class="text-center mb-3">
											<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                                             <button type="submit" class="btn btn-md btn-block default-color text-white waves-effect waves-light" id="validateBtn" name="validateBtn" value="check">Login</button>
                                            </div>
                                           <!-- <div class="md-form">
                                                <p class="font-small d-flex justify-content-center">Not a member? <a href="register.php" class="blue-text ml-1">Register</a></p>
                                            </div>-->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Post-->

        </div>
    </main>
    <!--Main layout-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/js/bootstrapValidator.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();
		</script>
	<script type="text/javascript">
$(document).ready(function() {
    $('#defaultForm').bootstrapValidator({
        fields: {
            
            emp_username: {
                validators: {
					notEmpty: {
						message: 'Email is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
					message: 'Please enter a valid email address. For example johndoe@domain.com.'
					}
				}
            },
            emp_password: {
               validators: {
					notEmpty: {
						message: 'Password is required'
					},
					stringLength: {
                        min: 6,
                        message: 'Password  must be at least 6 characters'
                    },
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~'"\\|=^?$%*)(_+-]*$/,
					message: 'Password wont allow <>[]'
					}
				}
            }
        }
    });

});
</script>
</body>
</html>
		
		
		
		
		
	