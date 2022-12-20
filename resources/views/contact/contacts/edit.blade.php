@extends('layouts.contact')
@section('content')
 
<div class="card">
  <div class="card-header"><h4>Edit Contact</h4></div>
  <div class="card-body">
      
      <form action="{{ url('contact/contacts/update') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="id" id="id" value="{{$contacts->id}}" />
      <div class="row">
          <div class="col-md-6 mb-3">
          <label>Full Name</label></br>
          <input type="text" name="full_name" id="full_name" value="{{$contacts->full_name}}" class="form-control"></br>
          @error('full_name')<small class="text-danger">{{$message}}</small>@enderror
          </div>

          <div class="col-md-6">
          <label>Phone Number</label></br>
          <input type="text" name="phone_number" id="phone_number" value="{{$contacts->phone_number}}" class="form-control"></br>
          @error('phone_number')<small class="text-danger">{{$message}}</small>@enderror

          </div>

          <div class="col-md-6">
          <label>Email</label></br>
          <input type="email" name="email" id="email" value="{{$contacts->email}}" class="form-control"></br>
          @error('email')<small class="text-danger">{{$message}}</small>@enderror
          </div>
          
          <div class="col-md-6">
          <label>Image</label>
          <input type="file" name="image" id="image" value="{{$contacts->image}}" class="form-control"></br>
          @error('image')<small class="text-danger">{{$message}}</small>@enderror

          </div>
      </div>
      <div class="col-md-12 mb-3 text-center">
        <input type="submit" value="update" class="btn btn-primary"></br>
      </div>
    </form>
   
  </div>
</div>
 
@endsection