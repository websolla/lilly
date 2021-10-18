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
					<!-- BEGIN PROFILE CONTENT -->
					<div class="profile-content">
						<div class="row">
							<div class="col-md-12">
							<form method="post" action="{{ url('websolla-db/'.$itemsnames) }}">
								{!! csrf_field() !!}
							<div class="white-box">
								<!-- Tab panes -->
								<div class="tab-content">
									<div class="row">
										
										<div class="col-md-6  p-t-20">
											<div
												class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
												<input type="text" name="area[en]" class="mdl-textfield__input" >
												<label >Delivery area In English</label>

											</div>
										</div>
										<div class="col-md-6  p-t-20">
											<div
												class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
												<input type="text" name="area[ar]" class="mdl-textfield__input" >
												<label >Delivery area In Arabic</label>

											</div>
										</div>
										<div class="col-md-12  p-t-20">
											<div
												class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
												<input type="number" name="fee" class="mdl-textfield__input" >
												<label >Delivery Cost</label>

											</div>
										</div>
										
									</div>
									<div class="col-md-12 text-center">
										<button type="submit" class="btn btn-primary">Submit</button>
									</div>
								</form>
								</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END PROFILE CONTENT -->
				</div>
			</div>
			<!-- end page content -->
		</div>
		<!-- end page container -->
@endsection
