
<!--Main layout-->
<main class="pt-2">
    <div class="container">

        <!--Section: Post-->
        <section class="mt-5">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-8 mx-auto">

                    <!--Reply-->
                    <div class="card mb-5 wow fadeIn">
                        <div class="card-header unique-color text-white text-center font-weight-bold">Payment method</div>
                        <div class="card-body">
                            <form action="<?php echo base_url('sales/paymentselect'); ?>" method="post" id="paymentProcess">

                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input p-type" id="p_cash" name="payment_type" value="cash" checked>
                                    <label class="custom-control-label" for="p_cash">Cash</label>
                                </div>

                                <div class="form form-cash pt-3">

                                    <div class="form-group">
                                        <select class="form-control" id="pc_type" name="pc_type">
                                            <option value="Collected">Collected</option>
                                            <option value="Not Collected">Not Collected</option>
                                        </select>
                                    </div>

                                    <div class="form-group option1">
                                        <label for="pc_amount">Amount</label>
                                        <input type="number" id="pc_amount" name="pc_amount" class="form-control">
                                    </div>

                                    <div class="form-group option2">
                                        <label for="pc_reason">Reason</label>
                                        <textarea id="pc_reason" name="pc_reason" class="form-control"></textarea>
                                    </div>

                                </div>

                                <div class="custom-control custom-radio mt-2">
                                    <input type="radio" class="custom-control-input p-type" id="p_online" name="payment_type" value="online">
                                    <label class="custom-control-label" for="p_online">Credit / Debit / ATM Card</label>
                                </div>

                                <div class="form form-online pt-3">

                                    <div class="form-group">
                                        <label for="po_cnumber">Card Number</label>
                                        <input type="text" id="po_cnumber" name="po_cnumber" class="form-control">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="po_cvv">CVV</label>
                                                <input type="text" id="po_cvv" name="po_cvv" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="po_emonth">Expiry Month</label>
                                                        <select id="po_emonth" name="po_emonth" class="form-control">
                                                            <option value="" disabled selected>MM</option>
                                                            <option value="1">01</option>
                                                            <option value="2">02</option>
                                                            <option value="3">03</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="po_eyear">Expiry Year</label>
                                                        <select id="po_eyear" name="po_eyear" class="form-control">
                                                            <option value="" disabled selected>YY</option>
                                                            <option value="1">22</option>
                                                            <option value="2">23</option>
                                                            <option value="3">24</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="custom-control custom-radio mt-2">
                                    <input type="radio" class="custom-control-input p-type" id="p_net" name="payment_type" value="net-banking">
                                    <label class="custom-control-label" for="p_net">Net-Banking</label>
                                </div>

                                <div class="form form-net-banking pt-3">
                                    
                                    <div class="form-group">
                                        <select id="pn_sbank" name="pn_sbank" class="form-control">
                                            <option value="" disabled selected>Select Bank</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                        </select>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="pn_username">Username</label>
                                                <input type="text" id="pn_username" name="pn_username" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="pn_password">Password</label>
                                                <input type="text" id="pn_password" name="pn_password" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn unique-color text-white btn-md mb-4 waves-effect waves-light">Confirm</button>
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
<!--Main layout-->



<script>
    function selectForm() {
        $("div.form").hide();
        $("div.form-" + $("input:checked").val()).show();
    }
    selectForm();
    $("input.p-type").click(function() {
        selectForm()
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#pc_type').change(function() {
            if ($('#pc_type').val() == '2') {
                $('.option1').css('display', 'none');
                $('.option2').css('display', 'block');
            } else if ($('#pc_type').val() == '1') {
                $('.option1').css('display', 'block');
                $('.option2').css('display', 'none');
            } else{
                $('.option2').css('display', 'none');
            }
        });
    });
</script>

<script>

    $(document).ready(function() {
        $('#paymentProcess').bootstrapValidator({

            fields: {

                pc_type: {
                    validators: {
                        notEmpty: {
                            message: 'Type is required'
                        }
                    }
                },
                pc_amount: {
                    validators: {
                        notEmpty: {
                            message: 'Amount is required'
                        },
                        regexp: {
                            regexp: /^[0-9. ]*$/,
                            message: 'Amount can only consist of digits'
                        }
                    }
                },
                pc_reason: {
                    validators: {
                        notEmpty: {
                            message: 'Reason is required'
                        }
                    }
                },
                po_cnumber: {
                    validators: {
                        notEmpty: {
                            message: 'Card Number is required'
                        }
                    }
                },
                po_cvv: {
                    validators: {
                        notEmpty: {
                            message: 'CVV is required'
                        }
                    }
                },
                po_emonth: {
                    validators: {
                        notEmpty: {
                            message: 'Expiry Month is required'
                        }
                    }
                },
                po_eyear: {
                    validators: {
                        notEmpty: {
                            message: 'Expiry Year is required'
                        }
                    }
                },
                pn_sbank: {
                    validators: {
                        notEmpty: {
                            message: 'Bank Name is required'
                        }
                    }
                },
                pn_username: {
                    validators: {
                        notEmpty: {
                            message: 'Username is required'
                        }
                    }
                },
                pn_password: {
                    validators: {
                        notEmpty: {
                            message: 'Password is required'
                        }
                    }
                }
            }
        })

    });

</script>