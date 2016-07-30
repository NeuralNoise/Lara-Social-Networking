@extends('templates.default')
@section('content')
<h2>Profile Page for {{$user->getNameOrUsername()}}</h2>
@stop
