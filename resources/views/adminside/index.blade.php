@extends('adminside.layouts.main')

@section('main-container')
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Donations Done</p>
                                <h6 class="mb-0">{{$donationsCount}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Users</p>
                                <h6 class="mb-0">{{$usersCount}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Donations Approved</p>
                                <h6 class="mb-0">{{$donationsApprovedCount}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Donations Pending</p>
                                <h6 class="mb-0">{{$donationsPendingCount}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Recent Donations</h6>
                                <a href="">Show All</a>
                            </div>
                            <canvas id="worldwide-sales"></canvas>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">User Activity</h6>
                                <a href="">Show All</a>
                            </div>
                            <canvas id="salse-revenue"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Recent Donations</h6>
                        <a href="/admin/donations">Show All</a>
                    </div>
                    <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">#</th>
                                    <th scope="col">Donor ID</th>
                                    <th scope="col">Receiver ID</th>
                                    <th scope="col">Organ Name</th>
                                    <th scope="col">Organ Image</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>Kidney</td>
                                    <td><img src="{{url('donation_img/kidneys.jpg')}}" width="150" /></td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                    <td><a class="btn btn-sm btn-success" href="/admin/updatedonation">Update</a> <a class="btn btn-sm btn-primary" href="">Delete</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>1</td>
                                    <td>Liver</td>
                                    <td><img src="{{url('donation_img/liver.jpg')}}" width="150" /></td>
                                    <td><span class="badge bg-success">Donated</span></td>
                                    <td><a class="btn btn-sm btn-success" href="/admin/updatedonation">Update</a> <a class="btn btn-sm btn-primary" href="">Delete</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>Heart</td>
                                    <td><img src="{{url('donation_img/heart.jpg')}}" width="150" /></td>
                                    <td><span class="badge bg-danger">Rejected</span></td>
                                    <td><a class="btn btn-sm btn-success" href="/admin/updatedonation">Update</a> <a class="btn btn-sm btn-primary" href="">Delete</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->
@endsection