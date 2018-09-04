@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-md-offset-2">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title pull-left">
                        <h2> All Categories </h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        @foreach($categories as $category)
                            <li class="list-group-item">
                                <h2>{{ $category->title }}</h2>
                                <p> {{ $category->desc }} </p>
                            </li>
                        @endforeach
                    </ul>
                    <div class="text-center">
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection