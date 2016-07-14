@extends('templates.default')
@section('content')
  <h3> Your Search For "{{Request::input('searchquery')}}" </h3>

@if(!$users->count())
<p> No Results Found </p>
@else
  <div class="row">
    @foreach($users as $user)
      @include('users.partials.userblock')
    @endforeach
  </div>
@endif


@stop
