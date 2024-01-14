@extends('clientside.layouts.main')
@section('main-container')
  <!--/w3l-banner-content-->
  <div class="banner-w3l-main">
    <div class="w3l-banner-content">
      <br><br>
      <div class="container">
        <div class="bannerhny-info text-center">
          <h6 class="title-subhny mb-2">Organ Donation</h6>
          <h3 class="">Give someone a second chance at life.</h3>
          <a class="btn btn-style btn-white mt-sm-5 mt-4" href="/about">
            Read More</a>
        </div>
      </div>
    </div>
    <br>
    <!-- home page block1 -->
    <section class="home-services pt-lg-0">
      <div class="container">
        
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="box-wrap">
              <div class="box-wrap-grid">
                <div class="icon">
                  <span class="fa fa-users"></span>
                </div>
                <div class="info">
                  <p>Donors and Recievers</p>
                  <h4><a href="#url">Users</a></h4>
                </div>
              </div>
              <p class="mt-3">Register today and you can donate as well as request for receiving organ donations.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 mt-md-0 mt-4">
            <div class="box-wrap">
              <div class="box-wrap-grid">
                <div class="icon">
                  <span class="fa fa-shield"></span>
                </div>
                <div class="info">
                  <p>Best Organ Donation</p>
                  <h4><a href="#url">Quality Service</a></h4>

                </div>
              </div>
              <p class="mt-3">Our Donations are very reliable and very fast, and we have networks all over India.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 mt-lg-0 mt-4">
            <div class="box-wrap">
              <div class="box-wrap-grid">
                <div class="icon">
                  <span class="fa fa-truck"></span>
                </div>
                <div class="info">
                  <p>Tracking</p>
                  <h4><a href="#url">Realtime Status</a></h4>

                </div>
              </div>
              <p class="mt-3">Track your donations as well as donation requests in real time. Get updates regarding their status immediately.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- //home page block1 -->
  </div>
  <!--//w3l-banner-content-->

  <!-- banner bottom shape -->
  <div class="position-relative">
    <div class="shape overflow-hidden">
      <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
      </svg>
    </div>
  </div>
  <!-- banner bottom shape -->

  <!--/w3l-content-1-->
  <div class="w3l-content-1 py-5">
    <div class="container py-lg-5 py-md-4 py-2">
      
    </div>
  </div>
  <!--//w3l-content-1-->
  <!-- /w3l-content-2-->
  <div class="w3l-content-2 py-5">
    <div class="container py-md-5 py-2">
      <div class="row whybox-wrap">
        <div class="col-lg-6 whybox-wrap-left">
          <div class="title-content text-left">
            <h6 class="title-subhny">Extraordinary Services</h6>
            <h3 class="title-w3l mb-sm-5 mb-4 pb-2">Why You Should Choose Our Website?</h3>
          </div>

          <div class="whybox-wrap-grid mb-4">
            <div class="icon">
              <span class="fa fa-calendar"></span>
            </div>
            <div class="info">
              <h4><a href="#url">Most Reliable and Fast</a></h4>
              <p class="mt-3">Our services are the best when it comes to speed and reliablity in terms of Organ Donation.</p>
            </div>
          </div>
          <div class="whybox-wrap-grid mb-4">
            <div class="icon">
              <span class="fa fa-pencil-square-o"></span>
            </div>
            <div class="info">
              <h4><a href="#url">Free Donation</a></h4>
              <p class="mt-3">Everyone is free to donate and recieve organs that they desire</p>
            </div>
          </div>
          <div class="whybox-wrap-grid mb-4">
            <div class="icon">
              <span class="fa fa-shield"></span>
            </div>
            <div class="info">
              <h4><a href="#url">Guranteed Satisfaction</a></h4>
              <p class="mt-3">Whether the user is donor or reciever, he is guaranteed to be satisfied using our website. </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 whybox-wrap-right pl-lg-5 position-relative mt-lg-0 mt-4">
          <img src="{{url('clientside/assets/images/ab.jpg')}}" width="640" alt="" class="img-fluid radius-image">

        </div>
      </div>

    </div>
  </div>
  <!-- //w3l-content-2-->
  

  <!-- stats -->
  <section class="w3l-stats py-lg-0 py-5" id="stats">
    <div class="gallery-inner container py-lg-0 py-3">
      <div class="row stats-con">
        <div class="col-lg-3 col-6 stats_info counter_grid">
          <span class="fa fa-users"></span>
          <p class="counter">1100</p>
          <h4>Donors</h4>
        </div>
        <div class="col-lg-3 col-6 stats_info counter_grid1">
          <span class="fa fa-laptop"></span>
          <p class="counter">1020</p>
          <h4>Donations Done</h4>
        </div>
        <div class="col-lg-3 col-6 stats_info counter_grid mt-lg-0 mt-5">
          <span class="fa fa-smile-o"></span>
          <p class="counter">912</p>
          <h4>Happy Receivers</h4>
        </div>
        <div class="col-lg-3 col-6 stats_info counter_grid2 mt-lg-0 mt-5">
          <span class="fa fa-trophy"></span>
          <p class="counter">80</p>
          <h4>Awards</h4>
        </div>
      </div>
    </div>
  </section>
  <!-- //stats --> 
@endsection