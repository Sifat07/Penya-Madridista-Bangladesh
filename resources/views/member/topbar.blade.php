<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark static static">
<div class="container-fluid">
<a clss="navbar-brand" href="#"><img src="{{ asset('img/logo.png') }}"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" 
data-target="#navbarResponsive">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarResponsive">
	<ul class="navbar-nav ml-auto">
		<li class="navbar-item">
			<a class="nav-link" href="dashboard">Home</a>
		</li>
		<li class="navbar-item">
			<a class="nav-link" href="membership">Membership</a>
		</li>
		<li class="navbar-item">
			<a class="nav-link" href="upcoming_matches">Matches</a>
		</li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="visit_store" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Shop
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        
        <a class="dropdown-item" href="visit_store">Products</a>
        <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="cart">Shopping Cart</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="checkout">Product Checkout</a>
          
        </div>
      </li>
    
		<li class="navbar-item">
			<a class="nav-link" href="aboutus">About</a>
		</li>

    <li class="nav-item dropdown d-none d-sm-inline-block">
            @if( !empty($user->id) )
<!--             <a class="nav-link" data-toggle="dropdown" href="#">{{ Auth::user()->name }}</a> -->
			<a class="nav-link" data-toggle="dropdown" href="#">
				<img src="{{ asset('dist/img/user2-160x160.jpg') }}" width="24px" class="img-circle" alt="User Image">
			</a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div class="image dropdown-header">
                    <img src="{{ asset('dist/img/user2-160x160.jpg') }}" style="width: 6rem" class="img-circle elevation-2" alt="User Image">
                </div>
                <span class="d-flex justify-content-center">{{ Auth::user()->name }}</span>
                <span class="d-flex justify-content-center">{{ Auth::user()->email }}</span>
                <form action="{{ route('member_logout') }}" method="post" >
                    @csrf
                    <div class="btn-group dropdown-item ">
                        <a type="button" href="#" class="btn btn-primary dropdown-footer">Profile</a>
                        <!-- <a type="button" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                    this.closest('form').submit();"
                            class="btn btn-danger dropdown-footer">Logout
                        </a> -->
                        <button type="submit" class="btn btn-danger dropdown-footer">Logout</button>
                    </div>
                </form>
            </div>
            @else
            <a href="{{ route('member_login') }}" class="nav-link">Login</a>
            @endif
        </li>
        
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>




    </ul>
</nav>
<!-- /.navbar -->