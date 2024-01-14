@extends('adminside.layouts.main')

@section('main-container')
            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-12">
                        <div class="text-center"><h3>Update Donation</h3></div>
                        <form name="update_donation" action="{{url('/admin/updatedonation/'.$donation->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            Donor 
                            {{-- <input name="donor_id" type="text" class="form-control" value="{{$donation->donor_id}}"> --}}
                            <select class="form-select mb-3" name="donor_id">
                                <option value="">Choose a Donor ...</option>
                                @foreach($users as $user)
                                @if($user->id == $donation->donor_id)
                                <option value="{{$user->id}}" selected>{{$user->name}}</option>
                                @else
                                <option value="{{$user->id}}">{{$user->name}}</option>
                                @endif
                                @endforeach
                            </select>
                            Receiver 
                            {{-- <input name="receiver_id" type="text" class="form-control" value="{{$donation->receiver_id}}"> --}}
                            <select class="form-select mb-3" name="receiver_id">
                                <option value="">Choose a Receiver ...</option>
                                @foreach($users as $user)
                                @if($user->id == $donation->receiver_id)
                                <option value="{{$user->id}}" selected>{{$user->name}}</option>
                                @else
                                <option value="{{$user->id}}">{{$user->name}}</option>
                                @endif
                                @endforeach
                            </select>
                            Organ Name <input name="name" type="text" class="form-control" value="{{$donation->name}}">
                            Organ Image<br> 
                            <div class="text-center"><img src="{{url('uploads/donations/'.$donation->image)}}" class="rounded" width="250" /></div>
                            <br>Upload a new Image
                            <input name="image" type="file" class="form-control"> 
                            <br>Status
                            <select name="status" class="form-select mb-3" aria-label="Default select example">
                                @if($donation->status == 'Pending')
                                <option value="Pending" selected>Pending</option>
                                <option value="Approved">Approve</option>
                                @else
                                <option value="Pending">Pending</option>
                                <option value="Approved" selected>Approve</option>
                                @endif
                            </select><br>
                            <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success">Update Donation</button>
</div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Blank End -->

@endsection