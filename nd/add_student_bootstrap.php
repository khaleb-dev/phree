<!-- ?php require '../web components/head-1.php' ?>
< ?php require '../web components/header.php' ?>
< ?php require '../web components/h-menu.php' ?>
< ?php require '../web components/sidebar-menu.php' ?>
< ?php include '../add-student.php' ?-->
<?php include './add-student.php' ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"><link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">

					<!-- start page content -->
			<div class="page-content-wrapper">
				<div id="add_boots_forms" class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Add Student</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Students</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Add Student</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Basic Information</header>
									<button id="panel-button"
										class="mdl-button mdl-js-button mdl-button--icon pull-right"
										data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>
									<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
										data-mdl-for="panel-button">
										<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">print</i>Another action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
											here</li>
									</ul>
								</div>
								<div class="card-body" id="bar-parent">
									<form action="" id="form_sample_1" class="form-horizontal" method="post" enctype="multipart/form-data">
										<div class="form-body">
											<div class="form-group row">
												<label class="control-label col-md-3">First Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="firstname" placeholder="enter first name" class="form-control input-height" required/>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Middle Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="middlename" placeholder="enter middle name" class="form-control input-height" required/>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Last Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="lastname" placeholder="enter last name" class="form-control input-height" required/>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Roll No
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="rollNo" placeholder="enter roll no" class="form-control input-height" required/>
												</div>
											</div>
												<div class="form-group row">
													<label class="control-label col-md-3">Matric Number
														<span class="required"> * </span>
													</label>
													<div class="col-md-5">
														<input type="text" name="matNo" placeholder="enter matric no"class="form-control input-height" required/>
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label col-md-3">Reg Number
														<span class="required"> * </span>
													</label>
													<div class="col-md-5">
														<input type="text" name="regNo" placeholder="enter Jamb Reg no" class="form-control input-height" />
													</div>
												</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Email
												</label>
												<div class="col-md-5">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-envelope"></i>
														</span>
														<input type="text" class="form-control input-height" name="email" placeholder="Email Address" required>
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Registration Date
													<span class="required"> * </span>
												</label>
												<!-- <div class="input-append date" id="dp1">
													<input class="formDatePicker" placeholder="Registraion Date" size="56" type="text" name="regDate" readonly>
													<span class="add-on"><i class="fa fa-calendar"></i></span>
												</div> -->
												<div class='input-group date col-md-5' id='dp1'>
													<input type='text' class="form-control input-height" placeholder="Registraion Date" name="regDate" readonly />
													<span class="input-group-addon">
														<i class="glyphicon glyphicon-calendar"></i>
													</span>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Class
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<select class="form-control input-height" name="level" required>
														<option value="">Select...</option>
														<option value="1">100L</option>
														<option value="2">200L</option>
														<option value="3">300L</option>
														<option value="4">400L</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Gender
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<select class="form-control input-height" name="gender" required>
														<option value="">Select...</option>
														<option value="Male">Male</option>
														<option value="Female">Female</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Mobile No.
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<!-- pattern="\d\d" maxlength="2"  -->
													<input name="number" type="text" placeholder="mobile number" class="form-control input-height" required/>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Parents Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="parentName" placeholder="enter parents name" class="form-control input-height" required/>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Parents Mobile No.
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input name="parentNumber" type="text" placeholder="parents mobile number" class="form-control input-height" required />
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Date Of Birth
													<span class="required"> * </span>
												</label>
												<!-- <div class="input-append date" id="dp2">
													<input class="formDatePicker" placeholder="Birth Date" size="56" type="text" name="dob" readonly>
													<span class="add-on"><i class="fa fa-calendar"></i></span>
												</div> -->
												<div class='input-group date col-md-5' id='dp2'>
													<input type='text' class="form-control input-height" placeholder="Birth Date" name="dob" readonly />
													<span class="input-group-addon">
														<i class="glyphicon glyphicon-calendar"></i>
													</span>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Address
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<textarea name="address" placeholder="address" class="form-control" rows="5" required></textarea>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Profile Picture
												</label>
												<div class="compose-editor col-md-5">
													<input type="file" id="passport" name="profilePic" class="form-control" accept="*/image">
												</div>
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="offset-md-3 col-md-9">
														<input type="submit"
															class="btn btn-info m-r-20" name="addstudent-Submit" value="Submit"></input>
														<button type="button" class="btn btn-default">Cancel</button>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->
			<!-- ?php require '../web components/chat-sidebar.php' ?>
		< ?php require '../web components/footer.php' ?>
	< ?php require '../web components/js-scripts.php' ? -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<script>
  $(function () {
    $('#dp1').datetimepicker();
 });
</script>