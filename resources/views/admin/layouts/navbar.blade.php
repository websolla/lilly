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
						<span class="logo-default">Websolla</span> </a>
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
										<a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
											document.getElementById('logout-form').submit();">
                                            <i class="material-icons">input</i>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                              {!! csrf_field() !!}
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
                                    	<a href="{{ url('websolla-db/sliders/create') }}"  class="nav-link ">
											<span class="title">Add New</span>
										</a>
									</li>
									<li class="nav-item">
                                    	<a href="{{ url('websolla-db/sliders') }}" class="nav-link ">
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
                                    	<a href="{{ url('websolla-db/pages/create') }}"  class="nav-link ">
											<span class="title">Add New</span>
										</a>
									</li>
									<li class="nav-item">
                                    	<a href="{{ url('websolla-db/pages') }}" class="nav-link ">
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
                                    	<a href="{{ url('websolla-db/services/create') }}"  class="nav-link ">
											<span class="title">Add New</span>
										</a>
									</li>
									<li class="nav-item">
                                    	<a href="{{ url('websolla-db/services') }}" class="nav-link ">
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
                                    	<a href="{{ url('websolla-db/categories/create') }}"  class="nav-link ">
											<span class="title">Add New</span>
										</a>
									</li>
									<li class="nav-item">
                                    	<a href="{{ url('websolla-db/categories') }}" class="nav-link ">
											<span class="title">View All Categories</span>
										</a>
									</li>
								</ul>
							</li>
							<li  class="nav-item ">
								<a href="{{ url('websolla-db/ads') }}" class="nav-link nav-toggle">
									<i class="fa fa-globe"></i>
									<span class="title">Ads</span>
									<span class="arrow"></span>
								</a>
                            </li>
							<li  class="nav-item ">
								<a href="#" class="nav-link nav-toggle">
									<i class="fa fa-globe"></i>
									<span class="title">Delivey Area</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item" >
                                    	<a href="{{ url('websolla-db/delivery/create') }}"  class="nav-link ">
											<span class="title">Add New</span>
										</a>
									</li>
									<li class="nav-item">
                                    	<a href="{{ url('websolla-db/delivery') }}" class="nav-link ">
											<span class="title">View All</span>
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
                                    <a href="{{ url('websolla-db/projects/create') }}"  class="nav-link ">
											<span class="title">Add New</span>
										</a>
									</li>
									<li class="nav-item">
                                    <a href="{{ url('websolla-db/projects') }}" class="nav-link ">
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
                                    	<a href="{{ url('websolla-db/partners/create') }}"  class="nav-link ">
											<span class="title">Add New</span>
										</a>
									</li>
									<li class="nav-item">
                                    	<a href="{{ url('websolla-db/partners') }}" class="nav-link">
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
                                    <a href="{{ url('websolla-db/blogs/create') }}"  class="nav-link ">
											<span class="title">Add New</span>
										</a>
									</li>
									<li class="nav-item">
                                    <a href="{{ url('websolla-db/blogs') }}" class="nav-link ">
											<span class="title">View All Blogs</span>
										</a>
									</li>
								</ul>
							</li>

							<li class="nav-item">
                                <a href="{{ url('websolla-db/subscribers') }}" class="nav-link ">
                                    <i class="fa fa-arrow-right"></i>
										<span class="title">About Layouts</span>
									</a>
								</li>

							<li  class="nav-item ">
								<a href="{{ url('websolla-db/settings') }}" class="nav-link nav-toggle">
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



