@extends('layouts.app')

@section('admin_content')

    <div class="card-header">{{ __('Dashboard panel') }}</div>

    <div class="card-body">
        <form enctype="multipart/form-data" class="form-horizontal" action="{{ url('/admin/store') }}" method="post">

            {{ csrf_field() }}
            <div class="form-group mb-2">
                <input class="form-control" type="text" name="title" placeholder="title here">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="body" id="myTextarea" style="width: 100%" placeholder="type here"></textarea>
            </div>
            <div class="form-group">
                <input class="form-control mt-2" type="file" name="thumbnail" accept="/image/*"/>
            </div>
            <div class="form-group">
                <input class="btn btn-dark my-3" type="submit" value="Share"/>
            </div>
        </form>
    </div>

@endsection
