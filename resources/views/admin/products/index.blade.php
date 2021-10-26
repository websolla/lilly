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
                                href="{{ url('admin') }}">{!! Helper::tr('home') !!}</a>&nbsp;<i class="fa fa-angle-right"></i>
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
									<div class="row p-b-20">
										<div class="col-md-6 col-sm-6 col-6">
											<div class="btn-group">
                                            <a href="{{ url('websolla-db/'.$itemsnames.'/create') }}" id="addRow" class="btn btn-info">
													Add {!! Helper::tr($itemname) !!} <i class="fa fa-plus"></i>
												</a>
											</div>
										</div>

									</div>
									<div class="table-scrollable">
										<table class="table table-hover table-checkable order-column full-width"
											id="example4">
											<thead>
												<tr>
													<th class="center"></th>
													<th class="center"> Image </th>
													<th class="center"> Category </th>
													<th class="center"> Title </th>
													<th class="center"> More Details </th>
													<th class="center"> Delete </th>
												</tr>
											</thead>
											<tbody>
												
													@forelse($items as $item)
													
													<tr class="odd gradeX">
														<td></td>
														<td class="user-circle-img center">
															<img width="80" src="{{ Helper::getImg($item->img) }}" alt="img">
														</td>
														
													<td class="center">{{ $item->category->title['en'] }}</td>
													<td class="center">{{ $item->title['en'] }}</td>
														<td class="center"><a href="{{ url('websolla-db/'.$itemsnames.'/'. $item->id .'/edit') }}"><span class="label label-sm label-success">Edit </span></a></td>
														<td class="center">
															<form method="post" action="{{ url('websolla-db/'.$itemsnames.'/'.$item->id) }}">
																<input name="_method" type="hidden" value="DELETE">
																{!! csrf_field() !!}
																<button @if($item->id == 1) disabled @endif value="DELETE" type="submit" class="btn btn-tbl-delete btn-xs">
																	<i class="fa fa-trash-o "></i>
																</button>
															</form>
														</td>
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
