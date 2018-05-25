<?php
if(isset($_POST['add_batch'])){
    extract($_POST);
    $batch = new Batch();
    $batch_id = $batch->insert($batch_name);
    Functions::redirect("batch.php?op=add&p=success&page=batch");
}
?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->

<div class="content-page">

    <?php
    $page_title = "Add Batch";
    $breadcrumb = "
	<li class='breadcrumb-item'>Batch Management</li>
	<li class='breadcrumb-item active'>Add Batch</li>";
    include_once("includes/top-bar.php");
    ?>
    <!-- Start Page content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box">
                        <form class="" method="post" action="#" name="form-add-batch" id="add_subject">
                            <h4>Batch Details</h4>

                            <div id="subjectList0">

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Batch Name</label>
                                        <input type="text" class="form-control" required placeholder="Enter Batch Name" name="batch_name" id="batch_name" />
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label>Batch Start Date</label>
                                        <input type="text" class="form-control" required placeholder="Enter Start Date" name="start_date" id="start_date" />
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label>Batch Status</label>
                                        <select name="batch_status" class="form-control" id="batch_status">
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="">Select Semester</label>
                                        <select name="semester_id[]" id="semester_id" class="form-control">
                                            <option value="select">Select</option>
                                            <?php
                                                $semester = new Semester();
                                                $semester->populateSemesters();
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">Select Branch</label>
                                        <select name="branch_id[]" id="branch_id" class="form-control">
                                            <option value="select">Select</option>
                                            <?php
                                            $branch = new Branch();
                                            $branch->populateBranches();
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">Select Subject</label>
                                        <select name="subject_id[]" id="subject_id" class="form-control">
                                            <option value="select">Select</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label>&nbsp;</label>
                                        <button type="button" class="btn btn-danger form-control"><i class="fa fa-trash"></i></button>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div>
                                    <button type="submit" class="btn btn-custom waves-effect waves-light" name="add_batch" id="add_batch">
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