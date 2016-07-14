@extends('templates.default')
@section('content')


    <h3>Sign Up To SNS, its free, plus we don't track you.</h3>
 


<div class="row">
    <div class="col-lg-6">
        <form class="form-vertical" role="form" method="post" action="{{route('auth.signup')}}">
          {{ csrf_field() }}

            <div class="form-group {{$errors->has('email')?'has-error':''}}">
                <label for="email" class="control-label">Your email address</label>
                <input type="text" name="email" class="form-control" id="email" value="{{old('email')}}">
                @if($errors->has('email')?'has-error':'')
                  <span class="help-block">{{$errors->first('email')}}</span>
                @endif
            </div>
            <div class="form-group {{$errors->has('username')?'has-error':''}}">
                <label for="username" class="control-label">Choose a username</label>
                <input type="text" name="username" class="form-control" id="username" value="{{old('username')}}">
                @if($errors->has('username')?'has-error':'')
                  <span class="help-block">{{$errors->first('username')}}</span>
                @endif
            </div>
            <div class="form-group {{$errors->has('password')?'has-error':''}}">
                <label for="password" class="control-label">Choose a password</label>
                <input type="password" name="password" class="form-control" id="password">
                @if($errors->has('password')?'has-error':'')
                  <span class="help-block">{{$errors->first('password')}}</span>
                @endif
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-default">Sign up</button>
            </div>
        </form>
    </div>
</div>
@stop
