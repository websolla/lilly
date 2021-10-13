<body
	class="page-header-fixed sidemenu-closed-hidelogo  page-md header-white dark-sidebar-color logo-dark">

    <div class="page-wrapper">
		<!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
			<div class="page-header-inner ">
				<!-- logo start -->
				<div class="page-logo">
                <a href="{{ url('admin') }}">
						<img alt="" src="assets/img/logo.png">
						<span class="logo-default">Kalkily</span> </a>
				</div>
				<!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
                    <li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>

				</ul>
				<!-- start mobile menu -->
				<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span></span>
				</a>
				<!-- end mobile menu -->
                <!-- start header menu -->

				<div class="top-menu">
					<ul class="nav navbar-nav pull-right">
						<!-- start notification dropdown -->
						<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<i class="fa fa-bell-o"></i>
								<span class="badge headerBadgeColor1"> 6 </span>
							</a>
							<ul class="dropdown-menu animated swing">
								<li class="external">
									<h3><span class="bold">Notifications</span></h3>
									<span class="notification-label purple-bgcolor">New 6</span>
								</li>
								<li>
									<ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
										<li>
											<a href="javascript:;">
												<span class="time">just now</span>
												<span class="details">
													<span class="notification-icon circle deepPink-bgcolor"><i
															class="fa fa-check"></i></span> Congratulations!. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">3 mins</span>
												<span class="details">
													<span class="notification-icon circle purple-bgcolor"><i
															class="fa fa-user o"></i></span>
													<b>John Micle </b>is now following you. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">7 mins</span>
												<span class="details">
													<span class="notification-icon circle blue-bgcolor"><i
															class="fa fa-comments-o"></i></span>
													<b>Sneha Jogi </b>sent you a message. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">12 mins</span>
												<span class="details">
													<span class="notification-icon circle pink"><i
															class="fa fa-heart"></i></span>
													<b>Ravi Patel </b>like your photo. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">15 mins</span>
												<span class="details">
													<span class="notification-icon circle yellow"><i
															class="fa fa-warning"></i></span> Warning! </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">10 hrs</span>
												<span class="details">
													<span class="notification-icon circle red"><i
															class="fa fa-times"></i></span> Application error. </span>
											</a>
										</li>
									</ul>
									<div class="dropdown-menu-footer">
										<a href="javascript:void(0)"> All notifications </a>
									</div>
								</li>
							</ul>
						</li>
						<!-- end notification dropdown -->
						<!-- start message dropdown -->
						<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<i class="fa fa-envelope-o"></i>
								<span class="badge headerBadgeColor2"> 2 </span>
							</a>
							<ul class="dropdown-menu animated slideInDown">
								<li class="external">
									<h3><span class="bold">Messages</span></h3>
									<span class="notification-label cyan-bgcolor">New 2</span>
								</li>
								<li>
									<ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
										<li>
											<a href="#">
												<span class="photo">
													<img src="assets/img/user/user2.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> Sarah Smith </span>
													<span class="time">Just Now </span>
												</span>
												<span class="message"> Jatin I found you on LinkedIn... </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="assets/img/user/user3.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> John Deo </span>
													<span class="time">16 mins </span>
												</span>
												<span class="message"> Fwd: Important Notice Regarding Your Domain
													Name... </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="assets/img/user/user1.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> Rajesh </span>
													<span class="time">2 hrs </span>
												</span>
												<span class="message"> pls take a print of attachments. </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="assets/img/user/user8.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> Lina Smith </span>
													<span class="time">40 mins </span>
												</span>
												<span class="message"> Apply for Ortho Surgeon </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="assets/img/user/user5.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> Jacob Ryan </span>
													<span class="time">46 mins </span>
												</span>
												<span class="message"> Request for leave application. </span>
											</a>
										</li>
									</ul>
									<div class="dropdown-menu-footer">
										<a href="#"> All Messages </a>
									</div>
								</li>
							</ul>
						</li>
						<!-- end message dropdown -->
						<!-- start manage user dropdown -->
						<li class="dropdown dropdown-user">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<img alt="" class="img-circle " src="{{asset('mainAdmin/assets/img/user.png')}}" />
								<span class="username username-hide-on-mobile"> {{ Auth::user()->name }} </span>
								<i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-default animated jello">
								<li>
									<a href="user_profile.html">
										<i class="icon-user"></i> Profile </a>
								</li>
								<li>
									<a href="#">
										<i class="icon-settings"></i> Settings
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-directions"></i> Help
									</a>
								</li>
								<li class="divider"> </li>
								<li>
									<a href="lock_screen.html">
										<i class="icon-lock"></i> Lock
									</a>
								</li>
								<li>
									<a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                        <i class="icon-logout"></i> Log Outs
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
								</li>
							</ul>
						</li>
						<!-- end manage user dropdown -->
						<li class="dropdown dropdown-quick-sidebar-toggler">
							<a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right"
								data-upgraded=",MaterialButton">
								<i class="material-icons">settings</i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end header -->
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll">
						<ul   class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true"
							data-slide-speed="200">
							<li class="sidebar-toggler-wrapper hide">
								<div class="sidebar-toggler">
									<span></span>
								</div>
							</li>
							<li class="sidebar-user-panel">
								<div class="user-panel">
									<div class="row">
										<div class="sidebar-userpic">
											<img src="{{asset('mainAdmin/assets/img/user.png')}}" class="img-responsive" alt=""> </div>
									</div>
									<div class="profile-usertitle">
										<div class="sidebar-userpic-name"> {{ Auth::user()->name }}</div>
										<div class="profile-usertitle-job"> Manager </div>
									</div>
									<div class="sidebar-userpic-btn">
										<a class="tooltips" href="user_profile.html" data-placement="top"
											data-original-title="Profile">
											<i class="material-icons">person_outline</i>
										</a>
										<a class="tooltips" href="email_inbox.html" data-placement="top"
											data-original-title="Mail">
											<i class="material-icons">mail_outline</i>
										</a>
										<a class="tooltips" href="chat.html" data-placement="top"
											data-original-title="Chat">
											<i class="material-icons">chat</i>
                                        </a>
										<a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">

                                            <i class="material-icons">input</i>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
										</a>
									</div>
								</div>
							</li>
							<li class="menu-heading">
								<span>-- List</span>
                            </li>

							<li  class="nav-item ">
									<a href="#" class="nav-link nav-toggle">
									<i class="fa fa-image"></i>
									<span class="title">Sliders</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item" >
                                    	<a href="{{ url('admin/sliders/create') }}"  class="nav-link ">
											<span class="title">Add New</span>
										</a>
									</li>
									<li class="nav-item">
                                    	<a href="{{ url('admin/sliders') }}" class="nav-link ">
											<span class="title">View All Sliders</span>
										</a>
									</li>
								</ul>
							</li>
							<li  class="nav-item ">
								<a href="#" class="nav-link nav-toggle">
									<i class="fa fa-file-text"></i>
									<span class="title">Pages</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item" >
                                    	<a href="{{ url('admin/pages/create') }}"  class="nav-link ">
											<span class="title">Add New</span>
										</a>
									</li>
									<li class="nav-item">
                                    	<a href="{{ url('admin/pages') }}" class="nav-link ">
											<span class="title">View All Pages</span>
										</a>
									</li>
								</ul>
							</li>
							<li  class="nav-item ">
								<a href="#" class="nav-link nav-toggle">
									<i class="fa fa-gear"></i>
									<span class="title">Services</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item" >
                                    	<a href="{{ url('admin/services/create') }}"  class="nav-link ">
											<span class="title">Add New</span>
										</a>
									</li>
									<li class="nav-item">
                                    	<a href="{{ url('admin/services') }}" class="nav-link ">
											<span class="title">View All Services</span>
										</a>
									</li>
								</ul>
							</li>
							<li  class="nav-item ">
								<a href="#" class="nav-link nav-toggle">
									<i class="fa fa-server"></i>
									<span class="title">Categories</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item" >
                                    	<a href="{{ url('admin/categories/create') }}"  class="nav-link ">
											<span class="title">Add New</span>
										</a>
									</li>
									<li class="nav-item">
                                    	<a href="{{ url('admin/categories') }}" class="nav-link ">
											<span class="title">View All Categories</span>
										</a>
									</li>
								</ul>
							</li>
							<li  class="nav-item ">
								<a href="#" class="nav-link nav-toggle">
									<i class="fa fa-globe"></i>
									<span class="title">Countries</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item" >
                                    	<a href="{{ url('admin/countries/create') }}"  class="nav-link ">
											<span class="title">Add New</span>
										</a>
									</li>
									<li class="nav-item">
                                    	<a href="{{ url('admin/countries') }}" class="nav-link ">
											<span class="title">View All Categories</span>
										</a>
									</li>
								</ul>
                            </li>
                            <li  class="nav-item ">
								<a href="#" class="nav-link nav-toggle">
									<i class="fa fa-folder "></i>
									<span class="title">Projects</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item" >
                                    <a href="{{ url('admin/projects/create') }}"  class="nav-link ">
											<span class="title">Add New</span>
										</a>
									</li>
									<li class="nav-item">
                                    <a href="{{ url('admin/projects') }}" class="nav-link ">
											<span class="title">View All Projects</span>
										</a>
									</li>
								</ul>
							</li>
							<li  class="nav-item ">
								<a href="#" class="nav-link nav-toggle">
									<i class="fa fa-users"></i>
									<span class="title">Partners</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item" >
                                    	<a href="{{ url('admin/partners/create') }}"  class="nav-link ">
											<span class="title">Add New</span>
										</a>
									</li>
									<li class="nav-item">
                                    	<a href="{{ url('admin/partners') }}" class="nav-link">
											<span class="title">View All Partners</span>
										</a>
									</li>
								</ul>
							</li>
							<li  class="nav-item ">
								<a href="#" class="nav-link nav-toggle">
									<i class="fa fa-newspaper-o "></i>
									<span class="title">Blogs</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item" >
                                    <a href="{{ url('admin/blogs/create') }}"  class="nav-link ">
											<span class="title">Add New</span>
										</a>
									</li>
									<li class="nav-item">
                                    <a href="{{ url('admin/blogs') }}" class="nav-link ">
											<span class="title">View All Blogs</span>
										</a>
									</li>
								</ul>
							</li>

							<li class="nav-item">
                                <a href="{{ url('admin/subscribers') }}" class="nav-link ">
                                    <i class="fa fa-arrow-right"></i>
										<span class="title">About Layouts</span>
									</a>
								</li>

							<li  class="nav-item ">
								<a href="{{ url('admin/settings') }}" class="nav-link nav-toggle">
									<i class="fa fa-gears"></i>
									<span class="title">Web Settings</span>
								</a>
							</li>
						</ul>
					</div>
                </div>
			</div>
			@if (session('success'))
				<div class="col-sm-12">
					<div class="alert  alert-success alert-dismissible fade show" role="alert">
						{{ session('success') }}
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
					</div>
				</div>
			@endif
            <!-- end sidebar menu -->



