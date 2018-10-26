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
<!--Main layout-->
<main class="">
    <div class="container">

        <!--Section: Post-->
        <section class="mt-5">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-8 mx-auto">

                    <!--Reply-->
                    <div class="card mb-4 wow fadeIn">
                        <div class="card-header text-center text-white font-weight-bold unique-color">Form</div>
                        <div class="card-body">

                            <form name="defaultForm" id="defaultForm" action="<?php echo base_url('sales/formpost');?>" method="post" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <label for="f_name">Name</label>
                                    <input type="text" id="f_name" name="f_name" class="form-control" placeholder="Enter Name" >
                                </div>
                                
                                <div class="form-group">
                                    <label for="f_number">Mobile Number</label>
                                    <input type="number" id="f_number" name="f_number" class="form-control" placeholder="Enter Mobile Number">
                                </div>
                                
                                <div class="form-group">
                                    <label for="f_email">Email Id</label>
                                    <input type="email" id="f_email" name="f_email" class="form-control" placeholder="Enter Email Id">
                                </div>
                                
                                <div class="form-group">
                                    <label for="f_bname">Bussiness Name</label>
                                    <input type="text" id="f_bname" name="f_bname" class="form-control" placeholder="Enter Bussiness Name">
                                </div>
                                   
								   
								  <div class="form-group">
                                    <label for="f_bname">Nature of Business</label>
                                    <input type="text" id="f_bnature" name="f_bnature" class="form-control" placeholder="Enter Nature of Business">
                                </div> 
								   
								   <div class="form-group">
                                    <label for="f_bname">Desired Business</label>
                                    <input type="text" id="f_dbusiness" name="f_dbusiness" class="form-control" placeholder="Enter Desired Business">
                                </div> 
								
                                <div class="text-center mt-4">
								<button type="submit" class="btn unique-color text-white btn-md mb-4 waves-effect waves-light" id="validateBtn" name="validateBtn" value="check">Pay Bill</button>
                                </div>

                            </form>

                        </div>
                    </div>
                    <!--/.Reply-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Post-->

    </div>
</main>
 <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/js/bootstrapValidator.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/js/mdb.min.js"></script>
    <!-- Initializations -->
<!--Main layout-->
<script>

$(document).ready(function() {
    $('#defaultForm').bootstrapValidator({
        fields: {
            f_name: {
                    validators: {
					notEmpty: {
						message: 'Name is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Name can only consist of alphanumeric, space and dot'
					}
				}
            },
            f_email: {
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
			 f_number: {
                    validators: {
					notEmpty: {
						message: 'Mobile Number is required'
					},
					regexp: {
					regexp:  /^[0-9]{10}$/,
					message:'Mobile Number must be 10 digits'
					}
				
				}
            },
             f_bname: {
                    validators: {
                        notEmpty: {
                            message: 'Business Name is required'
                        }
                    }
                },
			 f_bnature: {
                    validators: {
                        notEmpty: {
                            message: 'Nature of Business is required'
                        }
                    }
                },
			   f_dbusiness: {
                    validators: {
                        notEmpty: {
                            message: 'Desired Business is required'
                        }
                    }
                }
			
			
        }
    });

});
</script>

