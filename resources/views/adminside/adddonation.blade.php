@extends('adminside.layouts.main')

@section('main-container')
            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-6 text-center">
                        <h3>Add Donation</h3>
                    </div>
                    <form name="update_user" action="{{url('/admin/adddonation/')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        Organ Name <input name="name" type="text" class="form-control mb-3" value="">
                        Organ Image <input name="image" type="file" class="form-control mb-3">
                        Donor 
                        {{-- <input name="donor_id" type="text" class="form-control" value=""> --}}
                        <select name="donor_id" class="form-select mb-3">
                            <option value="" selected>Choose a Donor ...</option>
                            @foreach ($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                        Receiver 
                        {{-- <input name="receiver_id" type="text" class="form-control" value=""> --}}
                        <select name="receiver_id" class="form-select mb-3">
                            <option value="" selected>Choose a Receiver ...</option>
                            @foreach ($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                        Status
                        <select class="form-select mb-3" aria-label="Default select example" name="status">
                            <option value="Pending" selected>Pending</option>
                            <option value="Approved">Approve</option>
                        </select><br>
                        <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Add Donation</button>
</div>
                    </form>
                </div>
            </div>
            <!-- Blank End -->

@endsection