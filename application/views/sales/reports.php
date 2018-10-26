

<!--Main layout-->
<main class="pt-4">
    <div class="container">

        <!--Section: Post-->
        <section class="mt-4 mb-5">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12 mx-auto">
                    <div class="card mb-4 wow fadeIn">
                        <div class="card-body">
                            
                            <div class="table-responsive">
                                <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th class="th-sm">Name
                                                <i class="fa fa-sort float-right" aria-hidden="true"></i>
                                            </th>
                                            <th class="th-sm">Mobile Number
                                                <i class="fa fa-sort float-right" aria-hidden="true"></i>
                                            </th>
                                            <th class="th-sm">Email Id
                                                <i class="fa fa-sort float-right" aria-hidden="true"></i>
                                            </th>
                                            <th class="th-sm">Business Name
                                                <i class="fa fa-sort float-right" aria-hidden="true"></i>
                                            </th>
                                            <th class="th-sm">Nature of Business
                                                <i class="fa fa-sort float-right" aria-hidden="true"></i>
                                            </th>
                                            <th class="th-sm">Desired Business
                                                <i class="fa fa-sort float-right" aria-hidden="true"></i>
                                            </th>
                                            <th class="th-sm">Amount
                                                <i class="fa fa-sort float-right" aria-hidden="true"></i>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php  foreach($reports_list as $list){?>
                                        <tr>
                                            <td><?php echo $list['f_name'];?></td>
                                            <td><?php echo $list['f_number'];?></td>
                                            <td><?php echo $list['f_email'];?></td>
                                            <td><?php echo $list['f_bname'];?></td>
                                            <td><?php echo $list['f_bnature'];?></td>
                                            <td><?php echo $list['f_dbusiness'];?></td>
                                            <td>xxx</td>
                                        </tr>
									   <?php }?>
                                    </tbody>
                                </table>
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

