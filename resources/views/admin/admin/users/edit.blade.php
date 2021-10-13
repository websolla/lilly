@extends('admin.layouts.layouts')
@section('content')
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">{{ Helper::tr($itemname) }} Profile</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                href="{{ url('admin') }}">{{ Helper::tr('home') }}</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>

								<li class="active">{{ Helper::tr($itemname) }} Profile</li>
							</ol>
						</div>
                    </div>
                    @include('admin.error')
					<div class="row">
						<div class="col-md-12">
							<!-- BEGIN PROFILE SIDEBAR -->
							<div class="profile-sidebar">
								<div class="card card-topline-aqua">
									<div class="card-body no-padding height-9">
										<div class="row">
											<div class="profile-userpic">
												<img src="{{asset('mainAdmin/assets/img/user.png')}}" class="img-responsive" alt=""> </div>
										</div>
										<div class="profile-usertitle">
											<div class="profile-usertitle-name"> {{$items->name}} </div>
											<div class="profile-usertitle-job"> {{ Helper::tr($itemname) }} </div>
										</div>

										<!-- END SIDEBAR USER TITLE -->
										<!-- SIDEBAR BUTTONS -->
										<div class="profile-userbuttons">
                                            <form method="post" action="{{ url('admin/'.$itemsnames.'/'.$items->id) }}">
                                                <input name="_method" type="hidden" value="DELETE">
                                                    @csrf
                                                <button value="DELETE" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-pink">
                                                    <i class="fa fa-trash-o "></i>
                                                </button>
                                            </form>
                                        </div>
										<!-- END SIDEBAR BUTTONS -->
									</div>
								</div>
								<div class="card">
									<div class="card-head card-topline-aqua">
                                        <header>More</header>
                                        @if($diases == null)
                                            <a style="float: right" class="btn btn-primary" data-toggle="modal" data-target=".exampleModal"><span class="fa fa-plus"></span></a>
                                            @else
                                            <a style="float: right" class="btn btn-primary" data-toggle="modal" data-target=".exampleModal"><span class="fa fa-pencil"></span></a>
                                        @endif
                                    </div>
                                    @if($diases != null)
									<div class="card-body no-padding height-9">
										<ul class="list-group list-group-unbordered">
                                            @if($diases->gender != 1) {{--  Check Gender IF Man Hide Period Field --}}
											<li class="list-group-item">
												<b>Period </b>
                                                <div class="profile-desc-item pull-right">{{ $diases->period }}</div>
                                            </li>
                                            @endif
											<li class="list-group-item">
												<b>Age</b>
                                                <div class="profile-desc-item pull-right">{{ $diases->age }} Years</div>
                                                <br>
                                                <b>Gender</b>
                                                <div class="profile-desc-item pull-right"> {{ Helper::CheckGender($diases->gender) }}</div>

											</li>
											<li class="list-group-item">
                                                    <b>Weight </b>
                                                <div class="profile-desc-item pull-right">{{ $diases->weight }} Kg</div>
                                                <br>
												    <b>Height </b>
                                                <div class="profile-desc-item pull-right">{{ $diases->height }} Cm</div>
											</li>
                                            <li class="list-group-item">
                                                <b>Move Average</b>
                                            <div class="profile-desc-item pull-right">{{ Helper::move_avrg( $diases->move_avrg ) }} </div>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Sport Time</b>
                                                <div class="profile-desc-item pull-right">{{ Helper::sport_target( $diases->sport_time, null ) }} </div>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Target</b>
                                                <div class="profile-desc-item pull-right">{{ Helper::sport_target( null, $diases->target ) }} </div>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Diabetes</b>
                                                <div class="profile-desc-item pull-right">{{ Helper::Yes_No($diases->sugar)  }} </div>
                                                    <br>
                                                <b>Pressure </b>
                                                <div class="profile-desc-item pull-right">{{ Helper::Yes_No($diases->pressure) }} </div>
                                                    <br>
                                                <b>Thyroid </b>
                                                <div class="profile-desc-item pull-right">{{ Helper::Yes_No($diases->thyroid) }} </div>
                                                    <br>
                                                <b>Anemia </b>
                                                <div class="profile-desc-item pull-right">{{ Helper::Yes_No($diases->anmya)  }} </div>
                                                    <br>
                                                <b>Cholesterol </b>
                                                <div class="profile-desc-item pull-right">{{ Helper::Yes_No($diases->colistrol) }} </div>
                                                    <br>
                                                <b>Iron deficiency </b>
                                                <div class="profile-desc-item pull-right">{{Helper::Yes_No($diases['7aded'])  }} </div>
                                                    <br>
                                                <b>Vitamin D </b>
                                                <div class="profile-desc-item pull-right">{{ Helper::Yes_No($diases['vitamin_d'] )}} </div>
                                            </li>
										</ul>
										<div class="row list-separated profile-stat">
											<div class="col-md-4 col-sm-4 col-6">
												<div class="uppercase profile-stat-title"> 37 </div>
												<div class="uppercase profile-stat-text"> Projects </div>
											</div>
											<div class="col-md-4 col-sm-4 col-6">
												<div class="uppercase profile-stat-title"> 51 </div>
												<div class="uppercase profile-stat-text"> Tasks </div>
											</div>
											<div class="col-md-4 col-sm-4 col-6">
												<div class="uppercase profile-stat-title"> 61 </div>
												<div class="uppercase profile-stat-text"> Uploads </div>
											</div>
										</div>
                                    </div>
                                    @endif
								</div>


							</div>
							<!-- END BEGIN PROFILE SIDEBAR -->
							<!-- BEGIN PROFILE CONTENT -->
							<div class="profile-content">
								<div class="row">
									<div class="profile-tab-box">
										<div class="p-l-20">
											<ul class="nav ">

												<li class="nav-item tab-all p-l-20"><a class="nav-link active show" href="#tab3"
														data-toggle="tab">Settings</a></li>
											</ul>
										</div>
									</div>
									<div class="white-box">
										<!-- Tab panes -->
										<div class="tab-content">

											<div class="tab-pane active" id="tab3">
												<div class="row">
													<div class="col-md-12 col-sm-12">
														<div class="card-head">
															<header>Edit</header>
														</div>
														<div class="card-body " id="bar-parent1">
															<form method="post" action="{{ url('admin/'.$itemsnames.'/'.$items->id) }}"  enctype="multipart/form-data">
                                                                <input name="_method" type="hidden" value="PUT">
                                                                @csrf
																<div class="form-group">
																	<label for="simpleFormEmail"> Name</label>
																	<input type="name" name="name" value="{{$items->name}}" class="form-control"
																		id="simpleFormEmail"
																		placeholder="Enter user name">
                                                                </div>
                                                                <div class="form-group">
																	<label for="simpleFormEmail">Email</label>
																	<input type="email" name="email" value="{{$items->email}}" class="form-control"
																		id="simpleFormEmail"
																		placeholder="Email Address">
                                                                </div>
                                                                <div class="form-group">
																	<label for="simpleFormEmail">Mobile</label>
																	<input type="number" name="mobile" value="{{$items->mobile}}" class="form-control"
																		id="simpleFormEmail"
																		placeholder="Mobile Number">
																</div>
																<div class="form-group">
																	<label for="simpleFormPassword">
																		Password</label>
																	<input type="password" name="password" class="form-control"
																		id="simpleFormPassword"
																		placeholder="Password">
																</div>
																<div class="form-group">
																	<label for="simpleFormPassword"> Password Confirmation</label>
																	<input type="password" name="password_confirmation" class="form-control"
																		id="newpassword" placeholder="Password Confirmation">
																</div>
																<button type="submit"
																	class="btn btn-primary">Submit</button>
															</form>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END PROFILE CONTENT -->
						</div>
					</div>
				</div>
                <!-- end page content -->

                <!-- Modal -->
                <div class="modal fade exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <form method="post" @if($diases == null) action="{{ route('diseases') }}" @else action="{{ route('diseases_edit') }}" @endif enctype="multipart/form-data">
                            {{-- User ID --}}
                            <input type="hidden" value={{$items->id}} name="user_id">
                            @if($diases != null)
                                <input name="_method" type="hidden" value="PUT">
                            @endif
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select name="gender" id="gender" required class="form-control">
                                            <option disabled selected>Select Gender</option>
                                            <option value="1" {{ ! is_null($diases) && $diases->gender == 1 ? 'selected' : ''  }}>{{ Helper::CheckGender(1) }}</option>
                                            <option value="2" {{ ! is_null($diases) && $diases->gender == 2 ? 'selected' : ''  }}>{{ Helper::CheckGender(2) }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 period"  @if(! is_null($diases) && $diases->gender == 1 ) style="display: none" @endif  >
                                    <div class="form-group">
                                        <label>Period</label>
                                        <input type="date" value="{{ $diases->period ?? '' }}"  name="period" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Age</label>
                                        <input type="number" value="{{ $diases->age ?? '' }}" required name="age" placeholder="Your Age"  class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Weight</label>
                                        <input type="number" required name="weight" value="{{ $diases->weight ?? '' }}" placeholder="Your Weight" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Height</label>
                                        <input type="number" required name="height"  value="{{ $diases->height ?? '' }}" placeholder="Your Height" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Move Average</label>
                                        <select name="move_avrg" required class="form-control">

                                            <option value="1"  {{ ! is_null($diases) && $diases->move_avrg == 1 ? 'selected' : ''  }} >Little</option>
                                            <option value="2"  {{ ! is_null($diases) && $diases->move_avrg == 2 ? 'selected' : ''  }}>Average</option>
                                            <option value="3"  {{ ! is_null($diases) && $diases->move_avrg == 3 ? 'selected' : ''  }}>Active</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Sport Time</label>
                                        <select name="sport_time" required class="form-control">
                                            <option value="1" {{ ! is_null($diases) && $diases->sport_time == 1 ? 'selected' : ''  }}>Night</option>
                                            <option value="2" {{ ! is_null($diases) && $diases->sport_time == 2 ? 'selected' : ''  }}>After Noon</option>
                                            <option value="3" {{ ! is_null($diases) && $diases->sport_time == 3 ? 'selected' : ''  }}>Morning</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Target</label>
                                        <select name="target" required class="form-control">
                                            <option value="1" {{ ! is_null($diases) && $diases->target == 1 ? 'selected' : ''  }}>Lose Weight</option>
                                            <option value="2" {{ ! is_null($diases) && $diases->target == 2 ? 'selected' : ''  }}>Weight Stabilization</option>
                                            <option value="3" {{ ! is_null($diases) && $diases->target == 3 ? 'selected' : ''  }}>Increase Weight</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Diabetes</label>
                                        <select name="sugar" required class="form-control">
                                            <option value="1" {{ ! is_null($diases) && $diases->sugar == 1 ? 'selected' : ''  }}>Yes</option>
                                            <option value="2" {{ ! is_null($diases) && $diases->sugar == 2 ? 'selected' : ''  }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Thyroid</label>
                                        <select name="thyroid" required class="form-control">
                                            <option value="1" {{ ! is_null($diases) && $diases->thyroid == 1 ? 'selected' : ''  }}>Yes</option>
                                            <option value="2" {{ ! is_null($diases) && $diases->thyroid == 2 ? 'selected' : ''  }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Pressure</label>
                                        <select name="pressure" required class="form-control">
                                            <option value="1" {{ ! is_null($diases) && $diases->pressure == 1 ? 'selected' : ''  }}>Yes</option>
                                            <option value="2" {{ ! is_null($diases) && $diases->pressure == 2 ? 'selected' : ''  }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Anemia</label>
                                        <select name="anmya" required class="form-control">
                                            <option value="1" {{ ! is_null($diases) && $diases->anmya == 1 ? 'selected' : ''  }}>Yes</option>
                                            <option value="2" {{ ! is_null($diases) && $diases->anmya == 2 ? 'selected' : ''  }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Cholesterol</label>
                                        <select name="colistrol" required class="form-control">
                                            <option value="1" {{ ! is_null($diases) && $diases->colistrol == 1 ? 'selected' : ''  }}>Yes</option>
                                            <option value="2" {{ ! is_null($diases) && $diases->colistrol == 2 ? 'selected' : ''  }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Iron deficiency</label>
                                        <select name='7aded' required class="form-control">
                                            <option value="1" {{ ! is_null($diases) && $diases['7aded'] == 1 ? 'selected' : ''  }}>Yes</option>
                                            <option value="2" {{ ! is_null($diases) && $diases['7aded'] == 2 ? 'selected' : ''  }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Vitamin D</label>
                                        <select name="vitamin_d" required class="form-control">
                                            <option value="1" {{ ! is_null($diases) && $diases->vitamin_d == 1 ? 'selected' : ''  }}>Yes</option>
                                            <option value="2" {{ ! is_null($diases) && $diases->vitamin_d == 2 ? 'selected' : ''  }}>No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </form>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>

			</div>
			<!-- end page container -->
			@endsection
