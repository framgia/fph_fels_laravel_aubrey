@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
	    <div class="col-sm-8 col-md-offset-2">
	        <div class="panel">
	            <div class="panel-body">
	            	
	            	<div class="panel-heading"><h2><strong>Edit Profile</strong></h2></div>

	            	<form enctype="multipart/form-data" class="form-horizontal" method="POST" action="{{ route('users.update', $user )}}">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="col-sm-11 col-md-offset-1">
                            <img src="/uploads/avatars/{{ $user->avatar }}" style="width:100px;height:100px;">
                            <input id=avatar type="file" name="avatar" value="{{ is_null(old('avatar')) ? $user->avatar : old('avatar') }}">
                            <br>
                        </div>
                        
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ is_null(old('name')) ? $user->name : old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value=" {{ is_null(old('name')) ? $user->email : old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
	            </div>
	        </div>
	    </div>
	</div>
</div>
@endsection