@extends('layouts.app')

@section('admin_content')

    <div class="card-header">{{ __('Edit Articles') }}</div>

    <div class="card-body">
        <form enctype="multipart/form-data" class="form-horizontal" action="{{ url('/admin/update/'.$article->id) }}" method="post">

            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT"/>
            <div class="form-group mb-2">
                <input class="form-control" type="text" name="title" placeholder="title here" value="{{$article->title}}">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="body" id="myTextarea" style="width: 100%" placeholder="type here">{{$article->body}}</textarea>
            </div>
            <div class="form-group">
                <input class="form-control mt-2" type="file" name="thumbnail" accept="/image/*"/>
            </div>
            <div class="form-group">
                <input class="btn btn-dark my-3" type="submit" value="Edit"/>
            </div>
        </form>
    </div>

@endsection
