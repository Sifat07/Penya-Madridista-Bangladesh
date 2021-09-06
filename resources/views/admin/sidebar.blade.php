<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/admin/dashboard') }}" class="brand-link">
        <img src="{{ asset('dist/img/logo.png') }}" alt="APPOINTMENT" class="brand-image "
                style="opacity: .8">
        <span class="brand-text font-weight-light">PMBD</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                
                <li class="nav-item">
                    <a href="{{ url('admin/list-speciality') }}" class="{{ Request::is('admin/*-speciality') || Request::is('admin/*-speciality/*') ? 'active' : '' }} nav-link">
                        <i class="fa fa-pen-square nav-icon"></i>
                        <p>Add Product</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ url('admin/list-doctor') }}" class="{{ Request::is('admin/*-doctor') ? 'active' : '' }} nav-link">
                        <i class="fa fa-pen-square nav-icon"></i>
                        <p>Update Data</p>
                    </a>
                </li>
                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>