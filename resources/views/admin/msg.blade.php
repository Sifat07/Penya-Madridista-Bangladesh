@if(session('successMsg'))
    <div class="alert alert-success" role="alert">
      <strong>{{ session('successMsg') }}</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
@endif

@if ($errors->any())
  @foreach ($errors->all() as $error)
      <div class="alert alert-danger" role="alert">
        <strong>{{ $error }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  @endforeach
@endif