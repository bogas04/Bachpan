@extends('layouts.master')
@section('title', 'Bachpan | Home')

@section('content')

  <h1> Welcome {{ $user->name }} </h1>

  @foreach($entries as $entry)
    <h3> <a href="/entry/{{$entry->id}}"> {{ $entry->title }}</a> <small> for {{ $entry->audience }} </small>
      <h5> Posted {{ $entry->created_at->diffForHumans() }}</h5>
    </h3>

    <article> {{ $entry->content }}</article>

    <div> {{ $entry->currency . " " . $entry->price }} </div>

    <div> {{ $entry->location }} </div>
    <hr />
  @endforeach

@stop
