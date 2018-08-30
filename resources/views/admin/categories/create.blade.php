@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-md-offset-2">
            <div class="panel">
                <div class="panel-heading">
                    <h2> Create A Category </h2>
                </div>
                <div class="panel-body">
                    <form action="{{ route('admin.categories.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="form-group">
                            <label for="desc">Description</label>
                            <textarea class="form-control" id="desc" rows="3" name="desc"></textarea>
                        </div>
                        <div class="pull-left">
                            <a href={{ URL::previous() }} class="btn btn-primary" role="button"><i class="glyphicon glyphicon-step-backward" aria-hidden="true"></i> Back </a>
                        </div>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection