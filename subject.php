<!DOCTYPE html>
<html>
<?php
    ob_start();
    include_once("includes/init.php");
    Session::startSession();
    User::checkActiveSession();
	$page = "subject";
	$title ="Study Link | Manage Subject";
	include_once("includes/head.php");
    ?>

    <body>

        <!-- Begin page -->
        <div id="wrapper">
            <!--INCLUDING SIDEBAR-->
            <?php include_once("includes/sidebar.php"); ?>

            <!--INCLUDING MAIN CONTENTS OF THE PAGE-->
            <?php 
            $q = "";
			if(isset($_GET['q'])){
				$q = $_GET['q'];
            }
            switch ($q)
            {
                case 'add':
                    include_once("includes/subject/add-subject.php");
                    break;
                    
                case 'edit':
                    include_once("includes/subject/edit-subject.php");
                    break;    

                default:
                    include_once("includes/subject/manage-subject.php");
                    break;    
            }
			?>

        </div>
        <!-- END wrapper -->
        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <!-- Parsley js USED FOR VALIDATION-->
        <script type="text/javascript" src="plugins/parsleyjs/parsley.min.js"></script>
    
       <!--SWEET ALERT JS for MODALs-->
        <script src="plugins/sweet-alert/sweetalert2.min.js"></script>

        <!--UI TOASTR JS-->
        <script src="plugins/uitoastr/toastr.js"></script>

        <!-- Dashboard Init -->
        <script src="assets/pages/jquery.subject.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        <?php include_once("includes/scripts/show-notifications.php");?>

    </body>

</html>
