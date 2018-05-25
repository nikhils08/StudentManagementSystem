<?php 
    if(isset($_POST['submit_add_student'])){
        extract($_POST);
        $student = new Student();
        $student_id = $student->insertStudent($student_first_name, $student_last_name, $student_email, $student_number, $student_address, $student_branch, $student_dob, $student_college, $student_gender, $stream_id);
        
        $parent = new Parents();
        
        $gender = "Male";
        $father_id = $parent->insertParentDetails($father_first_name, $father_number, $father_email, $gender);
        
        $gender = "Female";
        $mother_id = $parent->insertParentDetails($mother_first_name, $mother_number, $mother_email, $gender);
        
        $student->linkWithGuardian($student_id, $father_id);
        $student->linkWithGuardian($student_id, $mother_id);
        
        
        Functions::redirect("student.php?op=add&p=success&page=student");
    }
?>


<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->

<div class="content-page">

	<?php
	$page_title = "Manage Student";
	$breadcrumb = "
	<li class='breadcrumb-item'>Student Management</li>
	<li class='breadcrumb-item active'>Add Student</li>";
	include_once("top-bar.php");
	?>
		<!-- Start Page content -->
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="card-box">
							<form class="" method="post" action="#" name="add_student" id="name_student">
							    <h4>Personal Details</h4>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" required placeholder="Enter Students First Name" name="student_first_name" id="student_first_name" />
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" required placeholder="Enter Students Last name" name="student_last_name" id="student_last_name" />
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Student E-Mail</label>
                                        <div>
                                            <input type="email" class="form-control" required parsley-type="email" placeholder="Enter Students e-mail" name="student_email" id="student_email" />
                                        </div>
                                    </div>

                                        <div class="form-group col-md-6">
                                        <label>Students Number</label>
                                        <div>
                                            <input data-parsley-type="digits" type="text" class="form-control" name="student_number" id="student_number" required placeholder="Enter Students Number" />
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>Address</label>
                                        <div>
                                            <textarea required class="form-control" name="student_address" id="student_address" placeholder="Enter Students Address"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label>Branch</label>
                                        <input type="text" class="form-control" required placeholder="Enter Students Branch" name="student_branch" id="student_branch" />
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label>DOB</label>
                                        <input type="text" class="form-control" required placeholder="Enter Students DOB" name="student_dob" id="student_dob" />
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label>Gender</label>
                                        <input type="text" class="form-control" required placeholder="Enter Students Gender" name="student_gender" id="student_gender" />
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>College</label>
                                        <input type="text" class="form-control" required placeholder="Enter Students College" name="student_college" id="student_college" />
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Stream</label>
                                        <input type="text" class="form-control" required placeholder="Enter Students Stream" name="stream_id" id="stream_id" />
                                    </div>
                                </div>
                                    <h4>Father's Details</h4>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" required placeholder="Enter Fathers First Name" name="father_first_name" id="father_first_name" />
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label>Fathers E-Mail</label>
                                        <div>
                                            <input type="email" class="form-control" required parsley-type="email" placeholder="Enter Fathers e-mail" name="father_email" id="father_email" />
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label>Fathers Number</label>
                                        <div>
                                            <input data-parsley-type="digits" type="text" class="form-control" name="father_number" id="father_number" required placeholder="Enter Fathers Number" />
                                        </div>
                                    </div>
                                </div>
                                    <h4>Mother's Details</h4>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" required placeholder="Enter Mothers First Name" name="mother_first_name" id="mother_first_name" />
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label>Mothers E-Mail</label>
                                        <div>
                                            <input type="email" class="form-control" required parsley-type="email" placeholder="Enter Mothers e-mail" name="mother_email" id="mother_email" />
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label>Mothers Number</label>
                                        <div>
                                            <input data-parsley-type="digits" type="text" class="form-control" name="mother_number" id="mother_number" required placeholder="Enter Mothers Number" />
                                        </div>
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-custom waves-effect waves-light" name="submit_add_student" id="submit_add_student">
                                                        Submit
                                                    </button>
                                            <button type="reset" class="btn btn-light waves-effect m-l-5">
                                                        Cancel
                                                    </button>
                                        </div>
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

		<?php include_once("footer.php");?>

</div>


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->
