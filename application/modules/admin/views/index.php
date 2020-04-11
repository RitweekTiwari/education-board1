<?php include('layout/css.php'); ?>
<!-- Start Left menu area -->
<div class="left-sidebar-pro">
	<nav id="sidebar" class="">
		<div class="sidebar-header">
			<a href="index.html"><img class="main-logo" src="<?php echo base_url('optimum')?>/img/logo/logo12.jpg" alt="" /></a>
			<strong><a href="index.html"><img src="<?php echo base_url('optimum')?>/img/logo/logosn.png" alt="" /></a></strong>
		</div>
		<div class="left-custom-menu-adp-wrap comment-scrollbar">
			<nav class="sidebar-nav left-sidebar-menu-pro">
				<ul class="metismenu" id="menu1">
					<li class="active">
						<a href="<?php echo base_url('admin/dashboard') ?>">
							<span class="educate-icon educate-home icon-wrap"></span>
							<span class="mini-click-non">Dashboard</span>
						</a>
					</li>
					<!-- Media -->
					<li>
						<a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Media</span></a>
						<ul class="submenu-angle" aria-expanded="false">
							<li><a title="All Courses" href="<?php echo base_url('admin/media/add')?>"><span class="mini-sub-pro">Add New</span></a></li>
							<li><a title="All Courses" href="<?php echo base_url('admin/media/')?>"><span class="mini-sub-pro">All Media</span></a></li>
						</ul>
					</li>
					<!-- Article -->
					<li>
						<a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Article</span></a>
						<ul class="submenu-angle" aria-expanded="false">
							<li><a title="All Courses" href="<?php echo base_url('admin/Article/')?>"><span class="mini-sub-pro">Add New</span></a></li>
							<li><a title="All Courses" href="<?php echo base_url('admin/Article/view')?>"><span class="mini-sub-pro">All List</span></a></li>
						
						</ul>
					</li>
					<!-- Courses -->
					<li>
						<a class="has-arrow" href="" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Courses</span></a>
						<ul class="submenu-angle" aria-expanded="false">
							<li><a title="All Courses" href="<?php echo base_url('admin/Course/ViewCourse')?>"><span class="mini-sub-pro">All Courses List </span></a></li>
							<li><a title="All Courses" href="<?php echo base_url('admin/Course/ViewCourseGrid')?>"><span class="mini-sub-pro">All Courses Grid </span></a></li>

							<li><a title="Add Courses" href="<?php echo base_url('admin/Course')?>"><span class="mini-sub-pro">Add Course</span></a></li>
							<li><a title="Edit Courses" href="edit-course.html"><span class="mini-sub-pro">Edit Course</span></a></li>
							<li><a title="Courses Profile" href="course-info.html"><span class="mini-sub-pro">Courses Info</span></a></li>
							<li><a title="Product Payment" href="course-payment.html"><span class="mini-sub-pro">Courses Payment</span></a></li>
						</ul>
					</li>
					<!-- Subject -->
					<li>
						<a class="has-arrow" href="" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Subject</span></a>
						<ul class="submenu-angle" aria-expanded="false">
							<li><a title="All Courses" href="<?php echo base_url('admin/Subject/View')?>"><span class="mini-sub-pro">All Subject List </span></a></li>
							<li><a title="Add Courses" href="<?php echo base_url('admin/Subject')?>"><span class="mini-sub-pro">Add Subject</span></a></li>

						</ul>
					</li>
					<!-- Lesson -->
					<li>
						<a class="has-arrow" href="" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Lesson</span></a>
						<ul class="submenu-angle" aria-expanded="false">
							<li><a title="All Courses" href="<?php echo base_url('admin/Lesson/View')?>"><span class="mini-sub-pro">All Lesson List </span></a></li>
							<li><a title="Add Courses" href="<?php echo base_url('admin/Lesson')?>"><span class="mini-sub-pro">Add Lesson</span></a></li>

						</ul>
					</li>
					<!-- library -->
					<li>
						<a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Library</span></a>
						<ul class="submenu-angle" aria-expanded="false">
							<li><a title="All Library" href="library-optimum.html"><span class="mini-sub-pro">Library optimum</span></a></li>
							<li><a title="Add Library" href="add-library-optimum.html"><span class="mini-sub-pro">Add Library Asset</span></a></li>
							<li><a title="Edit Library" href="edit-library-optimum.html"><span class="mini-sub-pro">Edit Library Asset</span></a></li>
						</ul>
					</li>
					<!-- Students -->
					<li>
						<a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Students</span></a>
						<ul class="submenu-angle" aria-expanded="false">
							<li><a title="All Students" href="all-students.html"><span class="mini-sub-pro">All Students</span></a></li>
							<li><a title="Add Students" href="add-student.html"><span class="mini-sub-pro">Add Student</span></a></li>
							<li><a title="Edit Students" href="edit-student.html"><span class="mini-sub-pro">Edit Student</span></a></li>
							<li><a title="Students Profile" href="student-profile.html"><span class="mini-sub-pro">Student Profile</span></a></li>
						</ul>
					</li>
					<!-- Events -->
					<li>
						<a title="Landing Page" href="events.html" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Event</span></a>
					</li>
					<li>
						<a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">Departments</span></a>
						<ul class="submenu-angle" aria-expanded="false">
							<li><a title="Departments List" href="departments.html"><span class="mini-sub-pro">Departments List</span></a></li>
							<li><a title="Add Departments" href="add-department.html"><span class="mini-sub-pro">Add Departments</span></a></li>
							<li><a title="Edit Departments" href="edit-department.html"><span class="mini-sub-pro">Edit Departments</span></a></li>
						</ul>
					</li>
					<li>
						<a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-settings icon-wrap"></span> <span class="mini-click-non">Settings</span></a>
						<ul class="submenu-angle" aria-expanded="false">
							<li><a title="Aim" href="<?php echo base_url('admin/Aim')?>"><span class="mini-sub-pro">Add Aim</span></a></li>
							<li><a title="View Mail" href="<?php echo base_url('admin/Category')?>"><span class="mini-sub-pro">Add Category</span></a></li>
						</ul>
					</li>


				</ul>
			</nav>
		</div>
	</nav>
</div>
<!-- End Left menu area -->
<!-- Start Welcome area -->
<div class="all-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="logo-pro">
					<a href="index.html"><img class="main-logo" src="<?php echo base_url('optimum')?>/img/logo/logo.png" alt="" /></a>
				</div>
			</div>
		</div>
	</div>
	<div class="header-advance-area">
		<div class="header-top-area">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="header-top-wraper">
							<div class="row">
								<div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
									<div class="menu-switcher-pro">
										<button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
											<i class="educate-icon educate-nav"></i>
										</button>
									</div>
								</div>
								<div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
								</div>
								<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
									<div class="header-right-info">
										<ul class="nav navbar-nav mai-top-nav header-right-menu">
											<li class="nav-item">
												<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
													<?php if ($this->session->userdata('thumb') != ""): ?>
														<img src="<?php echo base_url() . $this->session->userdata('thumb'); ?>" alt="" class="header-profile-icon">
													<?php else: ?>
														<img src="<?php echo base_url()?>assets/images/avatars/default.png" alt="" class="header-profile-icon">
													<?php endif; ?>
													<span class="admin-name"><?php echo $this->session->userdata('username'); ?></span>
													<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
												</a>
												<ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
													<li><a href="<?php echo base_url('admin/profile') ?>"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
													</li>
													<li><a href="<?php echo base_url('admin/setting') ?>"><span class="edu-icon edu-settings author-log-ic"></span>Settings</a>
													</li>
													<li><a href="<?php echo base_url('auth/logout')?>"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
													</li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Mobile Menu start -->
		<div class="mobile-menu-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="mobile-menu">
							<nav id="dropdown">
								<ul class="mobile-menu-nav">
									<li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
									</li>
									<li><a href="#">Event</a></li>
									<li><a data-toggle="collapse" data-target="#demoevent" href="#">Professors <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
										<ul id="demoevent" class="collapse dropdown-header-top">
											<li><a href="all-professors.html">All Professors</a>
											</li>
											<li><a href="add-professor.html">Add Professor</a>
											</li>
											<li><a href="edit-professor.html">Edit Professor</a>
											</li>
											<li><a href="professor-profile.html">Professor Profile</a>
											</li>
										</ul>
									</li>
									<li><a data-toggle="collapse" data-target="#demopro" href="#">Students <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
										<ul id="demopro" class="collapse dropdown-header-top">
											<li><a href="all-students.html">All Students</a>
											</li>
											<li><a href="add-student.html">Add Student</a>
											</li>
											<li><a href="edit-student.html">Edit Student</a>
											</li>
											<li><a href="student-profile.html">Student Profile</a>
											</li>
										</ul>
									</li>
									<li><a data-toggle="collapse" data-target="#democrou" href="#">Courses <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
										<ul id="democrou" class="collapse dropdown-header-top">
											<li><a href="all-courses.html">All Courses</a>
											</li>
											<li><a href="<?php echo base_url('admin/Course')?>">Add Course</a>
											</li>
											<li><a href="edit-course.html">Edit Course</a>
											</li>
											<li><a href="course-profile.html">Courses Info</a>
											</li>
											<li><a href="course-payment.html">Courses Payment</a>
											</li>
										</ul>
									</li>
									<li><a data-toggle="collapse" data-target="#demolibra" href="#">Library <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
										<ul id="demolibra" class="collapse dropdown-header-top">
											<li><a href="library-optimum.html">Library optimum</a>
											</li>
											<li><a href="add-library-optimum.html">Add Library Asset</a>
											</li>
											<li><a href="edit-library-optimum.html">Edit Library Asset</a>
											</li>
										</ul>
									</li>
									<li><a data-toggle="collapse" data-target="#demodepart" href="#">Departments <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
										<ul id="demodepart" class="collapse dropdown-header-top">
											<li><a href="departments.html">Departments List</a>
											</li>
											<li><a href="add-department.html">Add Departments</a>
											</li>
											<li><a href="edit-department.html">Edit Departments</a>
											</li>
										</ul>
									</li>
									<!-- <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class="admin-project-icon edu-icon edu-down-arrow"></span></a> -->
										<ul id="demo" class="collapse dropdown-header-top">
											<li><a href="mailbox.html">Inbox</a>
											</li>
											<li><a href="mailbox-view.html">View Mail</a>
											</li>
											<li><a href="mailbox-compose.html">Compose Mail</a>
											</li>
										</ul>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Mobile Menu end -->
<?php echo	$main_content ?>

<?php include('layout/footer.php'); ?>
