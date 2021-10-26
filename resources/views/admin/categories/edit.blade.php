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
                                                <div class="col-md-4  p-t-20">
                                                    <label>Offer <span class="fa fa-dollar"></span></label>
                                                    <select class="form-control" name="offer">
                                                            <option @if($items->offer == 1) selected @endif value="1">On</option>
                                                            <option @if($items->offer == 0) selected @endif value="0">Off</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4  p-t-20">
                                                    <label >Category Sort (1 - 2 - 3, ...)</label>
                                                    <div
                                                        class=" txt-full-width">
                                                        <input value="{{ $items->sort }}" type="number" name="sort" class="form-control" >

                                                    </div>
                                                </div>

                                                <div class="col-md-4  p-t-20">
                                                    <label>Featured <span class="fa fa-star"></span></label>
                                                    <select class="form-control" name="featured">
                                                            <option @if($items->featured == 1) selected @endif value="1">Yes !</option>
                                                            <option @if($items->featured == 0) selected @endif value="0">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6  p-t-20" style="margin: 0 auto">
                                                    <div
                                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                                        <input type="text" name="title[ar]" value="{{ $items->title['ar'] }}" class="mdl-textfield__input" >
                                                        <label >Category Name Arabic</label>

                                                    </div>
                                                </div>
                                                <div class="col-md-6  p-t-20" style="margin: 0 auto">
                                                    <div
                                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                                        <input type="text" name="title[en]" value="{{ $items->title['en'] }}" class="mdl-textfield__input" >
                                                        <label >Category Name English</label>

                                                    </div>
                                                </div>
                                                <div class="col-md-12  p-t-20" style="margin: 0 auto">
                                                    <label>Choose Department</label>
                                                    <select class="form-control" name="depart">
                                                        @foreach($departs as $depart)
                                                            <option @if($depart->id == $items->depart) selected @endif value="{{ $depart->id }}">{{ $depart->title['en'] }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="col-md-12  p-t-20" style="margin: 0 auto">
                                                    <div
                                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                                        <input type="file" name="img" accept="image/*" class="mdl-textfield__input" >
                                                        <img width="80px" src="{{ Helper::getImg($items->img) }}">
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
