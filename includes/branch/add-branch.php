<?php 
    if(isset($_POST['submit_add_branch'])){
        extract($_POST);
        $branch = new Branch();
        $branch_id = $branch->insert($branch_name, $branch_code);
        
        Functions::redirect("branch.php?op=add&p=success&page=branch");
    }
?>


<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->

<div class="content-page">

    <?php
	$page_title = "Manage Branch";
	$breadcrumb = "
	<li class='breadcrumb-item'>Branch Management</li>
	<li class='breadcrumb-item active'>Add Branch</li>";
	include_once("includes/top-bar.php");
	?>
        <!-- Start Page content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                            <form class="" method="post" action="#" name="add_branch" id="add_branch">
                                <h4>Branch Details</h4>
                                <div class="form-group">
                                    <label>Branch Name</label>
                                    <input type="text" class="form-control" required placeholder="Enter Branch Name" name="branch_name" id="branch_name" />
                                </div>

                                <div class="form-group">
                                    <label>Branch Code</label>
                                    <input type="text" class="form-control" required placeholder="Enter Branch Code" name="branch_code" id="branch_code" />
                                </div>


                                <div class="form-group">
                                    <div>
                                        <button type="submit" class="btn btn-custom waves-effect waves-light" name="submit_add_branch" id="submit_add_branch">
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
