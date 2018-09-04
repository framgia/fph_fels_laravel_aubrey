@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-md-offset-2">
            <div class="panel">
            	<div class="panel-heading">
                    <div class="panel-title pull-left">
            		  <h2> {{ $category->title }} </h2>
                    </div>
                    <div class="panel-title pull-right">
                        <a href="{{ route('admin.words.create', $category) }}" class="btn btn-primary btn-lg active" role="button">Add Word</a>
                    </div>
                    <div class="clearfix"></div>
            	</div>
            	<div class="panel-body">
                    @include('admin.words._index', ['category' => $category])
            	</div>
            </div>
        </div>
    </div>
</div>

@endsection