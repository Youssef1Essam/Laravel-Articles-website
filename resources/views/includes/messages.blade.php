
@if(session()->has('errors'))
<div class="card alert alert-danger">
    <div class="card-body">
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
    </div>
</div>
@endif

@if(session()->has('message'))
<div class="card alert alert-success">
    <div class="card-body">
    {{ session('message') }}
</div>
</div>
@endif
