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

					<div class="row">
						<div class="col-sm-12">
                        <form method="post" action="{{ url('websolla-db/'.$itemsnames.'/'.$items->id) }}"  enctype="multipart/form-data" class="card-box">
                            <input name="_method" type="hidden" value="PUT">
                           {!! csrf_field() !!}
								<div class="card-head">
									<header>Edit {!! Helper::tr($itemname) !!}  </header>
									<button id="panel-button"
										class="mdl-button mdl-js-button mdl-button--icon pull-right"
										data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>
								</div>
								<div class="card-body row">

									<div class="col-lg-4 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input type="text" name="mobile" class="mdl-textfield__input"
												id="txtFirstName" value="{{$items->mobile}}">
											<label class="mdl-textfield__label"> Mobile </label>
										</div>
									</div>
									<div class="col-lg-4 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input type="text" name="phone" class="mdl-textfield__input"
												id="txtFirstName" value="{{$items->phone}}">
											<label class="mdl-textfield__label"> Phone </label>
										</div>
									</div>
									<div class="col-lg-4 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input type="email" name="email" class="mdl-textfield__input"
												id="txtFirstName" value="{{$items->email}}">
											<label class="mdl-textfield__label"> E-mail </label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
                                        <label class="mdl-textfield__label"> Address In English </label>
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<textarea name="address[en]" class="mdl-textfield__input"
												id="txtFirstName">{{ $items->address['en'] }}</textarea>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
                                        <label class="mdl-textfield__label"> Address In Arabic </label>
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<textarea name="address[ar]" class="mdl-textfield__input"
												id="txtFirstName">{{ $items->address['ar'] }}</textarea>
										</div>
									</div>
									
								
									<div class="col-lg-12 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input type="file"  name="head" class="mdl-textfield__input"
												id="txtFirstName">
												<img src="{{ Helper::getImg($items->head) }}" width="200px">
											<label class=""> Head Image ( Home Page ) </label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input type="text" value="{{$items->facebook}}" name="facebook" class="mdl-textfield__input"
												id="txtFirstName">
											<label class="mdl-textfield__label"> Facebook </label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input type="text" value="{{$items->twitter}}" name="twitter" class="mdl-textfield__input"
												id="txtFirstName">
											<label class="mdl-textfield__label"> Twitter </label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input type="text" value="{{$items->youtube}}" name="youtube" class="mdl-textfield__input"
												id="txtFirstName">
											<label class="mdl-textfield__label"> Youtube </label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input type="text" value="{{$items->instagram}}" name="instagram" class="mdl-textfield__input"
												id="txtFirstName">
											<label class="mdl-textfield__label"> Instagram </label>
										</div>
									</div>

									<div class="col-lg-12 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<textarea name="tags" class="mdl-textfield__input"
												id="txtFirstName">{{ $items->tags }}</textarea>
											<label class="mdl-textfield__label"> Meta Tags </label>
										</div>
									</div>
									<div class="col-lg-12 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<textarea name="description" class="mdl-textfield__input"
												id="txtFirstName">{!! $items->description !!}</textarea>
											<label class="mdl-textfield__label"> Meta Descritpion </label>
										</div>
									</div>


									<div class="col-lg-12 p-t-20 text-center">
										<button type="submit"
											class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->
		</div>
		<!-- end page container -->
@endsection
