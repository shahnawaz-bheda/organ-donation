@extends('adminside.layouts.main')

@section('main-container')
            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-12 text-center">
                        <h3>Manage Users</h3>
                        <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Blood <br>Group</th>
                                    <th scope="col">Email</th>
                                    
                                    <th scope="col">Contact</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->age}}</td>
                                    <td>{{$user->bloodgroup}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->contact}}</td>
                                    <td>{{$user->address}}</td>
                                    <td><a class="btn btn-sm btn-success" href="{{url('/admin/updateuser/'.$user->id)}}">Update</a> <a class="btn btn-sm btn-primary" href="{{url('/admin/deleteuser/'.$user->id)}}">Delete</a></td>
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
            <!-- Blank End -->

@endsection