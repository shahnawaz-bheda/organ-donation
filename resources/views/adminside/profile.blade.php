@extends('adminside.layouts.main')

@section('main-container')
            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-secondary rounded">
                    <br>
                    <div class="text-center"><h3>Edit Profile</h3></div>
                    <div class="col-md-4 text-center">
                        <img src="{{url('adminside/img/S_S.png')}}" class="rounded-circle" width="150"><br><br>
                        <h6 class="mb-0">{{Auth::guard('admin')->user()->name}}</h6>
                        <span>Admin</span>
                    </div>
                    <div class="col-md-8">
                        <form action="/admin/profile" method="POST">
                            @csrf
                    Name
                    <input type="text" class="form-control" value="{{Auth::guard('admin')->user()->name}}" readonly /><br>
                    Email Address
                    <input type="email" name="email" class="form-control" value="{{Auth::guard('admin')->user()->email}}" /><br>
                    New Password
                    <input type="password" name="password" class="form-control" value="" /><br>
                    <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Update Profile</button>
            </form>
                </div>
            </div>
        </div>
                
        </div>
 <!-- Blank End -->

@endsection