@extends('layouts.app')
@section('content')
<div class="container">
  <div class="titlebar">
    <a class="btn btn-secondary float-end mt-3" href="{{ route('parts.create') }}" role="button">Add Part</a>
    <h1>Mini part list</h1>
  </div>
    
  <hr>
  <!-- Message if a part is posted successfully -->
  @if ($message = Session::get('success'))
  <div class="alert alert-success">
    <p>{{ $message }}</p>
  </div>
  @endif
         @if (count($parts) > 0)
    @foreach ($parts as $part)
      <div class="row">
        <div class="col-12">
          <div class="row">
            <div class="col-2">
              <img class="img-fluid" style="max-width:50%;" src="{{ asset('images/'.$part->image)}}" alt="">
            </div>
            <div class="col-10">
              <h4>{{$part->title}}</h4>
            </div>
          </div>
          <p>{{$part->description}}</p>
          <hr>
        </div>
      </div>
    @endforeach
  @else
    <p>No Parts found</p>
  @endif
</div>
@endsection