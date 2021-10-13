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
								<div class="tab-content">
									@foreach(LaravelLocalization::getSupportedLocales() as $key => $language)
									<div class="tab-pane tab-language" id="tab-{{ $key }}">
										<div class="row">
											<div class="col-md-12 col-sm-12">
												<div class="card-head">
													<header>{{ $language['name'] }}</header>
												</div>
												<div class="card-body " id="bar-parent1">
													<form method="post" action="{{ url('admin/'.$itemsnames) }}"  enctype="multipart/form-data">
														@csrf
															<div class="row">
															<div class="col-lg-12 p-t-20">
																<label >Title <span style="color:red">{{ $language['name'] }}</span> </label>
																<div
																	class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
																	<input type="text" name="title[{{$key}}]" class="mdl-textfield__input"  id="txtFirstName">
																</div>
															</div>
															<div class="col-lg-12 p-t-20">
																<label>Description <span style="color:red">{{ $language['name']  }}</span>  </label>
																<div
																class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
																<textarea name="text[{{$key}}]" class="mdl-textfield__input ckeditor"></textarea>
															</div>
														</div>

														</div>
												</div>
											</div>
										</div>
									</div>
									@endforeach
									<div class="row">
										<div class="col-md-6  p-t-20" style="margin: 0 auto">
											<div
												class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
												<select class="form-control" name="country">
                                                    @foreach( $country as $countries )
                                                        <option value="{{ $countries->id }}">{{ $countries->title['en'] }}</option>
                                                    @endforeach
                                                </select>
												<label > Country</label>
											</div>
                                        </div>
										<div class="col-md-6  p-t-20" style="margin: 0 auto">
											<div
												class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
												<select class="form-control" name="category">
                                                    @foreach( $category as $categories )
                                                    <option value="{{ $categories->id }}">{{ $categories->title['en'] }}</option>
                                                @endforeach
                                                </select>
												<label>Category</label>
											</div>
                                        </div>
										<div class="col-md-12  p-t-20" style="margin: 0 auto">
											<div
												class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
												<input type="file" accept="image/*" name="img" class="mdl-textfield__input" >
												<label >Porduct Images</label>
											</div>
                                        </div>
                                        <div class="col-md-12">
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
