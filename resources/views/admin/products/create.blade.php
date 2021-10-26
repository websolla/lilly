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
							<div class="profile-tab-box">
								<div class="p-l-20">
									<p style="color:red"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i> Please Choose Language You Need From Here </p>
									<ul class="nav ">
										@foreach(LaravelLocalization::getSupportedLocales() as $key => $language)
											<li class="nav-item tab-all p-l-20"><a id="tab-head" class="nav-link" href="#tab-{{ $key }}"
												data-toggle="tab">{{ $language['name'] }}</a></li>
										@endforeach
									</ul>
								</div>
							</div>
							<div class="white-box">
								<!-- Tab panes -->
							<form id="form" role="form" method="post" action="{{ url('websolla-db/'.$itemsnames) }}"  enctype="multipart/form-data">
								<div class="tab-content">

									@foreach(LaravelLocalization::getSupportedLocales() as $key => $language)
									<div class="tab-pane tab-language" id="tab-{{ $key }}">
										<div class="row">
											<div class="col-md-12 col-sm-12">
												<div class="card-head">
													<header>{{ $language['name'] }}</header>
												</div>
												<div class="card-body " id="bar-parent1">
													
														{!! csrf_field() !!}
															<div class="row">
															<div class="col-lg-12 p-t-20">
																<label >Title <span style="color:red">{{ $language['name'] }}</span> </label>
																<div
																	class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
																	<input required type="text" name="title[{{$key}}]" class="mdl-textfield__input"  id="txtFirstName">
																</div>
															</div>
															<div class="col-lg-12 p-t-20">
																<label>Short Description used also (SEO) <span style="color:red">{{ $language['name']  }}</span>  </label>
																<div
																	class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
																	<textarea required name="text[{{$key}}]" class="mdl-textfield__input "></textarea>
																</div>
															</div>
															<div class="col-lg-12 p-t-20">
																<label>Description <span style="color:red">{{ $language['name']  }}</span>  </label>
																<div
																	class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
																	<textarea required name="description[{{$key}}]" class="mdl-textfield__input ckeditor"></textarea>
																</div>
															</div>

														</div>
												</div>
											</div>
										</div>
									</div>
									@endforeach
									<div class="row">
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-6">
													<label>Item Price</label>
													<input type="number" class="form-control" name="price" placeholder="Item Price" required value="{{ old('price') }}">
												</div>
												<div class="col-md-6">
													<lable>If Item Had Old Price Ex: <del>123</del></lable>
													<input type="number" class="form-control" name="oldprice" placeholder="Item Old Price" value="{{ old('oldprice') }}">
												</div>
											</div>
										</div>
										<div class="col-md-3">
											<label>Choose The Category</label>
											<select name="cat" class="form-control">
												@foreach($category as $cat)
													<option value="{{ $cat->id }}">{{ $cat->title['en'] }}</option>
												@endforeach
											<select>
										</div>
										<div class="col-md-3">
											<label>Choose The Collection</label>
											<select name="collection" class="form-control">
												<option value="" selected>Not Set</option>
												@foreach($collections as $collection)
													<option value="{{ $collection->id }}">{{ $collection->title['en'] }}</option>
												@endforeach
											<select>
										</div>
										<div class="col-md-3">
											<label>Choose The Statues</label>
											<select name="statues" class="form-control">
												<option selected value="1">Show</option>
												<option value="0">Hide</option>
											<select>
										</div>
										<div class="col-md-3">
											<label>Stock Qty</label>
											<input type="number" class="form-control" name="qty" placeholder="How Many Item You Have?">
										</div>
										<div class=" col-md-12 p-t-20">
											<a  class="more"><span class="fa fa-plus"></span> More</a>
											<div class="row" id="prod">
												<div class="col-md-3">
													<label>Sizes</label>
													<input type="text" name="size[]" placeholder="put the size here!" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-md-12  p-t-20" style="margin: 0 auto">
											<div
												class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
												<input type="file" name="img" class="mdl-textfield__input" >
												<label >{{Helper::tr($itemname)}} Main Image</label>
											</div>
										</div>

										<div class="col-md-12"><a class="more_img"><span class="fa fa-plus"></span> More Images</a><div class="row images"></div></div>
										
										<div class="col-md-12 text-center">
											<button  type="submit" class="btn btn-primary">Submit</button>
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
