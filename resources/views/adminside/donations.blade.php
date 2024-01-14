@extends('adminside.layouts.main')

@section('main-container')
            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-12 text-center">
                        <h3>Manage Donations</h3>
                        <div class="float-end"><a href="/admin/adddonation" class="btn btn-primary">New Donation</a></div>
                        <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">#</th>
                                    <th scope="col">Donor Name</th>
                                    <th scope="col">Receiver Name</th>
                                    <th scope="col">Organ Name</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($donations as $donation)
                                <tr>
                                    <td>{{$donation->id}}</td>
                                    <td>{{$donation->donor['name']}}</td>
                                    <td>@if(isset($donation->receiver['name'])) {{$donation->receiver['name']}} @endif </td>
                                    <td>{{$donation->name}}</td>
                                    @if($donation->status == 'Pending')
                                    <td><span class="badge bg-warning">{{$donation->status}}</span></td>
                                    @else
                                    <td><span class="badge bg-success">{{$donation->status}}</span></td>
                                    @endif
                                    
                                    <td><img src="{{url('uploads/donations/'.$donation->image)}}" width="90" /></td>
                                    
                                    <td><a class="btn btn-sm btn-success" href="{{url('/admin/updatedonation/'.$donation->id)}}">Update</a> <a class="btn btn-sm btn-primary" href="{{url('/admin/deletedonation/'.$donation->id)}}">Delete</a></td>
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