@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-2 col-md-offset-2">
            <div class="panel">
                <div class="panel-body">
                    <div class="text-center">
                        <div class="avatar">
                            <div class="default">
                                <img src="/uploads/avatars/{{ $user->avatar }}" style="width:100px;height:100px;">
                            </div>
                        </div>

                        <h2>{{ $user->name }}</h2>
                    
                        @if($user == Auth::user())
                        <div class="btn-group-justified">
                            <a class="btn btn-primary" href="{{ route('users.edit', Auth::user() ) }}">Edit Profile</a>
                        </div>
                        @endif
                        <hr>
                        
                        <div class="row mt-15">
                            <div class="col-sm-6">
                                <strong><a href="#">6</a></strong>
                                <div>following</div>
                            </div>
                                <div class="col-sm-6">
                                    <strong><a href="#">2</a></strong>
                                <div>followers</div>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="media">
                        <div class="media-body">
                            <div class="btn-group btn-group-justified">
                                <div class="well text-center">
                                    <h4>13</h4>
                                    <small>words learned</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="activity-feed">
                <div class="well pt-0">
                    <div class="page-header mt-0 text-center"><h2>Activities</h2></div>
                    <div class="media">             
                        <div class="media-left media-middle">
                            <div class="avatar square">
                                <div class="default">
                                    <i class="glyphicon glyphicon-user"></i>
                                </div>
                            </div>
                        </div>

                        <div class="media-body media-middle">
                            <a href="/users/58">You</a> learned 1 of 5 in <a href="/lessons/79">Automotive, Outdoors &amp; Beauty</a>

                            <div>
                                <small class="text-muted">about 13 hours ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
