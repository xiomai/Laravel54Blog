@extends('layouts.main')

@section('content')
  <div class="marketing">
    <h1>{{ $data['pageName'] }} Page</h1>
    @if( array_has($data, 'code_languages') )
    <p class="lead">I am Juan Dela Cruz and my code languages are: </p>
    <ul class="list-group">
      @foreach($data['code_languages'] as $language)
      <li class="list-group-item">{{ $language }}</li>
      @endforeach
    </ul>
    @else
      <p class="lead">Hi! I am Juan Dela Cruz.</p>
    @endif
  </div>
@endsection

