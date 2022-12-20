@extends('layouts.contact')
@section('content')
<div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Contact</h4>
                        @if (Session::has('Success'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('Success')}}
                        </div>

                        @endif
                    </div>
                    <div class="card-body">
                        <form action="{{url('contact/contacts/save')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="full_name">Full Name</label>
                                <input type="text" name="full_name" class="form-control">
                                @error('full_name')<small class="text-danger">{{$message}}</small>@enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phone_number">Phone Number</label>
                                <input type="text" name="phone_number" class="form-control">
                                @error('phone_number')<small class="text-danger">{{$message}}</small>@enderror

                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email">Email Address</label>
                                <input type="email" name="email" class="form-control">
                                @error('email')<small class="text-danger">{{$message}}</small>@enderror

                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control">
                                @error('image')<small class="text-danger">{{$message}}</small>@enderror

                            </div>

                            </div>
                            <div class="col-md-12 mb-3 text-center">
                                <button type="submit" class="btn btn-primary">Save</button>

                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
</div>
@endsection