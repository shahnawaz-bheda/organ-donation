    @extends('clientside.layouts.main')
    @section('main-container')
    <!--/breadcrumb-bg-->
    <div class="breadcrumb-bg w3l-inner-page-breadcrumb py-5">
      <div class="container pt-lg-5 pt-md-3 p-lg-4 pb-md-3 my-lg-3">
        <h2 class="title pt-5">About</h2>
        <ul class="breadcrumbs-custom-path mt-3 text-center">
          <li><a href="/">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> About </li>
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
  <!-- //w3l-inner-page-breadcrumb-->
  <section class="w3l-about-ab" id="about">
    <div class="midd-w3 py-5">
      <div class="container py-lg-5 py-md-4 py-2">
        <div class="imgw3l-ab mb-md-5 mb-3 text-center">
          <img src="{{url('clientside/assets/images/banner2.jpg')}}" alt="" class="radius-image img-fluid">
        </div>
        <div class="row">
          <div class="col-lg-5 left-wthree-img">
            <h6 class="title-subhny">About Us</h6>
            <h3 class="title-w3l mb-4">The Best Service & Donors</h3>

          </div>
          <div class="col-lg-7 pl-lg-5 align-self">
            <p class="">Whosoever uses our website, is always satisfied to use it, and donors are always ready for top notch organ donations. Revceivers who request for organs get them reliably and quickly after a verification.
            </p>
            <p class="mt-4">Also, all the recievers till date are 100% satisfied, and it is one of the achievements that we are proud of.
            </p>
            
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- /w3l-content-2-->
  <!--/team-sec-->
  <section class="w3l-team">
    <div class="team py-5">
      <div class="container py-lg-5 py-md-4">
        <div class="title-content text-center">
          <h6 class="title-subhny text-center">Leading Team</h6>
          <h3 class="title-w3l mb-sm-3 text-center">Meet Our Team</h3>
        </div>
        <div class="row team-row">
          <div class="col-lg-4 col-6 team-wrap mt-4 pt-lg-2">
            <div class="team-info">
              <div class="column position-relative img-circle">
                <a href="#url"><img src="{{url('clientside/assets/images/S_V.png')}}" alt="" class="img-fluid" /></a>
              </div>
              <div class="column-btm">
                <h3 class="name-pos"><a href="#url">Shahnawaz Bheda
                </a></h3>
                <p>Administrator</p>
                <div class="social">
                  <a href="https://www.facebook.com/shahnawaz.bheda" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                  <a href="https://twitter.com/BhedaShahnawaz" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                </div>
              </div>
            </div>
          </div>
          <!-- end team member -->


          <div class="col-lg-4 col-6 team-wrap mt-4 pt-lg-2">
            <div class="team-info">
              <div class="column position-relative img-circle">
                <a href="#url"><img src="{{url('clientside/assets/images/B_V.png')}}" alt="" class="img-fluid" /></a>
              </div>
              <div class="column-btm">
                <h3 class="name-pos"><a href="#url">Bhavya Popat</a></h3>
                <p>Team Leader</p>
                <div class="social">
                  <a href="https://www.facebook.com/bhavya.popat.98/" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                  <a href="https://twitter.com/BhavyaJustChill" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                </div>
              </div>
            </div>

          </div>
          <!-- end team member -->

          <div class="col-lg-4 col-6 team-wrap mt-4 pt-lg-2">

            <div class="team-info">
              <div class="column position-relative img-circle">
                <a href="#url"><img src="{{url('clientside/assets/images/D_V.png')}}" alt="" class="img-fluid" /></a>
              </div>
              <div class="column-btm">
                <h3 class="name-pos"><a href="#url">Divyaraj Mehta</a></h3>
                <p>Manager</p>
                <div class="social">
                  <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                  <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>
  <!--//team-sec-->
  @endsection