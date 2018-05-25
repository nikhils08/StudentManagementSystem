<?php 
    if(isset($_POST['submit_add_subject'])){
        extract($_POST);
        $subject = new Subject();
        $subject_id = $subject->insert($subject_name, $subject_fees, $semester_id, $branch_id);
        
        Functions::redirect("subject.php?op=add&p=success&page=subject");
    }
?>


<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->

<div class="content-page">

    <?php
	$page_title = "Manage Subject";
	$breadcrumb = "
	<li class='breadcrumb-item'>Subject Management</li>
	<li class='breadcrumb-item active'>Add Subject</li>";
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
                                    <input type="text" class="form-control" required placeholder="Enter Subject Name" name="subject_name" id="subject_name" />
                                </div>


                                <div class="form-group">
                                    <label>Subject Fees</label>
                                    <input type="text" class="form-control" required placeholder="Enter Subject Code" name="subject_fees" id="subject_fees" />
                                </div>


                                <div class="form-row">

                                    <div class="form-group col-md-6">
                                        <label for="">Branch</label>
                                        <select name="branch_id" id="" class="form-control">
                                            <?php
                                            $branch = new Branch();
                                            $branch->populateBranches();
                                            ?>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="">Semester</label>
                                        <select name="semester_id" id="" class="form-control">
                                            <?php
                                            $semester = new Semester();
                                            $semester->populateSemesters();
                                            ?>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div>
                                        <button type="submit" class="btn btn-custom waves-effect waves-light" name="submit_add_subject" id="submit_add_subject">
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

        <?php include_once("includes/footer.php");?>

</div>


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->
