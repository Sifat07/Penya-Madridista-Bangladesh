<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark navbar-light">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item"><a class="nav-link" data-widget="pushmenu"
			href="#" role="button"><i class="fas fa-bars"></i></a></li>
	</ul>

	<!-- Right navbar links -->
	<ul class="navbar-nav ml-auto">

		<!-- Notifications Dropdown Menu -->
		<li class="nav-item dropdown"><a class="nav-link"
			data-toggle="dropdown" href="#"> <i class="far fa-bell"></i> <span
				class="badge badge-warning navbar-badge">15</span>
		</a>
			<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
				<span class="dropdown-item dropdown-header">15 Notifications</span>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item"> <i class="fas fa-envelope mr-2"></i>
					4 new messages <span class="float-right text-muted text-sm">3 mins</span>
				</a>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item"> <i class="fas fa-users mr-2"></i>
					8 friend requests <span class="float-right text-muted text-sm">12
						hours</span>
				</a>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item"> <i class="fas fa-file mr-2"></i>
					3 new reports <span class="float-right text-muted text-sm">2 days</span>
				</a>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item dropdown-footer">See All
					Notifications</a>
			</div>
		</li>

		<li class="nav-item dropdown d-none d-sm-inline-block">
			<a class="nav-link" data-toggle="dropdown" href="#">
				<img src="{{ asset('dist/img/user2-160x160.jpg') }}" width="24px" class="img-circle" alt="User Image">
			</a>
			
			<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
<!-- 				<div class="image dropdown-header"> 
					<img src="{{ asset('dist/img/user2-160x160.jpg') }}" style="width: 6rem" class="img-circle elevation-2" alt="User Image">
				</div>-->
<!-- 				<span class="dropdown-footer">{{ Auth::user()->name }}</span> -->
				<span class="d-flex justify-content-center">{{ Auth::user()->name }}</span>
                <span class="d-flex justify-content-center">{{ Auth::user()->email }}</span>
				<form id="logout-form" action="{{ route('admin_logout') }}" method="post">
					@csrf
					<div class="btn-group dropdown-item ">
						<!--<a type="button" href="#" class="btn btn-primary dropdown-footer">Profile</a>
						 <a type="button" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                    this.closest('form').submit();"
                            class="btn btn-danger dropdown-footer">Logout
                        </a> -->
						<button type="submit" class="btn btn-danger dropdown-footer">Logout</button>
					</div>
				</form>
			</div>
		</li>

		<li class="nav-item">
			<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
				<i class="fas fa-th-large"></i>
			</a>
		</li>
	</ul>
</nav>
<!-- /.navbar -->