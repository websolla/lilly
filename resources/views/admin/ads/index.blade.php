@extends('admin.layouts.layouts')
@section('content')
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
                            <div class="page-title">All {!! Helper::tr($itemsnames) !!}</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                href="{{ url('websolla-db') }}">{!! Helper::tr('home') !!}</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">All {!! Helper::tr($itemsnames) !!}</li>
							</ol>
						</div>
                    </div>
					@include('admin.error')
					
					<div class="row">
						<div class="col-md-12">
							<div class="card card-box">
								<div class="card-head">
									<header>All {!! Helper::tr($itemsnames) !!}</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body ">
									<div class="table-scrollable">
										<table class="table table-hover table-checkable order-column full-width"
											id="example4">
											<thead>
												<tr>
													<th class="center"></th>
													<th class="center"> Image </th>
													<th class="center"> Title </th>
												
													<th class="center"> More Details </th>
												</tr>
											</thead>
											<tbody>
												
													@forelse($items as $item)
													
													<tr class="odd gradeX">
														<td></td>
														<td class="user-circle-img center">
															<img src="{{ Helper::getImg($item->img) }}" width="80">
														</td>
														<td class="user-circle-img center">
															{{ $item->title['en'] }} 
														</td>
														
													
														<td class="center"><a href="{{ url('websolla-db/'.$itemsnames.'/'. $item->id .'/edit') }}"><span class="label label-sm label-success">Edit </span></a></td>
														
													</tr>
													@empty
													<tr>
													<td colspan="8"> {!! Helper::tr('no table')!!} </td>
													</tr>
													@endforelse
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->
			
		</div>
		<!-- end page container -->
@endsection
