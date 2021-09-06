@extends('member.master_member')
@section('style')

<style></style>
@endsection
@section('content')
<div class="container-fluid padding">
<div class="row padding" >
	<div class=" col-lg-6">
		<p>
		Madridista Bangladesh, the first ever Real Madrid fan group in Bangladesh[June, 2011].
		</p>
				<p>
		On 29 December,2019 we finally got official recognition from Real Madrid as a Real Madrid Peña.
		</p>
				<p>
		At the beginning, the number of the fan was around 50 but within a year and half, we became a family of nearly 3200 members. 
		</p>
		<p>
		Initially, we used to hang out occasionally during match days, and since then we have arranged at least five get together per year, celebrating UCL, La Liga, CDR, Club World Cups etc.
		</p>
		<br>
		</div>
		<div class="col-lg-6">
			<img src="{{ asset('img/desk.png') }}" class="img-fluid">
		</div>

</div>
</div>
<hr class="my-4">

<div class="container-fluid padding ">
<div class=" row welcome text-center">
	<div class="col-12">
		<h1 class="display-4"> Board Of Directors</h1>
	</div>
	<hr>
	
	</div>
</div>
</div>

<!--- Cards -->
<div class="container-fluid padding">
<div class="row padding">
	<div class="col-md-4">
		<div class="card">
			<img class="card-img-top" src="{{ asset('img/team1.png') }}">
			<div class="card-body">
				<h4 class="card-title">MD Tanbir Hossain</h4>
				<p class="card-text"> President</p>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card">
			<img class="card-img-top" src="{{ asset('img/team2.png') }}">
			<div class="card-body">
				<h4 class="card-title">MD Najmul Hossain </h4>
				<p class="card-text"> Vice-President</p>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card">
			<img class="card-img-top" src="{{ asset('img/team3.png') }}">
			<div class="card-body">
				<h4 class="card-title">Sifat Jasim</h4>
				<p class="card-text"> Secretary</p>
			</div>
		</div>
	</div>
</div>
</div>

@endsection