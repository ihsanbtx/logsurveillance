@extends('main.headerFooter')
@section('content')
@extends('main.menu')

					<!--begin::Content-->
                    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!-- body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-static page-loading"-->
							<!--begin::Entry-->
							<div class="d-flex flex-column-fluid">
								<!--begin::Container-->
								<div class="container">
									<center>
										<!--begin::Notice-->
										@if($errors->any())
										<div class="alert alert-custom alert-light-danger alert-shadow gutter-b py-3 px-8" role="alert">
											<div class="alert-text text-danger">
											@foreach($errors->all() as $error)
											{{$error}}<br>
											@endforeach
											</div>
											<div class="alert-close">
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true"><i class="ki ki-close icon-xs"></i></span>
												</button>
											</div>
										</div> 
										@endif
										@if(Session('message'))
										<div class="alert alert-custom alert-light-success alert-shadow gutter-b py-3 px-8" role="alert">
											<div class="alert-text text-success">{{session('message')}}</div><br>
											<div class="alert-close">
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true"><i class="ki ki-close icon-xs"></i></span>
												</button>
											</div>
										</div>  
										@endif
									</center>
								
									<!--end::Notice-->
									<!--begin::Card-->
									<div class="card card-custom">
										<div class="card-header flex-wrap py-5">
											<div class="card-title">
												<h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Dashboard</h2>
												<!--begin::Breadcrumb-->
											<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold my-2 p-0">
												<li class="breadcrumb-item text-muted">
													<a href="dashboard" class="text-muted">Dashboard</a>
												</li>
											</ul>
											<!--end::Breadcrumb-->
											</div>
											<div class="card-toolbar">											
												
											</div>
										</div>
										<div class="card-body">
											<!--begin:: Body -->
											<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
												<!--begin::Entry-->
												<div class="d-flex flex-column-fluid">
													<!--begin::Container-->
													<div class="container">
														<!--begin::Dashboard-->
														<!--begin::Row-->
														<div class="row">
															<div class="col-xl-8">
																<div class="card-body">
																	<div id="kt_gmap_1" style="height:300px;"></div>
																</div>
															</div>
															<div class="col-xl-4">
																<!--begin::Stats Widget 26-->
																<div class="card card-custom bg-light-danger card-stretch gutter-b">
																	<!--begin::ody-->
																	<div class="card-body">
																		<span class="svg-icon svg-icon-xl svg-icon-danger">
																			<!--begin::Svg Icon | path:../public/media/svg/icons/Communication/Group.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100px" height="100px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<polygon points="0 0 24 0 24 24 0 24" />
																					<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																					<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																		<span class="card-title font-weight-bolder text-dark-75 font-size-h1 mb-0 mt-6 d-block">{{$targetCount}}</span>
																		<span class="font-weight-bold text-muted font-size-xl">TOTAL TARGET</span>
																	</div>
																	<!--end::Body-->
																</div>
																<!--end::Stats Widget 26-->
															</div>
														</div>
														<!--end::Row-->
														<!--begin::Row-->
														<div class="row">
															<div class="col-xl-6">
																<!--begin::Nav Panel Widget 1-->
																<div class="card card-custom gutter-b card-stretch card-shadowless bg-light">
																	<!--begin::Header-->
																	<div class="card-header border-0 pt-5">
																		<h3 class="card-title align-items-start flex-column">
																			<span class="card-label font-weight-bolder text-dark">Target per Case Agent</span>
																		</h3>
																	</div>
																	<!--end::Header-->
																	<!--begin::Body-->
																	<div class="card-body pt-2 pb-0 mt-n3">
																		<!--begin: Datatable-->
																		<table class="table table-separate table-head-custom table-checkable" id="kt_dashboardtargetdatatable" >
																			<thead>
																				<tr>
																					<th>NO</th>
																					<th>CASE AGENT</th>
																					<th>TARGET AMOUNT</th>
																				</tr>
																			</thead>
																			<tbody>
																				<?php $no= 1 ?>
																				@foreach ($columnTarget as $columnTarget) 
																				<tr>
																					<td>{{$no++}}</td>
																					<td>{{$columnTarget['caseAgentName']}}</td>
																					<td>{{$columnTarget['targetCount']}}</td>
																				</tr>
																				@endforeach 
																			</tbody>
																		</table>
																		<!--end: Datatable-->
																	</div>
																	<!--end::Body-->
																</div>
																<!--begin::Nav Panel Widget 1-->
															</div>
															<div class="col-xl-6">
																<!--begin::List Widget 2-->
																<div class="card card-custom bg-light-success gutter-b card-stretch card-shadowless">
																	<div class="chart-container">
																		<div class="chart has-fixed-height mt-10" id="activity" style=""></div>
																	</div>
																</div>
																<!--end::List Widget 2-->
															</div>
														</div>
														<!--end::Row-->
														<!--begin::Row-->
														<div class="row">
															<div class="col-xl-6">
																<!--begin::Advance Table Widget 2-->
																<div class="card card-custom gutter-b card-stretch card-shadowless bg-light">
																	<!--begin::Header-->
																	<div class="card-header border-0 pt-5">
																		<h3 class="card-title align-items-start flex-column">
																			<span class="card-label font-weight-bolder text-dark">Vehicle Type per Case Agent</span>
																		</h3>
																	</div>
																	<!--end::Header-->
																	<!--begin::Body-->
																	<div class="card-body pt-2 pb-0 mt-n3">
																		<!--begin: Datatable--
																		<table class="table table-separate table-head-custom table-checkable" id="kt_dashboardtargetdatatable" >
																			<thead>
																				<tr>
																					<th>NO</th>
																					<th>CASE AGENT</th>
																					<th>TARGET AMOUNT</th>
																				</tr>
																			</thead>
																			<tbody>
																				<?php /*$no= 1 
																				@foreach ($columnTarget as $columnTarget) 
																				<tr>
																					<td>{{$no++}}</td>
																					<td>{{$columnTarget['caseAgentName']}}</td>
																					<td>{{$columnTarget['targetCount']}}</td>
																				</tr>
																				@endforeach */?>
																			</tbody>
																		</table>
																		--end: Datatable-->
																	</div>
																	<!--end::Body-->
																</div>
																<!--end::Advance Table Widget 2-->
															</div>
															<div class="col-xl-6">
																<!--begin::List Widget 5-->
																<div class="card card-custom bg-light-warning gutter-b card-stretch">
																	<!--begin::header-->
																	<div class="card-header border-0">
																		<h3 class="card-title font-weight-bolder text-warning">Activity per Case Agent</h3>
																	</div>
																	<!--end::header-->
																	<!--begin::Body-->
																	<div class="card-body pt-0">
																		
																	</div>
																	<!--end::Body-->
																</div>
																<!--end::List Widget 5-->
															</div>
														</div>
														<!--end::Row-->
														<!--end::Dashboard-->
													</div>
													<!--end::Container-->
												</div>
												<!--end::Entry-->
											</div>
											<!--end::Content-->
										</div>
									</div>
									<!--end::Card-->
								</div>
								<!--end::Container-->
							</div>
							<!--end::Entry-->
						</div>
@endsection




<script type="text/javascript" src="{{ asset('js/pages/features/charts/echarts.min.js') }}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/global/api.js')}}"></script>
<!--begin::Page Vendors(used by this page)-->
<script src="{{asset('plugins/custom/gmaps/gmaps.js')}}"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{asset('js/pages/features/maps/google-maps.js')}}"></script>
<!--end::Page Scripts-->
<style type="text/css">
    .chart-container{position:relative;width:100%}.chart-container.has-scroll{overflow-x:scroll;overflow-y:visible;max-width:100%}@media (max-width:767.98px){.chart-container{overflow-x:scroll;overflow-y:visible;max-width:100%}}.chart{position:relative;display:block;width:100%}.chart.has-minimum-width{min-width:37.5rem}.has-fixed-height{height:250px}.chart-pie{width:100%;height:400px;min-width:31.25rem}.c3 svg{font-size:.75rem}.c3 line,.c3 path{fill:none;stroke:#999}.c3 path.domain{shape-rendering:crispEdges}.c3 text{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.c3-bars path,.c3-event-rect,.c3-legend-item-tile,.c3-xgrid-focus,.c3-ygrid{shape-rendering:crispEdges}.c3-chart-arc path{stroke:#fff}.c3-chart-arc text{fill:#fff;font-size:.8125rem}.c3-grid line{stroke:#ccc}.c3-grid text{fill:#ccc}.c3-xgrid,.c3-ygrid{stroke-dasharray:3 3}.c3-text{font-weight:500}.c3-text.c3-empty{fill:#777;font-size:2em}.c3-line{stroke-width:2px}.c3-area{stroke-width:0;opacity:.4}.c3-circle._expanded_{stroke-width:1.5px;stroke:#fff}.c3-selected-circle{fill:#fff;stroke-width:2px}.c3-bar{stroke-width:0}.c3-bar._expanded_{fill-opacity:.75}.c3-chart-arcs-title{font-size:.9375rem}.c3-chart-arcs .c3-chart-arcs-background{fill:#eee;stroke:none}.c3-chart-arcs .c3-chart-arcs-gauge-unit{fill:#333;font-size:.9375rem}.c3-chart-arcs .c3-chart-arcs-gauge-max,.c3-chart-arcs .c3-chart-arcs-gauge-min{fill:#f5f5f5}
</style>
<script type="text/javascript">

$(document).ready(function() {
	//Pie Chart Activity
    var activityData = @json($activities);
    var activity = document.getElementById('activity');
    var pieActivity = echarts.init(activity);

    pieActivity.setOption({
        color: [
            '#2ec7c9','#b6a2de','#5ab1ef','#ffb980','#d87a80',
            '#8d98b3','#e5cf0d','#97b552','#95706d','#dc69aa',
            '#07a2a4','#9a7fd1','#588dd5','#f5994e','#c05050',
            '#59678c','#c9ab00','#7eb00a','#6f5553','#c14089'
        ],          
        
        textStyle: {
            fontFamily: 'Roboto, Arial, Verdana, sans-serif',
            fontSize: 11
        },

        title: {
            text: 'Target Activity',
            left: 'center',
            padding: 10,
            textStyle: {
                fontSize: 15,
                fontWeight: 500
            },
            subtextStyle: {
                fontSize: 10
            }
        },

        tooltip: {
            trigger: 'item',
            backgroundColor: 'rgba(0,0,0,0.75)',
            padding: [5, 5],
            textStyle: {
                fontSize: 11,
                fontFamily: 'Roboto, sans-serif'
            },
            formatter: "{a} <br/>{b}: {c} ({d}%)"
        },

        legend: {
            orient: 'vertical',
            bottom: '-1%',
            left: 'left',                   
            data: activityData.name,
            itemHeight: 8,
            itemWidth: 8
        },

        series: [{
            name: 'Target Activity',
            type: 'pie',
            radius: '70%',
            center: ['50%', '50%'],
            itemStyle: {
                normal: {
                    borderWidth: 1,
                    borderColor: '#fff'
                }
            },
            data: activityData
        }]
    });
});	

</script>