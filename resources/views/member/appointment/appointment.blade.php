@extends('patient.master_patient')

@section('style')
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">

<style>
	body{ */
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
	}
</style>
@endsection

@section('content')
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Get an Appointment</h1>
			</div>
		</div>
	</div>
</div>

<section class="content">
	<div class="container-fluid">
		<div class="row">

			<div class="col-md-3">

				<div class="card card-primary card-outline">
					<div class="card-body box-profile">
						<div class="text-center">
							<img class="profile-user-img img-fluid img-circle"
							src="../../dist/img/user4-128x128.jpg"
							alt="User profile picture">
						</div>

						<h3 class="profile-username text-center">{{ $doctor->name }}</h3>
						<br>
						<ul class="nav flex-column">
						@php
                        $specialities = explode(",", $doctor->speciality);
                        foreach($specialities as $speciality){
                            //echo '<span class="badge bg-success" >'.$speciality.'</span>';
							echo '<li class="nav-item"><b class="text-muted nav-link">'.$speciality.'</b></li>';
                        }
                        @endphp
						</ul>
						<!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card  bg-gradient-info">
					<div class="card-header">
						<h3 class="card-title"><i class="far fa-calendar-alt"></i> Calendar</h3>
					</div>

					<div class="card-body">
						<div id="calendar"></div>
					</div>
					
					<!-- /.card-body -->
					<div class="card-footer">
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="card card-outline card-info">
					<div class="card-header">
						<h3 class="card-title"><i class="far fa-calendar-alt"></i> Appointment</h3>
						<span class="card-tools total-appontment"></span>
					</div>

					<div class="card-body">
						<ul class="nav flex-column">
							<li class="nav-item">
							<div class="d-flex ">						
								<button id="prev-appointment" class="btn btn-link flex-fill text-primary text-left mb-10"><span class="h2"><i class="fas fa-chevron-left"></span></i></button>
								<h2 class="nav-link flex-fill text-primary text-center" id="day-name"></h2>
								<button id="next-appointment" class="btn btn-link flex-fill text-primary text-right"><span class="h2"><i class="fas fa-chevron-right"></i></span></button>
								</div>
								<!-- <strong class="nav-link float-right text-dark dmy"></strong> -->
							</li>
							<li class="nav-item">
								<h2 class="nav-link float-left text-info" id="start-time">09:00 AM</h2>
								<h2 class="nav-link float-right text-info" id="end-time">10:50 AM</h2>
							</li>
							<li class="nav-item">
								<h3 class="nav-link text-dark">
									<span id="app_ser">Appointed</span>
									<span class="float-right badge bg-info appointed" style="font-weight: normal">31</span>
								</h3>
							</li>
						</ul>
					</div>
					
					<!-- /.card-body -->
					<div class="card-footer">
						<div class="d-flex">
							<button type="button" id="place-appointment" class="btn btn-primary">Place Appointment</button>
							<button type="button" id="cancel-appointment" class="btn btn-danger d-none">Cancel Appointment</button>
							<strong class="nav-link">on <span class="text-primary dmy"></span></strong>
							<div class="spinner-grow text-primary storing-data mt-1 ml-1 d-none footer-spinner" role="status">
								<span class="sr-only">Loading...</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@php
		//dd($schedule);
	@endphp
</section>
@endsection

@section('script')
<!-- Moment Js -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<script type="text/javascript">
	let appointments = JSON.parse('{!! $appointments !!}');
	// console.log(appointments);
	let today = "{{ date('d-m-Y') }}";
	let onemonth = '{{ date("d-m-Y", strtotime("+1 month", strtotime(date("d-m-Y")) )) }}';
	let days_base = [2,3,4,5,6,7,1];
	let offdays = [];
	let schedule = JSON.parse('{!! $schedule  !!}');
	let default_date = today;
	let appointment_pointer = 0;
	


	function set_left_right_button(){
		appointment_pointer = 0;
		appointments.sort(function(a, b) {
			var keyA = new Date(a.date),
				keyB = new Date(b.date);
			// Compare the 2 dates
			if (keyA < keyB) return -1;
			if (keyA > keyB) return 1;
			return 0;
		});
	}

	set_left_right_button();

	if(appointments.length > 0){
		default_date = moment(appointments[0].date, 'YYYY-MM-DD').format('DD-MM-YYYY');
	}
	schedule.forEach((row)=>{
		if(row.day_off === 1) {
			// offdays.push();
			console.log(days_base.indexOf(row.day));
			offdays.push(days_base.indexOf(row.day));
		}
	});

	$('#calendar').datetimepicker({
		inline: true,
		format: "L",
		defaultDate: moment(default_date, "DD-MM-YYYY"),
		minDate: moment(today, "DD-MM-YYYY"),
		maxDate: moment(onemonth, "DD-MM-YYYY"),
		disabledDates: [
                        // moment("06-11-2020", "DD-MM-YYYY"),
						// moment("12-11-2020", "DD-MM-YYYY"),
					],
		daysOfWeekDisabled: offdays,
		// icons: {disabledDates: "fa fa-calendar"}
	});

	$('#calendar').on('change.datetimepicker', function(e){
		time = e.date._d;
		// console.log(time.getDay());
		// console.log(time.getDate());
		// console.log(time.getMonth()+1);
		// console.log(time.toLocaleString('default', { weekday: 'long' }));
		// console.log(time.toLocaleString('default', { month: 'short' }));
		// console.log(time.getFullYear());
		show_day_info(time);
	});

	function cancelation_ui(){
		$('#place-appointment').addClass('d-none');
		$('#cancel-appointment').removeClass('d-none');
		$('#cancel-appointment').prop('disabled', false);
		$('#app_ser').text('Serial');
	}

	function placement_ui(){
		$('#cancel-appointment').addClass('d-none');
		$('#place-appointment').removeClass('d-none');
		$('#place-appointment').prop('disabled', false);
		$('#app_ser').text('Appointed');
	}

	function disable_buttons(){
		$('#cancel-appointment').prop('disabled', true);
		$('#place-appointment').prop('disabled', true);
	}

	function show_day_info(time){
		dmy = time.getDate() + " - " + time.toLocaleString('default', { month: 'short' }).toUpperCase() + " - " + time.getFullYear();
		$.ajax({
			url: "{{url('user/get-total-appointed')}}",
			method: "POST",
			data: {
				_token: $('meta[name="csrf-token"]').attr('content'),
				date: dmy,
				doctor_id: "{{ $doctor->id }}",
			},
			beforeSend: function(){
				disable_buttons();
				$('.appointed').removeClass(['badge', 'bg-info'])
				$('.appointed').html('<div class="spinner-border text-info" role="status"><span class="sr-only">Loading...</span></div>');
			},
			success: function(response){
				response = JSON.parse(response);
				if(!response.error){
					$('.appointed').addClass(['badge', 'bg-info']);
					$('.appointed').html('');
					$('.appointed').text(response.data.total_appointment);
					if(response.data.has_appointment !== 0) {
						cancelation_ui();
						$('.appointed').text(response.data.serial);
					} else {
						placement_ui();
					}
				} else {

				}
				// $('.appointed').addClass(['badge', 'bg-info']);
				// $('.appointed').html('');
				// $('.appointed').text(response);
			}
		});
		$("#day-name").text(time.toLocaleString('default', { weekday: 'long' }).toUpperCase());
		$(".dmy").text(dmy);
		schedule.forEach((row)=>{
			if(row.day === days_base[time.getDay()]) {
				$("#start-time").text(row.start_time);
				$("#end-time").text(row.start_time);
			}
		});
	}

	function show_total_appointments(){
		if(appointments.length == 1) {
			$('.total-appontment').text(appointments.length+' appoinment');
		} else if(appointments.length > 1) {
			$('.total-appontment').text(appointments.length+' appoinments');
		} else if (appointments.length == 0) {
			$('.total-appontment').text('');
		}
	}

	// function set_app_ser() {
	// 	$('#calendar').datetimepicker('viewDate')._d
	// }

	show_day_info($('#calendar').datetimepicker('viewDate')._d);
	show_total_appointments();
	
	
</script>

<script type="text/javascript">
	$('#place-appointment').click(function() {
		// previous_reading = Number($('.appointed').text());
		$.ajax({
			url: "{{url('user/place-appointment')}}",
			method: "POST",
			data: {
				_token: $('meta[name="csrf-token"]').attr('content'),
				date: dmy,
				doctor_id: "{{ $doctor->id }}",
				user_id: "{{ $user->id }}",
			},
			beforeSend: function(){
				$('#place-appointment').prop('disabled', true);
				$('.footer-spinner').removeClass('d-none');
				$('.appointed').removeClass(['badge', 'bg-info']);
				$('.appointed').html('<div class="spinner-border text-info" role="status"><span class="sr-only">Loading...</span></div>');
			},
			success: function(response){
				data = JSON.parse(response);
				console.log(data);
				if (!data.error) {
					// $('#place-appointment').addClass('d-none');
					// $('#cancel-appointment').removeClass('d-none');
					// $('#cancel-appointment').prop('disabled', false);
					cancelation_ui();
					$('.appointed').addClass(['badge', 'bg-info']);
					$('.appointed').html('');
					$('.appointed').text(data.serial);
					appointments.push({date: data.data});
					set_left_right_button();
					show_total_appointments();
				} else {
					$('#place-appointment').prop('disabled', false);
				}
				$('.footer-spinner').addClass('d-none');
			}
		});
	})

	$('#cancel-appointment').click(function() {
		// previous_reading = Number($('.appointed').text());
		$.ajax({
			url: "{{url('user/cancel-appointment')}}",
			method: "POST",
			data: {
				_token: $('meta[name="csrf-token"]').attr('content'),
				date: dmy,
				doctor_id: "{{ $doctor->id }}",
				user_id: "{{ $user->id }}",
			},
			beforeSend: function(){
				$('#cancel-appointment').prop('disabled', true);
				$('.footer-spinner').removeClass('d-none');
				$('.appointed').removeClass(['badge', 'bg-info']);
				$('.appointed').html('<div class="spinner-border text-info" role="status"><span class="sr-only">Loading...</span></div>');
			},
			success: function(response){
				data = JSON.parse(response);
				console.log(data);
				if (!data.error) {
					// $('#cancel-appointment').addClass('d-none');
					// $('#place-appointment').removeClass('d-none');
					// $('#place-appointment').prop('disabled', false);
					placement_ui();
					$('.appointed').addClass(['badge', 'bg-info']);
					$('.appointed').html('');
					$('.appointed').text(data.total_appointment);

					appointments.splice(appointments.findIndex(x => x.date === data.data), 1);
					set_left_right_button();
					show_total_appointments();
					// appointments.push({date: response.data});
				}else{
					$('#cancel-appointment').prop('disabled', false);
				}
				$('.footer-spinner').addClass('d-none');
				
			}
		});
	});


	$('#prev-appointment').click(function(){
		if(appointment_pointer > 0) {
			appointment_pointer--;
		}
		
		if(appointments.length == 0){
			return;
		}
		console.log(appointments[appointment_pointer]);
		
		$('#calendar').datetimepicker('date', moment(appointments[appointment_pointer].date, 'YYYY-MM-DD'));
	});

	$('#next-appointment').click(function(){
		if(appointment_pointer < ( appointments.length -1 )) {
			appointment_pointer++;
		}

		if(appointments.length == 0){
			return;
		}
		console.log(appointments[appointment_pointer]);
		
		$('#calendar').datetimepicker('date', moment(appointments[appointment_pointer].date, 'YYYY-MM-DD'));
	});
</script>

<script>

	if(window.screen.width >= 1280){
		$('.card').eq(0).css('height', $('.card').eq(2).css('height'));
	}
</script>
@endsection