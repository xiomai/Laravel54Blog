@extends('layouts.main')

@section('content')
  <div class="marketing">
    <h1>{{ $blog->title }}</h1>
    <p>
      <span class="label label-default">{{ $blog->user->name }}</span>
      <span class="label label-info">{{ $blog->created_at->format('g:ia \o\n l jS F Y') }}</span>
    </p>
    <p>{{ $blog->content }}</p>
    
    @if(auth()->user() && auth()->user()->id == $blog->user->id)
    <a href="{{ url('blog/edit/'.$blog->id) }}" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
    @endif
  </div>
@endsection
