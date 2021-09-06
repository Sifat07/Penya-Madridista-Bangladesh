@extends('admin.master_admin')

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
                        <h3 class="card-title">Add New</h3>
                        <div class="card-tools">
                            <a class="btn btn-tool" href="{{ url('admin/list-speciality') }}">List</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ url('/admin/store-speciality') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Speciality Title" required>
                            </div>
                            
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" id="customRadio1" name="status" value="1" checked>
                                            <label for="customRadio1" class="custom-control-label">Active</label>
                                        </div>
                                    </div>
                                    <div class="col-md-11">
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" id="customRadio2" name="status" value="0">
                                            <label for="customRadio2" class="custom-control-label">Inactive</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ url('admin/list-speciality') }}" class="btn btn-secondary float-right">Back</a>
                        </div>
                    </form>
                </div>
                <!-- /.card -->

            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<!-- Toastr -->
<!-- <script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>
<script>
    @if(session('successMsg'))
        $(document).Toasts('create', {
            class: 'bg-success',
            title: 'Success',
            autohide: true,
            delay: 2000,
            body: '{{ session("successMsg") }}'
        })
    @endif

    @if(session('failureMsg'))
        $(document).Toasts('create', {
            class: 'bg-danger',
            title: 'Failed',
            autohide: true,
            delay: 2000,
            body: '{{ session("successMsg") }}'
        })
    @endif
</script> -->
@endsection
