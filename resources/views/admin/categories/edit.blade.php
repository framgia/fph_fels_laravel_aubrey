@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-md-offset-2">
            <div class="panel">
                <div class="panel-heading">
                    <h2> Edit A Category </h2>
                </div>
                <div class="panel-body">
                    <form action="{{ route('admin.categories.update', $category) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ is_null(old('title')) ? $category->title : old('title')}}">
                        </div>
                        
                        <div class="form-group">
                            <label for="desc">Description</label>
                            <textarea class="form-control" id="desc" rows="3" name="desc">{{ is_null(old('desc')) ? $category->desc : old('desc')}}</textarea>
                        </div>
                        @include('layouts.back')
                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection