@extends('adminside.layouts.main')

@section('main-container')
            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-12">
                        <div class="text-center"><h3>Update User</h3></div>
                        <form name="update_user" action="{{url('/admin/updateuser/'.$user->id)}}" method="POST">
                            @csrf
                            Name <input name="name" type="text" class="form-control" value="{{$user->name}}">
                            Age <input name="age" type="text" class="form-control" value="{{$user->age}}">
                            Blood Group <input name="bloodgroup" type="text" class="form-control" value="{{$user->bloodgroup}}" readonly>
                            Email <input name="email" type="email" class="form-control" value="{{$user->email}}">
                            
                            Contact <input name="contact" type="text" class="form-control" value="{{$user->contact}}">
                            Address <textarea name="address" class="form-control" style="height: 150px;">{{$user->address}}</textarea><br>
                            <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success">Update User</button>
</div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Blank End -->

@endsection