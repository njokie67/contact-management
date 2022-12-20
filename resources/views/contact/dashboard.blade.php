@extends('layouts.contact')
@section('content')

<div class="card mx-auto" style="width: 25rem;">
  <img src="{{ url('/contact/images/contactnumber.jpg') }}" class="card-img-top" alt="Number of Contacts"/>
  <div class="card-text mx-auto mt-2">
  <h4>Contacts</h4>
  </div>
  <div class="card-body mx-auto">
    <h5>  {{\App\Models\Contact::where('user_id',auth()->user()->id)->get()->count()}} </h5>

  </div>
</div>
@endsection