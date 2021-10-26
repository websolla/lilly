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
								<form method="post" action="{{ url('websolla-db/'.$itemsnames.'/'.$items->id) }}"  enctype="multipart/form-data">

								<div class="tab-content">

									@foreach(LaravelLocalization::getSupportedLocales() as $key => $language)

									<div class="tab-pane tab-language" id="tab-{{ $key }}">
										<div class="row">
											<div class="col-md-12 col-sm-12">
												<div class="card-head">
													<header>{{ $language['name'] }}</header>
												</div>
												<div class="card-body " id="bar-parent1">
														<input name="_method" type="hidden" value="PUT">
														{!! csrf_field() !!}
														<div class="row">
															<div class="col-lg-12 p-t-20">
																<label >Title {{ $language['name'] }}</label>
	
																<div
																	class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
																	<input  type="text" name="title[{{$key}}]" class="mdl-textfield__input" value="{{ $items->title[$key] }}"  id="txtFirstName">
																</div>
															</div>
															<div class="col-lg-12 p-t-20">
																<label>Short Description used also (SEO) <span style="color:red">{{ $language['name']  }}</span>  </label>
																<div
																	class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
																	<textarea required name="text[{{$key}}]" class="mdl-textfield__input ">{{ $items->text[$key] }}</textarea>
																</div>
															</div>
															<div class="col-lg-12 p-t-20">
																<label>Description {{ $language['name'] }}</label>
																<div
																class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
																<textarea name="description[{{$key}}]" class="mdl-textfield__input ckeditor">{{ $items->description[$key] }}</textarea>
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
													<input type="number" value="{{ $items->price }}" class="form-control" name="price" placeholder="Item Price" required >
												</div>
												<div class="col-md-6">
													<lable>If Item Had Old Price Ex: <del>123</del></lable>
													<input value="{{ $items->oldprice }}" type="number" class="form-control" name="oldprice" placeholder="Item Old Price" >
												</div>
											</div>
										</div>
										<div class="col-md-3">
											<label>Choose The Category</label>
											<select name="cat" class="form-control">
												@foreach($category as $cat)
													<option @if($cat->id == $items->cat) selected @endif  value="{{ $cat->id }}">{{ $cat->title['en'] }}</option>
												@endforeach
											<select>
										</div>
										<div class="col-md-3">
											<label>Choose The Collection</label>
											<select name="collection" class="form-control">
												<option value="">Not Set</option>
												@foreach($collections as $collection)
													<option @if($collection->id == $items->collection) selected @endif value="{{ $collection->id }}">{{ $collection->title['en'] }}</option>
												@endforeach
											<select>
										</div>
										<div class="col-md-3">
											<label>Choose The Statues</label>
											<select name="statues" class="form-control">
												<option @if($items->statues == 1) selected @endif value="1">Show</option>
												<option @if($items->statues == 0) selected @endif value="0">Hide</option>
											<select>
										</div>
										<div class="col-md-3">
											<label>Stock Qty</label>
											<input type="number" value="{{ $items->qty }}" class="form-control" name="qty" placeholder="How Many Item You Have?">
										</div>
										<div class=" col-md-12 p-t-20">
											<a  class="more"><span class="fa fa-plus"></span> More</a>
											<div class="row" id="prod">
												@php 
													$sizes = json_decode( $items->size );
												@endphp
												@foreach($sizes as $size)
												<div class="col-md-3">
													<label>Sizes</label>
													<input type="text" name="size[]" value="{{ $size }}" placeholder="put the size here!" class="form-control">
												</div>
												@endforeach
											</div>
										</div>
											
										<div class="col-md-12  p-t-20" style="margin: 0 auto">
											<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<input type="file" name="img" class="mdl-textfield__input" >
											<label >{{ Helper::tr($itemname) }} Image</label>
										</div>

										<img style="width: 100%;height: 183px;object-fit: contain;object-position: 50% 50%;" src="{{ Helper::getImg($items->img) }}">
										<h2 class="text-center">Main Image<h2>

										</div>

										<div class="col-md-12 " style="padding-top: 80px;">
											<div class="col-md-12"><a class="more_img"><span class="fa fa-plus"></span> More Images</a><div class="row images"></div></div>

											<h2 class="text-center">Images Inside Product<h2>
												
											<div class="row">
												@foreach( $imgs  as $img )
													<div class="col-md-2">
														<img src="{{ Helper::getImg($img->imgs) }}" style="width: 100%;height: 183px;object-fit: contain;object-position: 50% 50%;">
														<button type="button" style="margin: 0 auto;display: block" class="btn btn-danger"><a style="color:#fff" href="{{ url('websolla-db/img/'.$img->id) }}" style="text-align: center;display:block;color:red"><span class="fa fa-trash"></span></a></button>
													</div>
												@endforeach
											</div>
										</div>

									
										<div class="col-md-12 text-center p-t-20">

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
