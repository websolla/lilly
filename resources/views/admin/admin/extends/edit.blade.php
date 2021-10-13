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
								<div class="tab-content">

									@foreach(LaravelLocalization::getSupportedLocales() as $key => $language)

									<div class="tab-pane tab-language" id="tab-{{ $key }}">
										<div class="row">
											<div class="col-md-12 col-sm-12">
												<div class="card-head">
													<header>{{ $language['name'] }}</header>
												</div>
												<div class="card-body " id="bar-parent1">
													<form method="post" action="{{ url('admin/'.$itemsnames.'/'.$items->id) }}"  enctype="multipart/form-data">
														<input name="_method" type="hidden" value="PUT">
														@csrf
														<div class="row">
															<div class="col-lg-6 p-t-20">
																<label>Description {{ $language['name'] }}</label>
																<div
																class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
																<textarea name="text[{{$key}}]" class="mdl-textfield__input ckeditor">
																	{{ $items->text[$key] }}
																</textarea>
															</div>
														</div>
														<div class="col-lg-6 p-t-20">
															<label >Title {{ $language['name'] }}</label>

															<div
																class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
																<input  type="text" name="title[{{$key}}]" class="mdl-textfield__input" value="{{ $items->title[$key] }}"  id="txtFirstName">
															</div>
														</div>
														</div>
												</div>
											</div>
										</div>
									</div>

									@endforeach
									<div class="row">
                                        <div class="col-md-12  p-t-20" style="margin: 0 auto">
											<div
												class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
												<select class="form-control" name="type">
                                                    <option @if($items->type == 1) selected @endif value="1">Tap</option>
                                                    <option @if($items->type == 2) selected @endif value="2">Pull</option>
                                                </select>
												<label >Layout Type</label>
											</div>
										</div>
									<button type="submit" class="btn btn-primary">Submit</button>
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
