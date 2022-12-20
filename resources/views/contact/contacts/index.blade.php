@extends('layouts.contact')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>My Contacts</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/contact/contacts/create') }}" class="btn btn-primary btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        @if (Session::has('Success'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('Success')}}
                        </div>

                        @endif
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Full Name</th>
                                        <th>Phone Number</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $con)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td> <img src="{{URL::asset('/uploads/contact/'.$con->image)}}" class="avatar avatar-sm rounded-circle me-3" alt=""> {{ $con->full_name }}</td>
                                        <td>{{ $con->phone_number }}</td>
                                        <td>{{ $con->email }}</td>
                                        <td></td>
 
                                        <td>
                                            <a href="{{ url('/contact/contacts/edit/'.$con->id)}}" title="Edit Contact"><button class="btn btn-primary btn-sm"> Edit</button></a>
                                            <a href="{{ url('/contact/contacts/delete/'.$con->id)}}" title="Delete Contact"><button class="btn btn-danger btn-sm"></i> Delete</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection