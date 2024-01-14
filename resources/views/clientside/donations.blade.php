@extends('clientside.layouts.main')
@section('main-container')
    <!--/breadcrumb-bg-->
    <div class="breadcrumb-bg w3l-inner-page-breadcrumb py-5">
      <div class="container pt-lg-5 pt-md-3 p-lg-4 pb-md-3 my-lg-3">
        <h2 class="title pt-5">Browse Donations</h2>
        <ul class="breadcrumbs-custom-path mt-3 text-center">
          <li><a href="/">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Browse Donations </li>
        </ul>
      </div>
    </div>
  <!--//breadcrumb-bg-->
  <!-- banner bottom shape -->
  <div class="position-relative">
    <div class="shape overflow-hidden">
      <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
      </svg>
    </div>
  </div>
  <!-- banner bottom shape -->
  <!--/blank-->
  <section class="w3l-serices-6 py-5" id="services1">
    <div class="container py-lg-5 py-md-4 py-2">
    <div class="title-content text-center">
        <h6 class="title-subhny text-center">
          Donations
        </h6>
        <h3 class="title-w3l mb-sm-5 mb-4 pb-sm-o pb-2 text-center">Latest Donations</h3>
      </div>
      <div class="grids-area-hny text-center row mt-lg-4">
      @foreach ($donations as $donation)
      @if($donation->receiver_id==null && $donation->donor_id!=Auth::user()->id && $donation->status == 'Pending')
        <div class="col-lg-4 col-md-6 grids-feature p-3">
          <div class="area-box icon-blue">
              <a href="#"> <img src="{{url('uploads/donations/'.$donation->image)}}" alt="" class="img-fluid radius-image" style="height:250px !important"></a>
              <h4><a href="#feature" class="title-head">{{$donation->name}}</a></h4>
              <!--/des-->
                <div class="w3doctor-box-bottom">
                  <div class="doctor-phone">Donor: {{$donation->donor['name']}}
                  <br>Date: {{$donation->created_at->format('d-m-Y')}} </div>
                <div class="social-icons-dr">
                  <a href="{{url('/request-donation/'.$donation->id)}}" class="btn btn-style btn-info">Request</a>
                </div>
              </div>
            <!--//des-->
          </div>
          </div>
        
        @endif
      @endforeach
      
      </div>
    </div>
  </section>
  <!--//blank-->
  @endsection