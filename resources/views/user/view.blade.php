@extends('layouts.master')
@section('title', 'User | ' . $user->name)

@section('content')

  <h3> {{ $user->name }} is a user since {{ $user->created_at->diffForHumans() }} </h3>

  <hr />
  His entries:

  <code>We're working on this part, look again in a while</code>

@stop
