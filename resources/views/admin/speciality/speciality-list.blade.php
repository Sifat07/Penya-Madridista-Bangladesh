@extends('admin.master_admin')

@section('style')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <style>
        table tr {
            text-align: center;
        }
    </style>
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
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">List</h3>
                        <div class="card-tools">
                            <a class="btn btn-tool" href="{{ url('admin/add-speciality') }}">Add New</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="listtable" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $row)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{!! $row->status == 1 ? '<span class="badge bg-success">active</span>' : '<span class="badge bg-warning">Inactive</span>' !!}</td>
                                        <td>
                                            <form role="form" action="{{ url('/admin/delete-speciality', $row->id) }}" method="post">
                                                @csrf
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <button type="button" class="btn btn-sm btn-success edit-item" elem_id="{{ $row->id }}">Edit</button>
                                                    <button type="button" class="btn btn-sm btn-danger delete-item" elem_id="{{ $row->id }}" data-toggle="modal" data-target="#confirmation-modal">Delete</button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="confirmation-modal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content ">
            <div class="modal-header bg-warning">
                <h4 class="modal-title">Delete</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light btn-danger confirm-delete" data-dismiss="modal">Yes</button>
                <button type="button" class="btn btn-outline-light btn-default" data-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
@endsection

@section('script')
<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script>
    $('#listtable').DataTable({
        "paging": true,
        "searching": true,
        "ordering": true,
        // "autoWidth": false,
        // "responsive": false,
    });
</script>

<script>
    let prompt_to_delete = null;
    $('#confirmation-modal .confirm-delete').on('click', function(){       
        $('.delete-item[elem_id="'+prompt_to_delete+'"]').closest('form').submit();
        prompt_to_delete = null;
    });

    $('.delete-item').click(function(){
        prompt_to_delete = $(this).attr('elem_id');
    });

    $('.edit-item').click(function(){
        window.location.href = "{{ url('admin/edit-speciality') }}"+"/"+$(this).attr('elem_id');
    });
</script>

@endsection