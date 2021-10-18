@extends('admin.layouts.layouts')
@section('content')
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Add {!! Helper::tr($itemname) !!}</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                href="{{ url('admin') }}">{!! Helper::tr('home') !!}</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active"> New {!! Helper::tr($itemname) !!}</li>
							</ol>
						</div>
                    </div>
                   @include('admin.error')
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Add {!! Helper::tr($itemname) !!}</header>
								</div>
                            <form method="POST" action="{{ url('admin/'.$itemsnames) }}" class="card-body row"  enctype="multipart/form-data">
                                @csrf
								
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input name="key" class="mdl-textfield__input"  id="txtFirstName">
											<label class="mdl-textfield__label">Word</label>
										</div>
									</div>
								
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input name="type_translate[en]" class="mdl-textfield__input"  id="txtFirstName">
											<label class="mdl-textfield__label">Translate English</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input name="type_translate[ar]" class="mdl-textfield__input"  id="txtFirstName">
											<label class="mdl-textfield__label">Translate Arabic</label>
										</div>
									</div>
									
									
									<div class="col-lg-12 p-t-20 text-center">
										<button type="submit"
											class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Submit</button>
										<button type="button"
											class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Cancel</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->
			<!-- start chat sidebar -->
			<div class="chat-sidebar-container" data-close-on-body-click="false">
				<div class="chat-sidebar">
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-toggle="tab">Theme
							</a>
						</li>
						<li class="nav-item">
							<a href="#quick_sidebar_tab_2" class="nav-link tab-icon" data-toggle="tab"> Chat
							</a>
						</li>
						<li class="nav-item">
							<a href="#quick_sidebar_tab_3" class="nav-link tab-icon" data-toggle="tab"> Settings
							</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane chat-sidebar-settings in show active animated shake" role="tabpanel"
							id="quick_sidebar_tab_1">
							<div class="slimscroll-style">
								<div class="theme-light-dark">
									<h6>Sidebar Theme</h6>
									<button type="button" data-theme="white"
										class="btn lightColor btn-outline btn-circle m-b-10 theme-button">Light
										Sidebar</button>
									<button type="button" data-theme="dark"
										class="btn dark btn-outline btn-circle m-b-10 theme-button">Dark
										Sidebar</button>
								</div>
								<div class="theme-light-dark">
									<h6>Sidebar Color</h6>
									<ul class="list-unstyled">
										<li class="complete">
											<div class="theme-color sidebar-theme">
												<a href="#" data-theme="white"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="dark"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="blue"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="indigo"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="cyan"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="green"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="red"><span class="head"></span><span
														class="cont"></span></a>
											</div>
										</li>
									</ul>
									<h6>Header Brand color</h6>
									<ul class="list-unstyled">
										<li class="theme-option">
											<div class="theme-color logo-theme">
												<a href="#" data-theme="logo-white"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="logo-dark"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="logo-blue"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="logo-indigo"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="logo-cyan"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="logo-green"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="logo-red"><span class="head"></span><span
														class="cont"></span></a>
											</div>
										</li>
									</ul>
									<h6>Header color</h6>
									<ul class="list-unstyled">
										<li class="theme-option">
											<div class="theme-color header-theme">
												<a href="#" data-theme="header-white"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="header-dark"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="header-blue"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="header-indigo"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="header-cyan"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="header-green"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="header-red"><span class="head"></span><span
														class="cont"></span></a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- Start Doctor Chat -->
						<div class="tab-pane chat-sidebar-chat animated slideInRight" id="quick_sidebar_tab_2">
							<div class="chat-sidebar-list">
								<div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd"
									data-wrapper-class="chat-sidebar-list">
									<div class="chat-header">
										<h5 class="list-heading">Online</h5>
									</div>
									<ul class="media-list list-items">
										<li class="media"><img class="media-object" src="assets/img/user/user3.jpg"
												width="35" height="35" alt="...">
											<i class="online dot"></i>
											<div class="media-body">
												<h5 class="media-heading">John Deo</h5>
												<div class="media-heading-sub">Spine Surgeon</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-success">5</span>
											</div> <img class="media-object" src="assets/img/user/user1.jpg" width="35"
												height="35" alt="...">
											<i class="busy dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Rajesh</h5>
												<div class="media-heading-sub">Director</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="assets/img/user/user5.jpg"
												width="35" height="35" alt="...">
											<i class="away dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Jacob Ryan</h5>
												<div class="media-heading-sub">Ortho Surgeon</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-danger">8</span>
											</div> <img class="media-object" src="assets/img/user/user4.jpg" width="35"
												height="35" alt="...">
											<i class="online dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Kehn Anderson</h5>
												<div class="media-heading-sub">CEO</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="assets/img/user/user2.jpg"
												width="35" height="35" alt="...">
											<i class="busy dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Sarah Smith</h5>
												<div class="media-heading-sub">Anaesthetics</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="assets/img/user/user7.jpg"
												width="35" height="35" alt="...">
											<i class="online dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Vlad Cardella</h5>
												<div class="media-heading-sub">Cardiologist</div>
											</div>
										</li>
									</ul>
									<div class="chat-header">
										<h5 class="list-heading">Offline</h5>
									</div>
									<ul class="media-list list-items">
										<li class="media">
											<div class="media-status">
												<span class="badge badge-warning">4</span>
											</div> <img class="media-object" src="assets/img/user/user6.jpg" width="35"
												height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Jennifer Maklen</h5>
												<div class="media-heading-sub">Nurse</div>
												<div class="media-heading-small">Last seen 01:20 AM</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="assets/img/user/user8.jpg"
												width="35" height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Lina Smith</h5>
												<div class="media-heading-sub">Ortho Surgeon</div>
												<div class="media-heading-small">Last seen 11:14 PM</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-success">9</span>
											</div> <img class="media-object" src="assets/img/user/user9.jpg" width="35"
												height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Jeff Adam</h5>
												<div class="media-heading-sub">Compounder</div>
												<div class="media-heading-small">Last seen 3:31 PM</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="assets/img/user/user10.jpg"
												width="35" height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Anjelina Cardella</h5>
												<div class="media-heading-sub">Physiotherapist</div>
												<div class="media-heading-small">Last seen 7:45 PM</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End Doctor Chat -->

					</div>
				</div>
			</div>
			<!-- end chat sidebar -->
		</div>
		<!-- end page container -->
@endsection
