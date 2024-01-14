@extends('clientside.layouts.main')
@section('main-container')
    <!--/breadcrumb-bg-->
    <div class="breadcrumb-bg w3l-inner-page-breadcrumb py-5">
      <div class="container pt-lg-5 pt-md-3 p-lg-4 pb-md-3 my-lg-3">
        <h2 class="title pt-5">My Profile</h2>
        <ul class="breadcrumbs-custom-path mt-3 text-center">
          <li><a href="/">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> My Profile </li>
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
<form name="update_profile" action="/profile" method="POST">
  @csrf
  <div class="form-group">
    <label for="name">Full Name</label>
    <input type="text" class="form-control" name="name" id="name" value="{{Auth::user()->name}}">
  </div>
  <div class="form-group">
    <label for="age">Age</label>
    <input type="text" class="form-control" name="age" id="age" value="{{Auth::user()->age}}">
  </div>
  <div class="form-group">
    <label for="bloodgroup">Blood Group</label>
    <input type="text" class="form-control" name="bloodgroup" id="bloodgroup" value="{{Auth::user()->bloodgroup}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{Auth::user()->email}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">New Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" value="">
  </div>
  <div class="form-group">
    <label for="contact">Contact No.</label>
    <input type="text" class="form-control" name="contact" id="contact" value="{{Auth::user()->contact}}">
  </div>
  Address
  <textarea name="address" class="form-control" rows="4">{{Auth::user()->address}}</textarea>
  <br><br>
  <div class="text-center">
  <button type="submit" class="btn btn-style btn-primary">Update Profile</button>
</div>
</form>



</div>
  </section>
  <!--//blank-->
  @endsection