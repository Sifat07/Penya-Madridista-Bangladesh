@extends('admin.master_admin')

@section('style')
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div style="height: 3.5rem" >
            @include('admin.msg')
        </div>
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-sm-12 col-md-12">

                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Docotr</h3>
                        <div class="card-tools">
                            <a class="btn btn-tool" href="{{ url('admin/list-doctor') }}">List</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ url('/admin/store-doctor') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $data->name }}" placeholder="Enter Name" required>
                            </div>
                            <div class="form-group">
                                <label for="speciality">Speciality <span class="text-danger">*</span></label>
                                <div class="select2-purple">
                                    <select class="select2" id="speciality-selector" multiple="multiple" data-placeholder="Select a Speciality" data-dropdown-css-class="select2-primary" style="width: 100%;" required>
                                        @php
                                            $selected_speciality = explode(',', $data->speciality);
                                        @endphp
                                        @foreach( $specialities as $speciality )
                                            <option  value="{{ $speciality->id }}" >{{ $speciality->name }}</option>
                                        @endforeach
                                    </select>
                                    <input type="hidden" value="{{ $data->speciality }}" name="speciality" id="speciality">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" name="email" class="form-control" id="email" value="{{ $data->email }}" placeholder="Enter email">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                                <div class="progress-wrapper">
                                    <div id="progress-bar-file1" class="progress"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" id="customRadio1" name="status" value="1">
                                            <label for="customRadio1" class="custom-control-label">Active</label>
                                        </div>
                                    </div>
                                    <div class="col-md-11">
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" id="customRadio2" name="status" value="0" checked>
                                            <label for="customRadio2" class="custom-control-label">Inactive</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
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
<!-- Select2 -->
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>

<script>
    $('.select2').select2();
    $('.select2').val( {!! json_encode($selected_speciality) !!} );
    
    $('.select2').trigger('change');

    $('#speciality-selector').on( "change", ()=>{
        selected = [];
        $('#speciality-selector').find(':selected').each((index, elem)=>{
            selected.push($(elem).val());
        });
        $('#speciality').val(selected.toString());
    });

    $('#exampleInputFile').change(function(){
        console.log('start uploading');
        postFile();
    })

    function postFile() {
        var formdata = new FormData();

        formdata.append('_token', $('meta[name="csrf-token"]').attr('content'));
        formdata.append('file1', $('#exampleInputFile')[0].files[0]);
        
        var request = new XMLHttpRequest();

        request.upload.addEventListener('progress', function (e) {
            var file1Size = $('#exampleInputFile')[0].files[0].size;

            if (e.loaded <= file1Size) {
                var percent = Math.round(e.loaded / file1Size * 100);
                $('#progress-bar-file1').width(percent + '%').html(percent + '%');
            } 

            if(e.loaded == e.total){
                $('#progress-bar-file1').width(100 + '%').html(100 + '%');
            }
        });   

        request.open('post', '{{ url("admin/upload-image") }}');
        request.timeout = 45000;
        request.send(formdata);
    }
</script>
@endsection