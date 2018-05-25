<?php 
    if(isset($_POST['submit_edit_student'])) {
        $sid = $_GET['sid'];
        extract($_POST);
        $student = new Student();
        $student_update = $student->updateStudent($sid, $student_first_name, $student_last_name, $student_email, $student_number, $student_address, $student_branch, $student_dob, $student_college, $student_gender, $stream_id);
        
        $parent = new Parents();
        $father_update = $parent->updateParentDetails($father_id, $father_first_name, $father_number, $father_email);
        $mother_update = $parent->updateParentDetails($mother_id, $mother_first_name, $mother_number, $mother_email);
        
        Functions::redirect("student.php?op=update&p=success&page=student");
    }
?>
<?php 
    if( isset($_GET['sid'] ) ) {
        $sid = $_GET['sid'];
        $student = new Student();
        $result_set = $student->getAllDetailsOfAStudent($sid);
        if($row = mysqli_fetch_assoc($result_set))
            extract($row);

        $parent = new Parents();
        $father_db_row = $parent->getFatherDetails($sid);
        $mother_db_row = $parent->getMotherDetails($sid);
        extract($father_db_row);
?>


<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->

<div class="content-page">

    <?php
	$page_title = "Manage Student";
	$breadcrumb = "
	<li class='breadcrumb-item'>Student Management</li>
	<li class='breadcrumb-item active'>Edit Student</li>";
	include_once("top-bar.php");
	?>
        <!-- Start Page content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                            <form class="" method="post" action="#" name="edit_student" id="name_student">
                                <h4>Personal Details</h4>
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" required placeholder="Enter Students First Name" name="student_first_name" id="student_first_name" value="<?php echo $student_first_name; ?>" />
                                </div>

                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" required placeholder="Enter Students Last name" name="student_last_name" id="student_last_name" value="<?php echo $student_last_name;?>" />
                                </div>

                                <div class="form-group">
                                    <label>Student E-Mail</label>
                                    <div>
                                        <input type="email" class="form-control" required parsley-type="email" placeholder="Enter Students e-mail" name="student_email" id="student_email" value="<?php echo $student_email;?>" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Students Number</label>
                                    <div>
                                        <input data-parsley-type="digits" type="text" class="form-control" name="student_number" id="student_number" required placeholder="Enter Students Number" value="<?php echo $student_number;?>" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Address</label>
                                    <div>
                                        <textarea required class="form-control" name="student_address" id="student_address" placeholder="Enter Students Address"><?php echo $student_address; ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Branch</label>
                                    <input type="text" class="form-control" required placeholder="Enter Students Branch" name="student_branch" id="student_branch" value="<?php echo $student_branch; ?>" />
                                </div>

                                <div class="form-group">
                                    <label>DOB</label>
                                    <input type="text" class="form-control" required placeholder="Enter Students DOB" name="student_dob" id="student_dob" value="<?php echo $student_dob; ?>" />
                                </div>

                                <div class="form-group">
                                    <label>College</label>
                                    <input type="text" class="form-control" required placeholder="Enter Students College" name="student_college" id="student_college" value="<?php echo $student_college; ?>" />
                                </div>

                                <div class="form-group">
                                    <label>Gender</label>
                                    <input type="text" class="form-control" required placeholder="Enter Students Gender" name="student_gender" id="student_gender" value="<?php echo $student_gender; ?>" />
                                </div>

                                <div class="form-group">
                                    <label>Stream</label>
                                    <input type="text" class="form-control" required placeholder="Enter Students Stream" name="stream_id" id="stream_id" value="<?php echo $stream_id; ?>" />
                                </div>

                                <h4>Father's Details</h4>

                                <input type="hidden" value="<?php echo $pid; ?>" name="father_id">

                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" required placeholder="Enter Fathers First Name" name="father_first_name" id="father_first_name" value="<?php echo $parent_first_name; ?>" />
                                </div>

                                <div class="form-group">
                                    <label>Fathers E-Mail</label>
                                    <div>
                                        <input type="email" class="form-control" required parsley-type="email" placeholder="Enter Fathers e-mail" name="father_email" id="father_email" value="<?php echo $parent_email; ?>" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Fathers Number</label>
                                    <div>
                                        <input data-parsley-type="digits" type="text" class="form-control" name="father_number" id="father_number" required placeholder="Enter Fathers Number" value="<?php echo $parent_number; ?>" />
                                    </div>
                                </div>

                                <?php 
                                    extract($mother_db_row);
                                ?>

                                <h4>Mother's Details</h4>

                                <input type="hidden" value="<?php echo $pid; ?>" name="mother_id">


                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" required placeholder="Enter Mothers First Name" name="mother_first_name" id="mother_first_name" value="<?php echo $parent_first_name; ?>" />
                                </div>

                                <div class="form-group">
                                    <label>Mothers E-Mail</label>
                                    <div>
                                        <input type="email" class="form-control" required parsley-type="email" placeholder="Enter Mothers e-mail" name="mother_email" id="mother_email" value="<?php echo $parent_email; ?>" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Mothers Number</label>
                                    <div>
                                        <input data-parsley-type="digits" type="text" class="form-control" name="mother_number" id="mother_number" required placeholder="Enter Mothers Number" value="<?php echo $parent_number; ?>" />
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div>
                                        <button type="submit" class="btn btn-custom waves-effect waves-light" name="submit_edit_student" id="submit_edit_student">
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
        <?php include_once("footer.php");?>

</div>


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->
