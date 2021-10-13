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
                                        <div class="row">

										<div class="col-lg-6 p-t-20">
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                                <input type="text" value="{{ $items->title['en'] }}" name="title[en]" class="mdl-textfield__input" >
                                                <label >Certificate Title English</label>
                                            </div>
									    </div>
										<div class="col-lg-6 p-t-20">
                                            <div
                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                                <input type="text" value="{{ $items->title['ar'] }}" name="title[ar]" class="mdl-textfield__input" >
                                                <label >Certificate Title Arabic</label>
                                            </div>
									    </div>
										<div class="col-lg-12 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<input type="file" name="img" class="mdl-textfield__input" >
                                            <label >Partner Image</label>
                                            <input name="_method" type="hidden" value="PUT">
                                            <img src="{{ Helper::getImg($items->img) }}" width="100">
										</div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
								</div>
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
