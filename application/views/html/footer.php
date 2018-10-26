    <!--Footer-->
    <footer class="page-footer text-center font-small default-color-dark mt-4" style="positon:absolute;bottom:0px;width:100%;">

        <!--Copyright-->
        <div class="footer-copyright text-white py-3">
            © 2018 Copyright
            <a href="#"></a>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->

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
    <!-- MDBootstrap Datatables  -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/js/addons/datatables.min.js"></script>
    <!-- Initializations -->
    <script>
        $(document).ready(function () {
          $('#dtBasicExample').DataTable();
          $('.dataTables_length').addClass('bs-select');
        });
    </script>
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();
    </script>

</body>

</html>