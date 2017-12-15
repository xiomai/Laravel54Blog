@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Blog</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/blog/update/'.$blog->id) }}">
                      {{ csrf_field() }}
                      <fieldset>
                        <legend>Edit Blog Form</legend>
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ $blog->title }}" autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                            <label for="content" class="col-md-4 control-label">Content</label>

                            <div class="col-md-6">
                                <textarea id="content" class="form-control" name="content" required>{{ $blog->content }}</textarea>

                                @if ($errors->has('content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </div>
                        </div>
                      </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
