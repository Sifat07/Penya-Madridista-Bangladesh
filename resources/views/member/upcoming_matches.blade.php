@extends('member.master_member')
@section('style')

<style>
div {}
table,tbody,tr,td {
    
    padding:10px;
}

</style>
@endsection
@section('content')

<!--- Upcoming Matches --->

<div class="container-fluid padding">
<div class="row padding" >
	<div class=" col-lg-12 text-left">
                    <div class="schedule-text">
                        <div class="st-table">
								<h1>Upcoming Matches</h1>
									<hr>
                                
                            <form action="/action_page.php" class="float left">
                                <label for="competition">Competitions:</label>
                                <select name="competitions" id="competitions">
                                <option value="LaLiga">All Competitions</option>
                                <option value="LaLiga">La Liga</option>
                                <option value="UCL">UEFA Champions League</option>
                            </select>
                            <br><br>
                            </form>
                            <table>
                                <tbody>
                                <tr>
                                <td class="left-team">Jan</td>
                                <td class="left-team">Feb</td>
                                <td class="left-team">Mar</td>
                                <td class="left-team">Apr</td>
                                <td class="left-team">May</td>
                                <td class="left-team">Jun</td>
                                <td class="left-team">Jul</td>
                                <td class="left-team">Aug</td>
                                <td class="left-team">Sep</td>
                                <td>Oct</td>
                                <td>Nov</td>
                                <td>Dec</td>
                                </tr>
                                </tbody>
                                </table>

                            <table>
                                <tbody>

                                    <tr>
                                        <td class="left-team ">
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
										
										<img src="{{ asset('img/schedule/noti.jpg') }}" alt="">
										
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
										<img src="{{ asset('img/schedule/noti.jpg') }}">
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
										<img src="{{ asset('img/schedule/noti.jpg') }}">
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
										<img src="{{ asset('img/schedule/noti.jpg') }}">
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
									</tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


</div>
</div>


@endsection