@extends('layouts.master')

@section('title', 'Add Entry')

@section('content')

<h3> Add New Entry </h3>

<form action = {{ URL::route('createEntry') }} method = "post">
  {{ csrf_field() }}
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" placeholder="Title" name="title" />
  </div>

  <div class="form-group">
    <label>Content</label>
    <textarea class="form-control" placeholder="Write here" name="content"></textarea>
  </div>

  <div class="form-group">
    <label>Price</label>
    <input type="decimal" class="form-control" placeholder="Price" name="price" />
  </div>

  <div class="row">
    <div class="col-md-6">
      Currency
      <div class="radio">
        <label><input type="radio" name="currency" value="INR" />INR</label>
      </div>
      <div class="radio">
        <label><input type="radio" name="currency" value="USD" />USD</label>
      </div>
    </div>

    <div class="col-md-6">
      Audience
      <div class="checkbox">
        <label><input type="checkbox" name="audience[]" value="kids">Kids</label>
      </div>
      <div class="checkbox">
        <label><input type="checkbox" name="audience[]" value="teens">Teens</label>
      </div>
      <div class="checkbox">
        <label><input type="checkbox" name="audience[]" value="adults">Adults</label>
      </div>
    </div>
  </div>


  <div class="form-group">
    <label>Location</label>
    <select name="location" class="form-control">
      <option>Dwarka</option>
      <option>Rajouri Garden</option>
      <option>Saket</option>
      <option>Janak Puri</option>
    </select>
  </div>

  <input type="submit" class="btn btn-primay" value="Submit" />
</form>

@endsection
