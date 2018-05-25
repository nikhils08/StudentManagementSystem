<?php 
    if(isset($_POST['submit_edit_subject'])) {
        $id = $_GET['id'];
        extract($_POST);
        $subject = new Subject();
        $subject_update = $subject->update($id, $subject_name, $subject_fees);
        
        Functions::redirect("subject.php?op=update&p=success&page=subject");
    }
?>
<?php 
    if( isset($_GET['id'] ) ) {
        $id = $_GET['id'];
        $subject = new Subject();
        $result_set = $subject->getAllDetailsOfASubject($id);
        if($row = mysqli_fetch_assoc($result_set))
            extract($row);
?>


<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->

<div class="content-page">

    <?php
	$page_title = "Manage Subject";
	$breadcrumb = "
	<li class='breadcrumb-item'>Subject Management</li>
	<li class='breadcrumb-item active'>Edit Subject</li>";
	include_once("includes/top-bar.php");
	?>
        <!-- Start Page content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                            <form class="" method="post" action="#" name="add_subject" id="add_subject">
                                <h4>Subject Details</h4>
                                <div class="form-group">
                                    <label>Subject Name</label>
                                    <input type="text" class="form-control" required placeholder="Enter Subject Name" name="subject_name" id="subject_name" value="<?php echo $subject_name; ?>" />
                                </div>

                                <div class="form-group">
                                    <label>Subject Fees</label>
                                    <input type="text" class="form-control" required placeholder="Enter Subject Fees" name="subject_fees" id="subject_fees" value="<?php echo $subject_fees; ?>" />
                                </div>


                                <div class="form-group">
                                    <div>
                                        <button type="submit" class="btn btn-custom waves-effect waves-light" name="submit_edit_subject" id="submit_edit_subject">
                                                    Submit
                                        </button>
                                        <button type="reset" class="btn btn-light waves-effect m-l-5">
                                                    Cancel
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
            <!-- container -->

        </div>
        <!-- content -->
        <?php 
            } else{
                echo "Something is Wrong";
            }
        ?>
        <?php include_once("includes/footer.php");?>

</div>


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->
