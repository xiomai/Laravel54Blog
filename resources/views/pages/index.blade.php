@extends('layouts.main')

@section('content')
  <div class="jumbotron">
    <h1>{{ $pageName }} Page</h1>
    <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
  </div>
  @if(isset($blogs) && $blogs->count() > 0)
  <div class="row">
    @foreach($blogs as $blog)
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">{{ $blog->title }} <span class="label label-primary">{{ $blog->user->name }}</span></div>
        <div class="panel-body">
          {{ str_limit($blog->content, 10) }}
          <br />
          <a href=" {{ url('blog/'.$blog->id) }}" class="btn btn-info">Read more</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  @endif
@endsection

