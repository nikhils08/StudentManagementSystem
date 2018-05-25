<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->

<div class="content-page">

	<?php
	$page_title = "Manage Student";
	$breadcrumb = "
	<li class='breadcrumb-item'>Student Management</li>
	<li class='breadcrumb-item active'>Manage Student</li>";
	include_once("top-bar.php");
	?>
	<!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <p class="text-muted font-14 m-b-20 pull-right">
                                        <a type="button" class="btn btn-primary waves-effect waves-light btn-lg"> <i class="fa fa-plus m-r-5"></i> <span>Add New Student</span> </a>
                                    </p>

                                    <table class="table">
                                        <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Himanshu</td>
                                            <td>Thakkar</td>
                                            <td>@ht</td>
                                            <td>
                                            <div class="button-list">
                                            <a type="button" class="btn btn-icon waves-effect btn-light" data-toggle="tooltip" title="Hooray!"> <i class="fa fa-heart-o"></i> </a>
                                        	<a type="button" class="btn btn-icon waves-effect waves-light btn-danger"> <i class="fa fa-remove"></i> </a>
                                        	<a type="button" class="btn btn-icon waves-effect waves-light btn-purple"> <i class="fa fa-music"></i> </a>
                                        	<a type="button" class="btn btn-icon waves-effect waves-light btn-pink"> <i class="fa fa-music"></i> </a>
                                        	<a type="button" class="btn btn-icon waves-effect waves-light btn-success"> <i class="fa fa-music"></i> </a>
                                        	<a type="button" class="btn btn-icon waves-effect waves-light btn-warning"> <i class="fa fa-music"></i> </a>
                                        	<a type="button" class="btn btn-icon waves-effect waves-light btn-primary"> <i class="fa fa-music"></i> </a>
                                        	<a type="button" class="btn btn-icon waves-effect waves-light btn-info"> <i class="fa fa-music"></i> </a>
                                        	</div>
                                        	</td>
                                        </tr>
                                        
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

	<?php include_once("footer.php");?>

</div>


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->
