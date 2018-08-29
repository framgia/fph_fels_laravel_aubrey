@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-md-offset-2">
            <div class="panel">
                <div class="panel-heading">
                    <h2>All Members</h2>
                    <div class="pull-right"> {{ $users->links() }} </div>
                </div>

                <br><br><br>
                <div class="panel-body">
                    <ul class="list-group">
                        @foreach($users as $user)
                            <form method="post" action="#">
                                {{ csrf_field() }}
                                <li class="list-group-item"> <img src="/uploads/avatars/{{ $user->avatar }}" style="width:50px;height:50px;"> <a href="{{ route('users.show', $user) }}"> {{ $user->name }} <button class="btn btn-success btn-sm" type="submit" name="submit"> Follow </button></li>
                            </form>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection