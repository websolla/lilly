@extends('admin.layouts.layouts')
@section('content')
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Edit {!! Helper::tr($itemname) !!}</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                href="{{ url('admin') }}">{!! Helper::tr('home') !!}</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>

								<li class="active">Edit {!! Helper::tr($itemname) !!}</li>
							</ol>
						</div>
                    </div>
                    @include('admin.error')
					<!-- BEGIN PROFILE CONTENT -->
					<div class="profile-content">
						<div class="row">
							
							<div class="white-box">
								<!-- Tab panes -->
								<div class="tab-content">

								
									 
									
									<form method="post" action="{{ url('admin/'.$itemsnames.'/'.$items->id) }}"  enctype="multipart/form-data">
										@csrf
										<input name="_method" type="hidden" value="PUT">
										<img src="{{ Helper::getImg($items->img) }}" width="100">
										<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<input type="file" name="img" class="mdl-textfield__input" >
											<label >Partner Image</label>

										</div>
									</div>
									<button type="submit" class="btn btn-primary">Submit</button>
								</form>
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
