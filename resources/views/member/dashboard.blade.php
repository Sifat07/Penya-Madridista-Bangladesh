@extends('member.master_member')


@section('content')
<div class="container-fluid float-left">
<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active" ></li>
		<li data-target="#slides" data-slide-to="1" ></li>
		<li data-target="#slides" data-slide-to="2" ></li>
	</ul>
<div class="carousel-inner">
	<div class="carousel-item active">
	<img src="{{ asset('img/background.png') }}">
	<div class="carousel-caption">
	<h1 class="display-2">Official Real Madrid Supporters Club</h1>
	<h3>Peña Madridista Bangladesh is the first ever and only Real Madrid Peña(Supporters Club) in Bangladesh.</h3>
	<button type="button" class="btn btn-outline-light btn-lg">Visit Us</button>
	</div>
	</div>
	<div class="carousel-item">
	<img src="{{ asset('img/background2.png') }}">
	</div>
	<div class="carousel-item">
	<img src="{{ asset('img/background3.png') }}">
	</div>
	
</div>
</div>
<!--- Jumbotron -->


<!--- Welcome Section -->


<!--- Three Column Section -->


<!--- Two Column Section -->
<div class="container-fluid padding">
<div class="row padding" >
	<div class=" col-lg-6">
		<h2>About Us</h2>
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
		<a href="#" type="button" class="btn btn-primary">Learn More</a>
		</div>
		<div class="col-lg-6">
			<img src="{{ asset('img/desk.png') }}" class="img-fluid">
		</div>

</div>
</div>
<!--- Upcoming Matches --->

<div class="container-fluid padding">
<div class="row padding" >
	<div class=" col-lg-12 text-center">
                    <div class="schedule-text">
                        <div class="st-table">
						<hr>
								<h2>Upcoming Matches</h2>
									<hr>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="left-team">
                                            <img src="{{ asset('img/schedule/ReallMadrid.png') }}" alt="">
                                            <h4>Real Madrid</h4>
                                        </td>
                                        <td class="st-option">
                                            <div class="so-text">Reale Arena</div>
                                            <h4>VS</h4>
                                            <div class="so-text">21 September 2020</div>
                                        </td>
                                        <td class="right-team">
                                            <img src="{{ asset('img/schedule/ReallSociedad.png') }}" alt="">
                                            <h4>Real Sociedad</h4>
                                        </td>
										<td>
										<a href="#" 
										<img src="{{ asset('img/schedule/noti.jpg') }}" alt="">
										</a>
										</td>
                                    </tr>
                                    <tr>
                                        <td class="left-team">
                                            <img src="{{ asset('img/schedule/flag-3.jpg') }}" alt="">
                                            <h4>Combodia</h4>
                                        </td>
                                        <td class="st-option">
                                            <div class="so-text">MetLife Stadium, Rutherford USA</div>
                                            <h4>VS</h4>
                                            <div class="so-text">15 September 2019</div>
                                        </td>
                                        <td class="right-team">
                                            <img src="{{ asset('img/schedule/flag-4.jpg') }}" alt="">
                                            <h4>France</h4>
                                        </td>
										<td>
										<a href="#" <img src="{{ asset('img/schedule/noti.jpg') }}"></a>
										</td>
                                    </tr>
                                    <tr>
                                        <td class="left-team">
                                            <img src="{{ asset('img/schedule/flag-5.jpg') }}" alt="">
                                            <h4>Iceland</h4>
                                        </td>
                                        <td class="st-option">
                                            <div class="so-text">MetLife Stadium, Rutherford USA</div>
                                            <h4>VS</h4>
                                            <div class="so-text">15 September 2019</div>
                                        </td>
                                        <td class="right-team">
                                            <img src="{{ asset('img/schedule/flag-6.jpg') }}" alt="">
                                            <h4>Morocco</h4>
                                        </td>
										<td>
										<a href="#" <img src="{{ asset('img/schedule/noti.jpg') }}"></a>
										</td>
                                    </tr>
                                    <tr>
                                        <td class="left-team">
                                            <img src="{{ asset('img/schedule/flag-7.jpg') }}" alt="">
                                            <h4>Croatia</h4>
                                        </td>
                                        <td class="st-option">
                                            <div class="so-text">MetLife Stadium, Rutherford USA</div>
                                            <h4>VS</h4>
                                            <div class="so-text">15 September 2019</div>
                                        </td>
                                        <td class="right-team">
                                            <img src="{{ asset('img/schedule/flag-8.jpg') }}" alt="">
                                            <h4>Uruguay</h4>
                                        </td> 								
										<td>
										<a href="#" <img src="{{ asset('img/schedule/noti.jpg') }}"></a>
										</td>
                                    </tr>	<!-- 
                                    <tr> 

                                        <td class="left-team">
                                            <img src="img/schedule/flag-9.jpg" alt="">
                                            <h4>Brazil</h4>
                                        </td>
                                        <td class="st-option">
                                            <div class="so-text">MetLife Stadium, Rutherford USA</div>
                                            <h4>VS</h4>
                                            <div class="so-text">15 September 2019</div>
                                        </td>
                                        <td class="right-team">
                                            <img src="img/schedule/flag-10.jpg" alt="">
                                            <h4>Qatar</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="left-team">
                                            <img src="img/schedule/flag-8.jpg" alt="">
                                            <h4>Uruguay</h4>
                                        </td>
                                        <td class="st-option">
                                            <div class="so-text">MetLife Stadium, Rutherford USA</div>
                                            <h4>VS</h4>
                                            <div class="so-text">15 September 2019</div>
                                        </td>
                                        <td class="right-team">
                                            <img src="img/schedule/flag-11.jpg" alt="">
                                            <h4>Costa Rica</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="left-team">
                                            <img src="img/schedule/flag-12.jpg" alt="">
                                            <h4>Colombia</h4>
                                        </td>
                                        <td class="st-option">
                                            <div class="so-text">MetLife Stadium, Rutherford USA</div>
                                            <h4>VS</h4>
                                            <div class="so-text">15 September 2019</div>
                                        </td>
                                        <td class="right-team">
                                            <img src="img/schedule/flag-13.jpg" alt="">
                                            <h4>Denmark</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="left-team">
                                            <img src="img/schedule/flag-14.jpg" alt="">
                                            <h4>Argentina</h4>
                                        </td>
                                        <td class="st-option">
                                            <div class="so-text">MetLife Stadium, Rutherford USA</div>
                                            <h4>VS</h4>
                                            <div class="so-text">15 September 2019</div>
                                        </td>
                                        <td class="right-team">
                                            <img src="img/schedule/flag-15.jpg" alt="">
                                            <h4>Panama</h4>
                                        </td>
                                    </tr> -->
									<tr>
									<td> </td>
									<td colspan="2">
											<a href="#" type="button" class="btn btn-primary algn-center">See The Complete Calender</a>
											</td>
									</tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


</div>
</div>

<!--- Featured Merchandise ---->

<!--- Meet the team -->
<div class="container-fluid padding ">
<div class=" row welcome text-center">
	<div class="col-12">
		<h1 class="display-4"> Support Your Team</h1>
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
			<img class="card-img-top" src="{{ asset('img/shop-1.png') }}">
			<div class="card-body">
				<h4 class="card-title">Peña Scarf</h4>
				<p class="card-text"> Tk 500</p>
				<a href="#" class="btn btn-outline-primary">Add to Cart</a>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card">
			<img class="card-img-top" src="{{ asset('img/shop-2.png') }}">
			<div class="card-body">
				<h4 class="card-title">Peña Key Ring</h4>
				<p class="card-text"> Tk 50</p>
				<a href="#" class="btn btn-outline-primary">Add to Cart</a>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card">
			<img class="card-img-top" src="{{ asset('img/shop-3.jpg') }}">
			<div class="card-body">
				<h4 class="card-title">La Novena & La Decima Poster</h4>
				<p class="card-text"> Tk 200</p>
				<a href="#" class="btn btn-outline-primary">Add to Cart</a>
			</div>
		</div>
	</div>
</div>
</div>


<!--- Fixed background 
<figure>
	<div class="fixed-wrap">
		<div id="fixed">
		</div>
	</div>
</figure> -->
<!--- Emoji Section -->

  
<!--- Meet the team -->
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
				<a href="#" class="btn btn-outline-secondary">See Profile</a>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card">
			<img class="card-img-top" src="{{ asset('img/team2.png') }}">
			<div class="card-body">
				<h4 class="card-title">MD Najmul Hossain </h4>
				<p class="card-text"> Vice-President</p>
				<a href="#" class="btn btn-outline-secondary">See Profile</a>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card">
			<img class="card-img-top" src="{{ asset('img/team3.png') }}">
			<div class="card-body">
				<h4 class="card-title">Sifat Jasim</h4>
				<p class="card-text"> Secretary</p>
				<a href="#" class="btn btn-outline-secondary">See Profile</a>
			</div>
		</div>
	</div>
</div>
</div>

<!--- Two Column Section -->

</div>
@endsection

@section('script')
@endsection