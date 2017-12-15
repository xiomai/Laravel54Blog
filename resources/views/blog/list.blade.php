@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Blog List</div>

                <div class="panel-body">
                  <div class="list-group">
                    @foreach($blogs as $blog)
                    <a href="#" class="list-group-item">
                      <h4 class="list-group-item-heading">{{$blog->title}}</h4>
                      <p class="list-group-item-text">{{ str_limit($blog->content, 10) }}</p>
                    </a>
                    @endforeach
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
