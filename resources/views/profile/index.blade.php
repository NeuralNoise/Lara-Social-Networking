@extends('templates.default')
@section('content')
 <div class="row">
    <div class="col-lg-5">
        <!-- User information and statuses -->
        @include('users.partials.userblock')
        <hr>

    </div>
    <div class="col-lg-4 col-lg-offset-3">
        <!-- Friends, friend requests -->
    </div>
</div>
@stop
