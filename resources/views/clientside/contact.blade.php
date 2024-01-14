@extends('clientside.layouts.main')
@section('main-container')
    <!--/breadcrumb-bg-->
    <div class="breadcrumb-bg py-5  w3l-inner-page-breadcrumb">
      <div class="container pt-lg-5 pt-md-3 p-lg-4 pb-md-3 my-lg-3">
        <h2 class="title pt-5">Contact Us</h2>
        <ul class="breadcrumbs-custom-path mt-3 text-center">
          <li><a href="index.html">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact </li>
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
  <!--/contact-->
  <section class="w3l-contact-2 py-5" id="contact">
    <div class="container py-lg-5 py-md-4 py-2">
      <div class="contact-grids d-grid">
        <div class="contact-left">
          <h6 class="title-subhny mb-1">Get in Touch</h6>
          <h3 class="title-w3l mb-2">Contact Us</h3>
          <p>We have a dedicated support center for all of your support needs. We usually get back to you within
            12-24 hours.</p>
          <div class="cont-details">
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-map-marker"></span>
              </div>
              <div class="cont-right">
                <h6>Our Address</h6>
                <p>Laxmi Nagar Street No. 4, Rajkot, Gujarat - 360001</p>
              </div>
            </div>
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-phone"></span>
              </div>
              <div class="cont-right">
                <h6>Call Us</h6>
                <p><a href="tel:(+91) 95583 62840">(+91) 95583 62840</a></p>
              </div>
            </div>
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-envelope-o"></span>
              </div>
              <div class="cont-right">
                <h6>Email Us</h6>
                <p><a href="mailto:shahnawazbheda@gmail.com" class="mail">shahnawazbheda@gmail.com</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="contact-right">
          <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
            <div class="input-grids">
              <input type="text" name="w3lName" id="w3lName" placeholder="Your Name*" class="contact-input"
                required="" />
              <input type="email" name="w3lSender" id="w3lSender" placeholder="Your Email*" class="contact-input"
                required="" />
              <input type="text" name="w3lSubect" id="w3lSubect" placeholder="Subject*" class="contact-input"
                required="" />
              <input type="text" name="w3lWebsite" id="w3lWebsite" placeholder="Website URL*" class="contact-input"
                required="" />
            </div>
            <div class="form-input">
              <textarea name="w3lMessage" id="w3lMessage" placeholder="Type your message here*" required=""></textarea>
            </div>
            <div class="w3l-submit text-lg-right">
            <button class="btn btn-style btn-primary">Send Message</button>
            </div>
          </form>
        </div>
      </div>
  </section>
  <!-- /map-->
  <div class="map-iframe">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2112.6683852783303!2d70.78407264808082!3d22.283187816704416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca15f38dccb9%3A0x648c066dffd16c9!2sLaxmi%20Nagar%20Chowk%2C%20Rajkot%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1667729367485!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <!-- //map-->
  <!-- /contact -->
  @endsection