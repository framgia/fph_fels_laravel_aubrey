@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-md-offset-2">
            <div class="panel">
                <div class="panel-heading">
                    <h1> {{ $category->title }} </h1>
                </div>
                <div class="panel-body">
                    <form action="{{ route('admin.words.store', $category) }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="word">Word</label>
                            <input type="text" class="form-control" id="word" name="word">
                        </div>
                        
                        <a href="{{ URL::previous() }}" class="btn btn-primary pull-left" role="button"> Back </a>
                        <button type="submit" class="btn btn-primary pull-right">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
