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
                                href="{{ url('websolla-db') }}">{!! Helper::tr('home') !!}</a>&nbsp;<i class="fa fa-angle-right"></i>
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
                                <form method="post"  action="{{ url('websolla-db/'.$itemsnames) }}"  enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <div class="white-box">
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="row">
                                                <div class="col-md-4  p-t-20">
                                                    <label>Offer <span class="fa fa-dollar"></span></label>
                                                    <select class="form-control" name="offer">
                                                            <option value="1">On</option>
                                                            <option value="0">Off</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4  p-t-20">
                                                    <label >Category Sort (1 - 2 - 3, ...)</label>
                                                    <div
                                                        class=" txt-full-width">
                                                        <input type="number" name="sort" class="form-control" >
                                                    </div>
                                                </div>

                                                <div class="col-md-4  p-t-20">
                                                    <label>Featured <span class="fa fa-star"></span></label>
                                                    <select class="form-control" name="featured">
                                                            <option value="1">Yes !</option>
                                                            <option selected value="0">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6  p-t-20" style="margin: 0 auto">
                                                    <div
                                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                                        <input type="text" name="title[ar]" class="mdl-textfield__input" >
                                                        <label >Category Name Arabic</label>

                                                    </div>
                                                </div>
                                                <div class="col-md-6  p-t-20" style="margin: 0 auto">
                                                    <div
                                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                                        <input type="text"  name="title[en]" class="mdl-textfield__input" >
                                                        <label >Category Name English</label>

                                                    </div>
                                                </div>
                                                <div class="col-md-12  p-t-20" style="margin: 0 auto">
                                                    <label>Choose The Deapartment</label>
                                                    <select class="form-control" name="depart">
                                                        @foreach($departs as $depart)
                                                            <option value="{{ $depart->id }}">{{ $depart->title['en'] }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="col-md-12  p-t-20" style="margin: 0 auto">
                                                    <div
                                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                                        <input type="file" accept="image/*" name="img" class="mdl-textfield__input" >
                                                        <label >Category Image</label>

                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
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
