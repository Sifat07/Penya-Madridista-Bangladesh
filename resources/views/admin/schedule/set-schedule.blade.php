@extends('admin.master_admin')

@section('style')
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
<style type="text/css">
/* body{ */
/*     -webkit-touch-callout: none; */
/*     -webkit-user-select: none; */
/*     -khtml-user-select: none; */
/*     -moz-user-select: none; */
/*     -ms-user-select: none; */
/*     user-select: none; */
/* } */
    .select2-selection {
        height: 38px !important;
    }
    
    .select2-selection__arrow {
        height: 38px !important;
    }
</style>

<style type="text/css">
    table {
         cursor: pointer;
    }
    
    table thead {
        background-color: #007bff;
    }
    
    table tbody tr.active{
        background-color: skyblue;
    }
    
    #listtable tbody td:nth-child(3) {
        text-align: center;
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
                            <div class="d-flex">
                                <select class="select2" id="select-doctor" data-placeholder="Select a Doctor" style="width: 100%;" required>
                                    <option></option>
                                    @foreach($data as $row)
                                    	<option value="{{ $row->id }}">{{ $row->name }}</option>
                                    @endforeach
                            	</select>
                            	<div class="spinner-grow text-primary loading-data mt-1 ml-1 d-none" role="status">
                                	<span class="sr-only">Loading...</span>
                                </div>
                        	</div>
                        </div>
                    </div>
                    
                    <!-- /.card-body -->
                    <div class="card-footer">
                    	<div class="row">
                            <div class="col-md-6">
                            	<div class="overlay-wrapper">
                      				<div class="overlay timetable-overlay"></div>
                                	<table id="listtable" class="table table-hover">
                                		<thead class="text-center">
                                			<tr>
                                				<th>Day</th>
                                				<th>Time</th>
                                				<th>Off Day</th>
                                			</tr>
                                		</thead>
                                		<tbody>
                                			<tr>
                                				<td>Saturday</td>
                                				<td>12:00 AM - 12:00 AM</td>
                                				<td><input class="form-check-input day-off" type="checkbox"></td>
                                			</tr>
                                			<tr>
                                				<td>Sunday</td>
                                				<td>12:00 AM - 12:00 AM</td>
                                				<td><input class="form-check-input day-off" type="checkbox"></td>
                                			</tr>
                                			<tr>
                                				<td>Monday</td>
                                				<td>12:00 AM - 12:00 AM</td>
                                				<td><input class="form-check-input day-off" type="checkbox"></td>
                                			</tr>
                                			<tr>
                                				<td>Tuesday</td>
                                				<td>12:00 AM - 12:00 AM</td>
                                				<td><input class="form-check-input day-off" type="checkbox"></td>
                                			</tr>
                                			<tr>
                                				<td>Wednesday</td>
                                				<td>12:00 AM - 12:00 AM</td>
                                				<td><input class="form-check-input day-off" type="checkbox"></td>
                                			</tr>
                                			<tr>
                                				<td>Thursday</td>
                                				<td>12:00 AM - 12:00 AM</td>
                                				<td><input class="form-check-input day-off" type="checkbox"></td>
                                			</tr>
                                			<tr>
                                				<td>Friday</td>
                                				<td>12:00 AM - 12:00 AM</td>
                                				<td><input class="form-check-input day-off" type="checkbox"></td>
                                			</tr>
                                		</tbody>
                                	</table>
								</div>
                            </div>
                            
                            <div class="col-md-6">
                            	<div class="overlay-wrapper">
                      				<div class="overlay timer-overlay"></div>
                      				<div class="bg-primary color-palette text-center"><span>Start Time</span></div>
                                	<div id="starttime"></div>
                                	<div class="bg-primary color-palette text-center"><span>End Time</span></div>
                                	<div id="endtime"></div>
                               	</div>
                            </div>
                        </div>
                        <div class="row">
            				<div class="col-sm-12 col-md-12">
                                <div class="d-flex">
                                	<button type="submit" class="btn btn-primary">Submit</button>
                                  	<div class="spinner-grow text-primary storing-data mt-1 ml-1 d-none" role="status">
                                    	<span class="sr-only">Loading...</span>
                                  	</div>
                                </div>
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
<!-- Moment Js -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<script type="text/javascript">
	$('.select2').select2({
		allowClear: true,
	});

	$('.select2').val('').change();
	
	$('#select-doctor').on('select2:select', (e)=>{
// 		console.log(e.params.data.id);
		doctor_id = e.params.data.id;
		$.ajax({
			url: "{{url('admin/retrive-schedule')}}",
			method: "POST",
			data: {
				_token: $('meta[name="csrf-token"]').attr('content'),
				doctor_id: doctor_id,
			},
			beforeSend: function(){
				$('.loading-data').removeClass('d-none');
				$('.timer-overlay').removeClass('d-none');
				$('.timetable-overlay').removeClass('d-none');
            }
		}).done(function(response){
			fill_table(response);
			$('.timer-overlay').addClass('d-none');
			$('.timetable-overlay').addClass('d-none');
			$('.loading-data').addClass('d-none');
		});
	});

	$('.select2').on('select2:clear', ()=>{
		reset_table();
		$('.timer-overlay').removeClass('d-none');
		$('.timetable-overlay').removeClass('d-none');
	});

	function fill_table(response){
		reset_table();
		data = JSON.parse(response).schedule;
		// console.log(data);
		for(i=0; i<=6; i++){
			
			if(data===null){
				console.log('isnull');
				reset_table();
				break;
			} 
			
			time_str = '';
			if(data[i].start_time === null){
				time_str = '12:00 AM';
			} else {
				time_str = data[i].start_time;
			}
			
			time_str += ' - ';
			if(data[i].end_time === null){
				time_str += '12:00 AM';
			} else {
				time_str += data[i].end_time;
			}
			
			$('#listtable tbody tr:nth-child('+(i+1)+') td:nth-child(2)').text(time_str);

			if(data[i].day_off === 1) {
				$('#listtable tbody tr:nth-child('+(i+1)+') td:nth-child(3) input').prop('checked', true);
			}
		}
	}

	function reset_table(){
		$('#listtable tbody tr td:nth-child(2)').text('12:00 AM - 12:00 AM');
		$('#listtable tbody input:checkbox').prop('checked', false);
		$("#listtable tbody > tr").removeClass("active");
		$('#starttime').datetimepicker('date', moment('00:00', 'HH:mm'));
		$('#endtime').datetimepicker('date', moment('00:00', 'HH:mm'));
	}

	$('button:submit').click(function(){
		doctor_id = $('#select-doctor').val();
		if(doctor_id == ""){
			return;
		}
		schedule = [];
				
		for(i=0; i<=6; i++){
			is_off = 0;
			if($('#listtable tbody tr:nth-child('+(i+1)+') td:nth-child(3) input').prop('checked')){
				is_off = 1;
			}
			schedule.push({
				"day" : (i+1),
				"start_time" : $('#listtable tbody tr:nth-child('+(i+1)+') td:nth-child(2)').text().split('-')[0].trim(),
				"end_time" : $('#listtable tbody tr:nth-child('+(i+1)+') td:nth-child(2)').text().split('-')[1].trim(),
				"day_off" : is_off,
			});
		}

		$.ajax({
			url: "{{url('admin/update-schedule')}}",
			method: "POST",
			data: {
				_token: $('meta[name="csrf-token"]').attr('content'),
				schedule: schedule,
				doctor_id: doctor_id,
			},
			beforeSend: function(){
				$('.storing-data').removeClass('d-none');
			},
			success: function(response){
				$('.storing-data').addClass('d-none');
			}
		});
	});
</script>

<script>
    $(".day-off").on("click", function(){
    	if($(this).prop('checked')){
    		$(this).closest('tr').children('td:nth-child(2)').text('12:00 AM - 12:00 AM');
    	}
    });
    
    $("#listtable tbody > tr ").click(function(){
    	$("#listtable tbody > tr").removeClass("active");
        $(this).addClass("active");
        
        time_string = $(this).children('td:nth-child(2)').text();
        sts = time_string.split('-')[0].trim();
        ets = time_string.split('-')[1].trim();

        set_clock('starttime', sts);
        set_clock('endtime', ets);
    });

    $('#starttime').datetimepicker({
        inline: true,
        format: 'LT',
        defaultDate: moment('24:00', 'HH:mm'),
    });
    
    $('#endtime').datetimepicker({
        inline: true,
        format: 'hh:mm a',
        defaultDate: moment('24:00', 'HH:mm'),
    });

    $('#starttime').on('change.datetimepicker',function(e){
    	if($(this).is(':hover')) {
    		time = e.date._d;
            time = retrive_time(time);
            console.log(time);
            time_string = time +' -'+ $('#listtable tr.active td:nth-child(2)').text().split('-')[1];
            $('#listtable tr.active td:nth-child(2)').text(time_string);
    	}
    });

    $('#endtime').on('change.datetimepicker',function(e){
    	if($(this).is(':hover')) { 
			console.log('hovered');
			time = e.date._d;
	        time = retrive_time(time);
	        console.log(time);
	        time_string = $('#listtable tr.active td:nth-child(2)').text().split('-')[0]+'- '+time;
	        $('#listtable tr.active td:nth-child(2)').text(time_string);
        }
		
    });
	
	function set_clock(id, time_string){
		var a = time_string.split(' ')[1];
		var hour = time_string.split(' ')[0].split(':')[0];
		var min = time_string.split(' ')[0].split(':')[1];

		console.log('______');
		console.log(time_string);
		if(a==='PM' && hour !== '12'){
			hour = Number(hour) + 12;
		}

		if(a==='AM' && hour === '12'){
			hour = 0;
		}
		console.log(hour+':'+min+':'+a);
		console.log('______');
		$('#'+id).datetimepicker('date', moment(hour+':'+min, 'HH:mm a'));
		
	}
	
    function retrive_time(time){
    	var a = null;
        var hour = null;
        var min = null;
        console.log(time);
        hour = time.getHours();
        min = time.getMinutes();
       	
        if (hour >= 12) {
            if (hour > 12) {
				hour -= 12;
            }
            a = "PM";
        } else {
			a = "AM";
        }

        if(hour==0){
            hour = 12;
       	}
       	
		return ("0" + hour).slice(-2)+':'+("0" + min).slice(-2)+' '+a;
    }
</script>
@endsection
