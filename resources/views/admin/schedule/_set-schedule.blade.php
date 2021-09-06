@extends('admin.master_admin')

@section('style')
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<!-- <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}"> -->
<style>
    
    table{
        width: 100%;
    }
    
    table tr {
    
/*         text-align: center; */
    }
    
    table td {
/*         width: auto; */
    }
</style>
<style type="text/css">
    .select2-selection {
        height: 38px !important;
    }
    .select2-selection__arrow {
        height: 38px !important;
    }
</style>
<style type="text/css">
    .horizontal-float{
        overflow-x: auto;
        white-space: nowrap;
    }
    
    .floated-block{
        display: inline-block; float: none;
    }
</style>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid" >
        <div style="height: 3.5rem" >
            @include('admin.msg')
        </div>
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-sm-12 col-md-12">

                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Set Doctor's Schedule</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                
                    <div class="card-body">
                        <div class="form-group col-sm-12 col-md-6">
                            <label for="select-doctor">Doctor <span class="text-danger">*</span></label>
                            <select class="select2" id="select-doctor" data-placeholder="Select a Doctor" style="width: 100%;" required>
                                <option></option>
                                @foreach($data as $row)
                                	<option value="{{ $row->id }}">{{ $row->name }}</option>
                                @endforeach
                        	</select>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    	<div class="row">
                            <div class="col-md-12">
                            	<div class="horizontal-float text-center">
                                	<div class="floated-block col-md-2">
                                		<div class="info-box mb-3 bg-indigo">
                                        	<span class="info-box-icon">SAT</span>
                                        	<div class="info-box-content">
                                            	<span class="info-box-text">Mentions</span>
                                            	<span class="info-box-number">92,050</span>
                                          	</div>
                                        </div>
                                	</div>
                                	<div class="floated-block col-md-2">
                                		<div class="info-box mb-3 bg-lightblue">
                                        	<span class="info-box-icon"><i class="far fa-heart"></i></span>
                                        	<div class="info-box-content">
                                            	<span class="info-box-text">Mentions</span>
                                            	<span class="info-box-number">92,050</span>
                                          	</div>
                                        </div>
                                	</div>
                                	<div class="floated-block col-md-2">
                                		<div class="info-box mb-3 bg-maroon">
                                        	<span class="info-box-icon"><i class="far fa-heart"></i></span>
                                        	<div class="info-box-content">
                                            	<span class="info-box-text">Mentions</span>
                                            	<span class="info-box-number">92,050</span>
                                          	</div>
                                        </div>
                                	</div>
                                	<div class="floated-block col-md-2">
                                		<div class="info-box mb-3 bg-orange">
                                        	<span class="info-box-icon"><i class="far fa-heart"></i></span>
                                        	<div class="info-box-content">
                                            	<span class="info-box-text">Mentions</span>
                                            	<span class="info-box-number">92,050</span>
                                          	</div>
                                        </div>
                                	</div>
                                	<div class="floated-block col-md-2">
                                		<div class="info-box mb-3 bg-success">
                                        	<span class="info-box-icon"><i class="far fa-heart"></i></span>
                                        	<div class="info-box-content">
                                            	<span class="info-box-text">Mentions</span>
                                            	<span class="info-box-number">92,050</span>
                                          	</div>
                                        </div>
                                	</div>
                                	<div class="floated-block col-md-2">
                                		<div class="info-box mb-3 bg-success">
                                        	<span class="info-box-icon"><i class="far fa-heart"></i></span>
                                        	<div class="info-box-content">
                                            	<span class="info-box-text">Mentions</span>
                                            	<span class="info-box-number">92,050</span>
                                          	</div>
                                        </div>
                                	</div>
                                	<div class="floated-block col-md-2">
                                		<div class="info-box mb-3 bg-success">
                                        	<span class="info-box-icon"><i class="far fa-heart"></i></span>
                                        	<div class="info-box-content">
                                            	<span class="info-box-text">Mentions</span>
                                            	<span class="info-box-number">92,050</span>
                                          	</div>
                                        </div>
                                	</div>
                            	</div>
                            </div>
                        </div>
                    	<div class="row">
                            <div class="col-md-12">
                            	<table id="listtable" class="table table-bordered table-hover ">
                            		<thead class="d-none">
                            			<tr>
                            				<td>SAT</td>
                            				<td>SUN</td>
                            				<td>MON</td>
                            				<td>TUE</td>
                            				<td>WED</td>
                            				<td>THU</td>
                            				<td>FRI</td>
                            			</tr>
                            		</thead>
                            		<tbody>
                            			<tr>
                            				<td>
                            					<div class="info-box mb-3 bg-success">
                                                	<span class="info-box-icon"><i class="far fa-heart"></i></span>
                                                	<div class="info-box-content">
                                                    	<span class="info-box-text">Mentions</span>
                                                    	<span class="info-box-number">92,050</span>
                                                  	</div>
                                                </div>
                            				</td>
                            				<td>
                            					<div class="info-box mb-3 bg-success">
                                                	<span class="info-box-icon"><i class="far fa-heart"></i></span>
                                                	<div class="info-box-content">
                                                    	<span class="info-box-text">Mentions</span>
                                                    	<span class="info-box-number">92,050</span>
                                                  	</div>
                                                </div>
                            				</td>
                            				<td>
                            					<div class="info-box mb-3 bg-success">
                                                	<span class="info-box-icon"><i class="far fa-heart"></i></span>
                                                	<div class="info-box-content">
                                                    	<span class="info-box-text">Mentions</span>
                                                    	<span class="info-box-number">92,050</span>
                                                  	</div>
                                                </div>
                            				</td>
                            				<td>
                            					<div class="info-box mb-3 bg-success">
                                                	<span class="info-box-icon"><i class="far fa-heart"></i></span>
                                                	<div class="info-box-content">
                                                    	<span class="info-box-text">Mentions</span>
                                                    	<span class="info-box-number">92,050</span>
                                                  	</div>
                                                </div>
                            				</td>
                            				<td>
                            					<div class="info-box mb-3 bg-success">
                                                	<span class="info-box-icon"><i class="far fa-heart"></i></span>
                                                	<div class="info-box-content">
                                                    	<span class="info-box-text">Mentions</span>
                                                    	<span class="info-box-number">92,050</span>
                                                  	</div>
                                                </div>
                            				</td>
                            				<td>
                            					<div class="info-box mb-3 bg-success">
                                                	<span class="info-box-icon"><i class="far fa-heart"></i></span>
                                                	<div class="info-box-content">
                                                    	<span class="info-box-text">Mentions</span>
                                                    	<span class="info-box-number">92,050</span>
                                                  	</div>
                                                </div>
                            				</td>
                            				<td>
                            					<div class="info-box mb-3 bg-success">
                                                	<span class="info-box-icon"><i class="far fa-heart"></i></span>
                                                	<div class="info-box-content">
                                                    	<span class="info-box-text">Mentions</span>
                                                    	<span class="info-box-number">92,050</span>
                                                  	</div>
                                                </div>
                            				</td>
                            			</tr>
                            		</tbody>
                            	</table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card -->

            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<!-- Select2 -->
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<!-- <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script> -->
<!-- <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script> -->
<script>
    $('#listtable').DataTable({
        "paging": false,
        "searching": false,
        "ordering": false,
        "autoWidth": false,
        "responsive": false,
        "info": false,
        "scrollX": true
    });
</script>
<script type="text/javascript">
	$('.select2').select2({
		allowClear: true
	});

	$('#select-doctor').on('select2:select', (e)=>{
		console.log(e.params.data.id);
	});

	$('.select2').on('select2:clear', ()=>{});
</script>
@endsection
