@extends('layouts.master')
@section('title', 'Entry | ' . $entry->title)

@section('content')

  <h3> {{ $entry->title }} <small> for {{ $entry->audience }} </small>
    <h5> Posted {{ $entry->created_at->diffForHumans() }}</h5>
  </h3>

  <article> {{ $entry->content }}</article>

  <div> {{ $entry->currency . " " . $entry->price }} </div>

  <div> {{ $entry->location }} </div>

@stop
