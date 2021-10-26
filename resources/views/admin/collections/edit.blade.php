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
                                href="{{ url('websolla-db') }}">{!! Helper::tr('home') !!}</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>

								<li class="active">Edit {!! Helper::tr($itemname) !!}</li>
							</ol>
						</div>
                    </div>
                    @include('admin.error')
					<!-- BEGIN PROFILE CONTENT -->
					<div class="profile-content">
						<div class="row">

                            <div class="col-md-12">
                                <form method="post" action="{{ url('websolla-db/'.$itemsnames.'/'.$items->id) }}"  enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input name="_method" type="hidden" value="PUT">
                                    <div class="white-box">
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="row">
                                                <div class="col-md-12  p-t-20" style="margin: 0 auto">
                                                    <div
                                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                                        <input type="text" name="title[ar]" value="{{ $items->title['ar'] }}" class="mdl-textfield__input" >
                                                        <label >Depart Name Arabic</label>

                                                    </div>
                                                </div>
                                                <div class="col-md-12  p-t-20" style="margin: 0 auto">
                                                    <div
                                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                                        <input type="text" name="title[en]" value="{{ $items->title['en'] }}" class="mdl-textfield__input" >
                                                        <label >Collection Name English</label>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-12 text-center">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
