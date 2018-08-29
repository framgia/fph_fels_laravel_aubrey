@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-md-offset-2">
            <div class="panel">
                <div class="panel-heading"><h2> All Categories </h2></div>
                <div class="panel-body">
                    <ul class="list-group">
                        @foreach($categories as $category)
                            <form method="post" action="#">
                                {{ csrf_field() }}
                                <li class="list-group-item"> <a href="#"> <h2>{{ $category->title }}</h2> </a> <p> {{ $category->desc }} </p></li>
                            </form>
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